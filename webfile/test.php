<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Beautiful Bootstrap Navbar with Menu Icons</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
  background: #eeeeee;
  font-family: 'Varela Round', sans-serif;
}
.navbar {
  color: #fff;
  background: #926dde !important;
  padding: 5px 16px;
  border-radius: 0;
  border: none;
  box-shadow: 0 0 4px rgba(0,0,0,.1);
}
.navbar img {
  border-radius: 50%;
  width: 36px;
  height: 36px;
  margin-right: 10px;
}
.navbar .navbar-brand {
  color: #efe5ff;
  padding-left: 0;
  padding-right: 50px;
  font-size: 24px;    
}
.navbar .navbar-brand:hover, .navbar .navbar-brand:focus {
  color: #fff;
}
.navbar .navbar-brand i {
  font-size: 25px;
  margin-right: 5px;
}
.search-box {
  position: relative;
} 
.search-box input {
  padding-right: 35px;
  min-height: 38px;
  border: none;
  background: #faf7fd;
  border-radius: 3px !important;
}
.search-box input:focus {   
  background: #fff;
  box-shadow: none;
}
.search-box .input-group-addon {
  min-width: 35px;
  border: none;
  background: transparent;
  position: absolute;
  right: 0;
  z-index: 9;
  padding: 10px 7px;
  height: 100%;
}
.search-box i {
  color: #a0a5b1;
  font-size: 19px;
}
.navbar .nav-item i {
  font-size: 18px;
}
.navbar .nav-item span {
  position: relative;
  top: 3px;
}
.navbar .navbar-nav > a {
  color: #efe5ff;
  padding: 8px 15px;
  font-size: 14px;    
}
.navbar .navbar-nav > a:hover, .navbar .navbar-nav > a:focus {
  color: #fff;
  text-shadow: 0 0 4px rgba(255,255,255,0.3);
}
.navbar .navbar-nav > a > i {
  display: block;
  text-align: center;
}
.navbar .dropdown-item i {
  font-size: 16px;
  min-width: 22px;
}
.navbar .dropdown-item .material-icons {
  font-size: 21px;
  line-height: 16px;
  vertical-align: middle;
  margin-top: -2px;
}
.navbar .nav-item.open > a, .navbar .nav-item.open > a:hover, .navbar .nav-item.open > a:focus {
  color: #fff;
  background: none !important;
}
.navbar .dropdown-menu {
  border-radius: 1px;
  border-color: #e5e5e5;
  box-shadow: 0 2px 8px rgba(0,0,0,.05);
}
.navbar .dropdown-menu a {
  color: #777 !important;
  padding: 8px 20px;
  line-height: normal;
  font-size: 15px;
}
.navbar .dropdown-menu a:hover, .navbar .dropdown-menu a:focus {
  color: #333 !important;
  background: transparent !important;
}
.navbar .navbar-nav .active a, .navbar .navbar-nav .active a:hover, .navbar .navbar-nav .active a:focus {
  color: #fff;
  text-shadow: 0 0 4px rgba(255,255,255,0.2);
  background: transparent !important;
}
.navbar .navbar-nav .user-action {
  padding: 9px 15px;
  font-size: 15px;
}
.navbar .navbar-toggle {
  border-color: #fff;
}
.navbar .navbar-toggle .icon-bar {
  background: #fff;
}
.navbar .navbar-toggle:focus, .navbar .navbar-toggle:hover {
  background: transparent;
}
.navbar .navbar-nav .open .dropdown-menu {
  background: #faf7fd;
  border-radius: 1px;
  border-color: #faf7fd;
  box-shadow: 0 2px 8px rgba(0,0,0,.05);
}
.navbar .divider {
  background-color: #e9ecef !important;
}
@media (min-width: 1200px){
  .form-inline .input-group {
    width: 350px;
    margin-left: 30px;
  }
}
@media (max-width: 1199px){
  .navbar .navbar-nav > a > i {
    display: inline-block;      
    text-align: left;
    min-width: 30px;
    position: relative;
    top: 4px;
  }
  .navbar .navbar-collapse {
    border: none;
    box-shadow: none;
    padding: 0;
  }
  .navbar .navbar-form {
    border: none;     
    display: block;
    margin: 10px 0;
    padding: 0;
  }
  .navbar .navbar-nav {
    margin: 8px 0;
  }
  .navbar .navbar-toggle {
    margin-right: 0;
  }
  .input-group {
    width: 100%;
  }
}
</style>
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
        <a href="#" data-toggle="dropdown" class="nav-item nav-link dropdown-toggle user-action"><img src="https://www.tutorialrepublic.com/examples/images/avatar/3.jpg" class="avatar" alt="Avatar"> Antonio Moreno <b class="caret"></b></a>
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
</body>
</html>







