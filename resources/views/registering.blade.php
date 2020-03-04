 
 
@extends('master')



@section('content')
    



<div class="login-page form-control">
    @if($stop_registering==1)
    <h1> signup</h1>
           <form class="signup" action= "adduser" method="POST"required="required"  >
                 {{csrf_field()}}
                <div class="input ">
                      <input class="form-control " type="text" name="name" autocomplete="off"  placeholder="username"required="required"  />
                </div> 
                <div class="input">
                        <input class="form-control " type="password" name="password" autocomplete="new-password" placeholder="password" required="required"  />
                </div>
                        
                        
                                                                                                              
            
                <div class="input-container">
                    
                        <input class="form-control " type="text" name="email" autocomplete=""  placeholder="email" required="required" />
                </div>     
                
                        <input class="btn btn-success btn-block" name="signup" type="submit" value="signup"/> 
                        
                
          </form> 
            @if(isset($message))
            <h4>{{$message}}</h4>
            @endif
         @else
         <h3 class="alert-danger"> registering is closed currently</h3>
         @endif
</div>


@stop