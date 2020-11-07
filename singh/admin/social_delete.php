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


<div class="col-sm-9 mt-5 mx-5">
	<h3 class="text-center mb-5">Delete Social Links</h3>

	<?php 

	$sql="select * from socials";
	$result=$con->query($sql);
	if($result->num_rows>0){

		echo '

		<table class="table w-100">
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Facebook</th>
					<th scope="col">Twitter</th>
					<th scope="col">Linkedin</th>
					<th scope="col">Action</th>
				</tr>
			</thead>';
		echo'<tbody>';
		while($row=$result->fetch_assoc()){

				echo '
					<tr>
						<td>'.$row["id"].'</td>
						<td>'.$row["f_link"].'</td>
						<td>'.$row["insta_link"].'</td>
						<td>'.$row["linkedin_link"].'</td>
						<td class="form-inline">
						<form method="post" class=" mb-3 form-inline">
							<input type="hidden" name="id" value='.$row['id'].'>
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
		<a class="btn btn-danger text-center" href="social.php" type="submit">Don't Delete</a>
	</div>
</div>




<?php 

if(isset($_POST['delete'])){

	$id=$_POST['id'];

	$sql="delete from socials where id='$id'";

	if($con->query($sql) == TRUE){

		echo "<meta http-equiv='refresh' content= '0;URL=?deleted'/>";
		echo "<script>alert('Record Deleted')</script>";
		echo "<script>window.open('social.php','_self')</script>";
	}else{

		echo "Unable to Delete";
	}
}

?>

<?php include('inc/footer.php');?>