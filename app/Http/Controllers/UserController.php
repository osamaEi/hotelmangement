<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Jobs\SlowJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    
    public function index() {

        SlowJob::dispatch();



        return view('frontend.index');




    }


    public function UserProfile(){

        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('frontend.dashboard.edit_profile',compact('profileData'));

    }// End Method 

    public function UserStore(Request $request){

        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;

        if($request->file('photo')){
            $file = $request->file('photo');
            @unlink(public_path('upload/user_images/'.$data->photo));
            $filename = date('YmdHi').$file->getClientOriginalName();  
            $file->move(public_path('upload/user_images'),$filename);
            $data['photo'] = $filename;

        }
        $data->save();

     
        return redirect()->back()->with('success','profile updated successfully');

    }// End Method 

    public function UserLogout(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

    

        return redirect('/login')->with('success','user logout');
    }// End Method



}
