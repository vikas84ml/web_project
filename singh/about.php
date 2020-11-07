<?php include('inc/db.php');?>

<!------End Strat Navbar------>

<?php include('inc/header.php'); ?>

<!------End Strat Navbar------>


<!----Start Banner------>
<div id="banner">

	  	<?php 

		  	$sql="select * from slider";

		  	$result=$con->query($sql);

		  	if($result->num_rows>0){

			  	while($row=$result->fetch_assoc()){

			  		$s_img1=$row['s_img1'];

			  		echo '

						<div class="img-fluid" style="background-image:linear-gradient(rgba(0,0,0,0.3),
						rgba(0,0,0,0.3)),url(admin/slider_img/'.$s_img1.');">
							<div class="wrapper text-center">
							  <div class="message">
							    <h1 class="text-center text-light" style="padding-top: 150px;">About Us</h1>    
							  </div>
							</div>
						</div>
			  		';
			  	}
			}
		 ?>
</div>
<!----End Banner------>



<div class="jumbotron about" id="about">
	<div class="container">
		<h2 class="text-center about-us text-light mb-4">About Us</h2>
		<span class="title-border"></span>
		<div class="row mt-5">
			<div class="col-lg-6 col-sm-6">

				<?php 

				$sql="select * from about";
				$result=$con->query($sql);

				if($result->num_rows>0){

					while($row=$result->fetch_assoc()){

						$descr=$row['heading'];
						$img=$row['image'];

						echo '
							<h5 class="text-upercase text-left text-light mt-5">'.$descr.'</h5>
							<a href="contact.php" type="button" name="button" class="btn mt-3 text-center text-light about-btn" style="border-radius: 0px;">CONTACT US</a>
						</div>
						<div class="col-lg-6 col-sm-6">
							<div class="img-fluid mt-5" alt="Responsive image">
								<img src="admin/slider_img/'.$img.'" class="w-100">
							</div>
						</div>
						';
					}
				}

				?>
		</div>
	</div>
</div>

<!------Start Footer------>

<?php include('inc/footer.php') ?>

<!------End Footer Footer------>