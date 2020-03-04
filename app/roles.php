<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class roles extends Model
{
    public function user(){
        
        return $this->belongsTomany('App\user','user_role','roles_id','user_id');
    }
    
}
