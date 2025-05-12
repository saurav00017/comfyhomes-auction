<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DataTables;
use App\Service;
use App\Models\Auction;
use App\Models\AuctionImage;
use App\Models\Category;
use App\Models\Bank;
use Hash;
use Auth;
use Illuminate\Support\Facades\Storage;

class AuctionController extends Controller
{
    public function all()
    {
        return view('admin.auction.all');
    }

    public function allData(Request $request)
    {
        $auction = Auction::all();

        return DataTables::of($auction)->make(true);
    }

    public function getAddAuction()
    {
        $category = Category::where('is_active', 1)->get();
        $bank = Bank::where('is_active', 1)->get();

        // echo $bank;die;

        return view('admin.auction.add')->with('category', $category)->with('bank', $bank);
    }

    public function postAddAuction(Request $request)
    {

        $validated = $request->validate([
            'thumbnail' => 'required|image|max:2048',
            'detail_images.*' => 'image|max:2048'
        ]);

        $input = $request->all();

        $auction = new Auction();

        $auction->state = $input['state'];
        $auction->district = $input['district'];
        $auction->locality = $input['locality'];
        $auction->bank_name = $input['bank_name'];
        $auction->property_type = $input['property_type'];
        $auction->property_price = $input['property_price'];
        $auction->reserve_price = $input['reserve_price'];
        $auction->emd_amount = $input['emd_amount'];
        $auction->bid_increment = $input['bid_increment'];
        $auction->emd_submission = $input['emd_submission'];
        $auction->auction_start_datetime = $input['auction_start_datetime'];
        $auction->auction_end_datetime = $input['auction_end_datetime'];
        $auction->possession = $input['possession'];
        $auction->featured = $input['featured'];
        $auction->area = $input['area'];
        $auction->property_type_one = $input['property_type_one'];
        $auction->market_price = $input['market_price'];
        $auction->description = $input['description'];
        $auction->category = $input['category'];
        $auction->borrower_name = $input['borrower_name'];
        $auction->branch_address = $input['branch_address'];
        $auction->bank_contact_name = $input['bank_contact_name'];
        $auction->bank_contact_email = $input['bank_contact_email'];
        $auction->bank_contact_phone = $input['bank_contact_phone'];
        $auction->inspection_start_date = $input['inspection_start_date'];
        $auction->inspection_end_date = $input['inspection_end_date'];


        if (Input::hasFile('document')) {
            $document = $request->document;
            $path = $document->store('auctions/document', 'public');
            $auction->document = $path;
        }

        if (Input::hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail');
            $thumbnailPath = $thumbnail->store('auctions/thumbnails', 'public');
            $auction->thumbnail = $thumbnailPath;
        }

        $auction->save();


        if ($request->hasFile('detail_images')) {
            foreach ($request->file('detail_images') as $image) {
                $detailImagePath = $image->store('auctions/detail_images', 'public');

                AuctionImage::create([
                    'auction_id' => $auction->id,
                    'image_path' => $detailImagePath
                ]);
            }
        }

        $notification = array(
            'message' => 'Auction Form Submitted successfully',
            'alert-type' => 'success'
        );

        return redirect('admin/auction-management')->with($notification);
    }

    public function getEditAuction(Request $request)
    {
        $id = $request->id;
        $auction = Auction::where('id', $id)->first();
        $bank = Bank::where('is_active', 1)->get();
        $category = Category::where('is_active', 1)->get();

        return view('admin.auction.edit')->with('auction', $auction)->with('bank', $bank)->with('category', $category);
    }

