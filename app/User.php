<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\like;
use App\comment;
class User extends Authenticatable
{
    
     public function comment(){
        
        return $this->hasMany(comment::class);
    }
     public function like(){
        
        return $this->hasMany(like::class);
    }
    
    public function roles(){
        
        return $this->belongsTomany('App\roles','user_role','user_id','roles_id');
    }
    
    public function hasAnyRole($roles)
    {
        if(is_array($roles))
        {
            foreach($roles as $role)
            {
                if($this->hasrole($role))
                {
                  return true;  
                }
            }
        }else{
        
        if($this->hasrole($roles))
                {
                  return true;  
                }
             }
    }

    
    public function hasrole($role)
      {
       if($this->roles()->where('name',$role)->first())
       {
           return true;
       }
       return false;
        
      }
        
        
        
  
        
     
    
    
    
    
    
    
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
