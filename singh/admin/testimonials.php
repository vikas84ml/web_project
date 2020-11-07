<?php 
define('TITLE','Testimonials');
define('PAGE','testimonials');
include('inc/header.php');
include('../inc/db.php');

session_start();
if(isset($_SESSION['is_adminlogin'])){

	$email=$_SESSION['email'];
}else{
	echo "<script>window.open('login.php','_self')</script>";
}
?>

<div class="col-sm-6 mt-3 mx-5 jumbotron mb-4">
	<h3 class="text-center mt-3">Add New Testimonials</h3>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label for="cust_img">Image</label>
			<input type="file" name="cust_img" id="cust_img" class="form-control" required>
		</div>
		<div class="form-group">
			<label for="cust_name">Name</label>
			<input type="text" name="cust_name" id="cust_name" class="form-control" required>
		</div>
		<div class="form-group">
			<label for="cust_desc">Description</label>
			<input type="text" name="cust_desc" id="cust_desc" class="form-control" required>
		</div>
		<input name="submit" value="Submit" type="submit" class="btn btn-success mt-3 mb-3">
		 <a name="submit" href="testimonials_delete.php" type="submit" class="btn btn-danger mt-3 mb-3
		 float-right">Delete</a>
	</form>
</div>


<?php 

if(isset($_POST['submit'])){

	$cust_img=$_FILES['cust_img']['name'];
	$temp_name=$_FILES['cust_img']['tmp_name'];

	move_uploaded_file($temp_name, "cust_img/$cust_img");

	$cust_name=$_POST['cust_name'];
	$cust_desc=$_POST['cust_desc'];

	$insert="insert into testimonials(cust_img,cust_name,cust_desc) values('$cust_img',
	'$cust_name','$cust_desc')";

	if($con->query($insert)==TRUE){

		echo "<script>alert('Inserted Successfully')</script>";
	}else{

		echo "Unable to Insert";
	}
}


?>


<?php include('inc/footer.php');?>