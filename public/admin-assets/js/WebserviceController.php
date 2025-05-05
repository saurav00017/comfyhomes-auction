<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DataTables;
use App\Service;
use App\Models\User;
use App\Models\Role;
use App\Models\propertyType;
use App\Models\Property;
use App\Models\PropertyImage;
use App\Models\PropertyFeature;
use App\Models\PropertyPrice;
use App\Models\PropertyNearBy;
use App\Models\Amenety;
use App\Models\PropertyAmenety;
use App\Models\Feature;  
use App\Models\Banner;  
use App\Models\BedManagement;  
use App\Models\Inquiry; 
use App\Models\Bedbooking;  
use App\Models\Wishlist;    
use App\Models\Offer;  
use App\Models\Schedule;
use App\Models\ExploreResidence;    
use App\Models\Category;  
use App\Models\Setting;             
use App\Models\Room;       
use App\Models\Floor;   
use App\Models\Fcm;  
use App\Models\Customer_approvel;      
use App\Models\Defaulter;
use Hash;
use Auth;
use DB;


class WebserviceController extends Controller
{
    public function loginApi(Request $request)
    {
    	$contact=$request->contact;




        $check=User::where('contact',$contact)->first();

        if($check!="")
        {

              
            

            return response()->json(['success'=>true,'message'=>'success', 'data' => $check]);

           



        }
        else
        {

              $user= new User();

              $user->contact=$contact;
              $user->save();

            return response()->json(['success'=>true,'message'=>'user created', 'data'=>$user]);

        }



    }

    public function UpdateProfile(Request $request)
    {
        $id=$request->user_id;
        $first_name=$request->first_name;
        $last_name=$request->last_name;
        $email=$request->email;
        $role=$request->role;
        $profile=$request->file('profile');

        if($email!="")
        {
            $user=User::where('email',$email)->first();

            if($user!="")
            {

                $data=User::where('id',$id)->first();

                $email1=$user->email;
                $email2=$user->email;

                if($email1==$email2)
                {
                    $user=User::find($id);

                 $user->first_name=$first_name;
                 $user->last_name=$last_name;

                $user->email=$email;
                $user->role=$role;
                 if(Input::hasFile('profile')){
                $profile_img = $request->profile;
                $path = $profile_img->store('profile');
                $user->profile=$path;
                }

               $user->save();

               return response()->json(['success'=>true,'message'=>'Profile Update success', 'data'=>$user]);
                }

                else
                {
                    return response()->json(['success'=>false,'message'=>'Email All ready register']);

                }





            }

            else
            {
                $user=User::find($id);

                 $user->first_name=$first_name;
                 $user->last_name=$last_name;

                $user->email=$email;
                $user->role=$role;
                 if(Input::hasFile('profile')){
                $profile_img = $request->profile;
                $path = $profile_img->store('profile');
                $user->profile=$path;
                }

               $user->save();

               return response()->json(['success'=>true,'message'=>'Profile Update success', 'data'=>$user]);

            }
            
        }

        else
        {

               $user=User::find($id);

                 $user->first_name=$first_name;
                 $user->last_name=$last_name;

                $user->email=$email;
                $user->role=$role;
                 if(Input::hasFile('profile')){
                $profile_img = $request->profile;
                $path = $profile_img->store('profile');
                $user->profile=$path;
                }

               $user->save();

               return response()->json(['success'=>true,'message'=>'Profile Update success', 'data'=>$user]);


        }

        

    }

   




