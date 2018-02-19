<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

// include Member model
use App\Member;
use App\Alumni;

// include Request stuff
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
    *
    * This function returns the about page
    *
    */
     public function admin() {
        $this->middleware('auth');
        return view('admin.admin');
     }


     public function manageMembers() {
        $members = Member::orderBy('lastname')->get();

        return view('admin.managemembers', ['members' => $members, 
            'sortmessage' => 'Sort by Firstname',
            'sortredirect' => 'mmf']);
     }

     public function manageMembers_firstname() {
        $members = Member::orderby('firstname')->get();

        return view('admin.managemembers', ['members' => $members, 
            'sortmessage' => 'Sort by Lastname', 
            'sortredirect' => 'mm']);
     }

     public function addMember() {
        return view("admin.addmember");
     }

     public function storeMember(Request $request) {
        $member = new Member();
        $member -> firstname = $request->input('firstname');
        $member -> lastname = $request->input('lastname');
        $member -> email = $request->input('email');
        $member -> info = $request->input('info');
        $member -> grad_date= $request->input('grad_date');

        $member -> save();

       return redirect()->route('manageMembers');

        // do things for storing a member here
     }

     public function deleteMember($id) {
        $todelete = Member::find($id);
        if ($todelete) {
            $todelete -> delete();
        }

        return redirect() -> route('manageMembers');
     }

     public function updateMember($id) {
        $toUpdate = Member::find($id);
        return view('admin.updateMember', ['member' => $toUpdate]);
     }

     public function saveMemberUpdate(Request $request) {
        $member = Member::find($request->input('id'));
        //check to see if the member was found

        if ($member) {
            $member -> firstname = $request->input('firstname');
            $member -> lastname = $request->input('lastname');
            $member -> email = $request->input('email');
            $member -> info = $request->input('info');
            $member -> grad_date= $request->input('grad_date');
             $member -> save();

        } else {
            return "fuck";
        }


        return redirect()->route('manageMembers');
     }

     // all alumni management functions follow
     public function manageAlumni() {
        $alumni = Alumni::orderBy('lastname') -> get();
        return view('admin.managealumni', ['alumni' => $alumni, 
            'sortmessage' => 'Sort by Firstname',
            'sortredirect' => 'amf']);
     }

     public function manageAlumni_firstname() {
        $alumni = Alumni::orderby('firstname')->get();

        return view('admin.managealumni', ['alumni' => $alumni, 
            'sortmessage' => 'Sort by Lastname', 
            'sortredirect' => 'am']);
     }

      public function addAlumni() {
        return view("admin.addalumni");
     }

     public function storeAlumni(Request $request) {
        $alumni = new Alumni();
        $alumni -> firstname = $request->input('firstname');
        $alumni -> lastname = $request->input('lastname');
        $alumni -> email = $request->input('email');
        $alumni -> info = $request->input('info');
        $alumni -> grad_year = $request->input('grad_year');

        $alumni -> save();

       return redirect()->route('manageAlumni');

        // do things for storing a member here
     }

     public function deleteAlumni($id) {
        $todelete = Alumni::find($id);
        if ($todelete) {
            $todelete -> delete();
        }

        return redirect() -> route('manageAlumni');
     }

     public function updateAlumni($id) {
        $toUpdate = Alumni::find($id);
        return view('admin.updateAlumni', ['alumni' => $toUpdate]);
     }

     public function saveAlumniUpdate(Request $request) {
        $alumni = Alumni::find($request->input('id'));
        //check to see if the alumni was found

        if ($alumni) {
            $alumni -> firstname = $request->input('firstname');
            $alumni -> lastname = $request->input('lastname');
            $alumni -> email = $request->input('email');
            $alumni -> info = $request->input('info');
            $alumni -> grad_year= $request->input('grad_year');
            $alumni -> save();

        } else {
            return "something went wrong here";
        }


        return redirect()->route('manageAlumni');
     }



     











}
