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
			<h5 class="animated slideInDown" style="animation-delay: 1s">About this learning</h5>
			<p class="animated fadeInUp" style="animation-delay: 2s">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere debitis placeat neque eos consectetur nihil asperiores explicabo aliquam exercitationem quia assumenda nulla dolor, obcaecati ut? Eius numquam adipisci animi vero!
			</p>			
		</div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/img5.png" alt="Third slide">
	  <div class="carousel-caption d-none d-md-block" alt="...">
			<h5>Progress dashboard</h5>			
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