    public function postEditAuction(Request $request)
    {
        $id = $request->id;
        $input = $request->all();


        $auction = Auction::where('id', $id)->first();

        $auction->state = $input['state'];
        $auction->district = $input['district'];
        $auction->locality = $input['locality'];
        $auction->bank_name = $input['bank_name'];
        $auction->property_type = $input['property_type'];
        $auction->property_price = $input['property_price'];
        $auction->reserve_price = $input['reserve_price'];
        $auction->emd_amount = $input['emd_amount'];
        $auction->bid_increment = $input['bid_increment'];
        $auction->emd_submission = $input['emd_submission'];
        $auction->auction_start_datetime = $input['auction_start_datetime'];
        $auction->auction_end_datetime = $input['auction_end_datetime'];
        $auction->possession = $input['possession'];
        $auction->featured = $input['featured'];
        $auction->area = $input['area'];
        $auction->property_type_one = $input['property_type_one'];
        $auction->market_price = $input['market_price'];
        $auction->description = $input['description'];
        $auction->category = $input['category'];
        $auction->borrower_name = $input['borrower_name'];
        $auction->branch_address = $input['branch_address'];
        $auction->bank_contact_name = $input['bank_contact_name'];
        $auction->bank_contact_email = $input['bank_contact_email'];
        $auction->bank_contact_phone = $input['bank_contact_phone'];
        $auction->inspection_start_date = $input['inspection_start_date'];
        $auction->inspection_end_date = $input['inspection_end_date'];


        // Handle thumbnail
        if ($request->has('remove_thumbnail')) {
            Storage::disk('public')->delete($auction->thumbnail);
            $auction->thumbnail = null;
        } elseif ($request->hasFile('thumbnail')) {
            // Delete old thumbnail if exists
            if ($auction->thumbnail) {
                Storage::disk('public')->delete($auction->thumbnail);
            }
            $path = $request->file('thumbnail')->store('auctions/thumbnails', 'public');
            $auction->thumbnail = $path;
        }

        // Handle detail images removal
        if ($request->has('remove_images')) {
            $imagesToRemove = $auction->images()->whereIn('id', $request->remove_images)->get();
            foreach ($imagesToRemove as $image) {
                Storage::disk('public')->delete($image->image_path);
                $image->delete();
            }
        }

        // Handle new detail images upload
        if ($request->hasFile('detail_images')) {
            foreach ($request->file('detail_images') as $image) {
                $path = $image->store('auctions/detail_images', 'public');
                $auction->images()->create(['image_path' => $path]);
            }
        }

        // Handle document
        if ($request->has('remove_document')) {
            Storage::disk('public')->delete($auction->document);
            $auction->document = null;
        } elseif ($request->hasFile('document')) {
            if ($auction->document) {
                Storage::disk('public')->delete($auction->document);
            }
            $path = $request->file('document')->store('auctions/documents', 'public');
            $auction->document = $path;
        }

        $auction->save();

        $notification = array(
            'message' => 'Auction Form Submitted successfully',
            'alert-type' => 'success'
        );

        return redirect('admin/auction-management')->with($notification);
    }

    public function view(Request $request)
    {
        $id = $request->id;
        $auction = Auction::with('categories')->where('id', $id)->first();
        return view('admin.auction.view', compact('auction'));
    }

    public function activeAuction(Request $request)
    {
        $id = $request->id;
        $auction = Auction::where('id', $id)->first();
        $auction->is_active = 1;
        $auction->save();

        $notification = array(
            'message' => 'Auction Active successfully',
            'alert-type' => 'success'
        );

        return redirect('admin/auction-management')->with($notification);
    }

    public function inactiveAuction(Request $request)
    {
        $id = $request->id;
        $auction = Auction::where('id', $id)->first();

        $auction->is_active = 0;
        $auction->save();

        $notification = array(
            'message' => 'Auction InActive successfully',
            'alert-type' => 'success'
        );

        return redirect('admin/auction-management')->with($notification);
    }

    public function delete(Request $request)
    {
        $id = $request->id;
        $auction = Auction::where('id', $id)->delete();

        $notification = array(
            'message' => 'Auction Delete successfully',
            'alert-type' => 'success'
        );

        return redirect('admin/auction-management')->with($notification);
    }
}
