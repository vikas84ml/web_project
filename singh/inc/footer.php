<div class="jumbotron" id="cust_suport">
	<div class="container">

		<?php 

			$sql="select * from  customer_support";	

			$result=$con->query($sql);

			if($result->num_rows>0){

				while($row=$result->fetch_assoc()){

					$location=$row['location'];
					$mobile=$row['mobile'];
					$email=$row['email'];

					echo '

						<div class="row">
							<div class="col-sm-4 text-center mt-5 mb-3">
					             <div class="contact-icon">
					               <i class="fas fa-map-marker-alt"></i>
					             </div>
					             <div class="contact-text">
					                 <p>'.$location.'</p>
					             </div>
							</div>
							<div class="col-sm-4 text-center mt-5 mb-3">
					             <div class="contact-icon ">
					               <i class="fas fa-phone"></i>
					             </div>
					             <div class="contact-text">
					                 <h5>Phone Number</h5>
					                 <p>'.$mobile.'</p>
					             </div>
							</div>
							<div class="col-sm-4 text-center mt-5 mb-3">
				                 <div class="contact-icon">
				                   <i class="fas fa-envelope"></i>
				                 </div>
				                 <div class="contact-text">
				                     <h5>Client Support</h5>
				                     <p>'.$email.'</p>
				                 </div>
							</div>
						</div>
					';

				}
			}

		?>
	</div>
</div>

<div class=" bg-dark w-100" id="footer">
	<div class="row w-100">

		<div class="col-sm-4">
			<div class="text-title">
				<h5 class="text-center mt-3 text-light text-uppercase">Follw Us</h5>
			</div>

			<?php 

			$select="select * from socials";
			$result=$con->query($select);

			if($result->num_rows>0){

				while($row=$result->fetch_assoc()){

					$f_link=$row['f_link'];
					$insta_link=$row['insta_link'];
					$linkedin_link=$row['linkedin_link'];

					echo '
						<div class="text-center" id="media_icon">
							<a href="'.$f_link.'" class=" text-center" target="_blank">
								<i class="fab fa-facebook-f"></i>
							</a>
							<a href="'.$insta_link.'" class=" text-center" target="_blank">
								<i class="fab fa-twitter"></i>
							</a>
							<a href="'.$linkedin_link.'" class="text-center" target="_blank">
								<i class="fab fa-linkedin"></i>
							</a>
						</div>
					';
				}
			}else{
        		echo "<div class='wrapper mb-5 mt-3 text-center col-sm-12 text-light'>
            <i class='fas fa-fighter-jet fa-3x mb-3 mt-3' 
            style='transform: rotate(325deg);'></i>
            <h5>Links are coming soon<span class='dot'>
            </span></h5>
            <p class='text-center'>We're working on it! Please visit this section later.</p>
          </div>
        ";
      }

			?>

		</div>




		<div class="col-sm-5 text-center">
			<div class="text-title">
				<h5 class="text-center mt-3 text-light text-uppercase">Newsletter</h5>
				<p class="text-center text-light">Stay up to date on the latest from Singh Construction</p>
			</div>
			<form method="post" class="form-group form-inline ml-4" id="subscribe">
				<input type="email" name="email" placeholder="Enter Your Email Address" class="form-control w-75" required>
				<button type="submit" name="submit" class="btn text-uppercase">
				Send</button>
			</form>
		</div>
		<div class="col-sm-3">
			<div class="text-center text-light" id="copyright">
				Copyright © 
					<?php
						$copyYear = 2020; // Set your website start date
						$curYear = date('Y'); // Keeps the second year updated
						echo $copyYear . (($copyYear != $curYear) ? '-' . $curYear : '');
					?> 
				Singh Construction. All Right Reserved.
			</div>
		</div>
	</div>
</div>


<?php 

if(isset($_POST['submit'])){

	$email=mysqli_real_escape_string($con,$_POST['email']);

	$sql="insert into  newsletter(email) values('$email')";

	if($con->query($sql)==TRUE){

		echo "<script>alert('Thank you for subscribing us !')</script>";
	}else{

		echo "Unable to Subscribe";
	}
}

?>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/042029a3a4.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


</body>
</html>