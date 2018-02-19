<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

// include Member model
use App\Member;

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
        return view('admin');
     }

     /**
     *
     * This function will load the manage members page
     *
     */

     public function manageMembers_fs_sort() {
    
     }

     public function manageMembers() {
        $members = Member::orderBy('lastname')->get();

        return view('managemembers', ['members' => $members, 
            'sortmessage' => 'Sort by Firstname',
            'sortredirect' => 'mmf']);
     }

     public function manageMembers_firstname() {
        $members = Member::orderby('firstname')->get();

        return view('managemembers', ['members' => $members, 
            'sortmessage' => 'Sort by Lastname', 
            'sortredirect' => 'mm']);
     }

     public function addMember() {
        return view("addmember");
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
        return view('updateMember', ['member' => $toUpdate]);
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

     











}
