<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>IntellectLand</title>
	<!-- jQuery===modal-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- font-awesome-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!--fadeshow-->
	<link rel="stylesheet" href="css/jquery.fadeshow-0.1.1.min.css" />
	<!--custom css-->	
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<link rel="shortcut icon" href="favicon.png?v=1.1" type="image/png"> 
    <link rel="icon" type="image/ico" href="img/logo.png">
</head>
<body>
	<header>
	<div class="logo">
		<a href="#" class="logo-link">
		<img src="img/logo.png">
		<h1 class="logo-text">IntellectLand</h1>
	</a>
	</div>
	<i class="fa fa-bars menu-toggle"></i>
	<ul class="nav">
		<li><a href="#">About</a></li>
		<li><a href="contact.blade.php">Contact</a></li>
		<li><a href="#myModal-signUp" data-toggle="modal">Join Us</a></li>
		<li><a
			href="#myModal-signIn" data-toggle="modal">Login</a></li>

	</ul>
</header>

	<div class="background"></div>
	
	<div class="text">
		<h1 id="h1">Our Africa</h1>
		<h2 id="h2">Our continent Africa, we love you!</h2>
		
	</div>
	
	<script src="js/jquery-1.11.2.min.js" type="text/javascript"></script>
	<script src="js/jquery.fadeshow-0.1.2.min.js" type="text/javascript"></script>
	<!-- Custom Script-->
<script src="js/script.js"></script>

<!-- Modal HTML for SIGN IN -->
<div id="myModal-signIn" class="modal fade">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			
				
				  	  <form action="login1" method="post" enctype="multipart/form-data">
				   <div class="modal-header">
				   <span><img src="img/logo.png"> 
				   <label>IntellectLand - Log In</label>
				   </span>	
				
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				   </div>
				<div class="modal-body">				
					<div class="inner-addon-login left-addon">
    <a href="#"><i class="fa fa-envelope"></i></a>
    <input type="email" name="email"  value="{{old('email')}}"class="form-control-login" placeholder="Email address" autocomplete="off">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
</div>
	<div class="inner-addon-login left-addon">
    <a href="#"><i class="fa fa-lock"></i></a>
    <input type="password" name="password"  value="{{old('password')}}" class="form-control-login" placeholder="Password" autocomplete="off">
</div>
<button id="login">Login</button>
					<div class="forgot">
						<label>or</label> <a href="home.html">Forgot password</a>
					</div>
					
					
					<div id="blankSpace"></div>
					<div class="no-account"><label>Don't have an account? <a href="myModal-signUp"  data-toggle="modal">Sign up</a></label></div>
				</div>
			</form>
		</div>
	</div>
</div> 
<!-- Modal HTML for SIGN UP -->
<div id="myModal-signUp" class="modal fade">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
		@@@@@@@@@@@@
			 <form action="Register1" method="post" enctype="multipart/form-data">

				<div class="modal-header">
				<span><img src="img/logo.png"><label>IntellectLand - Join Us</span></label></span>

					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
<div class="modal-body">
	<div class="inner-addon-login left-addon">
    <a href="#"><i class="fa fa-user"></i></a>
    <input type="text" name="name"  value="{{old('name')}}" class="form-control-login" placeholder="Full name">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
</div>				
	<div class="inner-addon-login left-addon">
    <a href="#"><i class="fa fa-envelope"></i></a>
    <input type="email" name="email"  value="{{old('email')}}"class="form-control-login" placeholder="Email address">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
</div>
	<div class="inner-addon-login left-addon">
    <a href="#"><i class="fa fa-lock"></i></a>
    <input type="password" name="password"  value="{{old('password')}}" class="form-control-login" id="pass" placeholder="Password">
</div>
<div class="inner-addon-login left-addon">
    <a href="#"><i class="fa fa-lock"></i></a>
    <input type="password" name="confpassword"  value="{{old('password')}}"class="form-control-login" id="c-pass" placeholder="Confirm Password">
