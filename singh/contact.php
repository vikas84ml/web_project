<?php include('inc/db.php');?>


<!------End Strat Navbar------>

<?php include('inc/header.php');?>

<!------End Strat Navbar------>

<?php

if(isset($_POST['submit'])){

	if(($_POST['name'] == "") || ($_POST['subject'] == "") || ($_POST['email'] == "") 
		|| ($_POST['message'] == "")){

		$msg="<p class='text-center text-danger'>Fill All Fields !</p>";
	}else{

		$name=$_POST['name'];
		$subject=$_POST['subject'];
		$email=$_POST['email'];
		$message=$_POST['message'];

		$mailTo = "gs41320@gmail.com";
		$headers = "FROM: ". $email;
		$txt = "You have recived an Email from". $name.".\n\n".$message;
		mail($mailTo, $subject, $txt,$headers);

		$msg="<script>alert('Message sent Successfully.')</script>";
	}
}

?>

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
							    <h1 class="text-center text-light" style="padding-top: 150px;">Contact Us</h1>    
							  </div>
							</div>
						</div>
			  		';
			  	}
			}
		 ?>
</div>
<!----End Banner------>


<div class="container" id="contact">
	<div class="row">
		<div class="col-sm-3">	
		</div>
		<div class="col-sm-6">
			<form action="" method="post" class="w-100 shadow-lg p-4 mb-5 text-center contact">
				<h2 class=" mt-2 text-center">Contact Us</h2>
				<?php if(isset($msg)) { echo $msg;} ?>
				<input type="text" name="name" class="form-control" placeholder="Name"><br>
				<input type="text" name="subject" class="form-control" placeholder="Subject"><br>
				<input type="email" name="email" class="form-control" placeholder="Email"><br>
				<textarea class="form-control" rows="5" name="message" placeholder="Message">
				</textarea><br>
				<input type="submit" name="submit" value="Send" class="btn btn-lg text-light contact-btn mb-2" style="border-radius: 0px;">
			</form>
		</div>
		<div class="col-sm-3">
			
		</div>
	</div>
</div>

<?php include('inc/footer.php'); ?>