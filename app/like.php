<?php

namespace App;
use App\post;
use App\user;
use Illuminate\Database\Eloquent\Model;

class like extends Model
{
     public function post(){
         
         return $this->belongsTo(post::class);
     }
     public function user(){
         
         return $this->belongsTo(user::class);
     }
     
}
