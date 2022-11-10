<?php
include("header.php");

              $email = $_SESSION["email"];


              $old_password = $_POST["old_password"];
              $new_password = $_POST["new_password"];
              $new_password2= $_POST["new_password2"];

               
               $query =  mysqli_query($db, "SELECT * FROM admin WHERE password = '$old_password'");
               $row = mysqli_fetch_assoc($query);
               $dbpass = $row["password"];

               if($old_password == $dbpass){
              $query  = mysqli_query($db, "UPDATE admin SET password = '$new_password' WHERE id = '1'");
              
              
              echo '
                 <div class="alert alert-success">
                   <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                   Password Changed Successfully...
                 </div>';
               }else{
                 echo '
                  <div class="alert alert-danger">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    That is not the old password for this account.
                  </div>
                 ';
               }
