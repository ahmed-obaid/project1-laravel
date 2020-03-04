
<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Polaroid Photography Category Bootstrap Responsive website Template | Home :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Polaroid Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
         document.getElementById('showcat').submit();
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="../resources/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="../css/app.css" type="text/css" rel="stylesheet" media="all">
    <link href="../css/backend.css" type="text/css" rel="stylesheet" media="all"> 
    <!-- font-awesome icons -->
    <link href="../css/fontawesome-all.min.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet">
    <!-- //online-fonts -->

</head>
<body>
    <div class="sidenav">
		<div class="row side_top">
		<div class="col-4 side_top_left">
                     @if(Auth::check())
                           @if(Auth::user()->hasrole('admin')) 
                              
                                                                                                  
                             <h6 class="namelogin">    <a href="../admin">admin</a> </h6>
                               
                                                                                                                                                                         
                           
                           @endif
			<img src="../images/t3.jpg" alt="news image" class="img-fluid navimg">
                            <span>
                                   <h3 class="namelogin">اهلا  <a href="profil">{{Auth::user()->name}}</a> </h3>
                               
                               <h3>  <a href="logout">logout</a></h3>
                            </span>                             
                                                   
                          @elseif(!Auth::check())
                         <h3>
                             <p>
                                 
                                <a href="register"> register</a>
                                 
                                <a href="login"> login</a>
                            </p>
                          @endif
                        </h3>
                      
                      
                      
                      
                </div>
                    
		<div class="col-8 side_top_right">
			
			 
		</div>
		</div>
       <header>
			<div class="container-fluid px-md-5 ">
				<nav class="mnu mx-auto">
                    <label for="drop" class="toggle">Menu</label>
                    <input type="checkbox" id="drop">
						<ul class="menu">
							<li class="active"><a href="../post" class="scroll">Home</a></li>
							 <li class="mt-sm-3"><a href="../about"  >من انا</a></li>
							<li class="mt-sm-3"><a href="../category" class="scroll">الاقسام</a></li>
							<li class="mt-sm-3"><a href="#services" class="scroll">Services</a></li>
							<li class="mt-sm-3"><a href="#contact" class="scroll">Contact</a></li>
                        </ul>
				</nav>
			</div>
		</header>
    </div>
    <div class="main" id="home">

 
   
       
<section class="slide-wrapper post" id="about">
    <div ><span  class="pull-right" > <strong>القسم:</strong>{{ $post_id->category->name}}</div></span>
     <div class="row">
       <div class="col-md-4">
	  <img src="../images/t1.jpg" class="img-fluid" alt="">
       </div>
       <div class="col-md-8">
           
           <h2 > {{$post_id->title}}</h2>
	     <p class="iner mt-5">
       
            
              {{$post_id->body}}
            </p>
       </div>
    </div>
</section>

 
<section class="slide-wrapper post" id="about">
	 <h2 > التعليقات</h2>
     <div class="row">
        @foreach($post_id->comment as $one) 
        <div class="bridge"></div>
       <div class="col-md-4">
	   <img src="../images/t1.jpg" class="img-fluid" alt="">
       </div>
       <div class="col-md-8">
           
          
	                                                          
                       <div class="iner mt-5">
                    
                           {{$one->body}}
                  
                  
                         </div>
               
          
         
              
            
       </div>
        
        @endforeach 
    </div>
</section>


          @if($stop_comment==1)
                  
               <section class="wedo post" id="contact">
                     <h5> اضف تعليق </h5>
                   <div class="contact_grid_right mt-5 mx-auto text-center">
                      <form action="../post/addcomment/{{$post_id->id}}" method="post">
                             {{csrf_field()}}
                           <div class=" contact_top">

                                <input type="text" name="title" placeholder="title" required="required">



                    
                                    <input type="text" name="name" placeholder="name" required="required">
                                   

                             <textarea name="body"  required="required"  placeholder=" write here... "  > </textarea>
                                   <input type="submit" value="save">
                               </div>
                       </form>
                  
                     
               </section>
            
        </div>
                 @else
            <h3 class="text-center"> comments are closed</h3>  
               
             @endif
</body>
</html> 

 
 




 