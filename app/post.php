<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\like;
class post extends Model
{
    protected $fillable=['title','body'];
        
    
    public function comment(){
        
        return $this->hasMany(comment::class)->orderby('created_at');
    }
    
    public function category(){
         
         return $this->belongsTo(category::class);
     }
     
     public function like(){
        
        return $this->hasMany(like::class);
    }
    
}
