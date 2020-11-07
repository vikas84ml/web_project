<?php 
define('TITLE','Slider');
define('PAGE','slider');
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
	<h3 class="text-center mt-3">Add New Images</h3>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label for="s_img1">Image1</label>
			<input type="file" name="s_img1" id="s_img1" class="form-control" required>
		</div>
		<div class="form-group">
			<label for="s_img2">Image2</label>
			<input type="file" name="s_img2" id="s_img2" class="form-control" required>
		</div>
		<div class="form-group">
			<label for="s_img3">Image2</label>
			<input type="file" name="s_img3" id="s_img3" class="form-control" required>
		</div>
		<div class="form-group">
			<label for="s_heading">Company Heading</label>
			<input type="text" name="s_heading" id="s_heading" class="form-control">
		</div>
		<div class="form-group">
			<label for="s_slog">Company Slogan</label>
			<input type="text" name="s_slog" id="s_slog" class="form-control">
		</div>
		<input name="submit" value="Submit" type="submit" class="btn btn-success mt-3 mb-3">
		<a name="submit" href="slide_delete.php" type="submit" class="btn btn-danger mt-3 mb-3
		 float-right">Delete</a>
	</form>
</div>

<?php 

if(isset($_POST['submit'])){

	$s_img1=$_FILES['s_img1']['name'];
	$s_img2=$_FILES['s_img2']['name'];
	$s_img3=$_FILES['s_img3']['name'];

	$temp_name1=$_FILES['s_img1']['tmp_name'];
	$temp_name2=$_FILES['s_img2']['tmp_name'];
	$temp_name3=$_FILES['s_img3']['tmp_name'];

	move_uploaded_file($temp_name1, "slider_img/$s_img1");
	move_uploaded_file($temp_name2, "slider_img/$s_img2");
	move_uploaded_file($temp_name3, "slider_img/$s_img3");

	$s_heading=$_POST['s_heading'];
	$s_slog=$_POST['s_slog'];

	$insert="insert into slider(s_img1,s_img2,s_img3,s_heading,s_slog) values('$s_img1',
	'$s_img2','$s_img3','$s_heading','$s_slog')";

	if($con->query($insert)==TRUE){

		echo "<script>alert('Inserted Successfully')</script>";
	}else{

		echo "Unable to Add";
	}
}


?>


<?php include('inc/footer.php');?>