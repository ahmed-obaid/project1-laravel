<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\comment;
class commentscontroller extends Controller
{
     public function addcomment(Request $request,$id){
         
         
         $this->validate(request(),[
             
         
             'body'=>'required'
             
         ]);
         
   
        $comment= new comment();
        $comment->body=request("body");
         
        $comment->post_id=$id;
      
        $comment->save();
        
        return back();
    }
}
