<?php include('inc/db.php');?>

<section class="jumbotron mt-4 mb-4" id="testimonials">
   <h2 class="text-center">Client Testimonials</h2>
    <span class="title-border "></span>
  <div class="container mt-5 mb-5">
    <div class="row">

      <?php 

      $sql="select * from testimonials";

      $result=$con->query($sql);

      if($result->num_rows>0){

        while($row=$result->fetch_assoc()){

          $cust_name=$row['cust_name'];
          $cust_desc=$row['cust_desc'];
          $cust_img=$row['cust_img'];

          echo '

              <div class="col-sm-3 mt-2 mb-5">
                <div class="card shadow" id="testi">
                  <div class="card-body text-center testimonials">
                    <img src="admin/cust_img/'.$cust_img.'" class="img-fluid">
                    <h5 class="card-title mt-4 mb-4 text-uppercase">'.$cust_name.'</h5>
                    <p class="card-text">'.$cust_desc.'</p>
                  </div>
                </div>
              </div>
          ';

        }

      }else{
        echo "<div class='wrapper mb-5 mt-3 text-center col-sm-12' style='background: #ff5f13;'>
            <i class='fas fa-fighter-jet fa-4x mb-3 mt-3' 
            style='transform: rotate(325deg);'></i>
            <h1>Testimonials are coming soon<span class='dot'>
            </span></h1>
            <p class='text-center'>We're working on it! Please visit this section later.</p>
          </div>
        ";
      }

      ?>
 
    </div>
  </div>
</section>