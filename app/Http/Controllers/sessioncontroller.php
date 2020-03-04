<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class sessioncontroller extends Controller
{
     public function login(){
         
         return view ('login');
     }
     
       public function session(){
         auth()->attempt(request(['password','email']));
         
       if(! auth()->attempt(request(['password','email'])))
       
        {
            return back()->withErrors([
                'message'=>'email or password not correct'
            ]);
        }
       
         return redirect('/post');
     }
   
     
      public function logout(){
         
         auth()->logout();
         return redirect('/post');
     }
}