    public function registerApi(Request $request)
      {
    	$name=$request->name;
    	$email=$request->email;
    	$contact=$request->contact;
    	$password=$request->password;
        $confirm_password=$request->confirm_password;
        $role=$request->role;
        $profile=$request->file('profile');

        if($password==$confirm_password)
        {

    	if($email!="")
        {
           $user=User::where('email',$email)->first();

           if($user!="")
           {
           	 return response()->json(['success'=>false,'message'=>'Email is Already Register', 'data'=>$email]);
           }

            else
            {

             $user2=User::where('contact',$contact)->first();

             if($user2!="")
             {

                return response()->json(['success'=>false,'message'=>'Phone no is Already Register', 'data'=>$email]);

             }

             else
             {
                 $user=new User();

                $user->name=$name;
                $user->email=$email;
                $user->contact=$contact;
               if ($request->password!="") {
                $password = Hash::make($request->password);
                $user->password=$password;
                } 
                 if ($request->confirm_password!="") {
                $confirm_password = Hash::make($request->confirm_password);
                $user->confirm_password=$confirm_password;
                } 
                $user->role=$role;
                if(Input::hasFile('profile')){
                $profile_img = $request->profile;
                $path = $profile_img->store('profile');
                $user->profile=$path;
        }
            
              $user->save();

              return response()->json(['success'=>true,'message'=>'Register success', 'data'=>$user]);
        
             }


               

            }

        }

      }

      else
      {
         return response()->json(['success'=>false,'message'=>'Password and Confirm Password not match']);

      }
       
		    
    	
    	
    }


    public function generateotp(Request $request){
    	$contact=$request->contact;

    	$user=User::where('contact',$contact)->first();
    	if($user!="")
    	{

            $contact=$user->contact;
            $random=rand(1000,9999);
            $user->otp=$random;
            $user->save();

            $otp=$user->otp;

            return response()->json(['success'=>true,'message'=>'otp send register mobile no', 'data' => $otp ]);
        }
        else
        {
        	
        	return response()->json(['success'=>false,'message'=>'mobile no is not register', 'contact' => $contact ]);
        }
    }

    public function forgetpasswordotp(Request $request)
    {
    	$contact=$request->contact;

    	if($contact!="")
    	{
    		$user=User::where('contact',$contact)->where('is_active',0)->first();
    		if($user!="")
    		{
    			$id=$user->id;
				$otp= mt_rand(1000,9999);
				$user->otp=$otp;
				$user->save();

				return response()->json(['status'=>true, 'msg' => 'User OTP', 'otp'=>$otp, 'id'=>$id]);

    		}

    		else
    		{
    			return response()->json(['status'=>false, 'msg' => 'User not found','data'=>'']);
    		}
    	}

    }

    public function confirmotp(Request $request)
    {
    	 $id=$request->id;
         $otp=$request->otp;
         $user=User::where('id',$id)->first();

          if($user!="")
          {
       	     $otp1=$user->otp;

       	     if($otp==$otp1)
       	     {
       	     	return response()->json(['status'=>true, 'msg' => 'OTP correct', 'id'=>$id]);
		     }

		     else
		     {
		     	return response()->json(['status'=>false, 'msg' => 'OTP is invalid', 'id'=>$id]);
		     }
       	  }


    }

    public function forgetpassword(Request $request)
    {
       $id=$request->id;
       $password=$request->password;
       $confirm_password=$request->confirm_password;

       $user=User::where('id',$id)->first();

       if($user!="")
       {
       	 
       	 	if($password==$confirm_password)
       	 	{
               $user=User::find($id);

       	 	   if ($request->password!="") {
		        $password = Hash::make($request->password);
		        $user->password=$password;
		        } 

		       if ($request->confirm_password!="") {
		        $confirm_password = Hash::make($request->confirm_password);
		        $user->confirm_password=$confirm_password;
		        } 
		       $user->save();

		       return response()->json(['status'=>true, 'msg' => 'Password Change Success', 'otp'=>$user]);

		    }

		    else
		    {
		    	return response()->json(['status'=>false, 'msg' => 'Password and Confirm Password are not same', ]);
		    }

 	
       }
    }


    public function returnProperty(Request $request)
    {
    	$property=Property::with('property_image')->with('property_feature')->with('property_price')->with('property_near')->with('property_amenety')->get();

    	return response()->json(['status'=>true, 'msg' => 'All Property', 'property'=>$property]);

    }

