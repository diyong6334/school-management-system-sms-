<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="./bootstrap/css/mystyle.css">
  <link rel="stylesheet" href="../bootstrap/css/w3.css">
  <link rel="stylesheet" href="./font-awesome-4.7.0/css/font-awesome.min.css"> 
  <link rel="stylesheet" href="./bootstrap/css/bootstrap.main.css">
  <script src="./bootstrap/js/jquery.js"></script>
  <script src="./bootstrap/js/bootstrap.min.js"></script>
  <style>
body {
  font-family: 'Varela Round', sans-serif;
}
.form-control {
  box-shadow: none;   
  font-weight: normal;
  font-size: 13px;
}
.navbar {
  background: #fff;
  padding-left: 16px;
  padding-right: 16px;
  border-bottom: 1px solid #dfe3e8;
  border-radius: 0;
}
.nav-link img {
  border-radius: 50%;
  width: 36px;
  height: 36px;
  margin: -8px 0;
  float: left;
  margin-right: 10px;
}
.navbar .navbar-brand {
  padding-left: 0;
  font-size: 20px;
  padding-right: 50px;
}
.navbar .navbar-brand b {
  color: #33cabb;   
}
.navbar .form-inline {
  display: inline-block;
}
.navbar a {
  color: #888;
  font-size: 15px;
}
.search-box {
  position: relative;
} 
.search-box input {
  padding-right: 35px;
  border-color: #dfe3e8;
  border-radius: 4px !important;
  box-shadow: none
}
.search-box .input-group-text {
  min-width: 35px;
  border: none;
  background: transparent;
  position: absolute;
  right: 0;
  z-index: 9;
  padding: 7px;
  height: 100%;
}
.search-box i {
  color: #a0a5b1;
  font-size: 19px;
}
.navbar .sign-up-btn {
  min-width: 110px;
  max-height: 36px;
}
.navbar .dropdown-menu {
  color: #999;
  font-weight: normal;
  border-radius: 1px;
  border-color: #e5e5e5;
  box-shadow: 0 2px 8px rgba(0,0,0,.05);
}
.navbar a, .navbar a:active {
  color: #888;
  padding: 8px 20px;
  background: transparent;
  line-height: normal;
}
.navbar .navbar-form {
  border: none;
}
.navbar .action-form {
  width: 280px;
  padding: 20px;
  left: auto;
  right: 0;
  font-size: 14px;
}
.navbar .action-form a {    
  color: #33cabb;
  padding: 0 !important;
  font-size: 14px;
}
.navbar .action-form .hint-text {
    text-align: center;
    margin-bottom: 15px;
    font-size: 13px;
}
.navbar .btn-primary, .navbar .btn-primary:active {
  color: #fff;
  background: #33cabb !important;
  border: none;
} 
.navbar .btn-primary:hover, .navbar .btn-primary:focus {    
  color: #fff;
  background: #31bfb1 !important;
}
.navbar .social-btn .btn, .navbar .social-btn .btn:hover {
  color: #fff;
  margin: 0;
  padding: 0 !important;
  font-size: 13px;
  border: none;
  transition: all 0.4s;
  text-align: center;
  line-height: 34px;
  width: 47%;
  text-decoration: none;
}
.navbar .social-btn .facebook-btn {
  background: #507cc0;
}
.navbar .social-btn .facebook-btn:hover {
  background: #4676bd;
}
.navbar .social-btn .twitter-btn {
  background: #64ccf1;
}
.navbar .social-btn .twitter-btn:hover {
  background: #4ec7ef;
}
.navbar .social-btn .btn i {
  margin-right: 5px;
  font-size: 16px;
  position: relative;
  top: 2px;
}
.or-seperator {
  margin-top: 32px;
  text-align: center;
  border-top: 1px solid #e0e0e0;
}
.or-seperator b {
  color: #666;
  padding: 0 8px;
  width: 30px;
  height: 30px;
  font-size: 13px;
  text-align: center;
  line-height: 26px;
  background: #fff;
  display: inline-block;
  border: 1px solid #e0e0e0;
  border-radius: 50%;
  position: relative;
  top: -15px;
  z-index: 1;
}
.navbar .action-buttons .dropdown-toggle::after {
  display: none;
}
.form-check-label input {
  position: relative;
  top: 1px;
}
@media (min-width: 1200px){
  .form-inline .input-group {
    width: 300px;
    margin-left: 30px;
  }
}
@media (max-width: 768px){
  .navbar .dropdown-menu.action-form {
    width: 100%;
    padding: 10px 15px;
    background: transparent;
    border: none;
  }
  .navbar .form-inline {
    display: block;
  }
  .navbar .input-group {
    width: 100%;
  }
}
/* acordium start here 9999999999999999999999999999999999999999999 */
/* courousel start here 9999999999999999999999999999999999999999999 */
.carousel {
  margin: 25px 0 50px;
    background: #fff;
  position: relative;
  padding: 8px;
  box-shadow: 0 0 1px rgba(0,0,0,0.3);
}
.carousel:before, .carousel:after {
  z-index: -1; 
  position: absolute; 
  content: "";
  bottom: 15px;
  left: 10px;
  width: 50%; 
  top: 80%;
  max-width: 400px;
  background: rgba(0, 0, 0, 0.7); 
  box-shadow: 0 15px 10px rgba(0, 0, 0, 0.7);
  transform: rotate(-3deg);
}
.carousel:after {
  transform: rotate(3deg);
  right: 10px;
  left: auto;
}
.carousel .carousel-item {  
    text-align: center;
  min-height: 200px;
}
.carousel .carousel-item img {
  max-width: 100%;
    margin: 0 auto; /* Align slide image horizontally center in Bootstrap v3 */
}
.carousel-control-prev, .carousel-control-next {
  width: 27px;
  height: 54px;
  overflow: hidden;
  opacity: 1;
  margin: auto 0;
  background: none;
  text-shadow: none;
}
.carousel-control-prev span, .carousel-control-next span {
  width: 54px;
    height: 54px;
  display: inline-block;
    background: #4a4a4a;    
    border-radius: 50%;
    box-shadow: 0 0 1px rgba(0,0,0,0.3);
}
.carousel-control-prev span {
  margin-right: -27px;
}
.carousel-control-next span {
  margin-left: -27px;
}
.carousel-control-prev:hover span, .carousel-control-next:hover span {
  background: #3b3b3b;
}
.carousel-control-prev i, .carousel-control-next i {
    font-size: 24px;
    margin-top: 13px;
}
.carousel-control-prev {
  margin-left: -28px;
}
.carousel-control-next {
  margin-right: -28px;
}
.carousel-control-prev i {
  margin-left: -24px;
}
.carousel-control-next i {
  margin-right: -24px;
}
.carousel-indicators {
  bottom: -42px;
}
.carousel-indicators li, .carousel-indicators li.active {
  width: 11px;
  height: 11px;
  border-radius: 50%;
  margin: 1px 4px;
}
.carousel-indicators li {
  border: 1px solid #475c6f;
}
.carousel-indicators li.active {
  background: #20b0b9;
  border-color: #20b0b9;


</style>


<body>
  <div class="col-lg-3">
            <div class="accordion mb-auto" id="accordionExample">
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
                                <li class="list-group-item"><a href="stinfo.php"><i class="fa fa-pencil"></i> student Info</a></li>
                                <li class="list-group-item"><a href="#"><i class="fa fa-pencil"></i> staff Info</a></li>
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

</body>

<!-- Mirrored from www.w3schools.com/w3css/tryit.asp?filename=tryw3css_tabulators_animate by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Jul 2018 01:53:21 GMT -->
</html>
