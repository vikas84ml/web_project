<?php 
define('TITLE','Dashboard');
define('PAGE','dashboard');
include('inc/header.php');
include('../inc/db.php');

session_start();
if(isset($_SESSION['is_adminlogin'])){

	$email=$_SESSION['email'];
}else{
	echo "<script>window.open('login.php','_self')</script>";
}
?>


<?php 

/* Request Subsscibers */

$sql="select max(id) from newsletter";

$result=$con->query($sql);

$row=$result->fetch_row();

$subscribers=$row[0];

/* Assignrd Work */

$sql="select max(p_id) from project";

$result=$con->query($sql);

$row=$result->fetch_row();

$project=$row[0];

?>

<div class="col-sm-9 col-md-10">
	<div class="row text-center mx-5">
		<div class="col-sm-6 mt-5">
			<div class="card bg-success mb-3 text-light">
				<div class="card-header">
					Total Subscribers
				</div>
				<div class="card-body">
					<h4 class="card-title"><?php echo $subscribers; ?></h4>
				</div>
			</div>
		</div>
		<div class="col-sm-6 mt-5">
			<div class="card bg-info mb-3 text-light">
				<div class="card-header">
					Total Projects
				</div>
				<div class="card-body">
					<h4 class="card-title"><?php echo $project; ?></h4>
				</div>
			</div>
		</div>
	</div>

		<div class="mx-5 mt-5 text-center ">
			<p class="bg-dark text-light p-2">List of Subscribers</p>

			<?php 

			$sql="select * from newsletter";

			$result=$con->query($sql);

			if($result->num_rows>0){

				echo '<table class="table">
				<thead>
					<tr>
						<th scope="col">Subscribers ID</th>
						<th scope="col">Email</th>
					</tr>
				</thead>
				<tbody>';

				while($row=$result->fetch_assoc()){

					echo '<tr>';
						echo '<td>'.$row["id"].'</td>';
						echo '<td>'.$row["email"].'</td>';
					echo '</tr>';
					}
				echo '</tbody>
				</table>';
			}else{
				echo "0 Result";
			}

			?>

		</div>


</div>



<?php include('inc/footer.php');?>