    public function inquire(Request $request)
    {
    	$property_id=$request->property_id;
    	$sender_id=$request->sender_id;
    	$contact=$request->contact;
    	$message=$request->message;
      $email=$request->email;

      if($contact!="")
      {
        $data=Property::where('proprty_id',$property_id)->first();



      $receiver_id=$data->add_by;

      $inquire=new Inquiry();

      $inquire->property_id=$property_id;
      $inquire->sender_id=$sender_id;
      $inquire->receiver_id=$receiver_id;
      $inquire->contact=$contact;
      $inquire->message=$message;
      $inquire->email=$email;




      $inquire->save();

      return response()->json(['status'=>true, 'msg' => 'Inquiry register success', 'inquire'=>$inquire]);

    }
    else
    {
      $data=Property::where('proprty_id',$property_id)->first();



      $receiver_id=$data->add_by;

      $inquire=new Inquiry();

      $inquire->property_id=$property_id;
      $inquire->sender_id=$sender_id;
      $inquire->receiver_id=$receiver_id;
      $inquire->contact=$contact;
      $inquire->message=$message;
      $inquire->email=$email;



      $inquire->save();

      return response()->json(['status'=>true, 'msg' => 'Inquiry register success', 'inquire'=>$inquire]);


    }
      


    }


    public function getAllMessage(Request $request)
    {
     
      $user_id=$request->user_id;

       $data=Property::with(['message'=>function($query) use ($user_id){ $query->where('sender_id',$user_id)->orwhere('receiver_id',$user_id);}])->get();






      
        return response()->json(['status'=>true, 'msg' => 'Inquiry all message', 'message'=>$data]);
     



    }

    public function getallchats(Request $request)
    {
      $property_id=$request->property_id;
      $user_id=$request->user_id;




      $data=Property::where('proprty_id',$property_id)->with(['message'=>function($query) use ($user_id){ $query->where('sender_id',$user_id)->orwhere('receiver_id',$user_id);}])->get();

      return response()->json(['status'=>true, 'msg' => 'Inquiry all message', 'message'=>$data]);



    }

    public function getpg(Request $request)
    {
    	$PG=Property::where('property_category','Rent')->where('rent_type','PG')->with('property_feature')->with('property_price')->with('property_near')->with('property_amenety')->get();

    	 return response()->json(['status'=>true, 'msg' => 'All PG', 'PG'=>$PG]);

    }

    public function BedManagement(Request $request)
    {
    	$property_id=$request->property_id;
    	$beds=BedManagement::where('property_id',$property_id)->with('property')->get();

    	 return response()->json(['status'=>true, 'msg' => 'Beds In PG', 'beds'=>$beds]);



    }

    public function myprofile(Request $request)
    {
    	$id=$request->id;
    	$user=User::where('id',$id)->first();

    	return response()->json(['status'=>true, 'msg' => 'My Profile Data', 'user'=>$user]);

    }

    public function BedBooking(Request $request)
    {   
        $user_id=$request->user_id;
        $bed_no=$request->bed_no;
        $booking_amt=$request->booking_amt;
        $gender=$request->gender;
        $property_id=$request->property_id;

        $BedBooking=new Bedbooking();

        $BedBooking->bed_no=$bed_no;
        $BedBooking->booking_amt=$booking_amt;
        $BedBooking->gender=$gender;
        $BedBooking->property_id=$property_id;
        $BedBooking->user_id=$user_id;

        $BedBooking->save();

        return response()->json(['status'=>true, 'msg' => 'Bed Book Success', 'BedBooking'=>$BedBooking]);
    }

    public function allBedBooking(Request $request)
    {
        $bookedbed=Bedbooking::all();

        return response()->json(['status'=>true, 'msg' => 'All Book Bed', 'bookedbed'=>$bookedbed]);
    }

