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

?>


<div class="col-sm-6 mt-3 mx-5 jumbotron">
	<h3 class="text-center">Update Services</h3>

	<?php 

	if(isset($_POST['edit'])){

		$id=$_POST['id'];

		$sql="select * from services where s_id='$id'";	

		$result=$con->query($sql);

		$row=$result->fetch_assoc();
	}

	if(isset($_POST['update'])){

		if(($_POST['icon']=="") ||($_POST['heading']=="") ||($_POST['description']=="")){

			$msg='<p class="text-center text-danger">All Fields are Required !</p>';

		}else{

			$s_id=$_POST['s_id'];
			$icon=$_POST['icon'];
			$heading=$_POST['heading'];
			$description=$_POST['description'];

			$sql_up="update services set s_id='$s_id',icon='$icon',heading='$heading',
			descr='$description' where s_id='$s_id'";

			if($con->query($sql_up)==TRUE){

				echo "<script>alert('Data Updated Succefully')</script>";
				echo "<script>window.open('services.php','_self')</script>";
			}else{

				$msg="<p class='text-center text-danger'>Unable to Update Data</p>";
			}

		}

	}


	?>

	<form action="" method="post">
		<div class="form-group">
			<label for="s_id">Service ID</label>
			<input type="text" name="s_id" id="s_id" class="form-control" readonly
			value="<?php if(isset($row['s_id'])){ echo $row['s_id'];} ?>">
		</div>
		<div class="form-group">
			<label for="icon">Service Icon Code</label>
			<textarea class="form-control" id="icon" name="icon">
			<?php if(isset($row['icon'])){ echo $row['icon'];} ?>
			</textarea>
		</div>
		<div class="form-group">
			<label for="heading">Service Heading</label>
			<input type="text" name="heading" id="heading" class="form-control"
			value="<?php if(isset($row['heading'])){ echo $row['heading'];} ?>">
		</div>
		<div class="form-group">
			<label for="description">Service Description</label>
			<textarea class="form-control" id="description" name="description">
			<?php if(isset($row['descr'])){ echo $row['descr'];} ?>
			</textarea>
		</div>
		<?php if(isset($msg)){ echo $msg;} ?>

		<div class="text-center">
			<button type="submit" class="btn btn-success" name="update">Update</button>
			<a href="services.php" class="btn btn-danger">Close</a>
		</div>
	</form>
</div>



</div>


<?php include('inc/footer.php');?>