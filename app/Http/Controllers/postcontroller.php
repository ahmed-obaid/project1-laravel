<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use App\category;
use DB;
use App\user;
use App\roles;
use App\comment;
  
class postcontroller extends Controller
{
    public function post(){
      
   //where('catid','=',$id)
        
        $posts=post::all();
       return view('content.post',compact("posts"));
        
        
    }
     public function addblog(Request $request){
         
         
         $this->validate(request(),[
             
             'title'=>'required',
             'body'=>'required',
             //'url'=>'image-mimes:jpg,jpeg,gif,png-max:2047'
         ]);
         
   //$image_name=time().'.'.$request->url->getclientoriginalextention();
        $post= new post();
        $post->title=request("title");
         
        $post->body=$request->body;
      
        $post->save();
        
        //images=================
        
        //$request->url->move(public_path('images'),$image_name);
        return back();
    }
    
    
    public function onepost(post $post_id){
        
        $stop_comment=DB::table('settings')->where('name','stop_comments')->value('status');                
       return view('content.onepost',compact("post_id",'stop_comment'));
        
        
    }
    
     //===================admin=========================
    public function admin(){
       $users=user::all();                      
       return view('content.admin',compact("users"));
        
        
    }
    
    
    public function addrole(Request $request){
       $user=user::where('email',$request['email'])->first();
       $user->roles()->detach();
       if($request['role_user'])
       {
           $user->roles()->attach(roles::where('name','user')->first());
       }
       if($request['role_editor'])
       {
           $user->roles()->attach(roles::where('name','editor')->first());
       }
       if($request['role_admin'])
       {
           $user->roles()->attach(roles::where('name','admin')->first());
       }
       
       return redirect()->back();
       
        
        
    }
    
    
    
    public function editor(){
                             
       return view('content.editor',compact(""));
        
        
    }
    
    
   public function access_permmion(){
                             
       return view('content.access_permmion');
        
        
    }
    
   
    
    
     public function statistics(){
         $user= user::all()->count();
         $comment= comment::all()->count();
         $post= post::all()->count();
         //===========hero comment====================
          $most_comments= user::withcount('comment')
          ->orderBy('comment_count','desc')->first();
       
         $comment1= ($most_comments->comment_count);
         $like1=DB::table('likes')->where('user_id',$most_comments->id)->count();
           
        $user1=$comment1+$like1;
          
           //===========hero like====================
          $most_likes= user::withcount('like')
          ->orderBy('like_count','desc')->first();
          
           $comment2= ($most_likes->comment_count);
           $like2=DB::table('comments')->where('user_id',$most_likes->id)->count();
                 
        $user2=$comment2+$like2;
           if($user2>$user1)
           {
              $he=$most_likes; 
              $helike=$like2 ;
              $hecomment=$comment2;
           }else{
              $he=  $most_comments;  
               $helike=$like1 ;
               $hecomment=$comment1 ;
           } 
                
         
         //dd($like1);                    
       return view('content.statistics',compact('user','comment','post','he','helike','hecomment'));
        
        
    }
     //===========setting====================
    
     public function settings(){
         $stop_comment=DB::table('settings')->where('name','stop_comments')->value('status');
         $stop_registering=DB::table('settings')->where('name','stop_registering')->value('status');              
       return view('content.settings' ,compact('stop_registering','stop_comment'));
        
        
    } 
     public function changesettings(Request $request){
         $stop_comment=DB::table('settings')->where('name','stop_comments')->value('status');
         $stop_registering=DB::table('settings')->where('name','stop_registering')->value('status');   
        
         if($request->stop_comment) 
         
         
         {
            if($stop_comment==1)
             { 
               $stop_comment=0;  

            }else{

                $stop_comment=1;   
             }
             //==========update
             DB::table('settings')->where('name','stop_comments')
                     ->update(['status' => $stop_comment]);
         }elseif($request->stop_registering)
         {
            if($stop_registering==1)
             { 
               $stop_registering=0;  

            }else{

                $stop_registering=1;   
             }
             //==========update
             DB::table('settings')->where('name','stop_registering')
                     ->update(['status' =>$stop_registering ]); 
             
             
             
         }
         
      return view('content.settings',compact('stop_registering','stop_comment'));
                
    } 
    
     public function manage_users(){
         
                      $users=user::all();       
       return view('content.manage_users',compact('users'));
        
        
    }
    
    //================search
    
    public function search(Request $request){
             $request->validate([
                 
                 'q'=>'required'
             ]);
             $q=$request->q;
             $posts=post::where('title','like','%'.$q.'%')
                     ->orwhere('body','like','%'.$q.'%')->get(); 
             if($posts->count())
             {
              return view('content.show_search',compact('posts')) ;
                  
                   
                  
                
                 
             }else{
                 $failed='there is no results';
                 return view('content.show_search',compact('failed'));
                  
                         
                 
                    
                 
                   }
       
        
        
    }
    
    
    
    
    
}
