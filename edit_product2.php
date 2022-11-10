<?php include("header1.php"); ?>

<?
        
$id = $_GET["ID"];
$query = mysqli_query($db, "SELECT * FROM products WHERE id = '$id'");
$row = mysqli_fetch_assoc($query);
$p_name = $row["p_name"];
$p_image = $row["p_image"];


// if(isset($_POST["save_image"])) {

			

// $target_dir = "upload/";
// $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
// $pname = basename($_FILES["fileToUpload"]["name"]);
// $uploadOk = 1;
// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


// // Check if image file is a actual image or fake image

// $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
// if($check !== false) {
    

// $query = "UPDATE events SET event_image='$pname' WHERE id='$id'";
//       $row = mysqli_query($db, $query);
      
//   }else {

//     $msg =  "<div class=\"alert alert-danger alert-dismissable\">
// <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>	

// File is not an image.

// </div>"; 
//   }
//   if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file) && $row)  {
      

      
//           $msg =  "<div class=\"alert alert-success alert-dismissable\">
// <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>	

// Event Image Updated successfully

// </div>";

// header('refresh:1;url= events_list.php');
      
//   } else {
      
          
// $msg =  "<div class=\"alert alert-error alert-dismissable\">
// <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>	

//  Unable To Process Your Request

// </div>";

    
      
//   }
// }

 
        
        ?>

 <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
 
 
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

      <div class="col-sm-10">
        <br><br>
        <h1><small>Editing Image for Product <b>(<? echo $p_name;?>)</b></small></h1>
        <span id="output"></span>

    
        <br>
        <div class="row">
          <div class="col-md-4">
              
              <? echo $msg; ?>
            <div class="form-group">
              <center><label><?  echo $p_name;?></label>
              <br>
              <img src="upload/<?php echo $p_image; ?>" alt="LOG" width="150" height="150"  class="center">
            </center>
              
<form style="width:65%;" action="submit_product_image.php?ID=<? echo$id; ?>" method="POST" enctype="multipart/form-data">

<input type="hidden" name="id" class="form-control input-lg" style="border-radius: 0px;" value="<?php echo $id; ?>"> 
              <br>
<marquee><b>Note: Selected Image will REPLACE the currently displayed image after Upload</b></marquee>
              <br>
<div class="file-upload">
  <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Select File</button>

  <div class="image-upload-wrap">
    <input class="file-upload-input" type='file' name="fileToUpload" onchange="readURL(this);" accept="image/*" />
    <div class="drag-text">
      <h3>Drag and drop a file or select file</h3>
    </div>
  </div>
  <div class="file-upload-content">
    <img class="file-upload-image" src="#" alt="your image" />
    <div class="image-title-wrap">
      <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
    </div>
  </div>
</div>
              
              <br>
            
            <div class="col-sm-12">
            <button type="submit" name="save_image" class="btn btn-primary btn-lg" style="border-radius: 0px; text-color: white">Save Changes</a></button>

      </div>
</form>
            </div>
          </div>
        </div>
      
      </div>


 <!--   </div>-->
	<!--</div>-->
<!--
  <footer>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-4">
          <ul>
            <li><a href="">Home</a></li>
            <li><a href="">privacy policy</a></li>
            <li><a href="">Terms and condition</a></li>
          </ul>
        </div>
        <div class="col-sm-4">
          &copy; copyright <?php echo $siteName; ?> INC.
        </div>
        <div class="col-sm-4">
          
        </div>
      </div>
    </div>
  </footer>
-->
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
<br><br><br><br><br>
</body>
</html>