<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap Accordion Menu for All Purpose</title>   
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
.accordion .card {
  color: #424e5d;
  border: 1px solid #dddddd;
}
.accordion .card a {
  color: #424e5d;
  text-decoration: none;        
}
.accordion .card-header {
  background: linear-gradient(#fff, #f1f1f1);
  padding: .75rem 1rem;
  position: relative;
}
.accordion .card-header:hover {
  background: linear-gradient(#f1f1f1, #e8e8e8);
}
.accordion .card-header h2 {
  font-size: 1rem;
}
.accordion .fa {
  width: 20px;
  margin-right: .25rem;
}
.accordion .card-header a {
  float: left;
  width: 100%;
  cursor: pointer;
}
.accordion .toggle {
  font-size: .8rem;
  line-height: .8rem;
  cursor: pointer;
  opacity: 0.7;
  position: absolute;
  right: 16px;
  top: 16px;
  width: 14px;
  margin: 0;
}
.accordion .toggle:hover {
  opacity: 1;
}
.accordion .card-body {
  padding: 0;
}
.accordion .list-group-item {       
  border-radius: 0;
  border-width: 1px 0 1px 0;
  padding-left: 30px;
  background: #d6dbe0;
  font-weight: 500;
}
.accordion .list-group-item:hover {
  background: #007bff;
}
.accordion .list-group-item:hover a {
  color: #fff !important;
}
.accordion .list-group-item:hover .badge{
  background: #fff;
  color: #007bff;
}
.accordion .list-group-item a {
  color: #61656b;
  display: block;
}
.accordion .list-group-item .badge {
  float: right;
  min-width: 36px;
}
.accordion .rotate{
  transform: rotate(180deg); 
}
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
        <h1 class="display-4">Hello, world!</h1>
        <p class="lead">This is a simple example of accordion menu that can easily be integrated into any Bootstrap template. You'll find many such examples at <a href="https://www.tutorialrepublic.com" target="_blank">tutorialrepublic.com</a>.</p>
        <hr class="my-4">           
        <a class="btn btn-primary btn-lg" href="https://www.tutorialrepublic.com/snippets/gallery.php" target="_blank">Learn more</a>
      </div>
    </div>
  </div>
</div>
</body>
</html>











<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap Testimonial Carousel with Quote Icon</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
  font-family: "Open Sans", sans-serif;
}
h2 {
  color: #000;
  font-size: 26px;
  font-weight: 300;
  text-align: center;
  text-transform: uppercase;
  position: relative;
  margin: 30px 0 70px;
}
h2::after {
  content: "";
  width: 100px;
  position: absolute;
  margin: 0 auto;
  height: 4px;
  border-radius: 1px;
  background: #1c47e3;
  left: 0;
  right: 0;
  bottom: -20px;
}
.carousel .carousel-item {
  color: #999;
  overflow: hidden;
  min-height: 120px;
  font-size: 13px;
}
.carousel .media img {
  width: 80px;
  height: 80px;
  display: block;
  border-radius: 50%;
}
.carousel .testimonial {
  padding: 0 15px 0 60px ;
  position: relative;
}
.carousel .testimonial::before {
  content: "\201C";
  font-family: Arial,sans-serif;
  color: #e2e2e2;
  font-weight: bold;
  font-size: 68px;
  line-height: 54px;
  position: absolute;
  left: 15px;
  top: 0;
}
.carousel .overview b {
  text-transform: uppercase;
  color: #1c47e3;
}
.carousel .carousel-indicators {
  bottom: -40px;
}
.carousel-indicators li, .carousel-indicators li.active {
  width: 20px;
  height: 20px;
  border-radius: 50%;
  margin: 1px 3px;
  box-sizing: border-box;
}
.carousel-indicators li { 
  background: #e2e2e2;
  border: 4px solid #fff;
}
.carousel-indicators li.active {
  color: #fff;
  background: #1c47e3;    
  border: 5px double;    
}
</style>
</head>
<body>
<div class="container-xl">
  <div class="row">
    <div class="col-sm-12">
      <h2>What <b>our customers</b> are saying</h2>
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
            <div class="row">
              <div class="col-sm-6">
                <div class="media">
                  <img src="/examples/images/clients/1.jpg" class="mr-3" alt="">
                  <div class="media-body">
                    <div class="testimonial">
                      <p>Lorem ipsum dolor sit amet, consec adipiscing elit. Nam eusem scelerisque tempor, varius quam luctus dui. Mauris magna metus nec.</p>
                      <p class="overview"><b>Paula Wilson</b>, Media Analyst</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="media">
                  <img src="/examples/images/clients/2.jpg" class="mr-3" alt="">
                  <div class="media-body">
                    <div class="testimonial">
                      <p>Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget mi suscipit tincidunt. Utmtc tempus dictum. Pellentesque virra.</p>
                      <p class="overview"><b>Antonio Moreno</b>, Web Developer</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>      
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-sm-6">
                <div class="media">
                  <img src="/examples/images/clients/3.jpg" class="mr-3" alt="">
                  <div class="media-body">
                    <div class="testimonial">
                      <p>Lorem ipsum dolor sit amet, consec adipiscing elit. Nam eusem scelerisque tempor, varius quam luctus dui. Mauris magna metus nec.</p>
                      <p class="overview"><b>Michael Holz</b>, Seo Analyst</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="media">
                  <img src="/examples/images/clients/4.jpg" class="mr-3" alt="">
                  <div class="media-body">
                    <div class="testimonial">
                      <p>Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget mi suscipit tincidunt. Utmtc tempus dictum. Pellentesque virra.</p>
                      <p class="overview"><b>Mary Saveley</b>, Web Designer</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>      
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-sm-6">
                <div class="media">
                  <img src="/examples/images/clients/5.jpg" class="mr-3" alt="">
                  <div class="media-body">
                    <div class="testimonial">
                      <p>Lorem ipsum dolor sit amet, consec adipiscing elit. Nam eusem scelerisque tempor, varius quam luctus dui. Mauris magna metus nec.</p>
                      <p class="overview"><b>Martin Sommer</b>, UX Analyst</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="media">
                  <img src="/examples/images/clients/6.jpg" class="mr-3" alt="">
                  <div class="media-body">
                    <div class="testimonial">
                      <p>Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget mi suscipit tincidunt. Utmtc tempus dictum. Pellentesque virra.</p>
                      <p class="overview"><b>John Williams</b>, Web Developer</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>






<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap Simple Success Confirmation Popup</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
  font-family: 'Varela Round', sans-serif;
}
.modal-confirm {    
  color: #636363;
  width: 325px;
  font-size: 14px;
}
.modal-confirm .modal-content {
  padding: 20px;
  border-radius: 5px;
  border: none;
}
.modal-confirm .modal-header {
  border-bottom: none;   
  position: relative;
}
.modal-confirm h4 {
  text-align: center;
  font-size: 26px;
  margin: 30px 0 -15px;
}
.modal-confirm .form-control, .modal-confirm .btn {
  min-height: 40px;
  border-radius: 3px; 
}
.modal-confirm .close {
  position: absolute;
  top: -5px;
  right: -5px;
} 
.modal-confirm .modal-footer {
  border: none;
  text-align: center;
  border-radius: 5px;
  font-size: 13px;
} 
.modal-confirm .icon-box {
  color: #fff;    
  position: absolute;
  margin: 0 auto;
  left: 0;
  right: 0;
  top: -70px;
  width: 95px;
  height: 95px;
  border-radius: 50%;
  z-index: 9;
  background: #82ce34;
  padding: 15px;
  text-align: center;
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
}
.modal-confirm .icon-box i {
  font-size: 58px;
  position: relative;
  top: 3px;
}
.modal-confirm.modal-dialog {
  margin-top: 80px;
}
.modal-confirm .btn {
  color: #fff;
  border-radius: 4px;
  background: #82ce34;
  text-decoration: none;
  transition: all 0.4s;
  line-height: normal;
  border: none;
}
.modal-confirm .btn:hover, .modal-confirm .btn:focus {
  background: #6fb32b;
  outline: none;
}
.trigger-btn {
  display: inline-block;
  margin: 100px auto;
}
</style>
</head>
<body>
<div class="text-center">
  <!-- Button HTML (to Trigger Modal) -->
  <a href="#myModal" class="trigger-btn" data-toggle="modal">Click to Open Confirm Modal</a>
