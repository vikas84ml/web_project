<?php include('inc/db.php');?>


<!------End Strat Navbar------>

<?php include('inc/header.php'); ?>

<!------End Strat Navbar------>



<!------Start Header------>
<?php include('inc/slider.php'); ?>
<!------End Header------>






<!------Start Services------>

<div class="container text-center border-bottom" id="services">
	<h2 class="text-center">Our Services</h2>
	<span class="title-border"></span>
	<div class="row mt-4">

<?php

$sql="select * from services limit 6";
$result=$con->query($sql);

if($result->num_rows>0){

	while($row=$result->fetch_assoc()){

	echo '

		<div class="col-sm-4 mb-2 mt-2 p-3 service-info">
			<div id="service-info" class="shadow pt-4">
				'.$row['icon'].'
				<h4 class="mt-2">'.$row['heading'].'</h4>
				<p class="text-title text-center pl-3 pr-3 pb-3">'.$row['descr'].'</p>
			</div>
		</div>

	';
	}
}


?>
	</div>
	<a href="services.php" class="btn text-uppercase mt-5 mb-3" id="ser_btn" 
	style="border-radius: 0px;">View More Services</a>
</div>

<!------End Services------>


<!------Start Project------>

<div class="jumbotron project mt-5" id="projects">
	<div class="container">
		<h2 class="text-center text-light our-project">Our Projects</h2>
		<span class="title-border "></span>
		<div class="row project mt-5 mb-3">

		<?php 

		$sql="select * from project limit 3";
		$result=$con->query($sql);

		while($row=$result->fetch_array()){

			$p_id=$row['p_id'];
			$p_name=$row['p_name'];
			$p_img=$row['p_img'];

			echo "
				
				<div class='col-lg-3 col-sm-6'>
				<input type='hidden' name='id' value=$p_id>

					<div class='image_container mr-3'>
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
		<div class="text-center">
			<a href="project.php" class="btn text-uppercase mt-2 mb-5" id="ser_btn"
				style="border-radius: 0px;">View More Projects
			</a>
		</div>
	</div>
	
</div>

<!------End project------>

<!------StartContent------>

<?php include('content.php'); ?>

<!------End Content------>


<!------Start testimonials------>

<?php include('testimonials.php'); ?>

<!------End testimonials------>



<!------Start Footer------>

<?php include('inc/footer.php') ?>

<!------End Footer Footer------>