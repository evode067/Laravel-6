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
</head>
<body>
    



    
    
    </div>
    <div style="border: 1px solid black; position: absolute;border-radius: 20px; left: 100px; top: 100px;">
              
    <form action="login1" method="post" enctype="multipart/form-data">
    <div class="modal-header">
    <span>
    <label>- Log In</label>
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
                </div>
            </form>
        </div>
    </div>
</div> 
<!-- Modal HTML for SIGN UP -->
<div id="myModal-signUp" class="modal fade">
    <div class="modal-dialog modal-login">
        <div class="modal-content">
       
    <button id="login">Sign Up</button>
    <div id="blankSpace"></div>
    <small>By signing up you agree to our <a href="">terms of use</a> and <a href="">Privacy Policy</a></small>
    <div id="blankSpace"></div>

    
</body>
</html>