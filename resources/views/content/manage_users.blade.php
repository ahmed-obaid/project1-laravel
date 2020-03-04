 

@extends('master')



@section('content')




<section class="slide-wrapper" id="about">
    <div class="col-md-8">
	
        <h3 class="w3_head mb-5 text-center">list of user</h3>
    </div>
    
    
    <div class="container">
        <div class="table-responsive">
            <table class=" table table-bordered ">
                <tr>
                    <th>#</th>
                    <th>name</th>
                    <th>email</th>
                    <th>user</th>
                    <th>editor</th>
                    <th>admin</th>
                    <th>controlelr</th>


                </tr>
              @foreach ($users as $user)  
              <form action="addrole" method="post">
                  {{csrf_field()}}
                 <input type="hidden" name="email" value="{{$user->email}}" >
                <tr>
                    <td>{{$user->id}}</td>
                    <td> {{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>

                      <input type="checkbox" name="role_user" onchange="this.form.submit()"  {{$user->hasrole('user')?'checked':''}}> 
                     </td>
                     <td>

                       <input type="checkbox" name="role_editor" onchange="this.form.submit()" {{ $user->hasrole('editor')?'checked':''}}>   
                     </td>
                     <td>

                         <input type="checkbox" name="role_admin" onchange="this.form.submit()" {{ $user->hasrole('admin')?'checked':''}}> 

                     </td>
                    </form> 
                     <td>

                         <a href="edit_user/{{$user->id}}" name="{{$user->id}}" class="btn btn-success"  >edite </a>
                         <a href="delete_user/{{$user->id}}" name="{{$user->id}}" class="btn btn-danger"  > delete</a>
                        
                     </td>


                </tr>
              

                @endforeach


            </table>
        </div>
    </div>
	 
</section>
 @stop