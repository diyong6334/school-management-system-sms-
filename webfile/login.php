<?php 
    session_start();
    ob_start();
    include ('../setting/config.php');

   if(isset($_POST['submit']))
{
	
	    $username = $_POST['username'];
      $password = md5($_POST['password']);
      $melogin = $sms->login($username, $password);
      //print_r($melogin); die('ok');
      $_SESSION['id']=$melogin['id'];
      $_SESSION['email']=$melogin['email'];
      $_SESSION['username']=$melogin['username'];
      $_SESSION['photo']=$melogin['photo'];
      $_SESSION['state']=$melogin['state'];
      $_SESSION['country']=$melogin['country'];
      $_SESSION['dob']=$melogin['dob'];
      $_SESSION['phone']=$melogin['phone'];
      $_SESSION['name']=$melogin['name'];
      $_SESSION['fname']=$melogin['fname'];
      $_SESSION['lname']=$melogin['lname'];
      $_SESSION['lgc']=$melogin['lgc'];
      $_SESSION['status']=$melogin['status'];
      $_SESSION['status']=$melogin['status'];
      $_SESSION['gender']=$melogin['gender'];
      $_SESSION['Create_on']=$melogin['Create_on'];

      //$_SESSION['skill1']=$melogin['skill1'];
      // gettind the information through session
      //var_dump($_SESSION['id']); die();
			 if ($melogin['role']=='admin')
     {
        $_SESSION['username']=$_POST['admin'];
        header('location: ../Admin/home.php');

     }elseif ($melogin['role']=='teacher') 
     {  $_SESSION['role']=$_POST['username'];
        header('location: ../teacher/index.php');
       
     }elseif ($melogin['role'] == 'student') 
     {
        $_SESSION['role'] = $_POST['username'];
        header('location: ../student/index.php');
     }else
     {
        echo "<script>alert('you enter wrong information')</script>";
     }

	
}
 ?>

 <!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../bootstrap/css/mystyle.css">
  <link rel="stylesheet" href="../bootstrap/css/w3.css">
   <link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css"> 
   <link rel="stylesheet" href="../bootstrap/css/bootstrap.main.css">
   <script src="../bootstrap/js/jquery.js"></script>
   <script src="../bootstrap/js/bootstrap.min.js"></script>
</head>
<body class="bg-dark">
    <div class="container ">
        <div class="row mt-5">
            <div class="col-md-6 m-auto">
                 <form action="" method="post">
                   <div class="card">
                     <div class="card-header text-center text-white bg-info">
                       <h3> Login Form</h3>
                     </div>
                     <div class="card-body">
                       <input type="text" name="username" placeholder="Username" class="form-control mb-2">
                       <input type="password" name="password" placeholder="Password" class="form-control mb-2">
                     </div>
                     <div class="card-footer w3-padding bg-info">
                       <input type="submit" name="submit"  value="Signin" class="form-control mb-2 bg-info">
                     </div>
                   </div>
                 </form>
            </div>
        </div>
    </div>
</body>
</html>
