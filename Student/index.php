<?php session_start();
ob_start();
 include ('../setting/config.php'); 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../bootstrap/css/mystyle.css">
  <link rel="stylesheet" href="../includes/admin.css">
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
  <a href="#" class="navbar-brand"><i class="fa fa-cube"></i>Brand<b>Name</b></a>     
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
        <a href="#" data-toggle="dropdown" class="nav-item nav-link dropdown-toggle user-action"><img src="../asset/photo/<?= $_SESSION['photo']?>"class="avatar" alt="Avatar"> <? $_SESSION['name'] ?><b class="caret"></b></a>
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
<div class="container-lg mt-5">
  <div class="row">
    <div class="col-lg-3">
      <div class="accordion mb-2" id="accordionExample">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h2 class="mb-0">                 
              <a data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                <span><i class="fa fa-user"></i> Account</span>
                <i class="fa fa-chevron-down toggle"></i>
              </a>
            </h2>
          </div>
          <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
              <ul class="list-group">
                <li class="list-group-item"><a href="student_info.php"><i class="fa fa-pencil"></i> Student Info</a></li>
                <li class="list-group-item"><a href="#"><i class="fa fa-pencil"></i> Edit Info</a></li>
                <li class="list-group-item"><a href="#"><i class="fa fa-key"></i> Change Password</a></li>
                <li class="list-group-item"><a href="#" class="text-danger"><i class="fa fa-trash"></i> Delete Account</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingTwo">
            <h2 class="mb-0">                 
              <a data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <span><i class="fa fa-comments"></i> Messages</span>
                <i class="fa fa-chevron-down toggle rotate"></i>
              </a>
            </h2>
          </div>
          <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">
              <ul class="list-group">
                <li class="list-group-item"><a href="#"><i class="fa fa-inbox"></i> Inbox <span class="badge badge-pill badge-primary">20</span></a></li>
                <li class="list-group-item"><a href="#"><i class="fa fa-paper-plane"></i> Sent</a></li>
                <li class="list-group-item"><a href="#"><i class="fa fa-file-text"></i> Drafts <span class="badge badge-pill badge-info">15</span></a></li>
                <li class="list-group-item"><a href="#"><i class="fa fa-trash"></i> Trash</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingThree">
            <h2 class="mb-0">                 
              <a data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <span><i class="fa fa-bar-chart"></i> Reports</span>
                <i class="fa fa-chevron-down toggle"></i>
              </a>
            </h2>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
              <ul class="list-group">                   
                <li class="list-group-item"><a href="#"><i class="fa fa-dollar"></i> Sales</a></li>
                <li class="list-group-item"><a href="#"><i class="fa fa-tags"></i> Orders</a></li>
                <li class="list-group-item"><a href="#"><i class="fa fa-plane"></i> Shipment</a></li>
                <li class="list-group-item"><a href="#"><i class="fa fa-users"></i> Customers</a></li>                    
              </ul>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingFour">
            <h2 class="mb-0">                 
              <a data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                <span><i class="fa fa-cog"></i> Settings</span>
                <i class="fa fa-chevron-down toggle"></i>
              </a>
            </h2>
          </div>
          <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
            <div class="card-body">
              <ul class="list-group">
                <li class="list-group-item"><a href="#"><i class="fa fa-font"></i> Typography</a></li>
                <li class="list-group-item"><a href="#"><i class="fa fa-bell"></i> Notifications</a></li>
                <li class="list-group-item"><a href="#"><i class="fa fa-map"></i> Maps</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingFive">
            <h2 class="mb-0"><a href="#"><i class="fa fa-power-off"></i> Logout</a></h2>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-9">
      <div class="jumbotron">
        <h1 class="display-4">Hello, <? $_SESSION['name']?></h1>
        <p class="lead">This is a simple example of accordion menu that can easily be integrated into any Bootstrap template. You'll find many such examples at <a href="https://www.tutorialrepublic.com" target="_blank">tutorialrepublic.com</a>.</p>
        <hr class="my-4">           
        <a class="btn btn-primary btn-lg" href="https://www.tutorialrepublic.com/snippets/gallery.php" target="_blank">Learn more</a>
      </div>

    <div class="container">
  <h2>Table</h2>
  <p>The .table-responsive class creates a responsive table which will scroll horizontally on small devices (under 768px). When viewing on anything larger than 768px wide, there is no difference:</p>                                                                                      
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Age</th>
        <th>City</th>
        <th>Country</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td><? $_SESSION["name"];?></td>
        <td><? $_SESSION["fname"];?></td>
        <td ><? $_SESSION["lname"];?></td>
        <td>Pitt</td>
        <td>35</td>
        <td>New York</td>
        <td>USA</td>
      </tr>
    </tbody>
  </table>
  </div>
</div>
<?php include('../includes/clock.php') ?>
    </div>
  </div>
</div>
</body>
</html>
