
<?php
session_start();
  // Include database file
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
<nav class="navbar navbar-expand-xl navbar-dark bg-dark w3-top">
  <a href="#" class="navbar-brand"><i class="fa fa-cube"></i> Diyong<b>SMS </b></a>     
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
        <a href="#" data-toggle="dropdown" class="nav-item nav-link dropdown-toggle user-action"><img src="../asset/photo/<?=$_SESSION['photo']?>" class="avatar" alt="Avatar"><?=$_SESSION['name']?><b class="caret"></b></a>
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
</head>
<body>
<div class="container-lg ">
  <div class="row mt-5">
    <?php include('../includes/sidenav.php'); ?>
    <div class="col-lg-9" style="margin-top: 20px;">
      <div class="jumbotrom">
     <h2 style="">Students Records
    <a href="add.php" class="btn btn-primary ml-2" style="float: right;" >Update Student Record</a>
    <a href="add_st.php" class="btn btn-danger ml-2 " style="float: right;">Add New Student</a>
    <a href="add_st.php" class="btn btn-secondary " style="float: right;">Add New Staff</a>
  </h2><div class="w3-container">
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

        <?php 
        $x = 1;
          $customers = $sms->displayData(); 
          foreach ($customers as $customer) {
        ?>
        <tr>
          <td><?php echo $x++ ?></td>
          <td><img src="../asset/photo/<?=$customer['photo']?>" height="80px" width="80px" alt="photo"></td>
          <td><?php echo $customer['name'] ?></td>
          <td><?php echo $customer['fname'] ?></td>
          <td><?php echo $customer['lname'] ?></td>
          <td><?php echo $customer['country'] ?></td>
          <td><?php echo $customer['state'] ?></td>
          <td><?php echo $customer['lgc'] ?></td>
         <!-- <td><?php echo $customer['username'] ?></td> -->
          <td><?php echo $customer['dob'] ?></td>
          <td><?php echo $customer['phone'] ?></td>
         <!-- <td><?php echo $customer['email'] ?></td> -->
          <!--<td><?php echo $customer['password'] ?></td> -->
         <!-- <td><?php echo $customer['status'] ?></td>-->
         <!-- <td><?php echo $customer['address'] ?></td> -->
          <td><?php echo $customer['gender'] ?></td>
          <!--<td><?php echo $customer['skills1'] ?></td>-->
          <td>
            <a href="edit_st.php?editId=<?php echo $customer['id'] ?>" style="color:green">
              <i class="fa fa-pencil" aria-hidden="true">Edit</i></a>&nbsp
            <a href="index.php?deleteId=<?php echo $customer['id'] ?>" style="color:red" onclick="confirm('Are you sure want to delete this record')">
              <i class="fa fa-trash" aria-hidden="true">Delete</i>
            </a>
          </td>
        </tr>
      <?php } ?>
</tr>
</table>
</div>
</div>
    </div>
  </div>
</div>
</body>
</html>