</div>

<!-- Modal HTML -->
<div id="myModal" class="modal fade">
  <div class="modal-dialog modal-confirm">
    <div class="modal-content">
      <div class="modal-header">
        <div class="icon-box">
          <i class="material-icons">&#xE876;</i>
        </div>        
        <h4 class="modal-title w-100">Awesome!</h4> 
      </div>
      <div class="modal-body">
        <p class="text-center">Your booking has been confirmed. Check your email for detials.</p>
      </div>
      <div class="modal-footer">
        <button class="btn btn-success btn-block" data-dismiss="modal">OK</button>
      </div>
    </div>
  </div>
</div>     
</body>
</html>









<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap Simple Error Confirmation Popup</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
  font-family: 'Varela Round', sans-serif;
}
.modal-confirm {    
  color: #636363;
  width: 325px;
}
.modal-confirm .modal-content {
  padding: 20px;
  border-radius: 5px;
  border: none;
}
.modal-confirm .modal-header {
  border-bottom: none;   
  position: relative;
}
.modal-confirm h4 {
  text-align: center;
  font-size: 26px;
  margin: 30px 0 -15px;
}
.modal-confirm .form-control, .modal-confirm .btn {
  min-height: 40px;
  border-radius: 3px; 
}
.modal-confirm .close {
  position: absolute;
  top: -5px;
  right: -5px;
} 
.modal-confirm .modal-footer {
  border: none;
  text-align: center;
  border-radius: 5px;
  font-size: 13px;
} 
.modal-confirm .icon-box {
  color: #fff;    
  position: absolute;
  margin: 0 auto;
  left: 0;
  right: 0;
  top: -70px;
  width: 95px;
  height: 95px;
  border-radius: 50%;
  z-index: 9;
  background: #ef513a;
  padding: 15px;
  text-align: center;
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
}
.modal-confirm .icon-box i {
  font-size: 56px;
  position: relative;
  top: 4px;
}
.modal-confirm.modal-dialog {
  margin-top: 80px;
}
.modal-confirm .btn {
  color: #fff;
  border-radius: 4px;
  background: #ef513a;
  text-decoration: none;
  transition: all 0.4s;
  line-height: normal;
  border: none;
}
.modal-confirm .btn:hover, .modal-confirm .btn:focus {
  background: #da2c12;
  outline: none;
}
.trigger-btn {
  display: inline-block;
  margin: 100px auto;
}
</style>
</head>
<body>
<div class="text-center">
  <!-- Button HTML (to Trigger Modal) -->
  <a href="#myModal" class="trigger-btn" data-toggle="modal">Click to Open Confirm Modal</a>