</div>
<div id="blankSpace"></div>

	<div class="check">
	<input type="checkbox"> I'm in for emails with exciting discounts and personalized recommendations
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	</div>
	<button id="login">Sign Up</button>
	<div id="blankSpace"></div>
	<small>By signing up you agree to our <a href="">terms of use</a> and <a href="">Privacy Policy</a></small>
	<div id="blankSpace"></div>

	<hr>				
	<label id="center">Already have an accounts? <a href="#myModal-signIn" data-toggle="modal">Log In</a></label>
				

				</div>
			</form>
		</div>
	</div>
</div>
<div class="card">
	<h1>Why IntellectLand</h1>
<div id="card">
	<span>
	<p>
	                  Video provides a powerful way to help you prove your point. When you click Online Video, you can paste in the embed code for the video you want to add. You can also type a keyword to search online for the video that best fits your document. To make your document look professionally produced, Word provides header, footer, cover page, and text box designs that complement each other. For example, you can add a matching cover page, header, and sidebar.                       
        </p></span>
        <span><img src="img/logo.png"></span>
</div>
</div>
	<div class="container">
		<h2>Recent Post</h2>
		<div class="row">
			<span><img src="img/passport.jpg"></span>
			<span id="post">
				<p class="addReadMore showlesscontent">
                  Video provides a powerful way to help you prove your point. When you click Online Video, you can paste in the embed code for the video you want to add. You can also type a keyword to search online for the video that best fits your document. To make your document look professionally produced, Word provides header, footer, cover page, and text box designs that complement each other. For example, you can add a matching cover page, header, and sidebar.                       
        </p>
    </span>
		</div>
		<hr>
		<div class="row">
			<span><img src="img/passport.jpg"></span>
			<span id="post">
				<p class="addReadMore showlesscontent">
                  Video provides a powerful way to help you prove your point. When you click Online Video, you can paste in the embed code for the video you want to add. You can also type a keyword to search online for the video that best fits your document. To make your document look professionally produced, Word provides header, footer, cover page, and text box designs that complement each other. For example, you can add a matching cover page, header, and sidebar.                       
        </p>
    </span>
		</div>
		<hr>
		<div class="row">
			<span><img src="img/passport.jpg"></span>
			<span id="post"><p class="addReadMore showlesscontent">
                  Video provides a powerful way to help you prove your point. When you click Online Video, you can paste in the embed code for the video you want to add. You can also type a keyword to search online for the video that best fits your document. To make your document look professionally produced, Word provides header, footer, cover page, and text box designs that complement each other. For example, you can add a matching cover page, header, and sidebar.                       
        </p>
    </span>
		</div>
	</div>
	<div class="footer">
		<div class="title">
			<p>IntellectLand</p>
		</div>
		<div>
		<ul class="nav" id="nav">
			<li id="footer-nav"><a href="#">Home</a></li>
			<li id="footer-nav"><a href="#">About</a></li>
			<li id="footer-nav"><a href="#">Contact</a></li>
			<li id="footer-nav"><a href="#myModal-signUp" data-toggle="modal">Join</a></li>
			<li id="footer-nav"><a
			href="#myModal-signIn" data-toggle="modal">Login
		</a>
		</ul>
		</div>
		<div class="search">
			<input type="text" id="search" placeholder="search anything.."><br>
			<button class="btn btn-secondary">Search</button>
		</div>
		<div class="message-area">
			<textarea id="message" placeholder="Enter your message here..."></textarea><br>
			<button class="btn btn-primary">Send</button><br>
			<span><label>or sign in with:</label></span>
			<i class="fa fa-facebook"></i>
			<i class="fa fa-twitter"></i>
			<i class="fa fa-youtube"></i>
		</div>
	</div>
	<footer>
		<span>&copy 2020 IntellectLand</span>
		
	</footer>
</body>
</html>