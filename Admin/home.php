 <?php 
 session_start();
   include ('../setting/config.php'); 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../includes/admin.css">
  <link rel="stylesheet" href="../bootstrap/css/mystyle.css">
  <link rel="stylesheet" href="../bootstrap/css/w3.css">
   <link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css"> 
   <link rel="stylesheet" href="../bootstrap/css/bootstrap.main.css">
   <script src="../bootstrap/js/jquery.js"></script>
   <script src="../bootstrap/js/bootstrap.min.js"></script>
  <title>
  </title>
</head> 
<body>
<nav class="navbar navbar-expand-xl navbar-dark bg-dark">
  <a href="#" class="navbar-brand"><i class="fa fa-cube"></i> Diyon <b> SMS </b></a>     
  <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- Collection of nav links, forms, and other content for toggling -->
  <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">    
    <form class="navbar-form form-inline">
      <div class="input-group search-box">                
        <input type="text" id="search" class="form-control" placeholder="Search here...">
        <span class="input-group-addon"><i class="material-icons">&#xE8B6;</i></span>
      </div>
    </form>
    <div class="navbar-nav ml-auto">
      <a href="#" class="nav-item nav-link active"><i class="fa fa-home"></i><span>Home</span></a>
      <a href="#" class="nav-item nav-link"><i class="fa fa-gears"></i><span>Projects</span></a>
      <a href="#" class="nav-item nav-link"><i class="fa fa-users"></i><span>Team</span></a>
      <a href="#" class="nav-item nav-link"><i class="fa fa-pie-chart"></i><span>Reports</span></a>
      <a href="#" class="nav-item nav-link"><i class="fa fa-briefcase"></i><span>Careers</span></a>
      <a href="#" class="nav-item nav-link"><i class="fa fa-envelope"></i><span>Messages</span></a>   
      <a href="#" class="nav-item nav-link"><i class="fa fa-bell"></i><span>Notifications</span></a>
      <div class="nav-item dropdown">
        <a href="#" data-toggle="dropdown" class="nav-item nav-link dropdown-toggle user-action"><img src="../asset/photo/<?=$_SESSION['photo']?>" class="avatar" alt="Avatar"><?= $_SESSION['lname'];?><b class="caret"></b></a>
        <div class="dropdown-menu">
          <a href="#" class="dropdown-item"><i class="fa fa-user-o"></i> Profile</a>
          <a href="#" class="dropdown-item"><i class="fa fa-calendar-o"></i> Calendar</a>
          <a href="#" class="dropdown-item"><i class="fa fa-sliders"></i> Settings</a>
          <div class="divider dropdown-divider"></div>
          <a href="#" class="dropdown-item"><i class="material-icons">&#xE8AC;</i> Logout</a>
        </div>
      </div>
    </div>
  </div>
</nav>
<style>
</style>
<script>
$(document).ready(function(){     
  // Toggle plus minus icon on show hide of collapse element
  $(".collapse").on('show.bs.collapse', function(){
    $(this).parent(".card").find(".toggle").addClass("rotate");
  }).on('hide.bs.collapse', function(){
    $(this).parent(".card").find(".toggle").removeClass("rotate");
  });
});
</script>
</head>
<body>
<div class="container-lg mt-2">
  <div class="row">
    <?php include('../includes/sidenav.php'); ?>
    <div class="col-lg-9">
      <div class="jumbotron">
        <h1 class="display-4"> My header here</h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt i
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt i

        proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <a href="https://www.tutorialrepublic.com" target="_blank">tutorialrepublic.com</a>.</p>
        <hr class="my-4">           
        <a class="btn btn-primary btn-lg" href="https://www.tutorialrepublic.com/snippets/gallery.php" target="_blank">Learn more</a>
      </div>
    </div>
  </div>
</div>
</body>
</html>
