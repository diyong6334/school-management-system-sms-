<?php 
   /* session_start();
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

  
}*/
 ?>


<!DOCTYPE html>
<html>
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
  <script>
    // Prevent dropdown menu from closing when click inside the form
    $(document).on("click", ".action-buttons .dropdown-menu", function(e){
      e.stopPropagation();
    });
  </script>
<body>

<nav class="navbar navbar-expand-xl navbar-dark bg-dark w3-top">
  <a href="#" class="navbar-brand"><i class="fa fa-cube"></i> Diyong<b>SMS</b></a>     
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
    <div class="navbar-nav ">
      <a href="#" class="nav-item nav-link active"><i class="fa fa-home"></i><span>Home</span></a>
       <div class="nav-item dropdown">
        <a href="#" data-toggle="dropdown" class="nav-item nav-link dropdown-toggle">Services</a>
        <div class="dropdown-menu">         
          <a href="#section1" class="dropdown-item">Web Design</a>
          <a href="#section2" class="dropdown-item">Web Development</a>
          <a href="#section3" class="dropdown-item">Graphic Design</a>
          <a href="#" class="dropdown-item">Digital Marketing</a>
        </div>
     </div>
      <a href="#" class="nav-item nav-link"><i class="fa fa-gears"></i><span>Projects</span></a>
      <a href="#" class="nav-item nav-link"><i class="fa fa-users"></i><span>Team</span></a>
      <a href="#" class="nav-item nav-link"><i class="fa fa-pie-chart"></i><span>Reports</span></a>
      <a href="#" class="nav-item nav-link"><i class="fa fa-briefcase"></i><span>Careers</span></a>
      <a href="#" class="nav-item nav-link"><i class="fa fa-envelope"></i><span>Messages</span></a>   
      <a href="login.php" class="nav-item nav-link "><i class="fa fa-login" style="margin-right: 250px;"></i><span> login </span></a>   
    </div>
  </div>
</nav>
    <!-- navbar end here ---------------------------------------------- -->
    <!--caurousel here ---------------------------------------------- -->
  
     <div class="row">
         <div class="col-md-6">
              <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Carousel indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>   
                <!-- Wrapper for carousel items -->
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="../images/img1.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="carousel-item">
                    <img src="../images/img2.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="carousel-item">
                    <img src="../images/img3.jpg" class="img-fluid" alt="">
                  </div>            
                </div>
                <!-- Carousel controls -->
                <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                  <span><i class="fa fa-angle-left"></i></span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                  <span><i class="fa fa-angle-right"></i></span>
                </a>
             </div>
         </div>
      <div class="col-md-6">
           <!--  addmission form -->
          <?php include('../includes/addmision_form.php') ?>

      </div> 
   </div>







<div class="w3-container w3-padding-32 w3-theme-d1">
  <h1>Places to Visit</h1>
</div>

<div class="w3-row-padding w3-theme">

<div class="w3-third w3-section">
<div class="w3-card-4">
<img src="img_5terre.jpg" style="width:100%">
<div class="w3-container w3-white">
<h4>Cinque Terre</h4>
<p>The Cinque Terre (five lands) is a portion of the Italian Riviera. The coastline with five villages: Monterosso, Vernazza, Corniglia, Manarola, and Riomaggiore
is a UNESCO World Heritage Site.</p>
</div>
</div>
</div>

<div class="w3-third w3-section">
<div class="w3-card-4">
<img src="img_monterosso.jpg" style="width:100%">
<div class="w3-container w3-white">
<h4>Monterosso</h4>
<p>Monterosso al Mare is located at the center of a small natural gulf, protected by a small artificial reef,
in the Riviera of La Spezia. It is the northernmost village of the Cinque Terre.</p>
</div>
</div>
</div>

