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
        <li><a href="#">Contact</a></li>
        <li><a href="#myModal-signUp" data-toggle="modal">Join Us</a></li>
        <li><a
            href="#myModal-signIn" data-toggle="modal">Login</a></li>

    </ul>
</header>


<div class="container contact-form">

            
                <form action="store1" method="post" enctype="multipart/form-data">
                <h3> Send Us a Message</h3>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="name"  value="{{old('name')}}" class="form-control" id="name" placeholder="Your Name *" value="" />

                        </div>
                        <div id="error"></div>
                        <div class="form-group">
                            <input  type="email" name="email" value="{{old('email')}}" class="form-control" id="email" placeholder="Your Email *" value="" required />
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                        </div>
                        
                        <div id="error"></div>
                        <div class="form-group">
                            <input type="text" name="phone" value="{{old('phone')}}" class="form-control" id="phone" placeholder="Your Phone Number *" value="" required />
                        </div>
                
                        <div id="error"></div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" id="submit">Send</button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="message" value="{{old('message')}}" class="form-control" id="message" placeholder="Your Message *" style="width: 100%; height: 150px;" required></textarea>
                        </div>
                    </div>
                </div>
            </form>
</div>
<script src="js/jquery.js"></script>
<script src="jquery.validate.js"></script>


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