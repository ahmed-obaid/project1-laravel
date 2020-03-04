 

 
@extends('master')



@section('content')
    



<div class="login-page form-control">
    <h1> login</h1>
           <form class="signup" action="session" method="POST"required="required"  >
                 {{csrf_field()}}
                 
                       
                 
                <div class="input">
                        <input class="form-control " type="password" name="password" autocomplete="new-password" placeholder="password" required="required"  />
                </div>                                                                                                                                                             
            
                <div class="input-container">
                    
                        <input class="form-control " type="text" name="email" autocomplete=""  placeholder="email" required="required" />
                </div>     
                
                        <input class="btn btn-success btn-block  " name="login" type="submit" value="login"/> 
                                        
          </form> 
    
    @foreach($errors->all() as $error)
       {{$error}}
    @endforeach
    
</div>


@stop