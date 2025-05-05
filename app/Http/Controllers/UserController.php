<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DataTables;
use App\Service;
use App\Models\User;
use Hash;
use Auth;


class UserController extends Controller
{
    public function all(Request $request)
    {
        return view('admin.user.all');
    }

    public function allData(Request $request)
    {
        $user=User::all();

        return DataTables::of($user)->make(true);
    }

    public function getAddUser(Request $request)
    {
        return view('admin.user.add');
    }

    

    public function postAddUser(Request $request)
    {
        $name=$request->name;
        $email=$request->email;
        $number=$request->contact;
        $password=$request->password;


      if($number!='')
      {

         $data=User::where('number',$number)->first();

         if($data!='')
         {

              $notification = array(
            'message' => 'User phone Number allready Exist', 
            'alert-type' => 'error'
           );

            return back()->with($notification);

         }

         else
         {
            if($email!="")
            {
                $edata=User::where('email',$email)->first();

                if($edata!="")
                {

                    $notification = array(
                  'message' => 'User Email allready Exist', 
                   'alert-type' => 'error'
                   );

                   return back()->with($notification);

                }

                else
                {

                    $user=new User();

                    $user->name=$name;
                    $user->email=$email;
                    $user->number=$number;
                       if ($request->password!="") {
                          $password = Hash::make($request->password);
                          $user->password=$password;
                          } 
                    
                    $user->save();

                    $notification = array(
                        'message' => 'User Register successfully', 
                        'alert-type' => 'success'
                      );

                    return redirect('admin/user-management')->with($notification);

                }

            }



              $user=new User();

            $user->name=$name;
            $user->email=$email;
            $user->number=$number;
               if ($request->password!="") {
                  $password = Hash::make($request->password);
                  $user->password=$password;
                  } 
            
            $user->save();

            $notification = array(
                'message' => 'User Register successfully', 
                'alert-type' => 'success'
              );

            return redirect('admin/user-management')->with($notification);

         }

      }



        $user=new User();

        $user->name=$name;
        $user->email=$email;
        $user->number=$number;
         if ($request->password!="") {
            $password = Hash::make($request->password);
            $user->password=$password;
            } 
        
        $user->save();

        $notification = array(
                'message' => 'User Register successfully', 
                'alert-type' => 'success'
              );

        return redirect('admin/user-management')->with($notification);


    }

    public function getEditUser(Request $request)
    {
        $id=$request->id;
        $user=user::where('id',$id)->first();
        return view('admin.user.edit')->with('user',$user);
    }

      public function postEditUser(Request $request)
    {
        $id=$request->id;
        $name=$request->name;
        $email=$request->email;
        $contact=$request->contact;
        $password=$request->password;

      $data=User::Where('number',$contact)->first();

      if($data!="")
      {
         $id1=$data->id;

         if($id==$id1)
         {
            $email1=$data->email;

            if($email==$email1)
            {
              $user=User::find($id);

                  $user->name=$name;
                  $user->email=$email;
                  $user->number=$contact;
                     if ($request->password!="") {
                        $password = Hash::make($request->password);
                        $user->password=$password;
                        } 
                  
                 
                      

                      $user->save();

                      $notification = array(
                     'message' => 'User Updated Infomation Succesfully', 
                     'alert-type' => 'success'
                      );

                      return redirect('admin/user-management')->with($notification);
            }

            else
            {
              $edata=User::where('email',$email)->first();

                 if($edata!="")
                 {
                     $notification = array(
                     'message' => 'User Updated Email is alredy register', 
                     'alert-type' => 'error'
                      );

                   return back()->with($notification);

                 }

                 else
                 {
                      $user=User::find($id);

                      $user->name=$name;
                      $user->email=$email;
                      $user->number=$contact;
                         if ($request->password!="") {
                            $password = Hash::make($request->password);
                            $user->password=$password;
                            } 

                       

                      $user->save();

                       $notification = array(
                     'message' => 'User Updated Infomation SuccesFully', 
                     'alert-type' => 'success'
                      );
                      

                      return redirect('admin/user-management')->with($notification);



                 }


            }




         }

         else
         {
                   $notification = array(
                     'message' => 'User Updated Phone Number is alredy register', 
                     'alert-type' => 'error'
                      );

                   return back()->with($notification);
         }




      }

      else
      {
          $emaildata=User::where('email',$email)->first();

          if($emaildata!="")
          {
             $id2=$emaildata->id;

             if($id2==$id)
             {
                   $user=User::find($id);

                      $user->name=$name;
                      $user->email=$email;
                      $user->number=$contact;
                         if ($request->password!="") {
                            $password = Hash::make($request->password);
                            $user->password=$password;
                            } 

                        

                      $user->save();

                      $notification = array(
                     'message' => 'User Updated Infomation SuccesFully', 
                     'alert-type' => 'success'
                      );
                      

                      return redirect('admin/user-management')->with($notification);
             }
             else
             {
                     $notification = array(
                     'message' => 'User Updated Email is alredy register', 
                     'alert-type' => 'error'
                      );

                   return back()->with($notification);
             }
          }
          else
          {
                    $user=User::find($id);

                      $user->name=$name;
                      $user->email=$email;
                      $user->number=$contact;
                         if ($request->password!="") {
                            $password = Hash::make($request->password);
                            $user->password=$password;
                            } 

                       
                      

                      $user->save();

                       $notification = array(
                     'message' => 'User Updated Infomation SuccesFully', 
                     'alert-type' => 'success'
                      );

                      return redirect('admin/user-management')->with($notification);
          }

      }

    }

    public function activeUser(Request $request)
    {
        $id=$request->id;

        $user=User::where('id',$id)->first();
        $user->is_active=1;
        $user->save();

         $notification = array(
            'message' => 'User Acive SuccesFully', 
            'alert-type' => 'success'
        );

    return redirect('admin/user-management')->with($notification);

    }

    public function inactiveUser(Request $request)
    {
        $id=$request->id;

        $user=User::where('id',$id)->first();
        $user->is_active=0;
        $user->save();

         $notification = array(
            'message' => 'User InAcive SuccesFully', 
            'alert-type' => 'success'
        );

    return redirect('admin/user-management')->with($notification);

    }

    public function delete(Request $request)
    {
        $id=$request->id;

        $user=User::where('id',$id)->delete();

         $notification = array(
            'message' => 'User Delete SuccesFully', 
            'alert-type' => 'success'
        );

        return redirect('admin/user-management')->with($notification);

    }
}
