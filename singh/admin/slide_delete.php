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

<div class="col-sm-9 mt-5 mx-5">
	<h3 class="text-center mb-5">Delete Slider</h3>

	<?php 

	$sql="select * from slider";
	$result=$con->query($sql);
	if($result->num_rows>0){

		echo '

		<table class="table w-100">
			<thead>
				<tr>
					<th scope="col">Slider ID</th>
					<th scope="col">Image1</th>
					<th scope="col">Image2</th>
					<th scope="col">Image3</th>
					<th scope="col">Heading</th>
					<th scope="col">Slogan</th>
					<th scope="col">Action</th>
				</tr>
			</thead>';
		echo'<tbody>';
		while($row=$result->fetch_assoc()){

				echo '
					<tr>
						<td>'.$row["slide_id"].'</td>
						<td>'.$row["s_img1"].'</td>
						<td>'.$row["s_img2"].'</td>
						<td>'.$row["s_img3"].'</td>
						<td>'.$row["s_heading"].'</td>
						<td>'.$row["s_slog"].'</td>
						<td class="form-inline">
						<form method="post" class=" mb-3 form-inline">
							<input type="hidden" name="id" value='.$row['slide_id'].'>
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
		<a class="btn btn-danger text-center" href="slider.php" type="submit">Don't Delete</a>
	</div>
</div>




<?php 

if(isset($_POST['delete'])){

	$id=$_POST['id'];

	$sql="delete from slider where slide_id='$id'";

	if($con->query($sql) == TRUE){

		echo "<meta http-equiv='refresh' content= '0;URL=?deleted'/>";
		echo "<script>alert('Record Deleted')</script>";
		echo "<script>window.open('slider.php','_self')</script>";
	}else{

		echo "Unable to Delete";
	}
}

?>

<?php include('inc/footer.php');?>