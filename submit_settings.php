<? include("../include/connect.php"); 

$idd = $_GET["ID"];
if(isset($_POST["edit"])){

$site_whatsapp = mysqli_real_escape_string($db,$_POST["whatsapp"]);
$facebook = mysqli_real_escape_string($db,$_POST['facebook']);
$twitter = mysqli_real_escape_string($db, $_POST['twitter']);
$youtube = mysqli_real_escape_string($db,$_POST['youtube']);
$site_phone = mysqli_real_escape_string($db,$_POST['phone']);
$site_email = mysqli_real_escape_string($db,$_POST['email']); 
$site_address = mysqli_real_escape_string($db,$_POST[ 'address']);
$site_instagram = mysqli_real_escape_string($db,$_POST[ 'instagram']);

 $update = "UPDATE site_settings SET whatsapp='$site_whatsapp', facebook='$facebook', twitter='$twitter', youtube='$youtube', phone='$site_phone', email = '$site_email', address = '$site_address', instagram='$site_instagram' WHERE id ='$idd'";

      $query = mysqli_query($db, $update);
      
  if ($query) {

header('refresh:2;url= dashboard.php');

      
          $msg =  "<div class=\"alert alert-success alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>	

<b>Settings Has Been successfully Updated...</b>

</div>";


  } else {
      
          
$msg =  "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>	

 Unable To Process Your Request. Try re-editing Information.

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
        <h3><? echo $msg; ?></h3>
        <p>You are now being redirected...</p>
      </div>
 




  </body>
</html>