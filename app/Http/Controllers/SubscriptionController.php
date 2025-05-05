<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DataTables;
use App\Service;
use App\Models\Subscreption;
use Hash;
use Auth;

class SubscriptionController extends Controller
{
    public function all()
    {
        return view('admin.subscription.all');
    }

    public function allData(Request $request)
    {
        $subscription=Subscreption::all();

        return DataTables::of($subscription)->make(true);
    }

    public function getAddSubscription(Request $request)
    {
        return view('admin.subscription.add');
    }

    public function postAddSubscription(Request $request)
    {
        $input=$request->all();

        // dd($input);die;

        $subscription=new Subscreption();

        $subscription->days=$input['days'];
        $subscription->price=$input['price'];
        $subscription->offer_price=$input['offer_price'];
        $subscription->offer_percentage=$input['offer_percentage'];
        $subscription->refund_instruction=$input['refund_instruction'];
        $subscription->description=$input['description'];
        $subscription->category_listing=$input['category_listing'];
        $subscription->extra_chaerges=$input['extra_chaerges'];
        $subscription->email_support=$input['email_support'];
        $subscription->certification_type=$input['certification_type'];
        $subscription->search_engine_type=$input['search_engine_type'];


        $subscription->save();

        $notification = array(
                'message' => 'Subscription Form Submitted successfully', 
                'alert-type' => 'success'
             );

        return redirect('admin/subscription-management')->with($notification);
    }

    public function getEditSubscription(Request $request)
    {
        $id=$request->id;
        $subscription=Subscreption::where('id',$id)->first();

        return view('admin.subscription.edit')->with('subscription',$subscription);
    }

    public function postEditSubscription(Request $request)
    {
        $id=$request->id;
        $input=$request->all();

        $subscription=Subscreption::where('id',$id)->first();

        $subscription->days=$input['days'];
        $subscription->price=$input['price'];
        $subscription->offer_price=$input['offer_price'];
        $subscription->offer_percentage=$input['offer_percentage'];
        $subscription->refund_instruction=$input['refund_instruction'];
        $subscription->description=$input['description'];
        $subscription->category_listing=$input['category_listing'];
        $subscription->extra_chaerges=$input['extra_chaerges'];
        $subscription->email_support=$input['email_support'];
        $subscription->certification_type=$input['certification_type'];
        $subscription->search_engine_type=$input['search_engine_type'];


        $subscription->save();

        $notification = array(
                'message' => 'Subscription Form Submitted successfully', 
                'alert-type' => 'success'
             );

        return redirect('admin/subscription-management')->with($notification);

    }

    public function activeSubscription(Request $request)
    {
        $id=$request->id;
        $subscription=Subscreption::where('id',$id)->first();

        $subscription->is_active=1;
        $subscription->save();

        $notification = array(
                'message' => 'Subscription Active successfully', 
                'alert-type' => 'success'
             );

        return redirect('admin/subscription-management')->with($notification);
    }

    public function inactiveSubscription(Request $request)
    {
        $id=$request->id;
        $subscription=Subscreption::where('id',$id)->first();

        $subscription->is_active=0;
        $subscription->save();

        $notification = array(
                'message' => 'Subscription InActive successfully', 
                'alert-type' => 'success'
             );

        return redirect('admin/subscription-management')->with($notification);
    }

    public function delete(Request $request)
    {
        $id=$request->id;
        $subscription=Subscreption::where('id',$id)->delete();

        $notification = array(
                'message' => 'Subscription Delete successfully', 
                'alert-type' => 'success'
             );

        return redirect('admin/subscription-management')->with($notification);
    }

   
}
