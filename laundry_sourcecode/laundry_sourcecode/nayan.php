<?php
include('connect.php');
                                      
                
              $sql="SELECT * FROM `order` WHERE `todays_date`=CURDATE()";
              $res=$conn->query($sql);
              $num_rows = mysqli_num_rows($res);
         ?>