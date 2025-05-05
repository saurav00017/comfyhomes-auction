<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DataTables;
use App\Service;
use App\Models\User;
use App\Models\Role;
use App\Models\Property;
use App\Models\Ameneti;
use App\Models\Agreement;
use Hash;
use Auth;

class AmenitiesController extends Controller
{
    public function getAddAmeneties(Request $request)
    {
        return view('admin.amenities.add');
    }

    public function postAddAmeneties(Request $request)
    {
        $input=$request->all();

        $amenties=new Ameneti();

        $amenties->name=$input['name'];
        $amenties->save();

        $notification = array(
            'message' => 'Amenities Added Successfully', 
            'alert-type' => 'success'
           );

        return redirect('/admin/ameneties-management')->with($notification);
    }

    public function all(Request $request)
    {
        return view('admin.amenities.all');
    }

    public function allData(Request $request)
    {
        $amenties=Ameneti::all();

        return DataTables::of($amenties)->make(true);
    }

   public function getEditAmeneties(Request $request)
   {
       $id = $request->id;
       $amenities = Ameneti::where('id', $id)->first();

       return view('admin.amenities.edit')->with('amenities', $amenities);
    }


    public function postEditAmeneties(Request $request)
    {
        $id=$request->id;
        $input=$request->all();

        $amenties=Ameneti::where('id',$id)->first();
        $amenties->name=$input['name'];
        $amenties->save();

         $notification = array(
            'message' => 'Amenities Update Successfully', 
            'alert-type' => 'success'
           );

        return redirect('/admin/ameneties-management')->with($notification);
    }

    public function deleteAmeneties(Request $request)
    {
        $id=$request->id;

        $amenties=Ameneti::where('id',$id)->delete();

        $notification = array(
            'message' => 'Amenities Delete Successfully', 
            'alert-type' => 'success'
           );

        return redirect('/admin/ameneties-management')->with($notification);

    }

    public function activeAmeneties(Request $request)
    {
        $id= $request->id;

        $amenties=Ameneti::where('id',$id)->first();
        $amenties->is_active=1;
        $amenties->save();

        $notification = array(
            'message' => 'Amenities Active Successfully', 
            'alert-type' => 'success'
           );

        return redirect('/admin/ameneties-management')->with($notification);
    }

      public function inactiveAmeneties(Request $request)
    {
        $id= $request->id;

        $amenties=Ameneti::where('id',$id)->first();
        $amenties->is_active=0;
        $amenties->save();

        $notification = array(
            'message' => 'Amenities InActive Successfully', 
            'alert-type' => 'success'
           );

        return redirect('/admin/ameneties-management')->with($notification);
    }


}
