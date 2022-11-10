<?php include("header1.php"); ?>
<style>

#button{
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
      <div class="col-sm-10">
        <br><br>

        <div class="row">
          <div class="col-md-12">
                <h1><small>ORDERS</small></h1>
                
                <br>
    <a href="add_product.php" id="button"><small>ADD NEW PRODUCT</small></a>
    <br><br>
          <div class="table-responsive">
   
            
             <br>
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th>NO.</th>
                     <th>ID</th>
                    <th>IMAGE</th>
                     <th>NAME</th>
                     <th>PRICE</th>
                      <th>REF</th>
                       <th>DATE</th>
                     <th>EDIT</th>
                     <th>DELETE</th>
                  </tr>
                </thead>
<tbody>

       <?php
             $query = mysqli_query($db, "SELECT * FROM orders ORDER BY id DESC ");
             while ($row = mysqli_fetch_assoc($query)) {
             $p_id = $row["id"];
             $m_id = $row["p_id"];
             $p_image = $row["p_image"];
             $p_name = $row["p_name"];
             $p_price  = $row["p_price"];
             $ref = $row["ref"];
             $date = $row["date"];
            ?>
                    
                 <tr>

                    <td><?php echo $p_id; ?></td>
                    <td><?php echo $m_id; ?></td>
                   <td><img src="upload/<?php echo $p_image; ?>" alt="LOG" width="50" height="50"></td>
                    <td><?php echo $p_name; ?></td>
                   <td><?php echo $p_price; ?></td>
                      <td><?php echo $ref; ?></td>
                      <td><?php echo $date; ?></td>
                    <td><b><a href='edit_order.php?ID=<?echo $m_id ?>'>Edit</a></b></td>
                    <td><b><a href='delete_order.php?ID=<?php echo $m_id; ?>'>Delete</a></b></td>
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