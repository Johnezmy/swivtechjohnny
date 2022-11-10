<? include("../include/connect.php"); 

$id = mysqli_real_escape_string($db, $_POST['id']);
$p_image = mysqli_real_escape_string($db, $_POST['p_image']);
$p_name = mysqli_real_escape_string($db,$_POST['p_name']);
$p_title = mysqli_real_escape_string($db, $_POST['p_title']);
$p_price = mysqli_real_escape_string($db,$_POST['p_price']);
$p_status = mysqli_real_escape_string($db, $_POST['p_status']);
$p_desc = mysqli_real_escape_string($db, $_POST['description']);
$p_weight = mysqli_real_escape_string($db, $_POST['weight']);


$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$pname = basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


if(isset($_POST["submit"])) {

$query = "INSERT INTO products (p_image, p_name, p_title, p_price, p_status, description, weight, user)
			  VALUES('$pname', '$p_name', '$p_title', '$p_price', '$p_status', '$p_desc', '$p_weight', 'Admin')";
			  
$show =	mysqli_query($db, $query);

if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      
      
$msg =  "<div class=\"alert alert-success alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>	

<b>New Product is successfully added</b>

</div>";

header('refresh:5;url= products.php');

  }  else {
      
          
$msg =  "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>	

 Unable To Process Your Reguest

</div>";

    
      
  }
}
?>

<html lang="en">
    <head>
       


        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Cemre Tellioğlu Tunçay">
         <link rel="icon" href="img/logo/cryptlogo1.ico" />
         
          
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<head>
<style>

 .center {
 margin: auto;
  width: 98%;
  border: 2px solid #ebac22;
  padding: 10px;
  box-shadow: 5px 6px 5px 5px;
  border-radius:3px;
  
}

.hop {
  border-radius: 4px;
  background-color: #ebac22;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 1px;
  width: 130px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 1px;
   box-shadow: black 5px 6px 5px 5px;
}

.hop span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.hop span:after {
 
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.hop:hover span {
  padding-right: 25px;
}

.hop:hover span:after {
  opacity: 1;
  left: 0;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}

</style>
</head>
<body>

<center>

<div style="background-color:lightgrey;border:solid black">
<div class="center">
<div class="alert alert-success d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
  <div>
      <center><h1><i class="checkmark">✓</i></h1></center>
      <br>
    <h2><b><? echo $msg; ?></b></h2>
    <hr>
     <div class="card">
  <img src="upload/<? echo$pname;?>" alt="image" style="width:100%">
  <h3><? echo$p_name;?></h3>
  <p style="text-transform:uppercase;" class="title"><? echo$p_title;?></p>
  <p></p>
  <div style="margin: 24px 0;">
  </div>
  <p><button>New Product Added</button></p>
</div>

  </div>
</div>
</div>
</div>
 <h3>Wait while you are being redirected...</h3>
</center>

</body>
</html>
