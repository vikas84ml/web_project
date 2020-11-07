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
							    <h1 class="text-center text-light" style="padding-top: 150px;">Services</h1>    
							  </div>
							</div>
						</div>
			  		';
			  	}
			}
		 ?>
</div>
<!----End Banner------>


<!------Start Services------>

<div class="container text-center border-bottom mb-5" id="services">
	<h2 class="text-center mt-5">Our Services</h2>
	<span class="title-border"></span>
	<div class="row mt-5">

<?php

$sql="select * from services";
$result=$con->query($sql);

if($result->num_rows>0){

	while($row=$result->fetch_assoc()){

	echo '

		<div class="col-sm-4 mb-2 mt-2 p-3 service-info">
			<div id="service-info" class="shadow pt-4">
				'.$row['icon'].'
				<h4 class="mt-2">'.$row['heading'].'</h4>
				<p class="text-title text-center  pl-3 pr-3 pb-3">'.$row['descr'].'</p>
			</div>
		</div>

	';
	}
}


?>

	</div>
</div>

<!------End Services------>

<!------Start Footer------>

<?php include('inc/footer.php') ?>

<!------End Footer Footer------>