<div class="w3-third w3-section">
<div class="w3-card-4">
<img src="img_vernazza.jpg" style="width:100%">
<div class="w3-container w3-white">
<h4>Vernazza</h4>
<p>Vernazza is another of the five towns in the region. Vernazza is the fourth town heading north. It has no car traffic, and is one of the truest
"fishing villages" on the Italian Riviera.
</div>
</div>
<br><br><br>
</div>
</div>
<div class="w3-container w3-theme-d4">
<p class="w3-large">Europe Italy</p>
</div>


    
     
    
  

<!---------------------------------------- -scrollpy start her----------------------------------- -->

<div class="w3-container w3-teal">
  <h1>Summer 2015</h1>
</div>

<div class="w3-row-padding w3-margin-top">
  <div class="w3-third">
    <div class="w3-card">
      <img src="../images/img_5terre.jpg" style="width:100%">
      <div class="w3-container">
        <h5>5 Terre</h5>
      </div>
    </div>
  </div>

  <div class="w3-third">
    <div class="w3-card">
      <img src="../images/img_monterosso.jpg" style="width:100%">
      <div class="w3-container">
        <h5>Monterosso</h5>
      </div>
    </div>
  </div>

  <div class="w3-third">
    <div class="w3-card">
      <img src="../images/img_vernazza.jpg" style="width:100%">
      <div class="w3-container">
        <h5>Vernazza</h5>
      </div>
    </div>
  </div>
</div>

<div class="w3-row-padding w3-margin-top">
  <div class="w3-third">
    <div class="w3-card">
      <img src="../images/img_manarola.jpg" style="width:100%">
      <div class="w3-container">
        <h5>Manarola</h5>
      </div>
    </div>
  </div>

  <div class="w3-third">
    <div class="w3-card">
      <img src="../images/img_corniglia.jpg" style="width:100%">
      <div class="w3-container">
        <h5>Corniglia</h5>
      </div>
    </div>
  </div>

  <div class="w3-third">
    <div class="w3-card">
      <img src="../images/img_riomaggiore.jpg" style="width:100%">
      <div class="w3-container">
        <h5>Riomaggiore</h5>
      </div>
    </div>
  </div>
</div>


