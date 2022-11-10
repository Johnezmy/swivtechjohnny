<?php include("header1.php");?>

<?

$idd = 1;
$row = mysqli_query($db,"SELECT * FROM site_settings WHERE id='$idd'");
$site = mysqli_fetch_assoc($row);
$site_whatsapp = $site['whatsapp'];
$site_facebook = $site['facebook'];
$site_twitter = $site['twitter'];
$site_youtube = $site['youtube'];
$site_phone = $site['phone'];
$site_email = $site['email'];
$site_address = $site['address'];
$site_instagram = $site['instagram'];




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
</style>


    
    
    
    
    
<center>
<div style="width:90%;box-shadow: blue 2px 3px 2px 3px;" class="container-bg">
    
   <br><br>
  
  <? echo $msg; ?>
   
<h3 style="text-align:center;">Site Settings</h3>
<div class="cele">
    <!--<center><label>Celebrity's Pics</label>-->
    <!--          <br>-->
    <!--          <img src="upload/" alt="LOG" width="120" height="120">-->
    <!--        </center>-->
    <!--        <br>-->
    <!--        <small>If you want to edit Celebrity's Pics click <a style="color:blue" href='editcele2.php?ID='></small><b>HERE</b></a>-->
    
<form style="width:65%;" method="POST" action="submit_settings.php?ID=<? echo $idd;?>">

<!--The id-->
            <input type="hidden" name="id" class="form-control input-lg" style="border-radius: 0px;" value="<?php echo $idd; ?>"> 
              <br>
              
              
    <br><br>
    <label for="fname">Admin Whatsapp Number</label>
    <input type="text" id="fname" value="<?php echo  $site_whatsapp; ?>" name="whatsapp" >
   <br><br>
    <label for="lname">facebook Button</label>
    <input type="text" id="lname" value="<?php echo $site_facebook; ?>" name="facebook">
    <br><br>
    <label for="lname">Twitter Button</label>
    <input type="text" id="lname" value="<?php echo $site_twitter; ?>"name="twitter">
    <br><br>
     <label for="lname">Youtube</label>
    <input type="text" id="lname" value="<?php echo $site_youtube; ?>" name="youtube">
    <br><br>
    <label for="lname">Phone Number</label>
    <input type="text" id="lname" value="<?php echo $site_phone; ?>" name="phone">
   <br><br>
    <label for="lname">Email</label>
    <input type="text" id="lname" value="<?php echo $site_email; ?>" name="email" ><br><br>
    <label for="lname">Address</label>
    <input type="text" id="lname" value="<?php echo $site_address; ?>" name="address" >
    <br><br>
     <label for="lname">Instagram Button</label>
    <input type="text" id="lname" value="<?php echo $site_instagram; ?>" name="instagram" >

    <br><br>
    <br><br>
    
    <input  type="submit" name="edit" value="Update Settings">
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
           
            