<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;



class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Override the credentials method to allow login with either email or phone number.
     *
     * @param Request $request
     * @return array
     */
    protected function credentials(Request $request)
    {
        // Determine if the input is an email or phone number
        $loginType = filter_var($request->input('email'), FILTER_VALIDATE_EMAIL) ? 'email' : 'number';

        // Return the credentials array
        return [
            $loginType => $request->input('email'),
            'password' => $request->input('password'),
        ];
    }

   
     public function login(Request $request)
{
    // Validate the login request
    $this->validateLogin($request);

    // Attempt to log the user in
    if (Auth::attempt($this->credentials($request), $request->filled('remember'))) {
        
        // If successful, perform the after-login actions
        $user = Auth::user();  // Get the authenticated user
        $userId = $user->id;

        // Retrieve wishlist from session and save to database
        $wishlist = Session::get('wishlist', []);

        foreach ($wishlist as $propertyId) {
            Wishlist::updateOrCreate([
                'user_id' => $userId,
                'property_id' => $propertyId
            ]);

             $wishlist=new Wishlist();
            $wishlist->user_id=$userId;
            $wishlist->property_id=$propertyId;
            $wishlist->save();

        }

        // Clear session wishlist after saving
        Session::forget('wishlist');

        // Redirect to the intended page
        return redirect()->intended($this->redirectPath());
    } else {
        // If the login attempt was unsuccessful, redirect back with an error
        return redirect()->back()->withErrors([
            'email' => 'These credentials do not match our records.',
        ]);
    }
}


}

