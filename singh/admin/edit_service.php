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

<div class="col-sm-9 mt-5 mx-5">
	<h3 class="text-center">List of Services</h3>

	<?php 

	$sql="select * from services";
	$result=$con->query($sql);
	if($result->num_rows>0){

		echo '

		<table class="table w-100">
			<thead>
				<tr>
					<th scope="col">S_ID</th>
					<th scope="col">Icon</th>
					<th scope="col">Heading</th>
					<th scope="col">Description</th>
					<th scope="col">Action</th>
				</tr>
			</thead>';
		echo'<tbody>';
		while($row=$result->fetch_assoc()){

				echo '
					<tr>
						<td>'.$row["s_id"].'</td>
						<td>'.$row["icon"].'</td>
						<td>'.$row["heading"].'</td>
						<td>'.$row["descr"].'</td>
						<td class="form-inline">
						<form action="service_up.php" method="post" class="form-inline">
							<input type="hidden" name="id" value='.$row['s_id'].'>
							<button class="btn btn-success" type="submit" name="edit" value="Edit"><i class="far fa-edit"></i>
							</button>
						</form>
						<form method="post" class="mt-3 mb-3 form-inline">
							<input type="hidden" name="id" value='.$row['s_id'].'>
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

<form class="mb-2 d-print-none ml-3" action="services.php" method="post">
	<input type="submit" name="close" value="Close" class="btn btn-danger">
</form>

</div>




<?php 

if(isset($_POST['delete'])){

	$id=$_POST['id'];

	$sql="delete from services where s_id='$id'";

	if($con->query($sql) == TRUE){

		echo "<meta http-equiv='refresh' content= '0;URL=?deleted'/>";
	}else{

		echo "Unable to Delete";
	}
}

?>

<?php include('inc/footer.php');?>