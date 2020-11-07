<?php 
define('TITLE','About');
define('PAGE','about');
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
	<h3 class="text-center mt-3">About Us</h3>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label for="head">About Comapny</label>
			<textarea name="head" cols="19" rows="6" class="form-control" id="head"></textarea>
		</div>
		<div class="form-group">
			<label for="img"> Image</label>
			<input type="file" name="img" id="img" class="form-control" required>
		</div>
		  <input name="submit" value="Submit" type="submit" class="btn btn-success mt-3 mb-3">
		  <a name="submit" href="about_delete.php" type="submit" class="btn btn-danger mt-3 mb-3
		 float-right">Delete</a>
	</form>
</div>

<?php 

if(isset($_POST['submit'])){

	$image=$_FILES['img']['name'];
	$temp_name=$_FILES['img']['tmp_name'];

	move_uploaded_file($temp_name, "slider_img/$image");

	$head=$_POST['head'];

	$sql="insert into about(heading,image) values('$head','$image')";

	if($con->query($sql)==TRUE){

		echo "<script>alert('Data Inserted Successfully')</script>";
	}else{

		echo "Unable to Insert";
	}
}

?>

<?php include('inc/footer.php');?>








