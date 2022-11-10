
<?php 

   session_start(); 
   include("../include/connect.php"); 
 include("navbar.php");?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Login |<?php echo $site_logo; ?></title>
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
            background-color:#123962;
          }
              .s-rw{}
              .s-rw:hover {
                color:#c94c06;
                text-decoration: none;
              }
              .ub-btn{
                display: inline-block;
                padding: 6px 12px;
                margin-bottom: 0;
                font-size: 14px;
                font-weight: normal;
                line-height: 1.42857143;
                text-align: center;
                white-space: nowrap;
                vertical-align: middle;
                -ms-touch-action: manipulation;
                    touch-action: manipulation;
                cursor: pointer;
                -webkit-user-select: none;
                   -moz-user-select: none;
                    -ms-user-select: none;
                        user-select: none;
                background-image: none;
                border: 1px solid transparent;
                border-radius: 4px;
                }
                .ub-btn-c{
                  color: #fff;
                  background-color:#c94c06;
                  border-color:#963f04;
                }
                .ub-btn-c:hover{
                  color: #fff;
                  background-color:#963f04 !important;
                  border-color:#963f04;
                }
                .ub-btn-lg{
                  padding: 10px 16px;
                  font-size: 18px;
                  line-height: 1.3333333;
                  border-radius: 6px;
                  } 
                  .ub-btn-block{
                   display: block;
                   width: 100%;
                  }
                  .footer-H{
                    padding-bottom: 5px;
                    border-bottom:5px solid #c94c06;
                    text-align:left;
                    width:150px;
                    
                  }
                  footer{
                    padding: 50px 50px;
                    background-color: #333;
                    color: white;
                  }
                  footer ul li{
                    margin-left: -40px;
                    list-style: none;
                    
                  }
                  footer ul li a{
                    color: #ccc;
                  }
                  footer ul li a:hover{
                    color: #fff;
                  }

            </style>
    </head>

    <body>
      <?php include("includes/navbar.php"); ?>
      <div class="container-fluid">
        <div class="row">
          <br><br>
          <div class="col-sm-4"></div>
          <div class="col-sm-4">
            <?php

         $login_error = "";
            if(isset($_POST["loginbtn"])){
              $email = mysqli_real_escape_string($db, $_POST["email"]);
              $password = mysqli_real_escape_string($db, $_POST["password"]);
              if(!empty($email) && !empty($password)){
                $query = mysqli_query($db, "SELECT * FROM admin WHERE email = '$email'");
                $numrow = mysqli_num_rows($query);
                if($numrow >= 1){
                  $row = mysqli_fetch_assoc($query);
                  $dbpass = $row["password"];
                  $id = $row["id"];

                  if($dbpass == $password){
                     

                     echo "<script>window.location.assign('dashboard.php');</script>";
                     
                     $_SESSION["email"] = $email;
                  }else{
                    $login_error = '
                    <div class="alert alert-danger">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      Incorrect Password
                    </div>';
                  }
                }else{
                  $login_error = '
                  <div class="alert alert-danger">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    The email you entered is invalid.
                  </div>';
                }
              }else{
                $login_error = '
                <div class="alert alert-danger">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  Fill in all forms.
                </div>';
              }
            }
            ?>
            <div class="panel panel-deafult">
              <div class="panel-body" align="left">
                <?php echo $login_error; ?>
                <h1><small>Admin Login</small></h1>
            <small style="font-size: 14px; color: gray;">Signin to your Content Management System.</small>
            <hr>
            <form action="" method="POST">
              <div class="form-group">
                <input type="text" name="email" id="email" placeholder="Email Address" class="form-control input-lg" style="border-radius: 0px;">
              </div>
              <div class="form-group">
                <input type="password" name="password" id="password" placeholder="Password" class="form-control input-lg" style="border-radius: 0px;">

                <span id="emailoutput" style="color: darkred;"></span>
                <br>
                <button class="btn  btn-primary btn-lg btn-block" id="loginbtn" name="loginbtn" style="border-radius: 0px;">Login</button>
              </div>
            </form>

                
              </div>
            </div>
          </div>
          <div class="col-sm-4"></div>
        </div>
      </div>
      

      
    </body>
    </html>