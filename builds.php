<?php

session_start();

include 'includes/nav.php';

?>


<html>
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title> Builds Training </title>

	<link rel="stylesheet" type="text/css"
  href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"
  />
  <link rel="stylesheet" type="text/css" href="style.css">
	


</head>
<body>



<!--- SLIDESHOW ---->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/img5.png" alt="First slide">
		<div class="carousel-caption d-none d-md-block" alt="...">
			<h5 class="animated bounceInRight" style="animation-delay: 1s">Welcome <?php echo $_SESSION['username']; ?></h5>			
		</div>
	</div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/img6.png" alt="Second slide">
	  <div class="carousel-caption d-none d-md-block" alt="...">
      <h1>Server Build</h1>
			<h5 class="animated slideInDown" style="animation-delay: 1s">Instructions step by step</h5>
			<p class="animated fadeInUp" style="animation-delay: 2s">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere debitis placeat neque eos consectetur nihil asperiores explicabo aliquam exercitationem quia assumenda nulla dolor, obcaecati ut? Eius numquam adipisci animi vero!
			</p>			
		</div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/img5.png" alt="Third slide">
	  <div class="carousel-caption d-none d-md-block" alt="...">
			<h5>Video</h5>			
			
		</div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>


<!--- END OF SLIDESHOW ---->











<!-- <div class="container1">


	<a class="float-right" href="logout.php"> LOGOUT </a>


	<h1> Welcome <?php echo $_SESSION['username']; ?> </h1>


</div> -->
<script>
$('.carousel'). carousel({ interval: false, });
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>