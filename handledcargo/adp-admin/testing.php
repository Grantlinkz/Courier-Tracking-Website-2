<?php
    include_once 'includes/dbh.inc.php';
    session_start();
    if($_SESSION['admin_name']=="" ||$_SESSION['admin_password']=="" ){
        header("Location: admin_login.php");
    }
?>

<!DOCTYPE html>
<html>
    <head>
         <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add Client | Best Delivery Logistics </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
        <link rel="shortcut icon" type="image/png" href="images/logo.png"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="js/smoothScroll.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link href="css/magnific-popup.css" rel="stylesheet" type="text/css"/>
        <script src="adp-readMore/js.js" type="text/javascript"></script>
        <link href="adp-readMore/style.css" rel="stylesheet" type="text/css"/>
        <link href="css/owl.carousel.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/owl.theme.default.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        
        <style>
        
        footer {
            background: #1b1b1b;
        }

        .footer p {
            font-size: 16px;
            letter-spacing: 1px;
            color: #ccc;
        }
            .hold {
                color: #fff;
                padding: 5px; 
                border-radius: 5px; 
                cursor: pointer;
                color: #fff;
                background-color: #dc3545;
                border-color: #dc3545;
                margin-top: 5px;
                text-align: center;
            }
            .active {
                color: #fff;
                padding: 5px; 
                border-radius: 5px; 
                cursor: pointer;
                color: #fff;
                background-color: green;
                border-color: green;
                margin-top: 5px;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <!-- Navigation -->
        <nav class="navbar navbar-expand-md navbar-light bg-light fixed">
            <a href="../index.php" class="navbar-brand"><img src="images/logo.png" style="width: 200px; height: 64px;" alt="logo"> </a>
            <a href="admin_cpanel.php" style="color: #640c23 !important; font-weight: bold !important; text-decoration: none;">
                <i class="fas fa-home"></i> 
                CPANEL
            </a>
        </nav>
       <!-- Start Dash Board -->
           <div class="container-fluid" style="background:#f4f4fd;">
            <br>
                 <div class="col-md-12">
                    <h3 style="font-size: 1.75rem;">
                        USER DASHBOARD
                        <small style="font-weight: normal!important; font-style: italic; font-family: arial; font-size: 15px!important">    -    Consignment details, status & travel locations</small>
                    </h3>
                </div>
                <br>
                <!-- Start side bar -->
                <h3>Company Information</h3>
                <form enctype="multipart/form-data" method="POST" style="width:100%;">
                    <div class="row">
                        <div class="col-md-4">
                                  <div class="col-md-12" style="background: white; border-radius: 10px; height: auto!important;">
                                       <br>
                                       <!-- Personnel Details -->
                                       <center>
                                            <div>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                             <i class="fa fa-building" style="margin-right: 5px"></i>
                                                             Branch Office: 
                                                        </span>
                                                    </div>
                                                    <input type="text" required name="del_branch" class="form-control" style="margin-top: 0em; padding: 5px; border: 2px solid #e2e2e2;">
                                                </div>
                                                <br>
                                                 <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-envelope" style="margin-right: 5px"></i>
                                                            Email: 
                                                        </span>
                                                    </div>
                                                     <input type="email" required name="del_email" class="form-control" style="margin-top: 0em; padding: 5px; border: 2px solid #e2e2e2;">
                                                </div>
                                                <br>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                             <i class="fas fa-phone-volume" style="margin-right: 5px"></i>
                                                            Phone: 
                                                        </span>
                                                    </div>
                                                    <input type="text" required name="del_phone" class="form-control" style="margin-top: 0em; padding: 5px; border: 2px solid #e2e2e2;">
                                                </div>
                                            </div>
                                        </center>
                                       <br>
                                  </div>
                                  <br>
                                  <!-- Sender's Details -->
                                  <div class="col-md-12" style="background: white; border-radius: 10px; height: auto!important;">
                                    <br>
                                    <div>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fas fa-user" style="margin-right: 5px"></i>
                                                    Sender Name:
                                                </span>
                                            </div>
                                             <input type="text" required name="sender_name" class="form-control" style="margin-top: 0em; padding: 5px; border: 2px solid #e2e2e2;">
                                        </div>   
                                        <br>
                                       <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fas fa-envelope" style="margin-right: 5px"></i>
                                                    Sender's Email: 
                                                </span>
                                            </div>
                                             <input type="email" required name="sender_email" class="form-control" style="margin-top: 0em; padding: 5px; border: 2px solid #e2e2e2;">
                                        </div>
                                        <br>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                     <i class="fas fa-phone-volume" style="margin-right: 5px"></i>
                                                    Sender's Phone: 
                                                </span>
                                            </div>
                                            <input type="text" required name="sender_phone" class="form-control" style="margin-top: 0em; padding: 5px; border: 2px solid #e2e2e2;">
                                        </div>
                                        <br>
                                         <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                       <i class="fas fa-map-marker-alt" style="margin-right: 5px"></i>
                                                       Location:  
                                                </span>
                                            </div>
                                           <input type="text" required name="sender_location" class="form-control" style="margin-top: 0em; padding: 5px; border: 2px solid #e2e2e2;">
                                           <br>
                                       </div>
                                        <br>
                                    </div>
                                </div>
                                <br>
                                <!-- Receiver Details -->
                                <div class="col-md-12" style="background: white; border-radius: 10px; height: auto!important;">
                                    <br>
                                    <div>
                                         <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                      <i class="fas fa-user" style="margin-right: 5px"></i>
                                                        Receiver Name: 
                                                </span>
                                            </div>
                                           <input type="text" required name="receiver_name" class="form-control" style="margin-top: 0em; padding: 5px; border: 2px solid #e2e2e2;">
                                        </div>
                                        <br>
                                       <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                      <i class="fas fa-envelope" style="margin-right: 5px"></i>
                                                        Email: 
                                                </span>
                                            </div>
                                           <input type="email" required name="receiver_email" class="form-control" style="margin-top: 0em; padding: 5px; border: 2px solid #e2e2e2;">
                                        </div>
                                        <br>
                                       <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                       <i class="fas fa-phone-volume" style="margin-right: 5px"></i>
                                                        Phone: 
                                                </span>
                                            </div>
                                           <input type="text" required name="receiver_phone" class="form-control" style="margin-top: 0em; padding: 5px; border: 2px solid #e2e2e2;">
                                        </div>
                                        <br>
                                       <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                       <i class="fas fa-map-marker-alt" style="margin-right: 5px"></i>
                                                       Location:  
                                                </span>
                                            </div>
                                           <input type="text" required name="receiver_location" class="form-control" style="margin-top: 0em; padding: 5px; border: 2px solid #e2e2e2;">
                                           <br>
                                       </div>
                                       <br>
                                    </div>
                                </div>
                            <br>
                        </div>
                        <br>
                        <!-- Details -->
                       <div class="col-md-8" style="height: 300px;">
                               <div class="col-md-12" style="background: #007bff; border-radius: 10px;">
                                   <div class="detail-sub1 font-effect-3d font-effect-embross" style="font-size: 40px; color: white !important">
                                       <span class="fa fa-cog fa-spin fa-2x"></span>
                                       <span class="fa fa-cog fa-spin fa-1x fa-fw"></span>
                                       DETAILS
                                   </div>    
                                   <div class="col-md-12" style="background:white; height: auto; border-radius: 10px;">
                                       <br> 
                                       <div class="input-group">
                                           <div class="input-group-prepend">
                                               <span class="input-group-text">
                                                   <i class="fas fa-balance-scale" style="margin-right: 5px;"></i>
                                                   Weight
                                               </span>
                                           </div>
                                           <input type="text" required name="weight" class="form-control" style="margin-top: 0em; padding: 5px; border: 2px solid #e2e2e2;">
                                       </div>
                                       <br>
                                       <div class="input-group">
                                           <div class="input-group-prepend">
                                               <span class="input-group-text">
                                                   <i class="fab fa-slack-hash" style="margin-right: 5px;"></i>
                                                   Quantity
                                               </span>
                                           </div>
                                            <input type="text" required name="quantity" class="form-control" style="margin-top: 0em; padding: 5px; border: 2px solid #e2e2e2;">
                                       </div>
                                       <br>
                                       <div class="input-group">
                                           <div class="input-group-prepend">
                                               <span class="input-group-text">
                                                   <i class="fas fa-plane-departure" style="margin-right: 5px;"></i>
                                                   Mode of Shipment
                                               </span>
                                           </div>
                                           <input type="text" required name="mode_of_ship" class="form-control" style="margin-top: 0em; padding: 5px; border: 2px solid #e2e2e2;">
                                       </div>
                                       <br>
                                       <div class="input-group">
                                           <div class="input-group-prepend">
                                               <span class="input-group-text">
                                                   <i class="fas fa-archive" style="margin-right: 5px;"></i>
                                                   Type of Shipment:
                                               </span>
                                           </div>
                                            <input type="text" required name="type_of_ship" class="form-control" style="margin-top: 0em; padding: 5px; border: 2px solid #e2e2e2;">
                                       </div>
                                       <br>
                                       <div class="input-group">
                                           <div class="input-group-prepend">
                                               <span class="input-group-text">
                                                   <i class="fas fa-file-invoice" style="margin-right: 5px;"></i>
                                                   Invoice number:
                                               </span>
                                           </div>
                                            <input type="text" required name="invoice_no" class="form-control" style="margin-top: 0em; padding: 5px; border: 2px solid #e2e2e2;">
                                       </div>
                                       <br>
                                       <div class="input-group">
                                           <div class="input-group-prepend">
                                               <span class="input-group-text">
                                                   <i class="fas fas fa-info" style="margin-right: 5px;"></i>
                                                   Consignment Details
                                               </span>
                                           </div>
                                           <input type="text" required name="consign_details" class="form-control" style="margin-top: 0em; padding: 5px; border: 2px solid #e2e2e2;">
                                       </div>
                                       <br>
                                       <div class="input-group">
                                           <div class="input-group-prepend">
                                               <span class="input-group-text">
                                                   <i class="fas fa-comments" style="margin-right: 5px;"></i>
                                                    Comment
                                               </span>
                                           </div>
                                            <input type="text" required name="comments" class="form-control" style="margin-top: 0em; padding: 5px; border: 2px solid #e2e2e2;">
                                       </div>
                                       <br>
                                       <img style="max-width: 100%;" src="images/custom-divider.png">
                                       <br>
                                       <br>
                                        <div class="input-group">
                                           <div class="input-group-prepend">
                                               <span class="input-group-text">
                                                   <i class="fas fa-map-marker-alt" style="margin-right: 5px;"></i>
                                                    Pickup Destination Location
                                               </span>
                                           </div>
                                           <input type="text" required name="pickup" class="form-control" style="margin-top: 0em; padding: 5px; border: 2px solid #e2e2e2;">
                                       </div>
                                       <br>
                                       <!-- Present Status -->
                                        <div class="col-md-12" style="background: #e9ecef; border-radius: 10px!important;">
                                            <h5 class="text-secondary">
                                            <b>Consignment Present Status</b>
                                            </h5>
                                            <div>
                                            <table class="table table-stripped table-bordered" style="background: white; border: 15px solid #007bff; font-size: 12px">
                                                <thead>
                                                    <tr>
                                                        <th>Date</th>
                                                        <th>Transit Current Date and Time</th>
                                                        <th>Present Location</th>
                                                        <th>Progress</th>
                                                        <th>Consignment Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody style='font-size: 14px !important; padding: 5px'>
                                                    <tr>
                                                        <td width="5%">
                                                            <input type="date" required name="delivery_date" placeholder="dd/mm/yyyy" class="form-control">
                                                        </td>
                                                        <td width="15%">
                                                                <small>
                                                    <i class="fas fa-clock"></i>
                                                    <span id="last_update"></span>
                                                    <script>
                                                        var x = document.lastModified;
                                                        var output = document.getElementById('last_update');
                                                        output.innerHTML = x;
                                                    </script>
                                                </small>
                                                        </td>
                                                        <td>
                                                            <input type="text" required name="delivery_loc" placeholder="Itaily" class="form-control">
                                                        </td>
                                                        <td>
                                                            <progress id="prog" value="50" max="100" style='width: 100px'></progress>
                                                            <span id="indicate"></span>
                                                             <br>
                                                            <input type="range" required id="prorange" name="range_value" min="0" value="50" max="100" style='width: 100px'>
                                                            <script>
                                                                $('#prorange').on('change', function(){
                                                                    var current_range_value = $(this).val();
                                                                    //alert(current_range_value);

                                                                    var dynamic_prog = $('#prog').attr('value', current_range_value);
                                                                    $('#indicate').html('&nbsp;' + current_range_value + '%');
                                                                });
                                                            </script>
                                                        </td>
                                                        <td>
                                                            <select id="select2" required name="select2" style="border-radius: 5px; margin-top: 5px; width: 100px">
                                                                <option value="" disabled="disabled" selected="selected">--Select an option--</option>
                                                                <option value="hold">On Hold</option>
                                                                <option value="active">In Transit</option>
                                                            </select>
                                                            <p id="output2"></p>
                                                            <script>
                                                                var output2 = document.getElementById('output2');
                                                                var selectStart2 = document.getElementById('select2');
                                                                selectStart2.onchange = function() {
                                                                var val2= selectStart2.children[selectStart2.selectedIndex].value; 
                                                                switch(val2) {
                                                                case 'select' :
                                                                    output2.innerHTML = "";
                                                                break;
                                                                case 'hold' :
                                                                   output2.innerHTML = "On Hold"; 
                                                                   output2.setAttribute("class", "hold");
                                                                break;
                                                                
                                                               case 'active' :
                                                                   output2.innerHTML = 'In Transit';
                                                                   output2.setAttribute("class", "active");
                                                               break;
                                                                }
                                                                }; 
                                                           </script>
                                                        </td>  
                                                    </tr>
                                                </tbody>
                                            </table>
                                            </div>
                                            <br>
                                        </div>
                                       <br>
                                   </div>
                                   <br> 
                               </div>
                               <div class="text-center mb-4">
                                   <input type="submit" name="submit" style="font-weight: bold; font-size: 24px; margin-top: 20px;" class="btn btn-primary" name="submit_detailss" value="Submit">    
                               </div>
                       </div>
                    </div>    
                </form>
                  <?php
                     if(isset($_POST['submit'])) {
        $del_branch = mysqli_real_escape_string($conn, $_POST['del_branch']);
        $del_email = mysqli_real_escape_string($conn, $_POST['del_email']);
        $del_phone = mysqli_real_escape_string($conn, $_POST['del_phone']);

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
        $consign_details = mysqli_real_escape_string($conn, $_POST['consign_details']);
        $comments = mysqli_real_escape_string($conn, $_POST['comments']);
        $pickup = mysqli_real_escape_string($conn, $_POST['pickup']);

        $start_date = mysqli_real_escape_string($conn, $_POST['start_date']);
        $start_time = mysqli_real_escape_string($conn, $_POST['start_time']);
        $present_loc = mysqli_real_escape_string($conn, $_POST['present_loc']);
        $select1 = mysqli_real_escape_string($conn, $_POST['select1']);

        $delivery_date = mysqli_real_escape_string($conn, $_POST['delivery_date']);
        $delivery_time = mysqli_real_escape_string($conn, $_POST['delivery_time']);
        $delivery_loc = mysqli_real_escape_string($conn, $_POST['delivery_loc']);
        $range_value = mysqli_real_escape_string($conn, $_POST['range_value']);
        $select2 = mysqli_real_escape_string($conn, $_POST['select2']);
        $track_no = bin2hex(openssl_random_pseudo_bytes(5));

        //Insert into database
        $sql = "INSERT INTO client_details (del_branch, del_email, del_phone, sender_name, sender_email, 
        sender_phone, sender_location, receiver_name, receiver_email, receiver_phone, receiver_location,
        weight, quantity, mode_of_ship, type_of_ship, invoice_no, consign_details, comments,
        pickup, start_date, start_time, present_loc, select1, delivery_date, delivery_time, 
        delivery_loc, range_value, select2, track_no)
        VALUES ('$del_branch', '$del_email', '$del_phone', '$sender_name', '$sender_email', '$sender_phone',
        '$sender_location', '$receiver_name', '$receiver_email', '$receiver_phone', '$receiver_location',
        '$weight', '$quantity', '$mode_of_ship', '$type_of_ship', '$invoice_no', '$consign_details',
        '$comments', '$pickup', '$start_date', '$start_time', '$present_loc', '$select1', '$delivery_date',
        '$delivery_time', '$delivery_loc', '$range_value', '$select2', '$track_no')";

         $resultChecker = mysqli_query($conn, $sql);
         if($resultChecker){
                echo "<center>
                                <div class='alert alert-success alert-dismissible  fade show col-md-8'>
                                        <button type='button' class='close' data-dismiss = 'alert' style='padding: 5px;'> &times</button>
                                        <strong> Client successfully Added</strong><a href ='admin_cpanel.php'> Click here to return to Cpanel</a>
                                 </div>
                        </center>";
        }
        else{
                echo "There is an error somewhere";
        }

         //header("Location: ../adp-admin/add_client.php?Login=Success");
           
     }
                
                ?>
                   <br>
                <br>
           </div>   <!-- End of Form -->
           
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </body>
</html>
