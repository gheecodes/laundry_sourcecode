         <div class="form-group">
                       <div class="row">
        <label class="col-sm-3 control-label">Group</label>
             <div class="col-sm-9">
  <select name="group_id" id="group_id" class="form-control" required="">
   <option value=" ">--Select Group--</option>
                <?php  
        $sql2 = "SELECT * FROM tbl_group where id!=1";
      $result2 = $conn->query($sql2); 
           while($row2= mysqli_fetch_array($result2)){
                        ?>
 <option value ="<?php echo $row2['id'];?>"><?php echo $row2['name'];?> </option>
                      <?php } ?>
            </select>
                </div>
       </div>
               </div>
 