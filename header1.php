<?php include("../include/connect.php"); 
 include("navbar.php");

session_start();
if (!isset($_SESSION['email'])) { 
		header('location: index.php');
	} else {
	    echo "";
	}
	
$email= $_SESSION['email'];

 include('processing.php');
 
 

?>



<!DOCTYPE html>
<html>
<head>
  <title>Dashboard | <?php echo $site_name;  ?></title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">

   <!--CSS-->
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">

    <!-- Bootstrap Core CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet">

     <!-- Font Awesome -->
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

      <!-- Custom CSS -->
      <link href="css/blog-home.css" rel="stylesheet">

      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]-->
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
          <script src="js/jquery.js"></script>
          <script src="js/bootstrap.js"></script>
<style>
    body{
      background-color:#fff;
    }
  .zux-btn{
    border:2px solid #00aee6;
    border-radius: 0px;
  }
  .zux-btn-font{
    padding: 5px 25px;
  }
  /*
      SIGNUP FORMS
  */
  .input-danger{
    border:1px solid darkred;
    color:darkred;
  }
  .input-danger::placeholder{
    opacity: 0.6;
    color:darkred;
  }
</style>

<style>
/* MOBILE SIDEBAR CSS *//* MOBILE SIDEBAR CSS *//* MOBILE SIDEBAR CSS *//* MOBILE SIDEBAR CSS */
  .sidenav {
      height: 100%;
      width: 0;
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
      background-color:#f8f8f8;
      box-shadow: 0 0 4px 0 rgba(0,0,0,.50), 0 2px 4px 0 rgba(0,0,0,.50);
      overflow-x: hidden;
      padding-top: 60px;
  }
  .sidenav ul{
      margin-left: -30px;
  }
  .sidenav li a:hover{
    color: #265a88;
  }

  .sidenav a {
      padding:10px 10px;
      text-decoration: none;
      font-size:18px;
      color: #123962;
      display: block;
      transition: 0.3s

  }

  .sidenav a:hover, .offcanvas a:focus{
      color: #123962;
  }

  .closebtn {
      margin-top: -130px;
      margin-left: 190px;
      font-size: 25px !important;
      color:gray !important;
      font-weight: lighter;
    
  }
  .sidenav ul li{
    list-style: none;
  }

  @media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 14px;}
  }
  /* /MOBILE SIDEBAR CSS *//* MOBILE SIDEBAR CSS *//* MOBILE SIDEBAR CSS *//* MOBILE SIDEBAR CSS */
</style>
</head>

<body>
  <!-- MOBILE Side bar starts here--><!-- MOBILE Side bar starts here--><!-- MOBILE Side bar starts here-->
   <div id="mySidenav" class="sidenav">
    <br><br><br><br><br><br>
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class="fa fa-times"></i></a>
             <ul>
                
                <br><br>
                 <li class="active"><a href="dashboard.php"><i class="fa fa-th-large"></i> Dashboard</a></li>
                <li><a href="site_settings.php"><i class="fa fa-plus"></i>
                Site Settings </a></li>
                <li><a href="slide.php"><i class="fa fa-plus"></i>
                Slide Ads </a></li>
                <li><a href="products.php"><i class="fa fa-plus"></i>Products</a></li>
                <li><a href="trend_list.php"><i class="fa fa-plus"></i>Trending</a></li>
                <li><a href="top_rated.php"><i class="fa fa-plus"></i>Top Rated</a></li>
                <li><a href="orders.php"><i class="fa fa-plus"></i>Orders</a></li> 
                 <li><a href="send_message.php"><i class="fa fa-plus"></i> Send Message</a></li>
                 <li><a href="messages.php"><i class="fa fa-wechat"></i> Messages</a></li>
                 <li><a href="settings.php"><i class="fa fa-cogs"></i> Settings</a></li>
                 <li><a href="logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
                 <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
               </ul>    
  </div>
  <script>
  function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
  }

  function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
  }
  </script>
  <!-- MOBILE Side bar starts here--><!-- MOBILE Side bar starts here--><!-- MOBILE Side bar starts here-->
  <!-- DESTOP Side bar starts here--><!-- DESTOP Side bar starts here--><!-- DESTOP Side bar starts here-->
  <style>
    .destop-siderbar{
      background-color: #f8f8f8;
      height: 100%;
      width:250px;
      box-shadow: 0 0 4px 0 rgba(0,0,0,.50), 0 2px 4px 0 rgba(0,0,0,.50);
      position: fixed;
      margin-left: -60px;
    }
    .destop-siderbar li{
       padding: 10px 20px;
       list-style: none;
    }
    .destop-siderbar li a{
      color: #123962;
      font-size: 17px;
    }
    .destop-siderbar .active {
      background-color:#123962;
      box-shadow: 0 0 4px 0 rgba(0,0,0,.50), 0 2px 4px 0 rgba(0,0,0,.50);
      
    }
    .destop-siderbar .active a{
      color:#fff;
    }
    .destop-siderbar .active a:hover{
      color:#fff;
    }
    .destop-siderbar li a:hover{
      color: #265a88;
      text-decoration: none;
    }
  </style>
  <!-- DESTOP Side bar starts here--><!-- DESTOP Side bar starts here--><!-- DESTOP Side bar starts here-->
  <!--Side bar stops here-->
  <!--
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12" align="right">
        <h2><small>Total Balance</small></h2>
        <p><i class="fa fa-usd"> 4,563.47</i> <i class="fa fa-exchange"></i> <i class="fa fa-btc"></i> 0.3238</p>
      </div>
    </div>
  </div>-->

  <div class="container-fluid">
    <div class="row">
      <br><br><br>
      <!-- DESTOP Side bar starts here--><!-- DESTOP Side bar starts here--><!-- DESTOP Side bar starts here-->
      <div class="col-sm-2 hidden-xs" style="background-color: #f8f8f8; height: 100%;  ">
              <ul class="destop-siderbar">
                <br><br>
                 <li class="active"><a href="dashboard.php"><i class="fa fa-th-large"></i> Dashboard</a></li>
                <li><a href="site_settings.php"><i class="fa fa-plus"></i>
               Site Settings</a></li>
               <li><a href="slide.php"><i class="fa fa-plus"></i>
                Slide Ads </a></li>
               <li><a href="products.php"><i class="fa fa-plus"></i>Products</a></li>
                <li><a href="trend_list.php"><i class="fa fa-plus"></i>Trending</a></li>
                   <li><a href="top_rated.php"><i class="fa fa-plus"></i>Top Rated</a></li>
                <li><a href="orders.php"><i class="fa fa-plus"></i>Orders</a></li>
                 <li><a href="send_message.php"><i class="fa fa-plus"></i> Send Message</a></li>
                 <li><a href="messages.php"><i class="fa fa-wechat"></i> Messages</a></li>
                 <li><a href="settings.php"><i class="fa fa-cogs"></i> Settings</a></li>
                 <li><a href="logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
                 <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
               </ul>
      </div>
     
  
      <!--/////////////////////// DESTOP Side bar starts here--><!-- DESTOP Side bar starts here--><!-- DESTOP Side bar starts here-->