<?php include("header1.php"); ?>
      <div class="col-sm-10">
        <br><br>
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <h1><small>Account Settings</small></h1>
            <?php 
             if(isset($_SESSION["email"])){
              $email = $_SESSION["email"];

              $query = mysqli_query($db, "SELECT * FROM admin WHERE email = '$email'");
              $row = mysqli_fetch_assoc($query);

              $name = $row["name"];
              $email = $row["email"];
              $phone = $row["phone"];
             }
            ?>



            <style>
              
              .nav-tabs li a{
                color:black;
                font-weight: bolder;
              }

            </style>

            <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#home">Account Profile</a></li>
              <li><a data-toggle="tab" href="#menu1">Change Password</a></li>
            </ul>

            
            <div class="tab-content">
              <div id="home" class="tab-pane fade in active">
                <div class="form-group">
                  <input type="text"  class="form-control input-lg" style="border-radius: 0px;" value="<?php echo $name; ?>" readonly>

                  <input type="text"  class="form-control input-lg" style="border-radius: 0px;" value="<?php echo $email; ?>" readonly>

                  <input type="text"  class="form-control input-lg" style="border-radius: 0px;" value="<?php echo $phone; ?>" readonly>
                </div>
              </div>
              <div id="menu1" class="tab-pane fade">

                <span id="output"></span>

                 <input type="text" id="old_password" class="form-control input-lg" style="border-radius: 0px;" placeholder="Old Password">

                 <input type="text" id="new_password" class="form-control input-lg" style="border-radius: 0px;" placeholder="New Password">

                 <!--<input type="text" id="new_password2" class="form-control input-lg" style="border-radius: 0px;" placeholder="Confirm New Password">-->

                 <button id="submitbtn" class="btn btn-lg btn-primary btn-block" style="border-radius: 0px;">Change Password</button>

                 <script>
                   $(document).ready(function(){
                       $("#submitbtn").click(function(){
                            var old_password = $("#old_password").val();
                            var new_password = $("#new_password").val();
                            var new_password2 = $("#new_password2").val();
                            
                             if(old_password == ""){
                               $("#old_password").removeClass('form-control input-lg').addClass('form-control input-lg input-danger');
                             }else{
                              $("#old_password").removeClass('form-control input-lg input-danger').addClass('form-control input-lg');
                            }

                             if(new_password == ""){
                               $("#new_password").removeClass('form-control input-lg').addClass('form-control input-lg input-danger');
                             }else{
                              $("#new_password").removeClass('form-control input-lg input-danger').addClass('form-control input-lg');
                            }

                             if(new_password2 == ""){
                               $("#new_password2").removeClass('form-control input-lg').addClass('form-control input-lg input-danger');
                             }else{
                              $("#new_password2").removeClass('form-control input-lg input-danger').addClass('form-control input-lg');
                            }

                            if(old_password != "" && new_password != "" && new_password2 != ""){
                                

                                      $.ajax({
                                  url:"change-password.php",
                                  method:"post", 
                                  data:{old_password:old_password,new_password:new_password,new_password2:new_password2},
                                  dataType: "text",
                                  success: function(data) {
                                    $("#output").html(data);
                                  }
                                  });

                            }else{
                             // alert("Fill in all forms");
                            }

                            
                       });
                   });
                 </script>
               
              </div>
            </div>


          </div>
          <div class="col-md-3"></div>
        </div>
      </div>
    </div>
	</div>
</body>
</html>