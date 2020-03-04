<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use Auth;
use DB;
use App\roles;
class usercontroller extends Controller
{
     public function register(){
         $stop_registering=DB::table('settings')->where('name','stop_registering')->value('status');
         return view ('registering',compact('stop_registering'));
     }
      public function adduser(Request $request){
          $users=user::where('name',$request->name)
                  ->orwhere('email',$request->email)->get();
          
       if(!$users->count())
        {
          $user=new user();
          $user->name=$request->name;
          $user->password= bcrypt($request->password);
          $user->email=$request->email;
          $user->save();
         
         
        //==========add role================
          
          $user->roles()->attach(roles::where('name','user')->first());
        //==========add role================
          auth()->login($user);
         
         return redirect ('/post');
         
         }else{
            $stop_registering=DB::table('settings')->where('name','stop_registering')->value('status');
            $message='user already exist';
              return view ('/registering',compact('message','stop_registering'));
         }
         
         
         
     }
     //==========edite user================
     public function edit_user(user $user){
        
         return view ('content.edit_user',compact('user'));
     }
     public function update_user($user_id,Request $request){
         DB::table('users')->where('id',$user_id)->update([
             
             'name'=>$request->username,
              'email'=>$request->email
             
         ]);
         
        
         return back();
     }
     
     //==========delete user================
     public function delete_user( $user_id){
         DB::table('users')->where('id',$user_id)->delete();
         return back ();
     }
     
}
