<?php

namespace App\Http\Middleware;

use Closure;

class checkrole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($request->user()===null)
          {
            return redirect('/access_permmion');
          }
          $action= $request->route()->getAction();
          $roles=isset($action['roles'])? $action['roles']: null;
          
          if($request->user()->hasAnyRole($roles)or !$roles)
              
            {
              return $next($request);
            }
        return redirect('/access_permmion');
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
    }
}
