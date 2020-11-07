<?php
 include("../inc/db.php");

 session_start();

 if(!isset($_SESSION['is_adminlogin'])){

	 if(isset($_POST['submit'])){

		 $email=mysqli_real_escape_string($con,trim($_POST['email']));
		 $pass= mysqli_real_escape_string($con,trim($_POST['pass']));

		 $sql="select email,password from admin_login where email='$email' and password='$pass' limit 1";
		 
		 $result=$con->query($sql);

		 if($result->num_rows==1){

		 	$_SESSION['is_adminlogin']=true;
		 	$_SESSION['email']=$email;

		 	echo "<script>alert('Login Success')</script>";
		 	echo "<script>window.open('dashboard.php','_self')</script>";
		 	exit();
		 }else{
		 	$msg="<p class='text-center text-danger'>Please Enter valid Email and Password.</p>";
		 }

		}
 	}else{

 		echo "<script>window.open('services.php','_self')</script>";
 	}

 ?>


<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie-edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--- Bootstrap Css-->
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <!--- Font awosome-->
  <link rel="stylesheet" type="text/css" href="../css/all.min.css">
  <!--- Main Css-->
  <link rel="stylesheet" type="text/css" href="../css/main.css">
  <!--- google font-->
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&display=swap" rel="stylesheet">

	<title>Login</title>
<style type="text/css">
	.custom-margin{
		margin-top: 8vh;
	}
</style>
</head>

<div class="container pt-5" id="registration">
	<h2 class="text-center">Admin Login</h2>
	<?php if(isset($msg)){ echo $msg;} ?>
	<div class="row mt-4 mb-4 custom-margin">
		<div class="col-md-6 offset-md-3">
			<form action="" class="shadow-lg p-4" method="post">
				<div class="form-group">
					<i class="fas fa-envelope"></i><label for="email" class="font-weight-bold pl-2">Email</label>
					<input type="email" name="email" class="form-control" placeholder="Email">
				</div>
				<div class="form-group">
					<i class="fas fa-key"></i><label for="pass" class="font-weight-bold pl-2">
					Password</label>
					<input type="password" name="pass" class="form-control" placeholder="Password">
				</div>
				<input type="submit" name="submit" value="Login" class="btn btn-success mt-4 btn-block font-weight-bold shadow-sm">
			</form>
		</div>
	</div>
</div>












  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/042029a3a4.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>