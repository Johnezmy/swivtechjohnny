<?php include("header1.php");

$email = $_GET["id"];

 ?>
      <br><br><br>
      
      <center> <div class="btn btn-lg btn-primary" >Email Client</div></center>
      
      <br><br><br>
      <div class="col-sm-10">
<form action="" method="POST">
  <div class="form-group">
      <? echo $msg;?>
    <label for="exampleFormControlInput1">Client Email Address</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email" value="<?php echo $email; ?>" required>
  </div>
    <div class="form-group">
    <label for="exampleFormControlInput1">Client Name</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="John Luck" name="name" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Subject</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Subject" name="subject" required>
  </div>
    <div class="form-group">
    <label for="exampleFormControlInput1">Header 1</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your First Header" name="header1" required>
  </div>
      <div class="form-group">
    <label for="exampleFormControlInput1">Header 2</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your Second Header" name="header2" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Message</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="3" required></textarea>
  </div>
<div class="form-group">  
  <button id="submitbtn" class="btn btn-lg btn-primary btn-block" style="border-radius: 0px;" name="send">Send Email</button>
</div>
</form>
        </div>
      </div>


    </div>
	</div>
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
          &copy; copyright <?php echo $sitename; ?> INC.
        </div>
        <div class="col-sm-4">
          
        </div>
      </div>
    </div>
  </footer>
-->
</body>
</html>