<style>
  .navbar-toggle{
    box-shadow: 0 0 4px 0 rgba(0,0,0,.50), 0 2px 4px 0 rgba(0,0,0,.50);
  }
  .icon-bar{
    background-color:#fff;
  }
  .navbar{
    background-color:#123962;
    border-radius: 0px;
  }
  .nav li {
    padding: 10px 0px;
  }
  .nav .active a{
    border-bottom:2px solid #fff;
    color:white;
  }
  .nav .round a{
    border:2px solid #fff;
    color:white;
    margin-right: 20px;
  }
  .nav li a{
    color: #b1d4e5;
  }
  .nav li a:hover{
    color: #799eb2;
    background-color: transparent;
  }
  .navbar-brand {
    color: #fff;
    margin-top: 10px;
  }
  .inner-dropdown ul{
    background-color: #123962;
    box-shadow: 0 0 4px 0 rgba(0,0,0,.50), 0 2px 4px 0 rgba(0,0,0,.50);
  }
  .inner-dropdown ul li{
    padding: 3px 3px;
    background-color: transparent;
  }
  .inner-dropdown ul li a:hover{
    background-color: transparent;
  }
  ul .divider{
    padding: 0px 0px;
    background-color: red;
  }
</style>
<nav class="navbar navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" onclick="openNav()">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span> 
        </button>
        
        <a class="navbar-brand" href="dashboard.php"><?php echo $site_name; ?> | Admin</a>
         <img src="<?php echo $site_logo; ?>" alt="LOG" width="50" height="60"> 
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>