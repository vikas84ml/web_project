<?php 
define('TITLE','Services');
define('PAGE','services');
include('inc/header.php');
include('../inc/db.php');

session_start();
if(isset($_SESSION['is_adminlogin'])){

	$email=$_SESSION['email'];
}else{
	echo "<script>window.open('login.php','_self')</script>";
}

 if(isset($_POST['req_submit'])){

 	if(($_POST['icon'] == "") || ($_POST['heading'] == "") || ($_POST['description'] == "")){

		$msg='<p class="text-center text-danger">All Fields are Required !</p>';

	}else{

	 	$icon_code=$_POST['icon'];
	 	$service_heading=$_POST['heading'];
	 	$service_description=$_POST['description'];

	 	$insert_query="insert into services(icon,heading,descr) 
	 	values('$icon_code','$service_heading','$service_description')";

	 	if($con->query($insert_query)==TRUE){

	 		echo "<script>alert('Added Successfully')</script>";
	 	}else{

	 		$msg='<p class="text-center text-danger">Unable to Add</p>';
	 	}	
	}

 }



?>


<div class="col-sm-6 mt-5 mx-5 jumbotron">
	<h3 class="text-center">Add New Services</h3>
	<form action="" method="post">
		<div class="form-group">
			<label for="icon">Service Icon Code</label>
			<input type="text" name="icon" id="icon" class="form-control">
		</div>
		<div class="form-group">
			<label for="heading">Service Heading</label>
			<input type="text" name="heading" id="heading" class="form-control">
		</div>
		<div class="form-group">
			<label for="description">Service Description</label>
			<input type="text" name="description" id="description" class="form-control">
		</div>
		<?php if(isset($msg)){ echo $msg;} ?>

		<div class="text-center">
			<button type="submit" class="btn btn-success" name="req_submit">Submit</button>
			<a href="edit_service.php" class="btn btn-success ml-3">Edit</a>
		</div>
	</form>
</div>

<?php include('inc/footer.php');?>