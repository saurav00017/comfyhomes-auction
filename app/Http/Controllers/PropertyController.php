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
use App\Models\PropertyAmenety;
use App\Models\PropertyImage;
use Hash;
use Auth;

class PropertyController extends Controller
{
    public function getAddProperty(Request $request)
    {

        $amenety=Ameneti::where('is_active',1)->get();

        return view('admin.property.add')->with('amenety',$amenety);
    }

    public function postAddProperty(Request $request)
    {

        $input=$request->all();

        $property=New Property();


        $property->property_name=$input['property_name'];
        $property->type=$input['type'];
        $property->carpet_area=$input['carpet_area'];
        // $property->built_area=$input['built_area'];
        $property->furnished_type=$input['furnished_type'];
        $property->location=$input['location'];
        $property->selling_price=$input['selling_price'];
        // $property->deposite=$input['deposite'];
        // $property->instant_deposit_refund=$input['instant_deposit_refund'];
        // $property->rent=$input['rent'];
        $property->description=$input['description'];
        // $property->no_room=$input['no_room'];
        // $property->no_bed_room=$input['no_bed_room'];
        // $property->no_bath_room=$input['no_bath_room'];
        $property->possession=$input['possession'];

        $property->flat_type=$input['flat_type'];
        $property->no_of_floor=$input['no_of_floor'];
        $property->no_of_towers=$input['no_of_towers'];
        $property->no_of_lifts=$input['no_of_lifts'];
        $property->no_of_flats=$input['no_of_flats'];
        $property->no_of_blacony=$input['no_of_blacony'];


        $property->parking=$input['parking'];
        if(Input::hasFile('thumbnil_image')){
                       $image = $request->thumbnil_image;
                       $path = $image->store('property');
                       $property->thumbnil_image=$path;
                  }  
               $property->iframe=$input['iframe'];




        $property->save();

        $property_id=$property->id;

        $amenety=$request->amenety_id;

        $amenety_count=count($amenety);
        for ($i=0; $i<$amenety_count; $i++) { 
            $propertyAmenety=new PropertyAmenety();
            $propertyAmenety->amenety_id=$request->amenety_id[$i];
            $propertyAmenety->property_id=$property_id;
            $propertyAmenety->save();
        }

             $property_id=$property->id;
             $image=$request->image;

                  $propertyImage=new PropertyImage();
                  $propertyImage->property_id=$property_id;

                  if(Input::hasFile('image')){
                       $image = $request->image;
                       $path = $image->store('property');
                       $propertyImage->image=$path;
                  }  

                  $propertyImage->save();



         $notification = array(
            'message' => 'property Added Successfully', 
            'alert-type' => 'success'
           );

        return redirect('admin/property-management')->with($notification);

    }

    public function all(Request $request)
    {
        return view('admin.property.all');
    }

    public function allData(Request $request)
    {
        $property=Property::all();

        return DataTables::of($property)->make(true);
    }

    public function getEditProperty(Request $request)
    {
        $id=$request->id;

        $property=Property::where('id',$id)->with('property_amenety')->with('property_image')->first();

        $amenety=Ameneti::where('is_active',1)->get();

        // echo $property;die;


        return view('admin.property.edit')->with('property',$property)->with('amenety',$amenety);
    }

    public function postEditProperty(Request $request)
    {
        $id=$request->id;
        $input=$request->all();

        // dd($input);die;


        $property=Property::where('id',$id)->first();


       $property->property_name=$input['property_name'];
        $property->type=$input['type'];
        $property->carpet_area=$input['carpet_area'];
        // $property->built_area=$input['built_area'];
        $property->furnished_type=$input['furnished_type'];
        $property->location=$input['location'];
        $property->selling_price=$input['selling_price'];
        // $property->deposite=$input['deposite'];
        // $property->instant_deposit_refund=$input['instant_deposit_refund'];
        // $property->rent=$input['rent'];
        $property->description=$input['description'];
        // $property->no_room=$input['no_room'];
        // $property->no_bed_room=$input['no_bed_room'];
        // $property->no_bath_room=$input['no_bath_room'];

        $property->possession=$input['possession'];
        $property->flat_type=$input['flat_type'];
        $property->no_of_floor=$input['no_of_floor'];
        $property->no_of_towers=$input['no_of_towers'];
        $property->no_of_lifts=$input['no_of_lifts'];
        $property->no_of_flats=$input['no_of_flats'];
        $property->no_of_blacony=$input['no_of_blacony'];




        if(Input::hasFile('thumbnail_image')){
                       $image = $request->thumbnail_image;
                       // echo $image;die;
                       $path = $image->store('property');
                       $property->thumbnil_image=$path;
                  }  

        $property->iframe=$input['iframe'];

       
        $property->save();

        $property_id=$property->id;

        $amenety=$request->amenety_id;

        $amenetydelete=PropertyAmenety::where('property_id',$property_id)->delete();

        $amenety_count=count($amenety);
        for ($i=0; $i<$amenety_count; $i++) { 
            $propertyAmenety=new PropertyAmenety();
            $propertyAmenety->amenety_id=$request->amenety_id[$i];
            $propertyAmenety->property_id=$property_id;
            $propertyAmenety->save();
        }


         $property_id=$property->id;
             $image=$request->image;

                  $propertyImage=new PropertyImage();
                  $propertyImage->property_id=$property_id;

                  if(Input::hasFile('image')){
                       $image = $request->image;
                       $path = $image->store('property');
                       $propertyImage->image=$path;
                  }  

                  $propertyImage->save();



         $notification = array(
            'message' => 'property Added Successfully', 
            'alert-type' => 'success'
           );

        return redirect('admin/property-management')->with($notification);

    }

    public function postDeleteProperty(Request $request)
    {
        $id=$request->id;

        $property=Property::where('id',$id)->delete();


         $notification = array(
            'message' => 'Property Delete Successfully', 
            'alert-type' => 'success'
           );

        return redirect('admin/property-management')->with($notification);

    }

    public function activeProperty(Request $request)
    {
        $id= $request->id;

        $amenties=Property::where('id',$id)->first();
        $amenties->is_active=1;
        $amenties->save();

        $notification = array(
            'message' => 'Property Active Successfully', 
            'alert-type' => 'success'
           );

        return redirect('admin/property-management')->with($notification);
    }

      public function inactiveProperty(Request $request)
    {
        $id= $request->id;

        $amenties=Property::where('id',$id)->first();
        $amenties->is_active=0;
        $amenties->save();

        $notification = array(
            'message' => 'Property InActive Successfully', 
            'alert-type' => 'success'
           );

        return redirect('admin/property-management')->with($notification);
    }




}
