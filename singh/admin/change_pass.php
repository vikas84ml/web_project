<?php 
define('TITLE','Change Password');
define('PAGE','change_pass');
include('inc/header.php');
include('../inc/db.php');

session_start();
if(isset($_SESSION['is_adminlogin'])){

	$email=$_SESSION['email'];
}else{
	echo "<script>window.open('login.php','_self')</script>";
}

$email=$_SESSION['email'];
if(isset($_POST['submit'])){
	if($_POST['pass'] == ""){
		$passmsg="<p class='text-center text-danger'>Please enter the New Password</p>";
	}else{
		
		$pass=$_POST['pass'];
		$sql="update admin_login set password='$pass' where email='$email'";

		if($con->query($sql)==TRUE){

			echo "<script>alert('Password Change Successfully')</script>";
		}else{
			$passmsg="<p class='text-center text-danger'>Password not Changed.</p>";
		}
	}
}



?>
<div class="col-sm-9 col-md-10">
	<div class="row">
		<div class="col-sm-6">
			<form method="post" class="shadow-lg p-4 mt-5 mx-5">
				<div class="form-group">
					<i class="fas fa-envelope"></i><label for="email" class="font-weight-bold pl-2">Email</label>
					<input type="email" name="email" class="form-control" value="<?php echo $email; ?>"  readonly>
				</div>
				<div class="form-group">
					<i class="fas fa-key"></i><label for="pass" class="font-weight-bold pl-2">
					New Password</label>
					<input type="password" name="pass" class="form-control" placeholder="New Password">
				</div>
				<?php if(isset($passmsg)){ echo $passmsg;} ?>
				<button type="submit" name="submit" class="btn btn-success mt-4 mr-4">
					Update
				</button>
				<button type="submit" name="reset" class="btn btn-danger mt-4 mr-4">
					Reset
				</button>
			</form>
		</div>
	</div>
</div>






<?php 

include('inc/footer.php');

?>