<?php
require 'connectsmart1.php';
if (mysqli_connect_error()){

die("Could not connect to database.");
}else{
session_start();
}
?>
<html>
<head>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Smart but Poor- a new approach to work!</title>

    <link rel="icon" href="nxdicon.ico" type="image/x-icon">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/
bootstrap.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/
bootstrap-theme.min.css">
 <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
body {
    background-color: black;
     

padding-top:0px;
padding-left:0px;
padding-right:0px;

}
.container {
width:100%;
padding-top:0px;
padding-left:0px;
padding-right:0px;

}
.box1{
background-image:url("london1.jpg");
       background-repeat: no-repeat;
width:100%;
height:350px;
background-size:cover;
background-position:center;
overflow-x: hidden;
padding-top: 55px;
padding-bottom: 280px;
text-align: center;
overflow-y:hidden;
}
.bigbox{
background-color:white;
size: 12px;
padding-left: 45px;
padding-right: 45px;
text-align: justify;
color: black;
padding-bottom:  50px;
}
.big{


color: white;
size: 12px;

text-align: center;
padding-bottom: 10px;
}
.links{
	background-color: black;
	
color: white;
size: 12px;
padding: 3px;
text-align: center;
position: fixed;
  bottom: 0px;
  right: 0;
  margin-right: 0px;
  margin-left: 0px;
  width: 100%;
}
.small{
color: black;
size: 12px;
padding:22px;
text-align: center;
padding-bottom: 20px;
border-radius:15px;
background-color: silver;
}

.footer{
background-color: #FAD3F6;
    background-image:url("stuttgart2.jpg");
    background-repeat: no-repeat;
width:100%;
height:200px;
background-size:cover;
background-position:center;

padding-left:0px;
padding-right:0px;
 overflow-x:hidden;

}
</style>

</head>
<body>
<body data-spy="scroll" data-target=".navbar-collapse">
<div class="container "> 
<div class="navbar navbar-inverse navbar-fixed-top bar">

<div class="navbar-header">
<a href="index.php" class="navbar-brand">Smart but Poor</a>
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> 
<span class="sr-only">Toggle menu</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
</div>

<div class="collapse navbar-collapse bar">

<ul class="nav navbar-nav bar">
<li ><a href="index.php">Home</a></li>
<li ><a href="student1.php">Students</a></li>
<li><a href="employer1.php">Employers</a></li>
<li class="active"><a href="agency1.php">Agencies</a></li>
<li><a href="jobs.php">Latest Jobs</a></li>
<li><a href="faq.php">FAQ</a></li>
<li><a href="contact.php">Contact</a></li>
</ul>
</div>
</div>
</div>
<div class="container box1">
<img class="img-responsive" src="smartlogo.png" align="right">
<div class="row">
<div class="col-md-12 big">


<h2><b>SMART BUT POOR FOR AGENCIES</b></h2>
</div>
</div>
</div>
<div class="container bigbox">
<br />
<br />
<div class="row">
<div class="col-md-12 ">
<h2>Agency Dashboard</h2>
<h4>Welcome</h4>

<h4>Please use the links below to manage your vacancies and employees.</h4>
<br />
<br />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
<br />

<br />

</div>
</div>

</div>
<div class="container footer">
<div class="row">
<div class="col-md-12 big links">
<p><a href="index.php">Home</a>|<a href="student1.php">Students</a>|<a href="studentlogin.php">Student Login</a>|<a href="studentsignup.php">Student Signup</a>|<a href="agency1.php">Agency</a>|<a href="agencylogin.php">Agency Login</a>|<a href="agencysignup.php">Agency Signup</a>|<a href="employer1.php">Employer</a>|<a href="employerlogin.php">Employer Login</a>|<a href="employersignup.php">Employer Signup</a>|<a href="jobs.php">Jobs</a>|<a href="faq.php">FAQ</a>|<a href="contact.php">Contact</a>|</p>
</div>
</div>
</div>



</body>
</html>