</div>

<!-- Modal HTML -->
<div id="myModal" class="modal fade">
  <div class="modal-dialog modal-confirm">
    <div class="modal-content">
      <div class="modal-header">
        <div class="icon-box">
          <i class="material-icons">&#xE5CD;</i>
        </div>        
        <h4 class="modal-title w-100">Sorry!</h4> 
      </div>
      <div class="modal-body">
        <p class="text-center">Your transaction has failed. Please go back and try again.</p>
      </div>
      <div class="modal-footer">
        <button class="btn btn-danger btn-block" data-dismiss="modal">OK</button>
      </div>
    </div>
  </div>
</div>     
</body>
</html>                            








<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap Clean Warning Popup</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
  font-family: 'Varela Round', sans-serif;
}
.modal-confirm {  
  color: #8e8e8e;
  width: 450px;
}
.modal-confirm .modal-content {
  padding: 20px;
  border-radius: 5px;   
  border: none;
}
.modal-confirm .modal-header {
  border-bottom: none;   
  position: relative;
  justify-content: center;
  border-radius: 5px 5px 0 0;
}
.modal-confirm h4 {
  color: #545557;
  text-align: center;
  font-size: 30px;
  margin: 0 0 25px;
}
.modal-confirm .form-control, .modal-confirm .btn {
  min-height: 40px;
  border-radius: 3px; 
}
.modal-confirm .close {
  background: #c0c3c8;
  position: absolute;
  top: 15px;
  right: 15px;
  color: #fff;
  text-shadow: none;
  opacity: 0.5;
  width: 30px;
  height: 30px;
  padding: 0;
  border-radius: 20px;
  font-size: 16px;
}
.modal-confirm .close:hover {
  opacity: 0.8;
}
.modal-confirm .icon-box {
  color: #f95858;   
  display: inline-block;
  z-index: 9;
  text-align: center;
  position: relative;
  transform: scale(1.5);
}
.modal-confirm .icon-box i:first-child {
  font-size: 100px;
}
.modal-confirm .icon-box i:nth-child(2) {
  font-size: 138px;
  position: absolute;
  left: -19px;
  top: -23px;
  font-weight: bold;
  color: #fff;
}
.modal-confirm .icon-box i:last-child {
  font-size: 26px;
  position: absolute;
  left: 0;
  right: 0;
  margin: 0 auto;
  top: 44px;
}
.modal-confirm .btn {
  color: #fff;
  border-radius: 4px;
  background: #eeb711;
  text-decoration: none;
  transition: all 0.4s;
  line-height: normal;
  border-radius: 3px;
  margin: 30px 0 20px;
  padding: 6px 20px;
  min-width: 150px;
  border: none;
}
.modal-confirm .btn:hover, .modal-confirm .btn:focus {
  background: #eda645;
  outline: none;
}
.trigger-btn {
  display: inline-block;
  margin: 100px auto;
}
</style>
</head>
<body>
<div class="text-center">
  <!-- Button HTML (to Trigger Modal) -->
  <a href="#myModal" class="trigger-btn" data-toggle="modal">Click to Open Warning Modal</a>
