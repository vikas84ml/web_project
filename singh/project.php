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
							    <h1 class="text-center text-light" style="padding-top: 150px;">Projects</h1>    
							  </div>
							</div>
						</div>
			  		';
			  	}
			}
		 ?>
</div>
<!----End Banner------>

<!------Start Project------>

<div class="jumbotron project mt-5" id="projects">
	<div class="container">
		<h2 class="text-center text-light our-project">Our Projects</h2>
		<span class="title-border "></span>
		<div class="row project mt-5 mb-3">

		<?php 

		$sql="select * from project";
		$result=$con->query($sql);

		while($row=$result->fetch_array()){

			$p_id=$row['p_id'];
			$p_name=$row['p_name'];
			$p_img=$row['p_img'];

			echo "
					<div class='col-lg-3 col-sm-6'>
					<input type='hidden' name='id' value=$p_id>

						<div class='image_container'>
							<a style='text-decoration:none' href='project_details.php?p_id=$p_id' 
							class='p_name mt-3'>
								<img src='admin/project_img/$p_img'  class='pro_image' 
								style='height: 230px;'>
							</a>
						    <div class='overlay'>
						    	<a href='project_details.php?p_id=$p_id' class='text-center text-uppercase mt-5 img-text btn'>Know More</a>
						    </div>
						</div>
							<a style='text-decoration:none' href='project_details.php?p_id=$p_id' 
								class='p_name mt-3'>
								<h3 class='text-light text-center mt-4 text-uppercase'>$p_name</h3>
							</a>
						</div>
					";
				}
			?>
		</div>
	</div>
	
</div>

<!------End project------>



<!------Start Footer------>

<?php include('inc/footer.php') ?>

<!------End Footer Footer------>