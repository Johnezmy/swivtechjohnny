<?php include("header1.php"); 


// $id = mysqli_real_escape_string($db, $_POST['id']);
// $p_image = mysqli_real_escape_string($db, $_POST['p_image']);
// $p_name = mysqli_real_escape_string($db,$_POST['p_name']);
// $p_title = mysqli_real_escape_string($db, $_POST['p_title']);
// $p_price = mysqli_real_escape_string($db,$_POST['p_price']);
// $p_status = mysqli_real_escape_string($db, $_POST['p_status']);
// $p_desc = mysqli_real_escape_string($db, $_POST['description']);
// $p_weight = mysqli_real_escape_string($db, $_POST['weight']);


// $target_dir = "upload/";
// $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
// $pname = basename($_FILES["fileToUpload"]["name"]);
// $uploadOk = 1;
// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


// if(isset($_POST["submit"])) {

// $query = "INSERT INTO products (p_image, p_name, p_title, p_price, p_status, description, weight, user)
// 			  VALUES('$pname', '$p_name', '$p_title', '$p_price', '$p_status', '$description', '$weight', 'Admin')";
			  
// $show =	mysqli_query($db, $query);

// if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      
      
// $msg =  "<div class=\"alert alert-success alert-dismissable\">
// <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>	

// <b>Event Has Been successfully added</b>

// </div>";

// header('refresh:1;url= events_list.php');

//   }  else {
      
          
// $msg =  "<div class=\"alert alert-danger alert-dismissable\">
// <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>	

//  Unable To Process Your Reguest

// </div>";

    
      
//   }
// }
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
   
<h3 style="text-align:center;">Add New Product</h3>
<div class="cele">
    
<form style="width:65%;" action="submit_add_product.php" method="POST" enctype="multipart/form-data">

<div class="file-upload">
  <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Select Image</button>

  <div class="image-upload-wrap">
    <input class="file-upload-input" type='file' name="fileToUpload" onchange="readURL(this);" accept="image/*" />
    <div class="drag-text">
      <h3>Drag and drop a file or select Image</h3>
    </div>
  </div>
  <div class="file-upload-content">
    <img class="file-upload-image" src="#" alt="your image" />
    <div class="image-title-wrap">
      <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
    </div>
  </div>
</div>
 
 <br><br>
 

    <br><br>
    <label for="fname">Product Name</label>
    <input type="text" id="fname" name="p_name" placeholder="Enter product name..">
   <br>
    <label for="fname">Product Title</label>
    <input type="text" id="fname" name="p_title" placeholder="Enter product title..">
   <br>
    <label for="fname">Product Price</label>
    <input type="text" id="fname" name="p_price" placeholder="Enter product price..">
   <br>
    <label for="fname">Product Status</label>
    <select id="" name="p_status" id="fname">
        
          <option value"Available">Available</option>
          <option value"New Product">New Product</option>
          <option value"Out Of Stock">Out Of Stock</option>
    </select>
   <br><br>
    
     <div class="form-group">
    <label for="exampleFormControlTextarea1">Product Description</label>
    <textarea style="width:80%;height:30%" class="form-control" id="exampleFormControlTextarea1" name="description" rows="3" placeholder="Enter product description.." required></textarea>
  </div>
    <label for="fname">Product Weight</label>
    <input type="text" id="fname" name="weight" placeholder="Enter product weight..">
   <br><br>
    <br><br>
    
    <input  type="submit" name="submit" value="Add New Event">
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
           
            