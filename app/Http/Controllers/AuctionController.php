<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DataTables;
use App\Service;
use App\Models\Auction;
use App\Models\Category;
use App\Models\Bank;
use Hash;
use Auth;

class AuctionController extends Controller
{
    public function all()
    {
        return view('admin.auction.all');
    }

    public function allData(Request $request)
    {
        $auction=Auction::all();

        return DataTables::of($auction)->make(true);
    }

    public function getAddAuction()
    {
        $category=Category::where('is_active',1)->get();
        $bank=Bank::where('is_active',1)->get();

        // echo $bank;die;

        return view('admin.auction.add')->with('category',$category)->with('bank',$bank);
    }

    public function postAddAuction(Request $request)
    {
       $input=$request->all();        

        $auction=new Auction();

        $auction->state=$input['state'];
        $auction->district=$input['district'];
        $auction->locality=$input['locality'];
        $auction->bank_name=$input['bank_name'];
        $auction->property_type=$input['property_type'];
        $auction->property_price=$input['property_price'];
        $auction->reserve_price=$input['reserve_price'];
        $auction->emd_amount=$input['emd_amount'];
        $auction->bid_increment=$input['bid_increment'];
        $auction->emd_submission=$input['emd_submission'];
        $auction->auction_start_datetime=$input['auction_start_datetime'];
        $auction->auction_end_datetime=$input['auction_end_datetime'];
        $auction->possession=$input['possession'];
        $auction->featured=$input['featured'];
        $auction->area=$input['area'];
        $auction->property_type_one=$input['property_type_one'];
        $auction->market_price=$input['market_price'];
        $auction->description=$input['description'];
        $auction->category=$input['category'];


        if(Input::hasFile('document')){
                  $document = $request->document;
                  $path = $document->store('document');
                  $auction->document=$path;
                 }  

        $auction->save();

        $notification = array(
                'message' => 'Auction Form Submitted successfully', 
                'alert-type' => 'success'
             );

       return redirect('admin/auction-management')->with($notification);

    }

    public function getEditAuction(Request $request)
    {
        $id=$request->id;
        $auction=Auction::where('id',$id)->first();
        $bank=Bank::where('is_active',1)->get();

        return view('admin.auction.edit')->with('auction',$auction)->with('bank',$bank);
    }

    public function postEditAuction(Request $request)
    {
        $id=$request->id;
        $input=$request->all();        


        $auction=Auction::where('id',$id)->first();

        $auction->state=$input['state'];
        $auction->district=$input['district'];
        $auction->locality=$input['locality'];
        $auction->bank_name=$input['bank_name'];
        $auction->property_type=$input['property_type'];
        $auction->property_price=$input['property_price'];
        $auction->reserve_price=$input['reserve_price'];
        $auction->emd_amount=$input['emd_amount'];
        $auction->bid_increment=$input['bid_increment'];
        $auction->emd_submission=$input['emd_submission'];
        $auction->auction_start_datetime=$input['auction_start_datetime'];
        $auction->auction_end_datetime=$input['auction_end_datetime'];
        $auction->possession=$input['possession'];
        $auction->featured=$input['featured'];
        $auction->area=$input['area'];
        $auction->property_type_one=$input['property_type_one'];
        $auction->market_price=$input['market_price'];
        $auction->description=$input['description'];
        $auction->category=$input['category'];


         if(Input::hasFile('document')){
                  $document = $request->document;
                  $path = $document->store('document');
                  $auction->document=$path;
                 }  




        $auction->save();

        $notification = array(
                'message' => 'Auction Form Submitted successfully', 
                'alert-type' => 'success'
             );

       return redirect('admin/auction-management')->with($notification);
    }

    public function activeAuction(Request $request)
    {
        $id=$request->id;
        $auction=Auction::where('id',$id)->first();
        $auction->is_active=1;
        $auction->save();

        $notification = array(
                'message' => 'Auction Active successfully', 
                'alert-type' => 'success'
             );

       return redirect('admin/auction-management')->with($notification);


    }

    public function inactiveAuction(Request $request)
    {
        $id=$request->id;
        $auction=Auction::where('id',$id)->first();

        $auction->is_active=0;
        $auction->save();

        $notification = array(
                'message' => 'Auction InActive successfully', 
                'alert-type' => 'success'
             );

       return redirect('admin/auction-management')->with($notification);


    }

     public function delete(Request $request)
    {
        $id=$request->id;
        $auction=Auction::where('id',$id)->delete();

        $notification = array(
                'message' => 'Auction Delete successfully', 
                'alert-type' => 'success'
             );

       return redirect('admin/auction-management')->with($notification);


    }
}
