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
              
    <form action="regular1" method="post" enctype="multipart/form-data">
    <div class="modal-header">
    <span>
    <label>- Check Your Next Period</label>
                   </span>  
                
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                   </div>
                <div class="modal-body">                
                    <div class="inner-addon-login left-addon">
    <a href="#"><i class="fa fa-envelope"></i></a>
    <input type="text" name="period"  value="{{old('period')}}"class="form-control-login" placeholder="The length of your period between 4-7 days" autocomplete="off">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
</div>
    <div class="inner-addon-login left-addon">
    <a href="#"><i class="fa fa-lock"></i></a>
    <input type="text" name="length"  value="{{old('length')}}" class="form-control-login" placeholder="The length of your menstrual cycle between 23-35 days" autocomplete="off">
</div>
   <div class="inner-addon-login left-addon">
    <a href="#"><i class="fa fa-lock"></i></a>
    <input type="date" name="startdate"  value="{{old('startdate')}}" class="form-control-login" placeholder="The start date of your last period" autocomplete="off">
</div>
<button id="login">Check</button>
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