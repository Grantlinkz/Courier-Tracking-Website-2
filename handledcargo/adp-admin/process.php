                  <?php
        include_once 'includes/dbh.inc.php';
                  
        if(isset($_POST['submit'])) {
           $del_branch = mysqli_real_escape_string($conn, $_POST['del_branch']);
           $del_email = mysqli_real_escape_string($conn, $_POST['del_email']);
           $del_phone = mysqli_real_escape_string($conn, $_POST['del_phone']);
           $del_agent = mysqli_real_escape_string($conn, $_POST['del_agent']);

           $sender_name = mysqli_real_escape_string($conn, $_POST['sender_name']);
           $sender_email = mysqli_real_escape_string($conn, $_POST['sender_email']);
           $sender_phone = mysqli_real_escape_string($conn, $_POST['sender_phone']);
           $sender_location = mysqli_real_escape_string($conn, $_POST['sender_location']);

           $receiver_name = mysqli_real_escape_string($conn, $_POST['receiver_name']);
           $receiver_email = mysqli_real_escape_string($conn, $_POST['receiver_email']);
           $receiver_phone = mysqli_real_escape_string($conn, $_POST['receiver_phone']);
           $receiver_location = mysqli_real_escape_string($conn, $_POST['receiver_location']);

           $weight = mysqli_real_escape_string($conn, $_POST['weight']);
           $quantity = mysqli_real_escape_string($conn, $_POST['quantity']);
           $mode_of_ship = mysqli_real_escape_string($conn, $_POST['mode_of_ship']);
           $type_of_ship = mysqli_real_escape_string($conn, $_POST['type_of_ship']);
           $invoice_no = mysqli_real_escape_string($conn, $_POST['invoice_no']);
           $comments = mysqli_real_escape_string($conn, $_POST['comments']);
           $currency = mysqli_real_escape_string($conn, $_POST['currency']);
           $fee = mysqli_real_escape_string($conn, $_POST['fee']);
           $amount = mysqli_real_escape_string($conn, $_POST['amount']);
           $balance = mysqli_real_escape_string($conn, $_POST['balance']);
           $track_no = bin2hex(openssl_random_pseudo_bytes(5));

         

       //Insert into database
       $sql = "INSERT INTO client_details (del_branch, del_email, del_phone, del_agent, sender_name, sender_email, 
       sender_phone, sender_location, receiver_name, receiver_email, receiver_phone, receiver_location,
       weight, quantity, mode_of_ship, type_of_ship, invoice_no, comments, currency, fee, amount, balance,
       track_no)
       VALUES ('$del_branch', '$del_email', '$del_phone', '$del_agent', '$sender_name', '$sender_email', '$sender_phone',
       '$sender_location', '$receiver_name', '$receiver_email', '$receiver_phone', '$receiver_location',
       '$weight', '$quantity', '$mode_of_ship', '$type_of_ship', '$invoice_no',
       '$comments', '$currency', '$fee', '$amount', '$balance', '$track_no')";
      
       $sql2 = 'SELECT id FROM client_details ORDER BY id DESC LIMIT 1';
        $resultChecker = mysqli_query($conn, $sql);
        $res = mysqli_query($conn, $sql2);
        $rw = mysqli_fetch_array($res);
        $id = $rw['id'];
       if($resultChecker){
          header("Location: location_details.php?id=".$id);
       }
       else{
               echo "There is an error somewhere";
       }

        //header("Location: ../adp-admin/add_client.php?Login=Success");

    }
                
            