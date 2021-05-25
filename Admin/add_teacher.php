<?php 
//session_start();
  include ('../setting/config.php');

  if(isset($_POST['submit'])) 
    {
      $sms->insertData();
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="./bootstrap/css/mystyle.css">
  <link rel="stylesheet" href="../bootstrap/css/w3.css">
  <link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css"> 
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.main.css">
  <script src="../bootstrap/js/jquery.js"></script>
  <script src="../bootstrap/js/bootstrap.min.js"></script>
  <style>
    body{
    background-image: url("../images/bg3.jpg");
    background-repeat: no-repeat;
    background-position: right top;
    background-attachment: fixed;
    }
  </style>

</head>
<body>
      <div class="w3-text-blue w3-display-topmiddle mt-3" style="text-shadow:0px 2px 0px ">
        FILL THIS FORM TO GET REGISTER
      </div>

<form action="" method="POST" enctype="multipart/form-data">
    <div class="w3-row-padding mt-5">
      <div class="w3-third">
        <label for="name" class = "w3-text-lime"><b>Surname</b></label>
        <input type="text" class="form-control" name="name" placeholder="" >
      </div>
      <div class="w3-third">
        <label for="name" class = "w3-text-lime"><b>First Name</b></label>
        <input type="text" class="form-control" name="fname" placeholder="" >
      </div>
      <div class="w3-third">
        <label for="name" class = "w3-text-lime"><b>Last Name</b></label>
        <input type="text" class="form-control" name="lname" placeholder="" >
      </div>
      <div class="w3-third">
        <label for="name" class = "w3-text-lime"><b>Country</b></label>
        <input type="text" class="form-control" name="country" placeholder="" >
      </div>
      <div class="w3-third">
        <label for="name" class = "w3-text-lime"><b>State</b></label>
        <input type="text" class="form-control" name="state" placeholder="" >
      </div>
      <div class="w3-third">
        <label for="name" class = "w3-text-lime"><b>Local Government</b></label>
        <input type="text" class="form-control" name="lgc" placeholder="">
      </div>
      <div class="w3-third">
        <label for="name" class = "w3-text-lime"><b>Username</b></label>
        <input type="username" class="form-control" name="username" placeholder="">
      </div>
      <div class="w3-third">
        <label for="name" class = "w3-text-lime"><b>Date of Birth</b></label>
        <input type="date" class="form-control" name="dob" placeholder="">
      </div>
      <div class="w3-third">
        <label for="name" class = "w3-text-lime"><b>Phone Number</b></label>
        <input type="number" class="form-control" name="phone" placeholder="" >
      </div>
      <div class="w3-half">
        <label for="Username" class = "w3-text-lime"><b>Email</b></label>
        <input type="text" class="form-control" name="email" placeholder="" >
      </div>
      <div class="w3-half">
        <label for="name" class = "w3-text-lime"><b>Password</b></label>
        <input type="text" class="form-control" name="password" placeholder="" >
      </div>
      <div class="w3-half">
        <label for="name" class = "w3-text-lime"><b>Upload Photo</b></label>
        <input type="file" class="form-control" name="photo" placeholder="">
      </div>
       <div class="w3-half ">
        <label for="Username" class = "w3-text-lime"><b>Select Marital Status</b></label>
         <select name="status" id="" class="form-control w3-text-blue">
           <option value="single"><b>Single</b></option>
            <option value="married"><b>Married</b></option>
            <option value="divorced"><b>Divorce</b></option>
        </select>
      </div>
      <h4 class="w3-text-lime"></h>
      <div class="w3-half">
        <h4 class="w3-text-red"><b> Chose Qualification</b></h4>
           <label for="name" class = "w3-text-lime"><b>Css</b></label>
           <input class="w3-check" type="checkbox" name="skills1[]" value="Html">
           <label>NIT</label>
           <input class="w3-check" type="checkbox" name="skills1[]" value="JavaScript">
           <label>OND</label>
           <input class="w3-check" type="checkbox" name="skills1[]" value="Bootstrap">
           <label>NCE</label>
           <input class="w3-check" type="checkbox" name="skills1[]" value="Jquery">
           <label>HND</label>
           <input class="w3-check" type="checkbox" name="skills1[]" value="Azure">
           <label>BSC</label>
           <input class="w3-check" type="checkbox" name="skills1[]" value="Azure">
           <label>MSC</label>
           <input class="w3-check" type="checkbox" name="skills1[]" value="Azure">
           <label>PHD</label>
           <input class="w3-check" type="checkbox" name="skills1[]" value="Azure">
      </div>     
      <br><br>
      <h4 class="w3-text-red"><b>Enter Your Address</b></h4> 
      <textarea name="address" id="" cols="" rows="5" class="form-control">
        
      </textarea>
       <div class="w3-third">
        <h4 class="w3-text-red"><b> Chose Gender</b></h4>  
          <input class="w3-radio" type="radio" name="gender" value="male" checked>
          <label class="w3-text-blue"><b>Male</b></label>

         <input class="w3-radio" type="radio" name="gender" value="female">
         <label class="w3-text-blue"><b>Female</b></label>

         <input class="w3-radio" type="radio" name="gender" value="gender" >
         <label class="w3-text-blue"><b>Other</b></label>
      </div>
      <div>
        <input type="submit" name="submit" class="w3-btn w3-round-xlarge mt-3 bg-success w3-text-white " style="float:right;" value="Submit">
      </div>
       
    </div>
</form>
 <p>
   <div class="w3-display-position">
     <div class="w3-text-white ml-auto" style="text-shadow:1px 1px 0 #444">
     Already have An Acount? <a href="" class="w3-text-blue">Login Here</a></div>
  </div>

 </p>
</body>
</html>

