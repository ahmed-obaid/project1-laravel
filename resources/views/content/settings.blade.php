 

@extends('master')



@section('content')


<h3 class="w3_head mb-5 text-center">settings</h3>
 
 
<section class="slide-wrapper" id="about">
    <div class="col-md-8">
	
        <h3 class="w3_head mb-5 text-center">settings</h3>
    </div>
   <table class="table table-hover">
       <form action="changesettings" method="post">
           {{csrf_field()}}
            <tr>
              <td> stop comments</td>
              <td> <input type="checkbox" name="stop_comment" onchange="this.form.submit()"></input></td>
               <td>{{$stop_comment}}</td>
            </tr>
            
            <tr>
                <td> stop registering</td>
                <td> <input type="checkbox" name="stop_registering" onchange="this.form.submit()"></input> </td>
               <td> {{$stop_registering }}</td>
             </tr>
    
            <tr>
                <td> all comments</td>
                <td> 0 </td>
            </tr>
    
            <tr>
                <td> most active us</td>
                <td> 0 </td> 
            </tr>
    
            <tr>
                <td> most activ comments</td>
                <td>12</td> 
            </tr>
       </form>                 
    </table>
	 
</section>

 
@stop