    public function bookedbed(Request $request)
    {
        $property_id=$request->property_id;
        
        $data=Property::where('proprty_id',$property_id)->with('bedbook')->get();

        return response()->json(['status'=>true, 'msg' => 'All Book Bed', 'bookedbed'=>$data]);



        
  
    } 


    public function propertynearby(Request $request)
    {
        $latitude=$request->latitude;
        $longitude=$request->longitude;

        $nearbyproperty=Property::where('is_active',0)->with('property_image')->select("*", DB::raw("6371 * acos(cos(radians(" . $latitude . "))
                                 *cos(radians(latitude))  *cos(radians(longitude) - radians(" . $longitude . "))
                + sin(radians(" .$latitude. ")) * sin(radians(latitude))) AS distance"))->having('distance', '<', 20)->orderBy('distance', 'asc')->get();




         return response()->json(['status'=>true, 'msg' => 'All Near Property','nearbyproperty'=>$nearbyproperty]);


        

    }


    public function nearestpropertyfilterbycategory(Request $request)
    {
        $latitude=$request->latitude;
        $longitude=$request->longitude;
        $property_type=$request->property_type;
        $minprice=$request->minprice;
        $maxprice=$request->maxprice;
        $minarea=$request->minarea;
        $maxarea=$request->maxarea;
        $mincarpet=$request->mincarpet;
        $maxcarpet=$request->maxcarpet;
        $property_on=$request->property_on;


        if($property_type!="")
        {
            $nearbyproperty=Property::where('is_active',0)->where('property_category',$property_on)->where('rent_type',$property_type)->select("*", DB::raw("6371 * acos(cos(radians(" . $latitude . "))
                                 *cos(radians(latitude))  *cos(radians(longitude) - radians(" . $longitude . "))
                + sin(radians(" .$latitude. ")) * sin(radians(latitude))) AS distance"))->having('distance', '<', 20)->orderBy('distance', 'asc')->get();


         
        
        
        if($minprice!="" && $maxprice!="" )
        {
            $nearbyproperty=Property::where('is_active',0)->where('property_category',$property_on)->where('rent_type',$property_type)->whereBetween('price', [$minprice, $maxprice])->select("*", DB::raw("6371 * acos(cos(radians(" . $latitude . "))
                                 *cos(radians(latitude))  *cos(radians(longitude) - radians(" . $longitude . "))
                + sin(radians(" .$latitude. ")) * sin(radians(latitude))) AS distance"))->having('distance', '<', 20)->orderBy('distance', 'asc')->get();

            return response()->json(['status'=>true, 'msg' => 'All Near Property','nearbyproperty'=>$nearbyproperty]);

        }


        if($minarea!="" && $maxarea!="")
        {
            $nearbyproperty=Property::where('is_active',0)->where('property_category',$property_on)->where('rent_type',$property_type)->whereBetween('property_size', [$minarea, $maxarea])->select("*", DB::raw("6371 * acos(cos(radians(" . $latitude . "))
                                 *cos(radians(latitude))  *cos(radians(longitude) - radians(" . $longitude . "))
                + sin(radians(" .$latitude. ")) * sin(radians(latitude))) AS distance"))->having('distance', '<', 20)->orderBy('distance', 'asc')->get();

            return response()->json(['status'=>true, 'msg' => 'All Near Property','nearbyproperty'=>$nearbyproperty]);
        }

        if($mincarpet!="" && $maxcarpet!="")
        {
            $nearbyproperty=Property::where('is_active',0)->where('property_category',$property_on)->where('rent_type',$property_type)->whereBetween('carpet_area', [$mincarpet, $maxcarpet])->select("*", DB::raw("6371 * acos(cos(radians(" . $latitude . "))
                                 *cos(radians(latitude))  *cos(radians(longitude) - radians(" . $longitude . "))
                + sin(radians(" .$latitude. ")) * sin(radians(latitude))) AS distance"))->having('distance', '<', 20)->orderBy('distance', 'asc')->get();

            return response()->json(['status'=>true, 'msg' => 'All Near Property','nearbyproperty'=>$nearbyproperty]);
        }

        return response()->json(['status'=>true, 'msg' => 'All Near Property','nearbyproperty'=>$nearbyproperty]);


    }

      
       

         
        
    
    

  }

  public function home(Request $request)
  {
        $latitude=$request->latitude;
        $longitude=$request->longitude;
        $user_id=$request->user_id;

        $nearbyproperty=Property::where('is_active',0)->with('property_image')->with(['wishlist'=>function($query) use ($user_id){ $query->where('user_id',$user_id);}])->select("*", DB::raw("6371 * acos(cos(radians(" . $latitude . "))
                                 *cos(radians(latitude))  *cos(radians(longitude) - radians(" . $longitude . "))
                + sin(radians(" .$latitude. ")) * sin(radians(latitude))) AS distance"))->having('distance', '<', 20)->orderBy('distance', 'asc')->get();

        $banner=Banner::where('is_active',0)->get();
        $offer=offer::where('is_active',0)->get();





         return response()->json(['status'=>true, 'msg' => 'All  Property','nearbyproperty'=>$nearbyproperty,'banner'=>$banner,'offer'=>$offer]);


  }


  // ->with(['offer_block_translation'=>function($query) use ($language_id){
  //           $query->where('language_id',$language_id);
  //       }])


  public function addwishlist(Request $request)
  {
     $user_id=$request->user_id;
     $property_id=$request->property_id;

     $data=wishlist::where('user_id',$user_id)->where('property_id',$property_id)->first();

     if($data!="")
     {
        return response()->json(['status'=>false, 'msg' => 'Property Already Added save',]);

     }

    else{

         $wishlist=new wishlist();

         $wishlist->user_id=$user_id;
         $wishlist->property_id=$property_id;

         $wishlist->save();

         return response()->json(['status'=>true, 'msg' => 'Property Added wishlist success']);

     }
  
    

  }

  public function allwishlist(Request $request)
  {
     $user_id=$request->user_id;

     $wishlist=wishlist::where('user_id',$user_id)->with('property')->with('property_image')->get();


     return response()->json(['status'=>true, 'msg' => 'All Wishlist', 'data'=>$wishlist]);

  }

  public function addSchedule(Request $request)
  {
     $first_name=$request->first_name;
     $last_name=$request->last_name;
     $mobile_no=$request->mobile_no;
     $professional=$request->professional;
     $duration_of_your_stay=$request->duration_of_your_stay;
     $visit_date=$request->visit_date;
     $preffered_time=$request->preffered_time;
     $property_id=$request->property_id;
     $user_id=$request->user_id;

     $data=Schedule::where('mobile_no',$mobile_no)->where('property_id',$property_id)->first();

     if($data!="[]")
     {
        return response()->json(['status'=>false, 'msg' => 'allerady schedule this property', 'data'=>$data]);

     }

     else{

          $schedule=new Schedule();

     $schedule->first_name=$first_name;
     $schedule->last_name=$last_name;
     $schedule->mobile_no=$mobile_no;
     $schedule->professional=$professional;
     $schedule->duration_of_your_stay=$duration_of_your_stay;
     $schedule->visit_date=$visit_date;
     $schedule->preffered_time=$preffered_time;
     $schedule->property_id=$property_id;
     $schedule->user_id=$user_id;


     $schedule->save();

     return response()->json(['status'=>true, 'msg' => 'Schedule Details', 'data'=>$schedule]);

     }

   

  }

  public function addreserveinfo(Request $request)
  {
     $first_name=$request->first_name;
     $last_name=$request->last_name;
     $mobile_no=$request->mobile_no;
     $professional=$request->professional;
     $email=$request->email;
     $occupency=$request->occupency;
     $gender=$request->gender;
     $move_date=$request->move_date;
     $referral_code=$request->referral_code;
     $room_no=$request->room_no;
     $bed_no=$request->bed_no;
     $booking_amt=$request->booking_amt;
     $floor_no=$request->floor_no;
     $property_id=$request->property_id;
     $user_id=$request->user_id;

     $data=Bedbooking::where('property_id',$property_id)->where('room_no',$room_no)->where('bed_no',$bed_no)->where('floor_no',$floor_no)->first();

     if($data!="")
     {
        return response()->json(['status'=>false, 'msg' => 'this bed is allerady booked']);

     }

     else
     {
       $residency=new ExploreResidence();

       $residency->first_name=$first_name;
       $residency->last_name=$last_name;
       $residency->mobile_no=$mobile_no;
       $residency->professional=$professional;
       $residency->email=$email;
       $residency->occupency=$occupency;
       $residency->gender=$gender;
       $residency->move_date=$move_date;
       $residency->referral_code=$referral_code;
       $residency->property_id=$property_id;
       $residency->user_id=$user_id;

       $residency->save();

       $bedbook=new Bedbooking();

       $bedbook->room_no=$room_no;
       $bedbook->bed_no=$bed_no;
       $bedbook->booking_amt=$booking_amt;
       $bedbook->gender=$gender;
       $bedbook->floor_no=$floor_no;
       $bedbook->property_id=$property_id;
       $bedbook->user_id=$user_id;

       $bedbook->save();

       $id=$residency->id;

       $property=ExploreResidence::where('id',$id)->with('property')->with('property_image')->with('bedbook')->first();

      return response()->json(['status'=>true, 'msg' => 'Schedule Details', 'data'=>$property]);

     }


     
  }


  public function propertymanage(Request $request)
  {
    $property_id=$request->property_id;

    $property=Property::where('proprty_id',$property_id)->with('bedmanage')->get();

    return response()->json(['status'=>true, 'msg' => 'Property Details', 'data'=>$property]);

  }

  public function bedmanage(Request $request)
  {
      $property_id=$request->property_id;
      $room_no=$request->room_no;

      $bookedbed=Room::where('property_id',$property_id)->where('room_no',$room_no)->with('bedmanage')->get();

     return response()->json(['status'=>true, 'msg' => 'Bed Book Details', 'data'=>$bookedbed]);

  }

  public function homepagefilter(Request $request)
  {
        $latitude=$request->latitude;
        $longitude=$request->longitude;
        $property_type=$request->property_type;
        $user_id=$request->user_id;
        if($property_type!="")
        {
            $nearbyproperty=Property::where('is_active',0)->where('rent_type',$property_type)->with('property_image')->with(['wishlist'=>function($query) use ($user_id){ $query->where('user_id',$user_id);}])->select("*", DB::raw("6371 * acos(cos(radians(" . $latitude . "))
                                 *cos(radians(latitude))  *cos(radians(longitude) - radians(" . $longitude . "))
                + sin(radians(" .$latitude. ")) * sin(radians(latitude))) AS distance"))->having('distance', '<', 20)->orderBy('distance', 'asc')->get();


         return response()->json(['status'=>true, 'msg' => 'All Near property','nearbyproperty'=>$nearbyproperty]);

        
        }

        $nearbyproperty=Property::where('is_active',0)->with('property_image')->with(['wishlist'=>function($query) use ($user_id){ $query->where('user_id',$user_id);}])->select("*", DB::raw("6371 * acos(cos(radians(" . $latitude . "))
                                 *cos(radians(latitude))  *cos(radians(longitude) - radians(" . $longitude . "))
                + sin(radians(" .$latitude. ")) * sin(radians(latitude))) AS distance"))->having('distance', '<', 20)->orderBy('distance', 'asc')->get();



        return response()->json(['status'=>true, 'msg' => 'All Near property','nearbyproperty'=>$nearbyproperty]);



  }




  public function getcategory(Request $request)
  {
    $category=Category::all();

    return response()->json(['status'=>true, 'msg' => 'All Category','Category'=>$category]);

  }
  public function maxminprice(Request $request)
  {
        $latitude=$request->latitude;
        $longitude=$request->longitude;

        $data=Property::where('is_active',0)->select("*", DB::raw("6371 * acos(cos(radians(" . $latitude . "))
                                 *cos(radians(latitude))  *cos(radians(longitude) - radians(" . $longitude . "))
                + sin(radians(" .$latitude. ")) * sin(radians(latitude))) AS distance"))->having('distance', '<', 20)->get();

        // $data1=$data->price;


        // $maxprice=max($data1);

        // $minprice=min($data1);

        // foreach ($data as $datas) {

        //     $price=$datas->price;

        //     $maxprice=max($price);

        //     return response()->json(['status'=>true, 'msg' => 'All property price','maxprice'=>$maxprice]);



        // }












    }


    public function deletewishlist(Request $request)
    {
        $user_id=$request->user_id;
        $property_id=$request->property_id;

        $wishlist=Wishlist::where('user_id',$user_id)->where('property_id',$property_id)->delete();

        return response()->json(['status'=>true, 'msg' => 'property delete form wishlist']);


    }

    public function searchkeyword(Request $request)
    {

        $latitude=$request->latitude;
        $longitude=$request->longitude;
        $property_name=$request->property_name;

         $data=Property::where('is_active',0)->where('property_name','LIKE','%'.$request->property_name."%")->with('property_image')->select("*", DB::raw("6371 * acos(cos(radians(" . $latitude . "))
                                 *cos(radians(latitude))  *cos(radians(longitude) - radians(" . $longitude . "))
                + sin(radians(" .$latitude. ")) * sin(radians(latitude))) AS distance"))->having('distance', '<', 20)->get();
         if($data!="[]")
         {      

            return response()->json(['status'=>true, 'msg' => 'search property','searchproprty'=>$data]);
         }
         else
        {
            return response()->json(['status'=>false, 'msg' => 'no any property','searchproprty'=>$data]);

        }




    }

    public function allproperty(Request $request)
    {
      $data=Property::with('property_image')->with('bedbook')->get();

      return response()->json(['status'=>true, 'msg' => 'all property','property'=>$data]);

    }


    public function getparticularProperty(Request $request)
    {
      $property_id=$request->property_id;
      $user_id=$request->user_id;

      $data=Property::where('proprty_id',$property_id)->with(['wishlist'=>function($query) use ($user_id){

        $query->where('user_id',$user_id);}])->with('property_image')->with('bedbook')->with('property_feature')->with('property_amenety')->with('property_near')->first();

      if($data!="")
      {
        return response()->json(['status'=>true, 'msg' => 'Property Details','property'=>$data]);

      }
      else
      {     

         return response()->json(['status'=>false, 'msg' => 'no any Property Details']);
      }




    }

    public function getsetting(Request $request)
    {
      $data=Setting::all();

      return response()->json(['status'=>true, 'msg' => 'all Details','setting'=>$data]);

    }

    public function roomanage(Request $request)
    {
       $property_id=$request->property_id;

       $data=Floor::with(['room'=>function($query) use ($property_id){

        $query->where('property_id',$property_id);}]

      )->get();

      return response()->json(['status'=>true, 'msg' => 'all room Details','setting'=>$data]);

    }



    public function userScheduleReserveDatails(Request $request)
    {
       $user_id=$request->user_id;
       $category=$request->category;

       if($category=="is_booked")
       {

          $data=Bedbooking::where('user_id',$user_id)->with('property')->with('property_image')->get();

          return response()->json(['status'=>true, 'msg' => 'all booked details user','datails'=>$data]);
       
       }

       else
       {

        

             $data=Schedule::where('user_id',$user_id)->with('property')->with('property_image')->get();

          return response()->json(['status'=>true, 'msg' => 'all schedule details user','datails'=>$data]);

        


       }



       // $data=
    }


    public function facebookLogin(Request $request)
    {
      $phone_no=$request->phone_no;
      $email=$request->email;
      $medium=$request->medium;
      $is_social=1;

      if($phone_no!="")
      {
        $data=User::where('contact',$phone_no)->first();
        if($data!="")
        {
          $id=$data->id;
          $user=User::find($id);
          $user->medium=$medium;
          $user->save();
          return response()->json(['status'=>true, 'msg' => 'success','datails'=>$user]);
        }
        else
        {
          $user= new User();

          $user->contact=$phone_no;
          $user->is_social=$is_social;
          $user->medium=$medium;
          $user->save();
                    $data=User::where('id',$id)->first();


          return response()->json(['status'=>false, 'msg' => 'fail','datails'=>$data]);

        }
      }
      else
      {
        $data=User::where('email',$email)->first();
        if($data!="")
        {
          $id=$data->id;
          $user=User::find($id);
          $user->medium=$medium;
          $user->save();
          return response()->json(['status'=>true, 'msg' => 'success','datails'=>$user]);
        }
        else
        {
          $user= new User();

          $user->contact=$phone_no;
          $user->is_social=$is_social;
          $user->medium=$medium;
          $user->save();
                    $data=User::where('id',$id)->first();


          return response()->json(['status'=>false, 'msg' => 'fail','datails'=>$data]);

        }
      }

      
    }

     public function googleLogin(Request $request)
    {
      $phone_no=$request->phone_no;
      $email=$request->email;
      $medium=$request->medium;
      $is_social=1;

      if($phone_no!="")
      {
        $data=User::where('contact',$phone_no)->first();
        if($data!="")
        {
          $id=$data->id;
          $user=User::find($id);
          $user->medium=$medium;
          $user->save();
          return response()->json(['status'=>true, 'msg' => 'success','datails'=>$user]);
        }
        else
        {
          $user= new User();

          $user->contact=$phone_no;
          $user->is_social=$is_social;
          $user->medium=$medium;
          $user->save();
          $data=User::where('id',$id)->first();


          return response()->json(['status'=>false, 'msg' => 'fail','datails'=>$data]);

        }
      }
      else
      {
        $data=User::where('email',$email)->first();
        if($data!="")
        {
          $id=$data->id;
          $user=User::find($id);
          $user->medium=$medium;
          $user->save();
          return response()->json(['status'=>true, 'msg' => 'success','datails'=>$user]);
        }
        else
        {
          $user= new User();

          $user->email=$email;
          $user->is_social=$is_social;
          $user->medium=$medium;
          $user->save();

          $id=$user->id;

          $data=User::where('id',$id)->first();



          return response()->json(['status'=>false, 'msg' => 'fail','datails'=>$data]);

        }
      }

    }

  public function fcmRegister(Request $request){
  $post=$request->all();

  $user_id=$post['user_id'];
  $device_token=$post['device_token'];

  $user=Fcm::where('user_id',$user_id)->first();

  if ($user!="") {

  $id=$user->id;
  $user=Fcm::find($id);
  $user->device_token=$device_token;
  $user->save();
  return response()->json(['success'=>true,'message'=>'success', 'data' => $user]);
  }
  else
  {
   
    $fcm=new Fcm();

    $fcm->user_id=$user_id;
    $fcm->device_token=$device_token;
    $fcm->save();
    return response()->json(['success'=>true,'message'=>'success', 'data' => $fcm]);


  }
  
  if($user==""){   
    return response()->json(['success'=>false, 'message' => 'User Not Found']);
  }
  $device_token=$user->device_token;
  $message_body="Hello Sabri";
 
}

public function confirmbooking(Request $request)
{
   $user_id=$request->user_id;

   $data=Customer_approvel::where('user_id',$user_id)->with('user')->with('paid')->first();

   return response()->json(['success'=>true,'message'=>'success', 'bookingConfirmation' => $data]);

}

public function defaulter(Request $request)
{
  $defaulter=Defaulter::all();

  return response()->json(['success'=>true,'message'=>'success', 'defaulter' => $defaulter]);

}














}
        

        


        
        

        



