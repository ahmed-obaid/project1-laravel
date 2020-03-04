 
 
@extends('master')



@section('content')


 
 

 



<h3 class="w3_head mb-5 text-center">statistics</h3>
<section class="slide-wrapper" id="about">
    <div class="col-md-8">
	
        
    </div>
    <table class="table table-hover">
       
            <tr>
              <td> all users</td>
              <td>{{$user}}</td>
            </tr>
            
            <tr>
                <td> all posts</td>
                <td>{{$post}}</td>
             </tr>
    
            <tr>
                <td> all comments</td>
                <td>{{$comment}} </td>
            </tr>
    
            <tr>
                <td> most active user</td>
                <td>{{$he->name}} like({{$helike}})comment({{$hecomment}}) </td> 
            </tr>
    
            <tr>
                <td> most activ comments</td>
                <td>12</td> 
            </tr>
            
            
        
       
        
   
        
        
    </table>
	 
</section>

 
@stop