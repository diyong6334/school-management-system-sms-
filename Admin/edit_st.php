<?php
  
  // Include database file
 include ('../setting/config.php');

  // Edit customer record
  if(isset($_GET['editId']) && !empty($_GET['editId'])) {
    $editId = $_GET['editId'];
    $customer = $sms->displyaRecordById($editId);
  }

  // Update Record in customer table
  if(isset($_POST['update'])) {
    $sms->updateRecord($_POST);
  }  
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../bootstrap/css/mystyle.css">
  <link rel="stylesheet" href="../bootstrap/css/w3.css">
  <link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css"> 
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.main.css">
  <script src="../bootstrap/js/jquery.js"></script>
  <script src="../bootstrap/js/bootstrap.min.js"></script>
  <style>
    body{
    background-image: url("../images/bg1.jpg");
    background-repeat: no-repeat;
    background-position: right top;
    background-attachment: fixed;
    }
  </style>

</head>
<body>
      <div class="w3-text-sand w3-display-topmiddle mt-3" style="text-shadow:1px 1px 0 #444">
        FILL THIS FORM TO GET REGISTER
      </div>

<form action="" method="POST">
    <div class="w3-row-padding mt-5">
      <div class="w3-third">
        <label for="name" class = "w3-text-lime"><b>Surname</b></label>
        <input type="text" class="form-control" name="uname" value="<?php echo $customer['name']; ?>" placeholder="" required="">
      </div>
      <div class="w3-third">
        <label for="name" class = "w3-text-lime"><b>First Name</b></label>
        <input type="text" class="form-control" name="ufname" value="<?php echo $customer['fname']; ?>" placeholder="" required="">
      </div>
      <div class="w3-third">
        <label for="name" class = "w3-text-lime"><b>Last Name</b></label>
        <input type="text" class="form-control" name="ulname" value="<?php echo $customer['lname']; ?>"placeholder="" required="">
      </div>
      <div class="w3-third">
        <label for="name" class = "w3-text-lime"><b>Country</b></label>
        <input type="text" class="form-control" name="ucountry"value="<?php echo $customer['country']; ?>" placeholder="" required="">
      </div>
      <div class="w3-third">
        <label for="name" class = "w3-text-lime"><b>State</b></label>
        <input type="text" class="form-control" name="ustate"value="<?php echo $customer['state']; ?>" placeholder="" required="">
      </div>
      <div class="w3-third">
        <label for="name" class = "w3-text-lime"><b>Local Government</b></label>
        <input type="text" class="form-control" name="ulgc" value="<?php echo $customer['lgc']; ?>" placeholder="" required="">
      </div>
      <div class="w3-third">
        <label for="name" class = "w3-text-lime"><b>Username</b></label>
        <input type="username" class="form-control" name="uusername" value="<?php echo $customer['username']; ?>" placeholder="" required="">
      </div>
      <div class="w3-third">
        <label for="name" class = "w3-text-lime"><b>Date of Birth</b></label>
        <input type="date" class="form-control" name="udob"value="<?php echo $customer['dob']; ?>" placeholder="" required="">
      </div>
      <div class="w3-third">
        <label for="name" class = "w3-text-lime"><b>Phone Number</b></label>
        <input type="Number" class="form-control" name="uPhone" value="<?php echo $customer['Phone']; ?>" placeholder="" required="">
      </div>
      <div class="w3-half">
        <label for="Username" class = "w3-text-lime"><b>Email</b></label>
        <input type="text" class="form-control" name="uemail"value="<?php echo $customer['email']; ?>" placeholder="" required="">
      </div>
      <div class="w3-half">
        <label for="name" class = "w3-text-lime"><b>Password</b></label>
        <input type="text" class="form-control" name="upassword" placeholder="" required="">
      </div>
      <div class="w3-half">
        <label for="name" class = "w3-text-lime"><b>Upload Photo</b></label>
        <input type="file" class="form-control" name="uphoto"value="<?php echo $customer['photo']; ?>"placeholder="" required="">
      </div>
       <div class="w3-half ">
        <label for="Username" class = "w3-text-lime"><b>Select Marital Status</b></label>
         <select name="ustatus" id="" value="<?php echo $customer['status']; ?>" class="form-control w3-text-blue">
           <option value="single"><b>Single</b></option>
            <option value="married"><b>Married</b></option>
            <option value="divorced"><b>Divorce</b></option>
        </select>
      </div>
      <h4 class="w3-text-lime"></h>
      <div class="w3-half">
        <h4 class="w3-text-red"><b> Chose Skills 1</b></h4>
           <label for="name" class = "w3-text-lime"><b>Css</b></label>
           <input class="w3-check" type="checkbox" name="uskills1[]" value="HTML">
           <label>Html</label>
           <input class="w3-check" type="checkbox" name="uskills1[]" value="HTML">
           <label>JavaScript</label>
           <input class="w3-check" type="checkbox" name="uskills1[]" value="HTML">
           <label>Bootstrap</label>
           <input class="w3-check" type="checkbox" name="uskills1[]" value="HTML">
           <label>Jquery</label>
           <input class="w3-check" type="checkbox" name="uskills1[]" value="HTML">
           <label>Azure</label>
      </div>     
      <div class="w3-half">
        <h4 class="w3-text-red"><b> Chose Skills 2</b></h4>
           <input class="w3-check" type="checkbox" name="uskills1[]" value="HTML">
           <label>VueJs</label>
           <input class="w3-check" type="checkbox" name="uskills1[]" value="HTML">
           <label>React</label>
           <input class="w3-check" type="checkbox" name="uskills1[]" value="HTML">
           <label>ExpressJs</label>
           <input class="w3-check" type="checkbox" name="uskills1[]" value="HTML">
           <label>Angular JS</label>
           <input class="w3-check" type="checkbox" name="uskills1[]" value="HTML">
           <label>Docker</label>
           <input class="w3-check" type="checkbox" name="uskills1[]" value="HTML">
           <label>PHP</label>
      </div><br><br>  
      <h4 class="w3-text-red"><b>Enter Your Address</b></h4> 
      <textarea name="uobj2" value="<?php echo $customer['name']; ?>" id="" cols="" rows="5" class="form-control">
        
      </textarea>
       <div class="w3-third">
        <h4 class="w3-text-red"><b> Chose Gender</b></h4>  
          <input class="w3-radio" type="radio" name="ugender"  value="male" checked>
          <label class="w3-text-blue"><b>Male</b></label>

         <input class="w3-radio" type="radio" name="ugender" value="female">
         <label class="w3-text-blue"><b>Female</b></label>

         <input class="w3-radio" type="radio" name="ugender" value="other" >
         <label class="w3-text-blue"><b>Other</b></label>
      </div>

      <div>
         <input type="hidden" name="id" value="<?php echo $customer['id']; ?>">
         <input type="submit" name="update" class="w3-btn w3-round-xlarge mt-3 bg-success w3-text-white " style="float:right;" value="Update">
      </div>
       
    </div>
</form>
</body>
</html>