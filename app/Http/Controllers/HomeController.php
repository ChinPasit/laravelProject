<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;
use App\FileDoc;
use App\Users;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        if(auth()->user()->isAdmin()) {
            return view('/TemplateADMIN/thehomeADMIN');
        } else {
           return view('/Template/thehome');
           //return view('/auth/password/changepassword');
        }
    }
    public function changePassword(Request $request){
        $validatedData = $request->validate([
            'new-password' => 'required|string|min:6|confirmed',
        ]);
        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();
        return redirect()->back()->with("success","Password changed successfully !");
    }
    public function showChangePasswordForm(){
        return view('auth/passwords/changepassword');
    }
    public function upload(){
        $files = FileDoc::all();
        $users = Users::all();
        return view('/testupload',compact('files','users'));
    }
}
