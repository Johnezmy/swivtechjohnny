<?php include("header1.php"); ?>
<style>
.button {
  background-color: #151B54;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 25px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>



      <div class="col-sm-10">
        <br><br>
        <div class="row">
          <div class="col-md-12">
               <small>This are all the messages received from the Contact Us Form on the Website</small>
            <h1><small>All Messages</small></h1>
            <br>
           
<a style="text-decoration:none" class="button" href="delete_msg.php">Clear All</a>
            <div class="img-responsive">
              <table class="table table-striped">
                  <thead>
                    <tr>
                        <th>ID</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone Number</th>
                      <th>Message</th>
                      <th>Reply</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    
                     $query = mysqli_query($db, "SELECT * FROM messages ORDER BY id DESC");
                     while($row = mysqli_fetch_assoc($query)){
                         
                         
                      $id = $row["id"];
                      $name = $row["name"];
                      $email = $row["email"];
                      $phone = $row["phone"];
                      $mes = $row["message"]; ?>
                      
                       <tr>
                        <td><?php echo $id; ?></td>
                         <td><?php echo $name; ?></td>
                         <td><b><?php echo $email; ?></b></td>
                          <td><b><?php echo $phone; ?></b></td>
                         <td><?php echo substr($mes, 0, 40); ?>....</td>
                         <td><b><a href='view_message.php?id=<?php echo $id; ?>'>Read</a></b></td>
                        <td><b><a href='send_message.php?id=<?php echo $email; ?>'>Reply</a></b></td>
                       </tr>
<?php
}
?>
                  </tbody>
                </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>