<!-- team -->
<div class="team-w3l" id="team">
  <div class="container">
    <h3 class="w3l-title">Our Skilled Buiders</h3>
    <div class="w3layouts_header">
      <p><i class="fa fa-graduation-cap" aria-hidden="true"></i></p>
    </div>
    <div class="team-w3l-grid">
      <div class="col-md-4 col-xs-4 about-poleft t1">
        <div class="about_img"><img src="images/d1.jpeg" alt="">
          <h5>Panshak</h5>
          <div class="about_opa">
          <p>Arc.</p>
          <p>CEO</p>
          <ul class="fb_icons2 text-center">
            <li><a class="fa fa-facebook" href="#"></a></li>
            <li><a class="fa fa-twitter" href="#"></a></li>
            <li><a class="fa fa-google" href="#"></a></li>
            <li><a class="fa fa-linkedin" href="#"></a></li>
            <li><a class="fa fa-pinterest-p" href="#"></a></li>
          </ul>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-xs-4 about-poleft t2">
        <div class="about_img"><img src="images/stev.jpeg" alt="">
          <h5>Diyong</h5>
          <div class="about_opa">
          <p>Surveyor</p>
          <p>Coordinator</p>
          <ul class="fb_icons2 text-center">
            <li><a class="fa fa-facebook" href="#"></a></li>
            <li><a class="fa fa-twitter" href="#"></a></li>
            <li><a class="fa fa-google" href="#"></a></li>
            <li><a class="fa fa-linkedin" href="#"></a></li>
            <li><a class="fa fa-pinterest-p" href="#"></a></li>
          </ul>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-xs-4 about-poleft t3">
        <div class="about_img"><img src="images/d2.jpeg" alt="">
          <h5>Felix</h5>
          <div class="about_opa">
          <p>Engr.</p>
          <ul class="fb_icons2 text-center">
            <li><a class="fa fa-facebook" href="#"></a></li>
            <li><a class="fa fa-twitter" href="#"></a></li>
            <li><a class="fa fa-google" href="#"></a></li>
            <li><a class="fa fa-linkedin" href="#"></a></li>
            <li><a class="fa fa-pinterest-p" href="#"></a></li>
          </ul>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
    <div class="team-w3l-grid grid-2-team">
      <div class="col-md-4 col-xs-4 about-poleft t1">
        <div class="about_img"><img src="images/d4.jpeg" alt="">
          <h5>Blessing</h5>
          <div class="about_opa">
          <p>Surpervisor</p>
          <ul class="fb_icons2 text-center">
            <li><a class="fa fa-facebook" href="#"></a></li>
            <li><a class="fa fa-twitter" href="#"></a></li>
            <li><a class="fa fa-google" href="#"></a></li>
            <li><a class="fa fa-linkedin" href="#"></a></li>
            <li><a class="fa fa-pinterest-p" href="#"></a></li>
          </ul>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-xs-4 about-poleft t2">
        <div class="about_img"><img src="images/d5.jpeg" alt="">
          <h5>Latap</h5>
          <div class="about_opa">
          <p>Brick Layers</p>
          <ul class="fb_icons2 text-center">
            <li><a class="fa fa-facebook" href="#"></a></li>
            <li><a class="fa fa-twitter" href="#"></a></li>
            <li><a class="fa fa-google" href="#"></a></li>
            <li><a class="fa fa-linkedin" href="#"></a></li>
            <li><a class="fa fa-pinterest-p" href="#"></a></li>
          </ul>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-xs-4 about-poleft t3">
        <div class="about_img"><img src="images/d6.jpeg" alt="">
          <h5>Austin</h5>
          <div class="about_opa">
          <p>Brick Layers</p>
          <ul class="fb_icons2 text-center">
            <li><a class="fa fa-facebook" href="#"></a></li>
            <li><a class="fa fa-twitter" href="#"></a></li>
            <li><a class="fa fa-google" href="#"></a></li>
            <li><a class="fa fa-linkedin" href="#"></a></li>
            <li><a class="fa fa-pinterest-p" href="#"></a></li>
          </ul>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</div>
<!-- //team -->

<div id="section2" class="container-fluid">
  <h1>Section 2</h1>
  <p>Try to scroll this section Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum. and look at the navigation bar while scrolling! Try to scroll this section and look aLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum. and look at the navigation bar while scrolling! Try to scroll this section and look aLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum. and look at the navigation bar while scrolling! Try to scroll this section and look aLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum. and look at the navigation bar while scrolling! Try to scroll this section and look aLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum. and look at the navigation bar while scrolling! Try to scroll this section and look aand look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
</div>
<div id="section3" class="container-fluid">
  <h1>Section 3</h1>
  <p>Try to scroll Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum. and look at the navigation bar while scrolling! Try to scroll this section and look aLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum. and look at the navigation bar while scrolling! Try to scroll this section and look aLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum. and look at the navigation bar while scrolling! Try to scroll this section and look aLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum. and look at the navigation bar while scrolling! Try to scroll this section and look aLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum. and look at the navigation bar while scrolling! Try to scroll this section and look aLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum. and look at the navigation bar while scrolling! Try to scroll this section and look aLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum. and look at the navigation bar while scrolling! Try to scroll this section and look aLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum. and look at the navigation bar while scrolling! Try to scroll this section and look aLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum. and look at the navigation bar while scrolling! Try to scroll this section and look aLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum. and look at the navigation bar while scrolling! Try to scroll this section and look aLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum. and look at the navigation bar while scrolling! Try to scroll this section and look aLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum. and look at the navigation bar while scrolling! Try to scroll this section and look aLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum. and look at the navigation bar while scrolling! Try to scroll this section and look aLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum. and look at the navigation bar while scrolling! Try to scroll this section and look athis section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
</div>
<div id="section41" class="container-fluid">
  <h1>Section 4 Submenu 1</h1>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
</div>
<div id="section42" class="container-fluid">
  <h1>Section 4 Submenu 2</h1>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
</div>




  </body>
</html>
