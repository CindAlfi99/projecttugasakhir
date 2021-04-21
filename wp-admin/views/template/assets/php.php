<?php
       $find_notifications = "SELECT * FROM order_laundry WHERE message_status = 1";
       $result = mysqli_query($connection,$find_notifications);
       $count_active = '';
       $notifications_data = array(); 
       $deactive_notifications_dump = array();
        while($rows = mysqli_fetch_assoc($result)){
                $count_active = mysqli_num_rows($result);
                $notifications_data[] = array(
                            "id" => $rows['id'],
                            "message_tittle"=>$rows['message_tittle'],
                            "message_desc"=>$rows['message_desc']
                );
        }
        //only five specific posts
        $deactive_notifications = "SELECT * FROM order_laundry WHERE id = 0 ORDER BY message_status DESC LIMIT 0,5";
        $result = mysqli_query($connection,$deactive_notifications);
        while($rows = mysqli_fetch_assoc($result)){
          $deactive_notifications_dump[] = array(
                      "message_status" => $rows['message_status'],
                      "message_tittle"=>$rows['message_tittle'],
                      "message_desc"=>$rows['message_desc']
          );
        }

     ?>