<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DataTables;
use App\Service;
use App\Models\Notice;
use Hash;
use Auth;

class NoticeController extends Controller
{
    public function all()
    {
        return view('admin.notice.all');
    }

    public function allData(Request $request)
    {
        $notice=Notice::all();

        return DataTables::of($notice)->make(true);
    }

    public function getAddNotice(Request $request)
    {
        return view('admin.notice.add');
    }

    public function postAddNotice(Request $request)
    {
       $input=$request->all();

       $notice=new Notice();
       $notice->title=$input['title'];
       $notice->description=$input['description'];
       $notice->advertiser_name=$input['advertiser_name'];
       $notice->advertiser_address=$input['advertiser_address'];
       $notice->advertiser_place=$input['advertiser_place'];
       $notice->column_width=$input['column_width'];
              


       if(Input::hasFile('image')){
                  $image = $request->image;
                  $path = $image->store('notice');
                  $notice->image=$path;
                 }  

       $notice->save();

       $notification = array(
                'message' => 'Notice Form Submitted successfully', 
                'alert-type' => 'success'
             );

       return redirect('admin/notice-management')->with($notification);
       
    }

    public function getEditNotice(Request $request)
    {
        $id=$request->id;

        $notice=Notice::where('id',$id)->first();
        return view('admin.notice.edit')->with('notice',$notice);
    }

    public function postEditNotice(Request $request)
    {
        $id=$request->id;

        $input=$request->all();
        // dd($input);die;

       $notice=Notice::where('id',$id)->first();
       // echo $notice;die;
       $notice->title=$input['title'];
       $notice->description=$input['description'];
       $notice->advertiser_name=$input['advertiser_name'];
       $notice->advertiser_address=$input['advertiser_address'];
       $notice->advertiser_place=$input['advertiser_place'];
       $notice->column_width=$input['column_width'];

       if(Input::hasFile('image')){
                  $image = $request->image;
                  $path = $image->store('notice');
                  $notice->image=$path;
                 }  


       $notice->save();

       $notification = array(
                'message' => 'Notice Form Submitted successfully', 
                'alert-type' => 'success'
             );

       return redirect('admin/notice-management')->with($notification);

    }

    public function activeNotice(Request $request)
    {
        $id=$request->id;

       $notice=Notice::where('id',$id)->first();
       $notice->is_active=1;
              $notice->save();


       $notification = array(
                'message' => 'Notice Active successfully', 
                'alert-type' => 'success'
             );

       return redirect('admin/notice-management')->with($notification);

    }

    public function inactiveNotice(Request $request)
    {
        $id=$request->id;

       $notice=Notice::where('id',$id)->first();
       $notice->is_active=0;

       $notice->save();

       $notification = array(
                'message' => 'Notice InActive successfully', 
                'alert-type' => 'success'
             );

       return redirect('admin/notice-management')->with($notification);

    }

    public function delete(Request $request)
    {
        $id=$request->id;

       $notice=Notice::where('id',$id)->delete();

       $notification = array(
                'message' => 'Notice Delete successfully', 
                'alert-type' => 'success'
             );

       return redirect('admin/notice-management')->with($notification);

    }
}


