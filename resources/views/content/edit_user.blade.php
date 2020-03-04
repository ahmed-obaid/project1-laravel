 
 


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

 

           
<div class="container ">
        <h1 class='text-center'>Edit member  <h1> 
           <form class="form-horizontal" action="../update_user/{{$user->id}}" method="POST">
                     {{csrf_field()}}       
                    <!-- username-->
                    <div class="form-group" >
                        <label class="col-sm-5  control-label">username </label>
                        <div class="col-sm-10 col-md-6" >
                            <input type="text" name="username" class="form-control" placeholder="{{$user->name}}" required="required"  /> 
                        </div>    
                    </div>
                     <!-- username-->
                      <!-- password -->
                    <div class="form-group">
                        <label class="col-sm-5 control-label">password </label>
                        <div class="col-sm-10 col-md-6" >
                            <input type="hidden" name="oldpassword"   />
                            <input type="password" name="newpassword" class="form-control" autocomplete="new-password"  />  
                        </div>    
                    </div>
                     <!-- password e-->
                      <!-- email-->
                    <div class="form-group">
                        <label class="col-sm-5 control-label">email </label>
                        <div class="col-sm-10 col-md-6" >
                            <input type="email" name="email" class="form-control" required="required" placeholder="{{$user->email}}" />  
                        </div>    
                    </div>
                     <!-- email-->
                                        
                      <!--  submit-->
                    <div class="form-group">
                        
                        <div class="col-sm-offset-5 col-sm-8" >
                            <input type="submit" value="save" class="btn btn-primary btn-lg"/>  
                        </div>    
                    </div>
                     
                </form>
                
                
                
            </div>
    </div>
   </body>
 </html>