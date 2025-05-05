<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DataTables;
use App\Service;
use App\Models\Category;
use App\Models\Auction;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\Subscreption;
use App\Models\User;
use App\Models\Notice;
use App\Models\PurchaseSubscription;
use Carbon\Carbon;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Session;



use Hash;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $user=Auth::User();



        if($user!="")
        {
            if($user->role_id==1)
            {
               return view('admin.auction.all');
            }
            else
            {
               $category=Category::where('is_active',1)->get();
               $auction = Auction::where('is_active', 1)->where('featured',1)->with('category')->with('bank')->paginate(5);
               $blog=Blog::where('is_active',1)->get();
               $upcomingauction = Auction::where('is_active', 1)->where('auction_start_datetime', '>', now())->with('category')->with('bank')->paginate(3);

               $liveauction = Auction::where('is_active', 1)->whereDate('auction_start_datetime', now())->with('category')->with('bank')->get();
                 $premium=Subscreption::where('is_active',1)->get();


               // echo $upcomingauction;die;

               return view('index')->with('category',$category)->with('auction',$auction)->with('blog',$blog)->with('upcomingauction',$upcomingauction)->with('liveauction',$liveauction)->with('premium',$premium);
            }

        }

        $category=Category::where('is_active',1)->get();
               $auction = Auction::where('is_active', 1)->where('featured',1)->with('category')->with('bank')->paginate(5);
               $blog=Blog::where('is_active',1)->get();

               $upcomingauction = Auction::where('is_active', 1)->where('auction_start_datetime', '>', now())->with('category')->with('bank')->paginate(3);

                $liveauction = Auction::where('is_active', 1)->whereDate('auction_start_datetime', now())->with('category')->with('bank')->get();
                 $premium=Subscreption::where('is_active',1)->get();


               // echo $upcomingauction;die;
               return view('index')->with('category',$category)->with('auction',$auction)->with('blog',$blog)->with('upcomingauction',$upcomingauction)->with('liveauction',$liveauction)->with('premium',$premium);



        
        
    }

    public function getLogout(Request $request){

        Auth::logout();
        return redirect('login');
    }


    public function aboutus()
    {
        return view('about');
    }

    public function contactus()
    {
        return view('contact');
    }

    public function postContact(Request $request)
    {
        $input=$request->all();

        $contact=new Contact();
        $contact->name=$input['name'];
        $contact->email=$input['email'];
        $contact->subject=$input['subject'];
        $contact->message=$input['message'];
        $contact->save();

        $notification = array(
                'message' => 'Contact Submitted successfully', 
                'alert-type' => 'success'
             );

        return redirect('contact')->with($notification);


    }
    public function ourmenu()
    {
        return view('menu');
    }
     public function ourblog()
    {
        $blog=Blog::where('is_active',1)->get();
        return view('blog')->with('blog',$blog);
    }
    public function blogs(Request $request)
    {
        $id=$request->id;
        $blog=Blog::where('id',$id)->first();
        return view('blogdetails')->with('blog',$blog);
    }
    public function ourpremium()
    {
        $premium=Subscreption::where('is_active',1)->get();
        // echo $premimum;die;
      return view('premium')->with('premium', $premium);
    }
    public function ourfaq()
    {
        return view('faq');
    }
    // public function oursearch(Request $request)
    // {
    //                    $category=Category::where('is_active',1)->get();

    //     $property_type=$request->property_type;
    //     $city=$request->city;

    //     if($city!="")
    //     {
    //           if($property_type!='')
    //           {
    //              $property = Auction::where('is_active',1)->where('property_type', $property_type)
    //               ->where(function($query) use ($city) {
    //                   $query->where('district', $city)->orWhere('state', $city);
    //              })->with('category')->with('bank')->paginate(10);
    //           }
    //           else
    //           {
    //              $property = Auction::where('is_active',1)->where(function($query) use ($city) {
    //                   $query->Where('district', $city)->orWhere('state', $city);
    //              })->with('category')->with('bank')->paginate(10);
    //            }

    //     }
    //     else
    //     {
    //         $property = Auction::where('is_active',1)->with('category')->with('bank')->get();
    //     }

    //     return view('search')->with('property',$property)->with('category',$category);
    // }

