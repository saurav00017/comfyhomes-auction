<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DataTables;
use App\Service;
use App\Models\Bank;
use App\Models\Category;
use Hash;
use Auth;

class BankController extends Controller
{
    public function getAddBank(Request $request)
    {
        return view('admin.bank.add');
    }

    public function postAddBank(Request $request)
    {
        $input=$request->all();

        $bank=new Bank();

        $bank->bank_name=$input['bank_name'];
        if(Input::hasFile('icon')){
                  $image = $request->icon;
                  $path = $image->store('bank');
                  $bank->icon=$path;
                 } 
        $bank->save(); 

        $notification = array(
                'message' => 'Bank Form Submitted successfully', 
                'alert-type' => 'success'
             );

        return redirect('admin/bank-management')->with($notification);
  
    }

    public function getEditBank(Request $request)
    {
        $id=$request->id;

        $bank=Bank::where('id',$id)->first();

        return view('admin.bank.edit')->with('bank',$bank);
    }

    public function postEditBank(Request $request)
    {
        $id=$request->id;
        $input=$request->all();

        $bank=Bank::where('id',$id)->first();

        $bank->bank_name=$input['bank_name'];
        if(Input::hasFile('icon')){
                  $image = $request->icon;
                  $path = $image->store('bank');
                  $bank->icon=$path;
                 } 
        $bank->save(); 

        $notification = array(
                'message' => 'Bank Form Submitted successfully', 
                'alert-type' => 'success'
             );

        return redirect('admin/bank-management')->with($notification);

    }

    public function all(Request $request)
    {
        return view('admin.bank.all');
    }

    public function allData(Request $request)
    {
        $bank=Bank::all();

        return DataTables::of($bank)->make(true);
    }


    public function activeBank(Request $request)
    {
        $id=$request->id;

        $blog=Bank::where('id',$id)->first();
        $blog->is_active=1;

        $blog->save();

        $notification = array(
                'message' => 'Bank Active successfully', 
                'alert-type' => 'success'
             );

        return redirect('admin/bank-management')->with($notification);


    }

    public function inactiveBank(Request $request)
    {
        $id=$request->id;

        $blog=Bank::where('id',$id)->first();
        $blog->is_active=0;

        $blog->save();

        $notification = array(
                'message' => 'Bank InActive successfully', 
                'alert-type' => 'success'
             );

        return redirect('admin/bank-management')->with($notification);
    }

     public function delete(Request $request)
    {
        $id=$request->id;

        $blog=Bank::where('id',$id)->delete();

        $notification = array(
                'message' => 'Bank Delete successfully', 
                'alert-type' => 'success'
             );

        return redirect('admin/bank-management')->with($notification);
    }
}

