<?php include("header1.php"); 
?>

      <div class="col-sm-10">
        <br><br>

        <div class="row">
          <div class="col-md-12">
                <h1><small>LIST OF Slide Ads Image</small></h1>
                <br>
          <div class="table-responsive">
             <h2 style="color:green"> To add a new Slide click <a href="add_slide.php">HERE</a></h2>
             <br>
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>IMAGE</th>
                     <th>DELETE</th>
                  
                  </tr>
                </thead>
                <tbody>

       <?php
             $query = mysqli_query($db, "SELECT * FROM slide_ads ORDER BY id DESC ");
             while ($row = mysqli_fetch_assoc($query)) {
             $p_id = $row["id"];
             $p_image = $row["image"];
             
            
            ?>

                 <tr>
                     
                    <td><?php echo $p_id; ?></td>
                   <td><img src="upload/<?php echo $p_image; ?>" alt="LOG" width="50" height="50"></td>
             
                    <td><b><a href='delete_slide.php?ID=<?php echo $p_id; ?>'>Delete</a></b></td>
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