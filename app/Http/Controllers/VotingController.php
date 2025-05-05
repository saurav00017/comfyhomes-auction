<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DataTables;
use App\Service;
use App\Models\voting;
use Hash;
use Auth;


class VotingController extends Controller
{
    public function getAddVoting(Request $request)
    {
        return view('admin.voting.add');
    }

    public function postAddVoting(Request $request)
    {
        $input=$request->all();


        $voting=new Voting();
        $voting->voting_type=$input['voting_type'];
        $voting->question=$input['question'];
        $voting->answer=$input['answer'];
        $voting->save();

        $notification = array(
                'message' => 'Voting Form Submitted successfully', 
                'alert-type' => 'success'
             );

       return redirect('admin/voting-management')->with($notification);
    }

    public function all(Request $request)
    {
        return view('admin.voting.all');
    }

    public function allData(Request $request)
    {
        $voting=Voting::all();

        return DataTables::of($voting)->make(true);
    }

    public function getEditVoting(Request $request)
    {
        $id=$request->id;

        $voting=Voting::where('id',$id)->first();

        return view('admin.voting.edit')->with('voting',$voting);
    }

      public function postEditVoting(Request $request)
    {

        $id=$request->id;
        $input=$request->all();

        $voting= Voting::where('id',$id)->first();
        $voting->voting_type=$input['voting_type'];
        $voting->question=$input['question'];
        $voting->answer=$input['answer'];
        $voting->save();

        $notification = array(
                'message' => 'Voting Form Submitted successfully', 
                'alert-type' => 'success'
             );

       return redirect('admin/voting-management')->with($notification);
    }

    public function getActiveVoting(Request $request)
    {
        $id=$request->id;

        $voting=Voting::where('id',$id)->first();
        $voting->is_active=1;
        $voting->save();


        $notification = array(
                'message' => 'Voting Form Active successfully', 
                'alert-type' => 'success'
             );

       return redirect('admin/voting-management')->with($notification);
    }

     public function getInActiveVoting(Request $request)
    {
        $id=$request->id;

        $voting=Voting::where('id',$id)->first();
        $voting->is_active=0;
        $voting->save();


        $notification = array(
                'message' => 'Voting Form InActive successfully', 
                'alert-type' => 'success'
             );

       return redirect('admin/voting-management')->with($notification);
    }

    public function deleteVoting(Request $request)
    {
        $id=$request->id;

        $voting=Voting::where('id',$id)->delete();

         $notification = array(
                'message' => 'Voting Form Delete successfully', 
                'alert-type' => 'success'
             );

       return redirect('admin/voting-management')->with($notification);


    }
}
