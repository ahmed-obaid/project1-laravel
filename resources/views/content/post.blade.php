@extends('master')



@section('content')
    
<div class="banner-text-w3ls">
            <div class="container">
                <div class="mx-auto text-center">
                    <h1>اهلا بك في مدونتا العامة سنكون   
	<br مسرورين   بمرورك     </h1>
					 
					<a class="btn btn-primary mt-lg-5 mt-3 agile-link-bnr" href="#about" role="button">Learn More</a>
                </div>
            </div>
        </div>
				<!-- about -->

<!-- //about -->
		<!-- news -->
       <div class="news" id="gallery">
		<div class="text-center">
			<h2 class="w3_head">اخر التدوينات</h2>
                        
		<p class="main_p mb-5  text-center mx-auto">اطلع على اخر التدوينات في المجالات المتاحة واضف التدوينة التي ترغب</p>      
                
                </div>
       </div>
            <!--============== posts======================================--> 
            <div class="row news-grids">
                
                @foreach($posts as $post )
                <div class='bridge'></div>
				<div class="col-md-6">
					<div class="news_top">
                                            <a href= "onepost/{{$post->id}}"><img src="images/t1.jpg" alt="news image"class="img-fluid" > </a>
                                           
                                               
                                           
					</div>
                                 
                                    <div>
                                        <strong >قسم : {{ $post->category->name}} </strong> 
                                         @php
                                            $like_count=0;
                                            $dislike_count=0;
                                            $like_status=" btn-secondary";
                                            $dislike_status=" btn-secondary";
                                            
                                          @endphp
                                           @foreach($post->like as $like )
                                      
                                      @php
                                        if($like->liked==1)
                                           {
                                            $like_count++;
                                           }
                                           
                                           if($like->liked==0)
                                              {
                                                $dislike_count++;
                                               }
                                               if(Auth::check())
                                               {
                                                    if($like->liked==1 && $like->user_id == Auth::user()->id )
                                                        {
                                                           $like_status="btn-success";

                                                        }
                                               
                                               
                                                    if($like->liked==0 && $like->user_id == Auth::user()->id  )
                                                        {
                                                            $dislike_status="btn-danger";
                                               
                                                         }
                                                 }  
                                           
                                     
                                     @endphp
                                      
                                         
                                                                                                                                                               
                                     @endforeach
                                         
                                          
                                     
                                     <span class=''>
                                       <button class=" mt-2 btn    {{$like_status}}">  like{{ $like_count}}   </button>
                                       <button class="mt-2 btn {{$dislike_status}}"> dislike{{ $dislike_count}} </button> 
                                     </span>
                                         
                                      
                                    </div>
			         
                                           
                                   
                                                  
                                                  
                                            
                                    
                                     
				    </div>
                                    <div class='col-md-4 title-post'>
                                        <h5>{{$post->title}} </h5>
                    
                                       </div>
                
                       
                                    
                               
                      @endforeach
                      <div class='bridge'></div>		
	      </div>
            
            
            <button class=' btn btn-info'><a href='addblog'> اضف تدوينة</a></button>
		 <!--=========== posts======================================-->
	 

 <!--services-->
    

		

<!-- contact -->
	 <section class="wedo" id="contact">
			<h3 class="w3_head mb-5">Contact </h3>
		  
		   <div class="contact_grid_right mt-5 mx-auto text-center">
				<form action="#" method="post">
					<div class="row contact_top">
						<div class="col-sm-6">
							<input type="text" name="Name" placeholder="Name" required="">
						</div>
						<div class="col-sm-6">
							<input type="email" name="Email" placeholder="Email" required="">
						</div>
					</div>	
						<input type="text" name="Name" placeholder="Name" required="">
						<textarea name="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
						<input type="submit" value="Send Message">
				</form>
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
				<p>© 2018 Polaroid. All rights reserved | Design by
					<a href="http://w3layouts.com"> W3layouts.</a>
				</p>
			</div>
	</section>




@stop

 
