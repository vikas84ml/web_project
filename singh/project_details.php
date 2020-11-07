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
							    <h1 class="text-center text-light" style="padding-top: 150px;">Project Details</h1>    
							  </div>
							</div>
						</div>
			  		';
			  	}
			}
		 ?>
</div>
<!----End Banner------>


<!----Start Project Details------>
<section class="mt-4 mb-4">
	<div class="container">

		<?php 

			$id=$_GET['p_id'];

			$sql="select * from project where p_id=$id";	

			$result=$con->query($sql);

			if($result->num_rows>0){

				while($row=$result->fetch_assoc()){

					$p_img=$row['p_img'];
					$p_desc=$row['p_desc'];
					$p_name=$row['p_name'];
					$p_size=$row['p_size'];
					$p_add=$row['p_add'];

					echo '

						<div class="row">
							<div class="col-sm-6">
								<div class="pro_details_img">
									<div class="img-fluid mt-4" alt="Responsive image">
										<img src="admin/project_img/'.$p_img.'" class="w-100">
									</div>
								</div>
							</div>
							<div class="col-sm-6 text-center">
								<h2 class="text-center text-uppercase mt-4 mb-2">'.$p_name.'</h2>
								<h5 class="mt-4"><strong>Area : </strong>'.$p_size.'</h5>
								<h5 class="mt-4"><strong>Address : </strong>'.$p_add.'</h5>
								<p class="text-center mt-4 font-weight-bold">'.$p_desc.'</p>
								<div class="text-center">
									<a href="contact.php" class="btn text-uppercase mt-5 mb-3" id="ser_btn" style="border-radius: 0px;">Contact Us</a>
								</div>
							</div>
						</div>
					';
				}
			}
			
		?>
	</div>

</section>


<!----End Project Details------>





<!------Start Footer------>

<?php include('inc/footer.php') ?>

<!------End Footer Footer------>