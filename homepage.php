<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head> <title> Impressions </title>
<link rel="icon" href="Logo-black.png" type="image/png">
 <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="bootstrap.min.css">
<link rel="stylesheet" href="w3.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
.mySlides {display:none;}
body {margin:0;background-image: url("Plain-Black-Facebook-Timeline-Cover.jpg")}
.error {color: #FF0000;}
h2{color: white}
.searchBar {
    width: 130px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('search.png');
    background-position: 10px 10px;
    background-repeat: no-repeat;
    padding: 12px 12px 12px 40px;
    /*margin-top:6px;*/
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
    margin-left: 40px;
}

.searchBar:focus {
    width: 100%;
  }
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;
      margin: auto;
  }


 
</style>
</head>

<body>

<nav class="navbar navbar-inverse" >
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"> </span>
        <span class="icon-bar"> </span>
        <span class="icon-bar"> </span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="homepage.php">Home</a></li>
        <li><a href="aboutus.php">About Us</a></li>
        <li><a href="contactUs.php">Contact Us</a></li>
        <li><a href="FAQs.php">FAQ</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Category <span class="caret"> </span> </a>
          <ul class="dropdown-menu">
            <li><p style="margin-left: 40px;"><b>Women</b></p>
            	<ul style="list-style-type: none;margin-top: 5px" class="nav"><li ><a href="#"> Blouse</a></li>
            		<li><a href="#"> Dresses</a></li>
            		<li><a href="#"> Trousers</a></li>
            	</ul>
            </li>
            <li>
            	<p style="margin-left: 50px;"><b>Men</b></p>
            	<ul style="list-style-type: none;margin-top: 5px" class="nav"><li><a href="#"> T-Shirts</a></li>
            		<li><a href="#"> Shirts</a></li>
            		<li><a href="#"> Trousers</a></li>
            	</ul>
            </li>
          </ul>
        </li>
        <li><input type="text" placeholder="Search" class="searchBar"></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="reg.php"><span class="fa fa-user"> </span> Sign Up</a></li>
        <li><a href="login.php"><span class="fa fa-sign-in"> </span> Login</a></li>
        <li><a href="login.php"><span class="fa fa-shopping-cart"> </span> Cart</a></li>
        <li style="color: white;margin-top: 13px"> 
         	<?php
         	if(isset( $_SESSION['username']))
        	{
        	?>
        		<?php echo "<img src=led-online.png /> " ?>
				<?php echo  $_SESSION['username'] ?>
          		<?php
			} 

         	?>
        	
        	
        </li>
         

      </ul>
    </div>
  </div>
 
   
</nav>

<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators" style="padding-left:10px">
      <li data-target="#myCarousel" data-slide-to="0" class="active"> </li>
      <li data-target="#myCarousel" data-slide-to="1"> </li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="Logo-black.png" style="width:1283px;height:900px">
      </div>

      <div class="item">
        <img src="Edita Vilkeviciute for Massimo Dutti Fall Winter 2010.11 01.jpg" style="width:1283px;height:900px">
      </div>
    
      <div class="item">
        <img src="theman.jpg" style="width:1283px;height:900px">
      </div>

      <div class="item">
        <img src="Massimo Dutti Fall Winter 2010.11 01.jpg" style="width:1283px;height:900px">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="fa fa-chevron-left" aria-hidden="true" style="padding-top:400px"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="fa fa-chevron-right" aria-hidden="true" style="padding-top:400px"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<div align="center">
      <footer>
          <div>
          <h2> Connect With Impressions</h2>
            <div align="center">
                    <a href="https://www.facebook.com/chamali.utthara" style="color:#fff">
                    <span class="fa fa-facebook" style="padding-right:20px;background:#3b5998;border-radius:60px;width:40px;border-radius:10px;font-size:25px;text-align:right;margin-right:10px;padding-top:15px;" ></span></a>

                    <a href="https://twitter.com/chamali.utthara" style="color:#fff">
                    <span class="fa fa-twitter" style="padding-right:20px;background:#00aced;border-radius:10px;text-align:right;margin-right:10px;padding-top:15px;font-size:25px;width:40px"></span></a>

                    <a href="#" style="color:#fff">
                    <span class="fa fa-instagram" style="padding-right:20px;border-radius:10px;text-align:right;margin-right:10px;padding-top:15px;font-size:25px;width:40px;background:#2C6A93"> </span></a>
                    <a href="#" style="color:#fff"> <span class="fa fa-google-plus" style="background:#dd4b39;padding-right:20px;border-radius:10px;text-align:right;margin-right:10px;padding-top:15px;font-size:25px;width:40px"> </span> </a> 
                        
            </div>
               
                
            
          </div>
      </footer>
</div>

</body>
</html>