</div>

<!-- Modal HTML -->
<div id="myModal" class="modal fade">
  <div class="modal-dialog modal-confirm">
    <div class="modal-content">
      <div class="modal-header">
        <div class="icon-box">
          <i class="material-icons">&#xE86B;</i>
          <i class="material-icons">&#xE86B;</i>
          <i class="material-icons">&#xE645;</i>
        </div>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span>&times;</span></button>
      </div>
      <div class="modal-body text-center">
        <h4>Something went wrong</h4> 
        <p>An unexpected error has occurred. Please try again later. Contact support if the error persists.</p>
        <button class="btn btn-primary" data-dismiss="modal">Go Back</button>
      </div>
    </div>
  </div>
</div>     
</body>
</html> 











<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap Elegant Error Modal</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
  font-family: 'Varela Round', sans-serif;
}
.modal-confirm {    
  color: #434e65;
  width: 525px;
}
.modal-confirm .modal-content {
  padding: 20px;
  font-size: 16px;
  border-radius: 5px;
  border: none;
}
.modal-confirm .modal-header {
  background: #e85e6c;
  border-bottom: none;   
  position: relative;
  text-align: center;
  margin: -20px -20px 0;
  border-radius: 5px 5px 0 0;
  padding: 35px;
}
.modal-confirm h4 {
  text-align: center;
  font-size: 36px;
  margin: 10px 0;
}
.modal-confirm .form-control, .modal-confirm .btn {
  min-height: 40px;
  border-radius: 3px; 
}
.modal-confirm .close {
  position: absolute;
  top: 15px;
  right: 15px;
  color: #fff;
  text-shadow: none;
  opacity: 0.5;
}
.modal-confirm .close:hover {
  opacity: 0.8;
}
.modal-confirm .icon-box {
  color: #fff;    
  width: 95px;
  height: 95px;
  display: inline-block;
  border-radius: 50%;
  z-index: 9;
  border: 5px solid #fff;
  padding: 15px;
  text-align: center;
}
.modal-confirm .icon-box i {
  font-size: 58px;
  margin: -2px 0 0 -2px;
}
.modal-confirm.modal-dialog {
  margin-top: 80px;
}
.modal-confirm .btn, .modal-confirm .btn:active {
  color: #fff;
  border-radius: 4px;
  background: #eeb711 !important;
  text-decoration: none;
  transition: all 0.4s;
  line-height: normal;
  border-radius: 30px;
  margin-top: 10px;
  padding: 6px 20px;
  min-width: 150px;
  border: none;
}
.modal-confirm .btn:hover, .modal-confirm .btn:focus {
  background: #eda645 !important;
  outline: none;
}
.trigger-btn {
  display: inline-block;
  margin: 100px auto;
}
</style>
</head>
<body>
<div class="text-center">
  <!-- Button HTML (to Trigger Modal) -->
  <a href="#myModal" class="trigger-btn" data-toggle="modal">Click to Open Error Modal</a>
</div>

