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

<div class="col-sm-9 mt-5 mx-5">
	<h3 class="text-center mb-5">Delete Testimonials</h3>

	<?php 

	$sql="select * from testimonials";
	$result=$con->query($sql);
	if($result->num_rows>0){

		echo '

		<table class="table w-100">
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Name</th>
					<th scope="col">Description</th>
					<th scope="col">Image</th>
					<th scope="col">Action</th>
				</tr>
			</thead>';
		echo'<tbody>';
		while($row=$result->fetch_assoc()){

				echo '
					<tr>
						<td>'.$row["t_id"].'</td>
						<td>'.$row["cust_name"].'</td>
						<td>'.$row["cust_desc"].'</td>
						<td>'.$row["cust_img"].'</td>
						<td class="form-inline">
						<form method="post" class=" mb-3 form-inline">
							<input type="hidden" name="id" value='.$row['t_id'].'>
							<button class="btn btn-danger" type="submit" name="delete" value="Delete"><i class="fas fa-trash"></i>
							</button>
						</form>
						</td>
					</tr>
				';
			}

			echo '</tbody>';
		echo '</table>';

	}else{

		echo "0 Result";
	}

	?>
	<div class="text-center mt-5">
		<a class="btn btn-danger text-center" href="testimonials.php" type="submit">Don't Delete</a>
	</div>
</div>




<?php 

if(isset($_POST['delete'])){

	$id=$_POST['id'];

	$sql="delete from testimonials where t_id='$id'";

	if($con->query($sql) == TRUE){

		echo "<meta http-equiv='refresh' content= '0;URL=?deleted'/>";
		echo "<script>alert('Record Deleted')</script>";
		echo "<script>window.open('testimonials.php','_self')</script>";
	}else{

		echo "Unable to Delete";
	}
}

?>

<?php include('inc/footer.php');?>