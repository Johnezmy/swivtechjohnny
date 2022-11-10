<? include("../include/connect.php"); 

$id = $_GET["ID"];
if(isset($_POST["save_edit"])) {
$query = mysqli_query($db, "SELECT * FROM products WHERE id = '$id'");
$row = mysqli_fetch_assoc($query);
$p_image = $row["p_image"];



$p_name = mysqli_real_escape_string($db,$_POST['p_name']);
$p_title = mysqli_real_escape_string($db, $_POST['p_title']);
$p_price = mysqli_real_escape_string($db,$_POST['p_price']);
$p_status = mysqli_real_escape_string($db, $_POST['p_status']);
$p_desc = mysqli_real_escape_string($db, $_POST['description']);
$p_weight = mysqli_real_escape_string($db, $_POST['weight']);


$update = "UPDATE products SET p_name='$p_name', p_title='$p_title', p_price='$p_price', p_status='$p_status', description='$p_desc', weight='$p_weight' WHERE id ='$id'";
      
$query = mysqli_query($db, $update);
      
if ($query) {
      

$msg =  "<div class=\"alert alert-success alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>	

<b>This Product Has Been successfully Updated</b>

</div>";

header('refresh:3;url= products.php');
      
  } else {
      
          
$msg =  "<div class=\"alert alert-error alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>	

 Sorry! Unable To Process Your Request

</div>";

  }  
      
  }

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>






    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">

   
    <style>
      body {
        text-align: center;
        padding: 40px 0;
        background: #EBF0F5;
      }
        h1 {
          color: #88B04B;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-weight: 900;
          font-size: 40px;
          margin-bottom: 10px;
        }
        p {
          color: #404F5E;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-size:20px;
          margin: 0;
        }
      i {
        color: #9ABC66;
        font-size: 100px;
        line-height: 200px;
        margin-left:-15px;
      }
      .card {
        background: white;
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        margin: 0 auto;
      }
    </style>
      </head>
    <body>
      <div class="card">
      <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
        <i class="checkmark">✓</i>
      </div>
      <img style="width:100px;height:100px;" src="upload/<? echo$p_image;?>">
      <hr>
        <h3><? echo $msg; ?></h3>
        <p>You are now being redirected...</p>
      </div>
 




  </body>
</html>