public function oursearch(Request $request)
{
    $category = Category::where('is_active', 1)->get();
    $property_category = $request->id;
    $city = $request->city;
    $property_type = $request->property_type;

    // Check if user is logged in and get their wishlist property IDs, only if user is logged in
    $userWishlist = [];

    $user=Auth::User();

    if($user!="")
    {
        $userWishlist = Wishlist::where('user_id', $user->id)->pluck('property_id')->toArray();
    }

   

    
    if ($city != "") {
        if ($property_type != '') {
            $property = Auction::where('is_active', 1)
                ->where('category', $property_category)
                ->where(function($query) use ($city) {
                    $query->where('district', $city)->orWhere('state', $city);
                })
                ->with('category')
                ->with('bank')
                ->paginate(10);
        } else {
            $property = Auction::where('is_active', 1)
                ->where('category', $property_category)
                ->where(function($query) use ($city) {
                    $query->where('district', $city)->orWhere('state', $city);
                })
                ->with('category')
                ->with('bank')
                ->paginate(10);
        }
    } else {
        $property = Auction::where('is_active', 1)
            ->where('category', $property_category)
            ->with('category')
            ->with('bank')
            ->paginate(10);
    }

    // Pass both properties and userWishlist to the view
    return view('search', [
        'property' => $property,
        'category' => $category,
        'userWishlist' => $userWishlist,
    ]);
}



// public function ibcAuction(Request $request)
// {



// }


    public function oursearchDetails(Request $request)
    {
        $id=$request->id;

        $user_id=Auth::User();

        $subscription_available=1;


        if($user_id!="")
        {

        $user=PurchaseSubscription::where('user_id',$user_id->id)->where('is_active',1)->first();

        if($user!="")
        {
            $subscription=Subscreption::where('id',$user->plan_id)->first();

            $createdAt = Carbon::parse($subscription->created_at); 
            $today = Carbon::now(); 

            $daysDifference = $createdAt->diffInDays($today);

            $subscriptionDays = (int) $subscription->days;

            if ($daysDifference <= $subscriptionDays) {

                 $subscription_available=0;
               
            } else {

                $user=PurchaseSubscription::where('user_id',$user_id->id)->first();
                $user->is_active=0;
                $user->save();




               $subscription_available=1;

               }

         }

     }

       


        $property = Auction::where('id',$id)->with('category')->with('bank')->first();

        return view('acutionDetails')->with('property',$property)->with('subscription_available',$subscription_available);

    }

    public function allNotice(Request $request)
    {
        $notice=Notice::where('is_active',1)->get();

        // echo $notice;die;

        return view('notice')->with('notice',$notice);
    }

    public function allNoticeDetails(Request $request)
    {
        $id=$request->id;

        $notice=Notice::where('id',$id)->first();

        return view('noticedetails')->with('notice',$notice);
    }

    public function buyPlan(Request $request)
{
    $user = auth()->user();

    $plan = Subscreption::find($request->plan_id)->first();

    $purchase = new PurchaseSubscription();
    $purchase->user_id = $user->id;
    $purchase->plan_id = $plan->id;
    $purchase->save();

    return response()->json(['success' => true]);
}

  public function findProperty(Request $request)
  {
      $id=$request->id;

      if($id!=0)
      {
         $property = Auction::where('is_active', 1)->where('property_type', $id)->with('category')->with('bank')->paginate(10);  

      }
      else
      {
         $property = Auction::where('is_active', 1)->with('category')->with('bank')->paginate(10);  

      }

     
      $category=Category::where('is_active',1)->get();
      

      return view('search')->with('property', $property)->with('category',$category);

  }

  public function verifiedProperty(Request $request)
  {

      $property = Auction::where('is_active', 1)->where('featured',1)->with('category')->with('bank')->paginate(3);


            $category=Category::where('is_active',1)->get();


      return view('search')->with('property', $property)->with('category',$category);
  }

  public function addToWishlist(Request $request)
    {
        $propertyId = $request->input('property_id');


        if (Auth::check()) {

            $user = Auth::User();

            $userId=$user->id;

            $wishlist=new Wishlist();
            $wishlist->user_id=$userId;
            $wishlist->property_id=$propertyId;
            $wishlist->save();

            return response()->json(['status' => 'success']);
        } else {
            $wishlist = Session::get('wishlist', []);
            if (!in_array($propertyId, $wishlist)) {
                $wishlist[] = $propertyId;
                Session::put('wishlist', $wishlist);
            }

            return response()->json(['status' => 'success']);
        }
    }

    public function removeFromWishlist(Request $request)
    {
        $user = Auth:: User();
        $userId=$user->id;
        $propertyId = $request->input('property_id');

        Wishlist::where('user_id', $userId)->where('property_id', $propertyId)->delete();

        return response()->json(['status' => 'success']);
    }

}
