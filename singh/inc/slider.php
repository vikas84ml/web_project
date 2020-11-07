<!------Start Header------>
<header class="back-image">

	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
	  <div class="carousel-inner">

	  	<?php 

	  	$sql="select * from slider";

	  	$result=$con->query($sql);

	  	if($result->num_rows>0){

		  	while($row=$result->fetch_assoc()){

		  		$s_img1=$row['s_img1'];
		  		$s_img2=$row['s_img2'];
		  		$s_img3=$row['s_img3'];

		  		$s_heading=$row['s_heading'];
		  		$s_slog=$row['s_slog'];

		  		echo '

				  	<div class="carousel-item active">
				      <img class="d-block" src="admin/slider_img/'.$s_img1.'" alt="First slide">
				    </div>
				    <div class="carousel-item">
				      <img class="d-block" src="admin/slider_img/'.$s_img2.'" alt="Second slide">
				    </div>
				    <div class="carousel-item">
				      <img class="d-block" src="admin/slider_img/'.$s_img3.'" alt="Third slide">
				    </div>
						<div class="myclass mainHeading text-center">
							<h2 class="text-uppercase text-light mt-5 mb-4 font-weight-bold animated fadeInRightBig">
							  '.$s_heading.'
							</h2>
							<p class="font-italic  mt-3 text-light singh-slog font-weight-bold mb-3 animated fadeInLeftBig">
							'.$s_slog.'
							</p>
							<a href="contact.php" type="button" class="btn  btn-main btn-lg mt-3 ">Contact Us</a>
							<a href="about.php" type="button" class="btn  btn-main btn-lg mt-3 ml-2">About Us</a>
						</div>
		  		';
		  	}
	  	}
	  	?>
	  </div>
	  	<a class="carousel-control-prev" href="#carouselExampleControls" role="button" 
	  	data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
</header>
<!------End Header------>