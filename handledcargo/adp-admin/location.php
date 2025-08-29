    <?php
        include_once 'includes/dbh.inc.php';
                  
        if(isset($_POST['submit'])) {
          $pickup = mysqli_real_escape_string($conn, $_POST['pickup']);
           $start_date = mysqli_real_escape_string($conn, $_POST['start_date']);
           $delivery_date = mysqli_real_escape_string($conn, $_POST['delivery_date']);
           $present_loc = mysqli_real_escape_string($conn, $_POST['present_loc']);

           $range_value = mysqli_real_escape_string($conn, $_POST['range_value']);
           $select2 = mysqli_real_escape_string($conn, $_POST['select2']);
         

         $customer_id= $_POST['id'];

       //Insert into database
       $sql = "INSERT INTO location_details (customer_id, pickup, start_date, delivery_date, present_loc, range_value, select2)
       VALUES ('$customer_id','$pickup', '$start_date', '$delivery_date', '$present_loc', '$range_value', '$select2')";

        $resultChecker = mysqli_query($conn, $sql);

       if($resultChecker){
          header("Location: reciept.php");
       }
       else{
               echo "There is an error somewhere";
       }

        //header("Location: ../adp-admin/add_client.php?Login=Success");

    }
                
                   
                