<!-- Modal HTML -->
<div id="myModal" class="modal fade">
  <div class="modal-dialog modal-confirm">
    <div class="modal-content">
      <div class="modal-header justify-content-center">
        <div class="icon-box">
          <i class="material-icons">&#xE5CD;</i>
        </div>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body text-center">
        <h4>Ooops!</h4> 
        <p>Something went wrong. File was not uploaded.</p>
        <button class="btn btn-success" data-dismiss="modal">Try Again</button>
      </div>
    </div>
  </div>
</div>     
</body>
</html>













<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap Simple Data Table</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
    color: #566787;
    background: #f5f5f5;
    font-family: 'Roboto', sans-serif;
}
.table-responsive {
    margin: 30px 0;
}
.table-wrapper {
    min-width: 1000px;
    background: #fff;
    padding: 20px;
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {
    padding-bottom: 10px;
    margin: 0 0 10px;
    min-width: 100%;
}
.table-title h2 {
    margin: 8px 0 0;
    font-size: 22px;
}
.search-box {
    position: relative;        
    float: right;
}
.search-box input {
    height: 34px;
    border-radius: 20px;
    padding-left: 35px;
    border-color: #ddd;
    box-shadow: none;
}
.search-box input:focus {
    border-color: #3FBAE4;
}
.search-box i {
    color: #a0a5b1;
    position: absolute;
    font-size: 19px;
    top: 8px;
    left: 10px;
}
table.table tr th, table.table tr td {
    border-color: #e9e9e9;
}
table.table-striped tbody tr:nth-of-type(odd) {
    background-color: #fcfcfc;
}
table.table-striped.table-hover tbody tr:hover {
    background: #f5f5f5;
}
table.table th i {
    font-size: 13px;
    margin: 0 5px;
    cursor: pointer;
}
table.table td:last-child {
    width: 130px;
}
table.table td a {
    color: #a0a5b1;
    display: inline-block;
    margin: 0 5px;
}
table.table td a.view {
    color: #03A9F4;
}
table.table td a.edit {
    color: #FFC107;
}
table.table td a.delete {
    color: #E34724;
}
table.table td i {
    font-size: 19px;
}    
.pagination {
    float: right;
    margin: 0 0 5px;
}
.pagination li a {
    border: none;
    font-size: 95%;
    width: 30px;
    height: 30px;
    color: #999;
    margin: 0 2px;
    line-height: 30px;
    border-radius: 30px !important;
    text-align: center;
    padding: 0;
}
.pagination li a:hover {
    color: #666;
} 
.pagination li.active a {
    background: #03A9F4;
}
.pagination li.active a:hover {        
    background: #0397d6;
}
.pagination li.disabled i {
    color: #ccc;
}
.pagination li i {
    font-size: 16px;
    padding-top: 6px
}
.hint-text {
    float: left;
    margin-top: 6px;
    font-size: 95%;
}    
</style>
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
</head>
<body>
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Customer <b>Details</b></h2></div>
                    <div class="col-sm-4">
                        <div class="search-box">
                            <i class="material-icons">&#xE8B6;</i>
                            <input type="text" class="form-control" placeholder="Search&hellip;">
                        </div>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name <i class="fa fa-sort"></i></th>
                        <th>Address</th>
                        <th>City <i class="fa fa-sort"></i></th>
                        <th>Pin Code</th>
                        <th>Country <i class="fa fa-sort"></i></th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Thomas Hardy</td>
                        <td>89 Chiaroscuro Rd.</td>
                        <td>Portland</td>
                        <td>97219</td>
                        <td>USA</td>
                        <td>
                            <a href="#" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                            <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Maria Anders</td>
                        <td>Obere Str. 57</td>
                        <td>Berlin</td>
                        <td>12209</td>
                        <td>Germany</td>
                        <td>
                            <a href="#" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                            <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Fran Wilson</td>
                        <td>C/ Araquil, 67</td>
                        <td>Madrid</td>
                        <td>28023</td>
                        <td>Spain</td>
                        <td>
                            <a href="#" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                            <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Dominique Perrier</td>
                        <td>25, rue Lauriston</td>
                        <td>Paris</td>
                        <td>75016</td>
                        <td>France</td>
                        <td>
                            <a href="#" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                            <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Martin Blank</td>
                        <td>Via Monte Bianco 34</td>
                        <td>Turin</td>
                        <td>10100</td>
                        <td>Italy</td>
                        <td>
                            <a href="#" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                            <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>        
                </tbody>
            </table>
            <div class="clearfix">
                <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link"><i class="fa fa-angle-double-right"></i></a></li>
                </ul>
            </div>
        </div>
    </div>  
</div>   
</body>
</html>                           