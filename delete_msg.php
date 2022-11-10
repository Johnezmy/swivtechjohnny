<?php include("header1.php");

$idd = $_GET["ID"];

$query = mysqli_fetch_array(mysqli_query($db, "SELECT id, name, email FROM messages WHERE id = 'Admin'"));


$id =  $query[0];
$name =  $query[1];
$email =  $query[2];

        
?>



<style>

a:link {
  color: white;
}

/* visited link */
a:visited {
  color: white;
}

/* mouse over link */
a:hover {
  color: hotpink;
}

/* selected link */
a:active {
  color: blue;
}

a:link {
  text-decoration: none;
}

a:visited {
  text-decoration: none;
}

a:hover {
  text-decoration: none;
}

a:active {
  text-decoration: none;
}



.image-upload-wrap {
  margin-top: 20px;
  border: 4px dashed #1FB264;
  position: relative;
}

.image-dropping,
.image-upload-wrap:hover {
  background-color: #728FCE;
  border: 4px dashed #ffffff;
}

.image-title-wrap {
  padding: 0 15px 15px 15px;
  color: #222;
}

.drag-text {
  text-align: center;
}

.drag-text h3 {
  font-weight: 100;
  text-transform: uppercase;
  color: #15824B;
  padding: 60px 0;
}

.file-upload-image {
  max-height: 200px;
  max-width: 200px;
  margin: auto;
  padding: 20px;
}

.remove-image {
  width: 200px;
  margin: 0;
  color: #fff;
  background: #cd4535;
  border: none;
  padding: 10px;
  border-radius: 4px;
  border-bottom: 4px solid #b02818;
  transition: all .2s ease;
  outline: none;
  text-transform: uppercase;
  font-weight: 700;
}

.remove-image:hover {
  background: #c13b2a;
  color: #ffffff;
  transition: all .2s ease;
  cursor: pointer;
}

.remove-image:active {
  border: 0;
  transition: all .2s ease;
}






input[type=text], select {
  width: 120%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #151B54;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #151B54;
  width: 100%;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;"
}

.cele {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>


    
    
    
    
    
<center>
<div style="width:90%;box-shadow: blue 2px 3px 2px 3px;" class="container-bg">
   <br><br>
  
  <? echo $msg; ?>
   

<div class="cele">
    
<!--<form style="width:65%;" action="deletecele.php?ID=<?php echo  $idd; ?>" method="get" enctype="multipart/form-data">-->

<h2 style="text-align:center;">Are You Sure You Want To Clear Inbox?</h2>
    <br><br>

   <br><br>
    <!--<label for="fname"></label>-->
    <br><br>
    <!--<label for="fname"></label>-->
    <br><br>
    <button class="btn btn-primary btn-lg" style="border-radius: 0px; text-color: white"><a href='delete_msg1.php'>Clear All Messages</a><i class="fa fa-arrow-right"></i></button>
    

    <!--<input  type="submit" name="submit2" value="Delete Celebrity">-->
  <!--</form>-->
</div>
    </div>
   </center> 
    

    
    
    </div>
  </div>
</body>
</html>
           
            