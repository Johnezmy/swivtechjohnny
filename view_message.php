<?php include("header1.php"); 

$id = $_GET["id"];
$query = mysqli_query($db, "SELECT * FROM messages WHERE id = '$id'");
$row = mysqli_fetch_assoc($query);
$name = $row["name"];
$email = $row["email"];
$phone = $row["phone"];
$message = $row["message"];

?>


<style>
main {
  margin: 0;
  padding: 5px;
  background-color: lightgray;
}

main > h1, p, .browser {
  margin: 10px;
  padding: 5px;
}

.browser {
  background: white;
}

.browser > h2, p {
  margin: 4px;
  font-size: 90%;
}
</style>


<h1>Inbox</h1> 
<h4>Contact Us</h4>

<main>
  <h4>Name: <? echo $name;?></h4>
  <h4>Email: <? echo $email;?></h4>
  <h4>Phone: <? echo $phone;?></h4>
 <br>
 
  <article class="browser">
<h1>Message:</h1>
<center style="border:solid grey;text-align:justify">
<hr>
    <h3 style="text-align:center"><? echo $message;?></h3>
  </article>
</main>

</center>

