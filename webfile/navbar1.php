<?php  ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="./bootstrap/css/mystyle.css">
  <link rel="stylesheet" href="../bootstrap/css/w3.css">
  <link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css"> 
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.main.css">
  <script src="../bootstrap/js/jquery.js"></script>
  <script src="../bootstrap/js/bootstrap.min.js"></script>
	<title></title>

<style type="text/css">

/*-- nav --*/
.main_section_agile {
    background: #002147;
}
.navbar-default {
    background: none;
    border: none;
}
.navbar {
    margin-bottom: 0;
}
.navbar-collapse {
    padding: 0;
}
.navbar-right {
    margin-right: 0;
}
.navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus {
    color:#ffb71c;
    background:none;
}
.navbar-default .navbar-nav > .active > a:before{
	background: #ffb71c;
	transform: translateX(0);
	-webkit-transform: translateX(0);
	-moz-transform: translateX(0);
	-o-transform: translateX(0);
	-ms-transform: translateX(0);
}
.navbar-default .navbar-nav > li > a {
    font-weight: 700;
    letter-spacing: 1px;
}
.navbar-nav > li > a {
    margin: 0 1.5em;
    padding: 0 0 0.5em;
    text-transform: uppercase;
}
.navbar-default .navbar-nav > li > a:hover{
    color:#ffb71c;
}
.navbar-default .navbar-nav > li > a:focus {
    color: #ffb71c;
	outline:none;
}
nav.navbar.navbar-default {
    background: none;
	padding: 1.7em 0 0.2em 0;
}
.navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:hover, .navbar-default .navbar-nav > .open > a:focus {
    color: #262c38;
    background: none;
}
.navbar-default .navbar-nav > li > a {
    color:#fff;
}
.navbar-default .navbar-nav  > .active.open > a:focus {
	background:transparent;
	color: #fff;
}
a.navbar-brand {
    color: #fff!important;
    padding: 0;
    font-size: 0.9em;
    font-weight: 700;
    text-transform: uppercase;
    font-style: italic;
}
a.navbar-brand i{
	color:#ffb71c;
}
.navbar-right {
    float: left !important;
}
div#bs-example-navbar-collapse-1 {
    margin-top: .3em;
    padding-left: 4em;
}
.agile_short_dropdown {
    border-radius: 0;
    background: #ffffff;
    text-align: center;
	padding:0;
	border: none;
}
.agile_short_dropdown li a{
	text-transform:uppercase;
	color:#212121;
	font-size:13px;
	font-weight:600;
	padding: .8em 0;
	border-bottom: 1px solid #ececef;
}
.agile_short_dropdown > li > a:hover{
    color: #fff;
    text-decoration: none;
    background-color:#0ac876;
}
.effect-3 {
	overflow: hidden;
}
.effect-3:before {
	left: -1px;
	bottom: 0;
	width: 100%;
	height: 2px;
	background:#ffb71c;
	content: '';
    position: absolute;
    transition: transform .5s ease;
	transform: translateX(-100%);
	-webkit-transform: translateX(-100%);
	-moz-transform: translateX(-100%);
	-o-transform: translateX(-100%);
	-ms-transform: translateX(-100%);
}
.effect-3:hover:before {
	transform: translateX(0);
	-webkit-transform: translateX(0);
	-moz-transform: translateX(0);
	-o-transform: translateX(0);
	-ms-transform: translateX(0);
}
.agileits_w3layouts_banner_nav {
    margin: 0 auto;
    width: 90%;
}
ul.agile_forms {
    float: right;
    padding-top: .5em;
}
ul.agile_forms li a {
    background:#ffb71c;
    color: #fff;
    font-size: 0.9em;
    padding: 8px 1em;
    text-transform: uppercase;
    letter-spacing: 1px;
	border-radius: 30px;
	-webkit-border-radius: 30px;
	-o-border-radius: 30px;
	-moz-border-radius: 30px;
	-ms-border-radius: 30px;
}
ul.agile_forms li a:hover{
	background: #fff;
	color:#000;
}
ul.agile_forms li{
	display:inline-block;
	list-style:none;	
}
</style>
</head>
<body>
  <div class="main_section_agile" id="home" style="background-color:#333333;">
	<div class="agileits_w3layouts_banner_nav">
		<nav class="navbar navbar-default">
			<div class="navbar-header navbar-left">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			<h1><a class="navbar-brand" href="index.html"><i class="fa fa-gavel " aria-hidden="true"></i> Depans </a></h1>

			</div>
			
			<ul class="agile_forms">
				<li><a class="active" href="students/index.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Sign In now</a></li>
				<li><a class="active" href="students/logout.php"><i class="fa fa-sign-in" aria-hidden="true"></i>Register</a></li>
			
			</ul>
			
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1" style="font-weight: bold; font-size: 1.2em;">
				<nav class="link-effect-2 " id="link-effect-2">
					<ul class="nav navbar-nav">
						<li class="active"><a href="index.html" class="effect-3">Home</a></li>
						<li><a href="#about" class="effect-3 scroll">About Us</a></li>
						<li><a href="#services" class="effect-3 scroll">Services</a></li>
						<li><a href="#team" class="effect-3 scroll">Team</a></li>
						<li><a href="#gallery" class="effect-3 scroll">Gallery</a></li>
						<li><a href="#mail" class="effect-3 scroll">Mail Us</a></li>
					</ul>
				</nav>

			</div>
		</nav>	
		<div class="clearfix"> </div> 
	</div>
</div>

</body>
</html>