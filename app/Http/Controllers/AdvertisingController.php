<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DataTables;
use App\Service;
use App\Models\Advertising;
use Hash;
use Auth;

class AdvertisingController extends Controller
{
    public function all()
    {
        return view('admin.advertise.all');
    }

    public function allData(Request $request)
    {

        $advertise=Advertising::all();

        return DataTables::of($advertise)->make(true);
    }

    public function getAddAdvertising()
    {
        return view('admin.advertise.add');
    }

    public function postAddAdvertising(Request $request)
    {
       $input=$request->all();

       $notice=new Advertising();
       $notice->title=$input['title'];
       $notice->description=$input['description'];

       $notice->save();

       $notification = array(
                'message' => 'Advertising Form Submitted successfully', 
                'alert-type' => 'success'
             );

       return redirect('admin/advertising-management')->with($notification);
    }

    public function getEditAdvertising(Request $request)
    {
        $id=$request->id;
        $advertise=Advertising::where('id',$id)->first();

        return view('admin.advertise.edit')->with('advertise',$advertise);
    }

    public function postEditAdvertising(Request $request)
    {
       $id=$request->id;
       $input=$request->all();

       $notice=Advertising::where('id',$id)->first();
       $notice->title=$input['title'];
       $notice->description=$input['description'];

       $notice->save();

       $notification = array(
                'message' => 'Advertising Form Submitted successfully', 
                'alert-type' => 'success'
             );

       return redirect('admin/advertising-management')->with($notification);

    }

    public function activeAdvertising(Request $request)
    {
        $id=$request->id;
        $notice=Advertising::where('id',$id)->first();
        $notice->is_active=1;
        $notice->save();

        $notification = array(
                'message' => 'Advertising Active successfully', 
                'alert-type' => 'success'
             );

       return redirect('admin/advertising-management')->with($notification);

    }

    public function inactiveAdvertising(Request $request)
    {
        $id=$request->id;
        $notice=Advertising::where('id',$id)->first();
        $notice->is_active=0;
        $notice->save();

        $notification = array(
                'message' => 'Advertising InActive successfully', 
                'alert-type' => 'success'
             );

       return redirect('admin/advertising-management')->with($notification);

    }

    public function delete(Request $request)
    {
        $id=$request->id;
        $notice=Advertising::where('id',$id)->delete();

        $notification = array(
                'message' => 'Advertising Delete successfully', 
                'alert-type' => 'success'
             );

       return redirect('admin/advertising-management')->with($notification);

    }


}
