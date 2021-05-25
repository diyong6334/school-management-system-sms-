 <?php 
 session_start();
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
  <a href="#" class="navbar-brand"><i class="fa fa-cube"></i>Diyon<b>SMS</b></a>     
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
        <a href="#" data-toggle="dropdown" class="nav-item nav-link dropdown-toggle user-action"><img src="../asset/photo/<?= $_SESSION['photo']?>" class="avatar" alt="Avatar">
          <?= $_SESSION['lname'];?><b class="caret"></b></a>
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
    <?php include('sidenav.php');
     ?>
    <div class="col-lg-9">
      <div class="jumbotron">
        <div class="w3-container">
          <div class="w3-panel w3-leftbar w3-sand">
            <p class="w3-xxlarge w3-serif"><i>" You are welcome <?= $_SESSION['name'].' '.$_SESSION['lname']?>"</i></p>
            <p><?= date('r:a:')?></p>
          </div>
        </div>
        <p class="lead">
              
<div class="w3-responsive">
<table class="w3-table-all">
<tr>
  <th>Id</th>
  <th>Photo</th>
  <th>Surname</th>
  <th>Firstname</th>
  <th>Lastname</th>
  <th>Country</th>
  <th>State</th>
  <th>L.g.c</th>
  <th>Date of Birth</th>
  <th>Contact</th>
  <th>Gender</th>
  <th>Action</th>
</tr>


          <td><?php echo $_SESSION['name']; ?></td>
          <td><?php echo $_SESSION['fname'] ?></td>
          <td><?php echo $_SESSION['lname'] ?></td>
          <td><?php echo $_SESSION['country'] ?></td>
          <td><?php echo $_SESSION['state'] ?></td>
          <td><?php echo $_SESSION['lgc'] ?></td>
         <td><?php echo $_SESSION['username'] ?></td> 
          <td><?php echo $_SESSION['dob'] ?></td>
          <td><?php echo $_SESSION['phone'] ?></td>
          <td><?php echo $_SESSION['email'] ?></td> 
          <!--<td><?php echo $customer['password'] ?></td> -->
         <!-- <td><?php echo $customer['status'] ?></td>-->
         <!-- <td><?php echo $customer['address'] ?></td> -->
          <td><?php echo $_SESSION['gender'] ?></td>
          <?php echo $_SESSION['Create_on'] ?></td>
         

</tr>
</table>
</div>
</div>
  
          <a href="" target="_blank"></a>.</p>
        <hr class="my-4">           
        <a class="btn btn-primary btn-lg" href="" target="_blank">more</a>
      </div>
    </div>
  </div>
</div>
</body>
</html>
