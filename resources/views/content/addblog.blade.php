 
@extends('master')



@section('content')





 <section class="wedo" id="contact">
			 
		    
		   <div class="contact_grid_right mt-5 mx-auto text-center">
				<form action="sendblog" method="post">
                                    {{csrf_field()}}
					<div class=" contact_top">
						 
						<input type="text" name="title" placeholder="title" required="required">
                                                  <div class=" "> 
                                                    <select class=' form-control'name='category' required="required"  > 
                                                                 
                                                         <option value='0'> choose category</option>
                                                         <option value='1'> برمجة</option>
                                                         <option value='2'> كتب</option>
                                                         <option value='3'>فلسفة  </option>
                                                         <option value='4'>ادب </option>

                                                    </select>
                                                  </div>
						 
						<div class="">
							<input type="text" name="name" placeholder="name" required="required">
						</div>
						
						 
						<textarea name="body"  required="required"  placeholder=" write here... "  > </textarea>
						<input type="submit" value="save">
                                           </div>
				       </form>
                       
                                   <div>  
                                      @foreach($errors->all() as $error)
                                      
                                    {{ $error }}<br>
                                      
                                      @endforeach
                                   
                                   
                                   </div>
			</div>
			<div class="cpy-right text-center">
			<div class="follow">
				<ul class="social_section_1info">
					<li><a href="#"><span class="fa fa-facebook"></span></a></li>
					<li><a href="#"><span class="fa fa-twitter"></span></a></li>
					<li><a href="#"><span class="fa fa-google-plus"></span></a></li>
					<li><a href="#"><span class="fa fa-dribbble"></span></a></li>
					
					<li><a href="#"><span class="fa fa-vimeo"></span></a></li>
					<li><a href="#"><span class="fa fa-linkedin"></span></a></li>
				</ul>
			</div>
				<p>© 2020 Polaroid. All rights reserved | Design by
					<a href="http://w3layouts.com"> W3layouts.</a>
				</p>
			</div>
	</section>



@stop