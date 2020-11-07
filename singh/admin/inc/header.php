
<!DOCTYPE html>
<html>
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
  <title><?php echo TITLE; ?></title>
</head>
<body>

<!------ Strat Navbar------>
<nav class="navbar navbar-expand-sm navbar-dark bg-success dashboard pl-5 fixed-top p-0 shadow flex-md-nowrap">
  <a href="dashboard.php" class="navbar-brand">Dashboard</a>
</nav>
<!------ End Navbar------>


<div class="container-fluid" style="margin-top: 40px;">
  <div class="row">

    <!---Sidebar----->
    <nav class="col-sm-2 sidebar-dashboard bg-success py-5 shadow-lg ">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a href="dashboard.php" class="nav-link text-dark <?php if(PAGE == 'dashboard'){ echo ' list-group-item-info';} ?>">
              <i class="fas fa-tachometer-alt"></i>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a href="slider.php" class="nav-link text-dark <?php if(PAGE == 'slider'){ echo ' list-group-item-info';} ?>">
              <i class="fas fa-sliders-h"></i>
              Slides
            </a>
          </li>
          <li class="nav-item">
            <a href="social.php" class="nav-link text-dark <?php if(PAGE == 'follow us'){ echo ' list-group-item-info';} ?>">
              <i class="fa fa-check-circle" aria-hidden="true"></i>
              Follow Us
            </a>
          </li>
          <li class="nav-item">
            <a href="services.php" class="nav-link text-dark <?php if(PAGE == 'services'){ echo ' list-group-item-info';} ?>">
              <i class="fas fa-briefcase"></i>
              Services
            </a>
          </li>
          <li class="nav-item">
            <a href="project.php" class="nav-link text-dark <?php if(PAGE == 'project'){ echo ' list-group-item-info';} ?>">
              <i class="fas fa-tasks"></i>
              Projects
            </a>
          </li>
          <li class="nav-item">
            <a href="testimonials.php" class="nav-link text-dark <?php if(PAGE == 'testimonials'){ echo ' list-group-item-info';} ?>">
              <i class="fas fa-users"></i>
              Testimonials
            </a>
          </li>
          <li class="nav-item">
            <a href="about.php" class="nav-link text-dark <?php if(PAGE == 'about'){ echo ' list-group-item-info';} ?>">
              <i class="fas fa-user"></i>
              About
            </a>
          </li>
          <li class="nav-item">
            <a href="customer_support.php" class="nav-link text-dark <?php if(PAGE == 'customer'){ echo ' list-group-item-info';} ?>">
              <i class="fas fa-users"></i>
             Customers Help
            </a>
          </li>
          <li class="nav-item">
            <a href="change_pass.php" class="nav-link text-dark  <?php if(PAGE == 'change_pass'){ echo ' list-group-item-info';} ?>">
              <i class="fas fa-key"></i>
              Reset Password
            </a>
          </li>
          <li class="nav-item">
            <a href="inc/logout.php" class="nav-link text-dark">
              <i class="fas fa-power-off"></i>
              Logout
            </a>
          </li>
        </ul>
      </div>
    </nav>  <!---End Sidebar----->
   
 












  