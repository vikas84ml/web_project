<?php 
define('TITLE','Customer');
define('PAGE','customer');
include('inc/header.php');
include('../inc/db.php');

session_start();
if(isset($_SESSION['is_adminlogin'])){

	$email=$_SESSION['email'];
}else{
	echo "<script>window.open('login.php','_self')</script>";
}
?>

<div class="col-sm-6 mt-5 mx-5 jumbotron">
	<h3 class="text-center">Customer Help</h3>
	<form action="" method="post">
		<div class="form-group">
			<label for="location">Location </label>
			<input type="text" name="location" id="location" class="form-control" required>
		</div>
		<div class="form-group">
			<label for="mobile">Mobile No.</label>
			<input type="tel" class="form-control" name="mobile" id="mobile" required>
		</div>
		<div class="form-group">
			<label for="email">Email</label>
			<input type="email" name="email" id="email" class="form-control" required>
		</div>
		<?php if(isset($msg)){ echo $msg;} ?>

		<div class="text-center">
			<button type="submit" class="btn btn-success" name="submit">Submit</button>
			<a type="submit" class="btn btn-danger" href="customer_support_del.php" name="submit">Delete</a>
		</div>
	</form>
</div>

<?php 

if(isset($_POST['submit'])){

	$location=$_POST['location'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];

	$sql="insert into customer_support(location,mobile,email) values('$location','$mobile','$email')";

	if($con->query($sql)==TRUE){

		echo "<script>alert('Inserted Successfully')</script>";
	}else{

		$msg='<p class="text-center text-danger">Unable to Add</p>';
	}
}


?>

<?php include('inc/footer.php');?>