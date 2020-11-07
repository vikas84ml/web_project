<?php 
define('TITLE','Follow Us');
define('PAGE','follow us');
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
	<h3 class="text-center">Add Social Links</h3>
	<form action="" method="post">
		<div class="form-group">
			<label for="f_link">Facebook Link</label>
			<input type="text" name="f_link" id="f_link" class="form-control">
		</div>
		<div class="form-group">
			<label for="insta_link">Twitter Link</label>
			<input type="text" name="insta_link" id="insta_link" class="form-control">
		</div>
		<div class="form-group">
			<label for="linkedin_link">Linkedin Link</label>
			<input type="text" name="linkedin_link" id="linkedin_link" class="form-control">
		</div>
		<?php if(isset($msg)){ echo $msg;} ?>

		<div class="text-center">
			<button type="submit" class="btn btn-success" name="req_submit">Submit</button>
			<a name="submit" href="social_delete.php" type="submit" class="btn btn-danger">Delete</a>
		</div>
	</form>
</div>


<?php

if(isset($_POST['req_submit'])){

	$f_link=$_POST['f_link'];
	$insta_link=$_POST['insta_link'];
	$linkedin_link=$_POST['linkedin_link'];

	$sql="insert into socials(f_link,insta_link,linkedin_link) values('$f_link','$insta_link',
	'$linkedin_link')";

	if($con->query($sql)==TRUE){

		echo "<script>alert('Links Inserted Successfully')</script>";
	}else{

		echo "Unable to Insert";
	}

}

?>



<?php include('inc/footer.php');?>