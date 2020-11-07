<?php 
define('TITLE','Projects');
define('PAGE','project');
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
	<h3 class="text-center mt-3">Add New Project</h3>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label for="p_name">Project Name</label>
			<input type="text" name="p_name" id="p_name" class="form-control" required>
		</div>
		<div class="form-group">
			<label for="p_size">Area</label>
			<input type="text" name="p_size" id="p_size" class="form-control" required>
		</div>
		<div class="form-group">
			<label for="p_add">Address</label>
			<input type="text" name="p_add" id="p_add" class="form-control" required>
		</div>
		<div class="form-group">
			<label for="p_desc">Description</label>
			<textarea name="p_desc" cols="19" rows="6" class="form-control" id="p_desc"></textarea>
		</div>
		<div class="form-group">
			<label for="p_img">Project Image</label>
			<input type="file" name="p_img" id="p_img" class="form-control" required>
		</div>
		  <input name="submit" value="Submit" type="submit" class="btn btn-success mt-3 mb-3">
		  <a name="submit" href="project_delete.php" type="submit" class="btn btn-danger mt-3 mb-3
		 float-right">Delete</a>
	</form>
</div>

<?php 

if(isset($_POST['submit'])){

	$p_name=$_POST['p_name'];
	$p_size=$_POST['p_size'];
	$p_add=$_POST['p_add'];
	$p_desc=$_POST['p_desc'];

	$p_img=$_FILES['p_img']['name'];
	$temp_name=$_FILES['p_img']['tmp_name'];

	move_uploaded_file($temp_name, "project_img/$p_img");

	$insert="insert into project(p_name,p_size,p_add,p_desc,p_img) values('$p_name','$p_size',
	'$p_add','$p_desc','$p_img')";

	if($con->query($insert)==TRUE){

		echo "<script>alert('Inserted Successfully')</script>";
	}else{

		echo "Unable to Insert";
	}

}

?>

<?php include('inc/footer.php');?>