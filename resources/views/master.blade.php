 

<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>ahmed</title>
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
    <link href="css/app.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/backend.css" type="text/css" rel="stylesheet" media="all"> 
    <!-- font-awesome icons -->
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
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
                           <img src="images/t3.jpg" alt="news image" class="img-fluid navimg">
			
                            @if(Auth::user()->hasrole('admin')) 
                              
                           @if(Auth::user()->hasrole('admin')) 
                           <a href="admin"> <h3 > admin</h3></a>                                
                                                                                                                                                          
                           @endif

                                                                                                                                                                         
                           
                           @endif
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
			<li class="active"><a href="post" class="scroll">Home</a></li>
			 <li class="mt-sm-3"><a href="about"  >من انا</a></li>
			<li class="mt-sm-3"><a href="category" class="scroll">الاقسام</a></li>
			<li class="mt-sm-3"><a href="#services" class="scroll">Services</a></li>
			<li class="mt-sm-3"><a href="#contact" class="scroll">Contact</a></li>
                        </ul>
		  </nav>
		</div>
   <form action="search" method="POST" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="text"  name="q"
            placeholder="write here.."> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                <span class="ml-2 glyphicon glyphicon-search">search</span>
            </button>
        </span>
    </div>
</form>
  </header>
    </div>
    <div class="main" id="home">
         
       @yield('content')
    </div>

</body>
</html> 