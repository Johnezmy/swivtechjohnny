<?php include("header1.php"); ?>

<?
        
        
             
$id = $_GET["ID"];
$query = mysqli_query($db, "SELECT * FROM products WHERE id = '$id'");
$row = mysqli_fetch_assoc($query);
$p_image = $row["p_image"];
$p_name = $row["p_name"];
$p_title  = $row["p_title"];
$p_price = $row["p_price"];
$p_status = $row["p_status"];
$p_description = $row["description"];
$p_weight = $row["weight"];

?>



 <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
 
 
<style>
.file-upload {
  background-color: #ffffff;
  width: 50%px;
  margin: 0 auto;
  padding: 20px;
}

.file-upload-btn {
  width: 100%;
  margin: 0;
  color: #fff;
  background: #151B54;
  border: none;
  padding: 10px;
  border-radius: 4px;
  border-bottom: 4px solid #15824B;
  transition: all .2s ease;
  outline: none;
  text-transform: uppercase;
  font-weight: 700;
}

.file-upload-btn:hover {
  background: blue;
  color: #ffffff;
  transition: all .2s ease;
  cursor: pointer;
}

.file-upload-btn:active {
  border: 0;
  transition: all .2s ease;
}

.file-upload-content {
  display: none;
  text-align: center;
}

.file-upload-input {
  position: absolute;
  margin: 0;
  padding: 0;
  width: 100%;
  height: 100%;
  outline: none;
  opacity: 0;
  cursor: pointer;
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
  font-weight: 80%;
  font-size:130%;
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




button{
                display: inline-block;
                outline: 0;
                border:0;
                cursor: pointer;
                text-decoration: none;
                position: relative;
                color: #fff;
                background: #120d6b;
                line-height: 20px;
                border-radius: 30px;
                padding: 10px;
                font-size: 20px;
                font-weight: 400;
                box-shadow: rgb(18, 13, 107) -2px -2px 0px 2px, rgb(18, 13, 107) 0px 0px 0px 4px, rgba(0, 0, 0, 0.05) 0px 0px 2px 7px;
                transition: all 0.2s;
         
                }
                
</style>


    
    
    
    
    
<center>
<div style="width:90%;box-shadow: blue 2px 3px 2px 3px;" class="container-bg">
    
   <br><br>
  
  <? 
if(isset($_POST['trend'])){
    $check = mysqli_query($db, "COUNT(*) FROM trending WHERE p_id = '$id'");
    if($check>1){
        echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>	

 Sorry, This Product is already listed in Trending Products...

</div>";

    }else{

    
$trend="INSERT INTO trending(p_id, p_image, p_name, p_price, p_status)VALUES('$id', '$p_image', '$p_name', '$p_price', '$p_status')";
$query=mysqli_query($db, $trend);
if($query){

echo  "<div class=\"alert alert-success alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>	

<b>This Product will now be listed amongst Trending Products...</b>

</div>";

header('refresh:3;url= products.php');

  }  else {

 echo  "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>	

 Unable To Process Your Reguest

</div>";
  }  
}
} 

if(isset($_POST['rate'])){
     $check = mysqli_query($db, "COUNT(*) FROM top_rated WHERE p_id = '$id'");
    if($check >1){
        echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>	

 Sorry, This Product is already listed in Top Rated Products...

</div>";

    }else{
    
    
$rate="INSERT INTO top_rated(p_id, p_image, p_name, p_price, p_status)VALUES('$id', '$p_image', '$p_name', '$p_price', '$p_status')";
$query=mysqli_query($db, $rate);

if($query){

echo  "<div class=\"alert alert-success alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>	

<b>This Product will now be listed amongst Top Rated Products...</b>

</div>";

header('refresh:3;url= top_rated.php');

  }  else {

 echo  "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>	

 Unable To Process Your Reguest

</div>";
  }    
}
} 
  ?>
   
<h3 style="text-align:center;">Editing Product <b>(<? echo $p_name;?>)</b></h3>

     <br>
<form action="" method="POST">
    <button type="submit" style="float:left" name="trend" <?php echo isset($_POST["trend"]) ? "disabled" : "";?>><small>ADD TO TRENDING</small></button>
</form>
<br><br>
<form style="float:right" action="" method="POST">
    <button type="submit" style="float:left" name="rate" <?php echo isset($_POST["rate"]) ? "disabled" : "";?>><small>MARK AS TOP RATED</small></button>
</form>
    <br><br>
<div class="cele">
    <center><label>Product Image</label>
              <br>
              <img src="upload/<?php echo $p_image; ?>" alt="LOG" width="120" height="120">
            </center>
            <br>
            <small>If you want to edit your Product Image click <a style="color:blue" href='edit_product2.php?ID=<?php echo $id; ?>'></small><b>HERE</b></a>
    
<form style="width:65%;" action="submit_edit_product.php?ID=<? echo$id; ?>" method="POST" enctype="multipart/form-data">
<!--The id-->
            <input type="hidden" name="id" class="form-control input-lg" style="border-radius: 0px;" value="<?php echo $id; ?>"> 

    <br><br>
 <label for="fname">Product Name</label>
 <br>
    <input type="text" id="fname" value="<?php echo $p_name; ?>" name="p_name" >
 <label for="fname">Product Title</label>
     <br>
    <input type="text" id="fname" value="<?php echo $p_title; ?>" name="p_title" >
     <label for="fname">Product Price</label>
     <br>
    <input type="text" id="fname" value="<?php echo $p_price; ?>" name="p_price" >
    
 <br>
    <label for="fname">Product Status</label>
     <br>

       <h4 style="float:left;"><small>Current Status:</small> <b><? echo $p_status;?></b></h4>
    <select id="" name="p_status" id="fname">
        
          <option value"Available">Available</option>
          <option value"New Product">New Product</option>
          <option value"Out Of Stock">Out Of Stock</option>
    </select>
    
    <br>
   <div class="form-group">
    <label for="exampleFormControlTextarea1">Event Description</label>
    <textarea style="width:80%;height:30%" class="form-control" id="exampleFormControlTextarea1" name="description" rows="3" placeholder="Enter product description.." required><? echo$p_description;?></textarea>
  </div>
<br>
<label for="fname">Product Weight</label>
     <br>
    <input type="text" id="fname" value="<?php echo $p_weight; ?>" name="weight" >
    <br><br>
    <br><br>
    
    
    <input  type="submit" name="save_edit" value="Update Event">
  </form>
</div>
    </div>
   </center> 
    
    
    
    
    
    <!--Javascript for big image upload-->
    
<script>
function readURL(input) {
  if (input.files && input.files[0]) {

    var reader = new FileReader();

    reader.onload = function(e) {
      $('.image-upload-wrap').hide();

      $('.file-upload-image').attr('src', e.target.result);
      $('.file-upload-content').show();

      $('.image-title').html(input.files[0].name);
    };

    reader.readAsDataURL(input.files[0]);

  } else {
    removeUpload();
  }
}

function removeUpload() {
  $('.file-upload-input').replaceWith($('.file-upload-input').clone());
  $('.file-upload-content').hide();
  $('.image-upload-wrap').show();
}
$('.image-upload-wrap').bind('dragover', function () {
    $('.image-upload-wrap').addClass('image-dropping');
  });
  $('.image-upload-wrap').bind('dragleave', function () {
    $('.image-upload-wrap').removeClass('image-dropping');
});
</script>
    
    
    
    
   
    
    
    </div>
  </div>
</body>
</html>
           
            