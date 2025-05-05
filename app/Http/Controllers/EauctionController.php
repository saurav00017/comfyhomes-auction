<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DataTables;
use App\Service;
use App\Models\Bank;
use App\Models\Eauction;
use Hash;
use Auth;

class EauctionController extends Controller
{
    public function getAddEauction(Request $request)
    {
        
        $bank=Bank::where('is_active',1)->get();

        return view('admin.eauction.add')->with('bank',$bank);
    }

    public function postAddEauction(Request $request)
    {

        $input=$request->all();

        $auction=new Eauction();

        $auction->bank_name=$input['bank_name'];
        $auction->branch_location=$input['branch_location'];
        $auction->branch_address=$input['branch_address'];
        $auction->branch_email=$input['branch_email'];
        $auction->branch_phone=$input['branch_phone'];
        $auction->branch_eauction_sate=$input['branch_eauction_sate'];
        $auction->borrower_name=$input['borrower_name'];
        $auction->description_property=$input['description_property'];
        $auction->reserve_price=$input['reserve_price'];
        $auction->earnest_money=$input['earnest_money'];
        $auction->due_amount=$input['due_amount'];
        $auction->bid_increment_amount=$input['bid_increment_amount'];
        $auction->possession=$input['possession'];
        $auction->known_encumbrance=$input['known_encumbrance'];
        $auction->auction_time=$input['auction_time'];
        $auction->auction_minute=$input['auction_minute'];
        $auction->bank_website=$input['bank_website'];
        $auction->place=$input['place'];

        $auction->save();

          $notification = array(
                'message' => 'E-Auction Form Submitted successfully', 
                'alert-type' => 'success'
             );

       return redirect('admin/e-auction-management')->with($notification);
    }

    public function all(Request $request)
    {
        return view('admin.eauction.all');
    }

    public function allData(Request $request)
    {
        $eauction=Eauction::with('bank')->get();

        return DataTables::of($eauction)->make(true);
    }

    public function getEditEauction(Request $request)
    {
        $id=$request->id;

        $eauction=Eauction::where('id',$id)->first();

        $bank=Bank::where('is_active',1)->get();

        return view('admin.eauction.edit')->with('bank',$bank)->with('eauction',$eauction);

    }

    public function postEditEauction(Request $request)
    {

        $id=$request->id;

        $input=$request->all();

        $auction=Eauction::where('id',$id)->first();

        $auction->bank_name=$input['bank_name'];
        $auction->branch_location=$input['branch_location'];
        $auction->branch_address=$input['branch_address'];
        $auction->branch_email=$input['branch_email'];
        $auction->branch_phone=$input['branch_phone'];
        $auction->branch_eauction_sate=$input['branch_eauction_sate'];
        $auction->borrower_name=$input['borrower_name'];
        $auction->description_property=$input['description_property'];
        $auction->reserve_price=$input['reserve_price'];
        $auction->earnest_money=$input['earnest_money'];
        $auction->due_amount=$input['due_amount'];
        $auction->bid_increment_amount=$input['bid_increment_amount'];
        $auction->possession=$input['possession'];
        $auction->known_encumbrance=$input['known_encumbrance'];
        $auction->auction_time=$input['auction_time'];
        $auction->auction_minute=$input['auction_minute'];
        $auction->bank_website=$input['bank_website'];
        $auction->place=$input['place'];

        $auction->save();
         
         $notification = array(
                'message' => 'E-Auction Form Submitted successfully', 
                'alert-type' => 'success'
             );

       return redirect('admin/e-auction-management')->with($notification);
    }



    public function getActiveEauction(Request $request)
    {
        $id=$request->id;

        $voting=Eauction::where('id',$id)->first();
        $voting->is_active=1;
        $voting->save();


        $notification = array(
                'message' => 'E-Auction Form Active successfully', 
                'alert-type' => 'success'
             );

       return redirect('admin/e-auction-management')->with($notification);
    }


    public function getInActiveEauction(Request $request)
    {
        $id=$request->id;

        $voting=Eauction::where('id',$id)->first();
        $voting->is_active=0;
        $voting->save();


        $notification = array(
                'message' => 'E-Auction Form InActive successfully', 
                'alert-type' => 'success'
             );

       return redirect('admin/e-auction-management')->with($notification);
    }

    public function getDeleteEauction(Request $request)
    {
        $id=$request->id;

        $voting=Eauction::where('id',$id)->delete();

         $notification = array(
                'message' => 'E-Auction Form Delete successfully', 
                'alert-type' => 'success'
             );

       return redirect('admin/e-auction-management')->with($notification);


    }




           





}
