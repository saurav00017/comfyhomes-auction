<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DataTables;
use App\Service;
use App\Models\Contact;
use Hash;
use Auth;

class ContactController extends Controller
{
   public function all()
   {
      return view('admin.contact');
   }

   public function allData(Request $request)
   {
     $contact=Contact::all();

     return DataTables::of($contact)->make(true);
   }

}
