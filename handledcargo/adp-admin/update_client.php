<?php
    session_start();
        if($_SESSION['admin_name']=="" ||$_SESSION['admin_password']=="" ){
        header("Location: admin_login.php");
    }
     
    $id=$_GET['id'];
    
?>
<!DOCTYPE html>
<html>
    <head>
         <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Update Client </title>
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
            @media (max-width: 992px) {
                
                * {
                    font-size: 14px !important;
                }
                
                table th {
                    font-size: 12px !important;
                } 
               
                
                .hyphen {
                    display: none;
                }
                
                .slider {
                    width: 100px !important;
                }
            }
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
                color: #333 !important;
                padding: 5px; 
                border-radius: 5px; 
                cursor: pointer;
                color: #fff;
                background-color: yellow;
                border-color: green;
                margin-top: 5px;
                text-align: center;
            }
            
             .delivery {
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
            
            .custom-bg {
                background: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)), url('images/slide3.png'); 
                background-repeat: no-repeat;
                background-size: 100%;
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
           <div class="container-fluid custom-bg">
               <div class="row">
                    <div class="col-md-12 bg-primary py-3" style='color: #fff'>
                    <h3 style="font-size: 1.75rem;">
                         USER DASHBOARD-UPDATE
                        <small style="font-weight: normal!important; font-style: italic; font-family: arial; font-size: 15px!important">    -    Consignment details, status & travel locations</small>
                    </h3>
                </div>
               </div>
                <br>
    <?php
    include_once 'includes/dbh.inc.php';
    
    $query="select * from client_details where id='$id'";
    $result= mysqli_query($conn, $query);
    $row= mysqli_fetch_array($result);

    // $query2="select * from location_details where id='$id'";
    // $result2= mysqli_query($conn, $query2);
    // $row2= mysqli_fetch_array($result2);

        // $userquery2 = $conn->query("SELECT * FROM location_details where id='$id'");
        // while($userdetails2 = mysqli_fetch_array($userquery2)){
        // // $trackno = $userdetails2['track_no']; 
        // $pickup2 = $userdetails2['pickup']; 
        // $select2 = $userdetails2['select2'];
        // $startdate = $userdetails2['start_date'];
        // $deliverydate = $userdetails2['delivery_date'];
        // $presentloc = $userdetails2['present_loc'];}
    
    
    
    
    ?>            
                
           
                <!-- Start side bar -->
                     <?php 
                if(isset($_POST['update'])) {
          
            $pickup = mysqli_real_escape_string($conn, $_POST['pickup']);
            $start_date = mysqli_real_escape_string($conn, $_POST['start_date']);
            $delivery_date = mysqli_real_escape_string($conn, $_POST['delivery_date']);
            $present_loc = mysqli_real_escape_string($conn, $_POST['present_loc']);
            $range_value = mysqli_real_escape_string($conn, $_POST['range_value']);
            $select2 = mysqli_real_escape_string($conn, $_POST['select2']);

            $invoice = mysqli_real_escape_string($conn, $_POST['invoice_no']);
            $weight = mysqli_real_escape_string($conn, $_POST['weight']);
            $quantity = mysqli_real_escape_string($conn, $_POST['quantity']);
            $mos = mysqli_real_escape_string($conn, $_POST['mode_of_ship']);
            $tos = mysqli_real_escape_string($conn, $_POST['type_of_ship']);
            // $comment = mysqli_real_escape_string($conn, $_POST['comments']);

            $result3=$conn->query("UPDATE client_details SET invoice_no = '$invoice', weight = '$weight', quantity = '$quantity', mode_of_ship = '$mos', type_of_ship = '$tos'
            WHERE id = '$id'");
                    
                
              $query2 = "INSERT INTO location_details (customer_id, pickup, start_date, delivery_date, present_loc, range_value, select2)
       VALUES ('$id','$pickup', '$start_date', '$delivery_date', '$present_loc', '$range_value', '$select2')";
       
                 $result2 = mysqli_query($conn, $query2);
        
          
                    
                     if($result2){
                echo "<center>
                                <div class='alert alert-success alert-dismissible  fade show col-md-8'>
                                        <button type='button' class='close' data-dismiss = 'alert' style='padding: 5px;'> &times</button>
                                        <strong> Client successfully Updated</strong><a href ='admin_cpanel.php'> Click here to return to Cpanel</a>
                                 </div>
                        </center>";
        }
        else{
                echo "There is an error somewhere";
        }
                 }
                 
                
                ?>
                <?php
                // $query2="select * from location_details where id='$id'";
                // $result2= mysqli_query($conn, $query2);
                // $row2= mysqli_fetch_array($result2);
            include_once 'includes/dbh.inc.php';
            $userquery2 = $conn->query("SELECT * FROM location_details where customer_id='$id'");
            while($userdetails2 = mysqli_fetch_array($userquery2)){
            // $trackno = $userdetails2['track_no']; 
            $pickup2 = $userdetails2['pickup']; 
            $select2 = $userdetails2['select2'];
            $startdate = $userdetails2['start_date'];
            $deliverydate = $userdetails2['delivery_date'];
            $presentloc = $userdetails2['present_loc'];}

            $userquery = $conn->query("SELECT * FROM client_details where id='$id'");
            while($userdetails = mysqli_fetch_array($userquery)){
            // $trackno = $userdetails2['track_no']; 
            $invoice = $userdetails['invoice_no']; 
            $weight = $userdetails['weight'];
            $quantity = $userdetails['quantity'];
            $mos = $userdetails['mode_of_ship'];
            $tos = $userdetails['type_of_ship'];
            $comment = $userdetails['comments'];}?>
            
                <form enctype="multipart/form-data" method="POST" style="width:100%;">
                 
    
    <!-- Tracking Status -->
                    <div class="row px-3 mt-3" style="background: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.3)), url('images/slide3.png');">
                        <br>
<!--                       <div class="col-12" style="height: 300px;">-->
                               <div class="col-12" style="background: #007bff; border-radius: 10px;">
                                   <div class="detail-sub1 font-effect-3d font-effect-embross text-center status" style="font-size: 40px; color: white !important">
                                       <span class="hyphen">&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;</span>  <span class="fa fa-map-marker-alt"></span> TRACKING STATUS <span class="fa fa-map-marker-alt"></span> <span class="hyphen">&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;</span>
                                   </div>    
                                   <div class="col-12" style="background: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.3)), url('images/map.jpg'); height: auto; border-radius: 10px;">
                                       <br>
                                       <div class="row">
                                           <div class="col-md-4 mb-2">
                                                 <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fas fa-map-marker-alt" style="margin-right: 5px;"></i>
                                                     Pickup Destination
                                                </span>
                                            </div>
                                            <!-- </div> -->
                                            <input type="text" required name="pickup"  value=<?php echo $pickup2;?> class="form-control" style="margin-top: 0em; padding: 5px; border: 2px solid #e2e2e2;">
                                        </div>
                                           </div>
                                           
                                       <!-- <div class="row"> -->
                                           <div class="col-md-4 mb-2">
                                                 <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fas fa-book -alt" style="margin-right: 5px;"></i>
                                                     Invoice Number
                                                </span>
                                            </div>
                                            <!-- </div> -->
                                            <input type="text" required name="invoice_no"  value=<?php echo $invoice;?> class="form-control" style="margin-top: 0em; padding: 5px; border: 2px solid #e2e2e2;">
                                        </div>
                                           </div>

                                            <!-- <div class="row"> -->
                                           <div class="col-md-4 mb-2">
                                                 <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fas fa-balance-scale -alt" style="margin-right: 5px;"></i>
                                                     Weight
                                                </span>
                                            </div>
                                            <!-- </div> -->
                                            <input type="text" required name="weight"  value=<?php echo $weight;?> class="form-control" style="margin-top: 0em; padding: 5px; border: 2px solid #e2e2e2;">
                                        </div>
                                           </div>

                                           <br> <br> 
                                           <!-- <div class="row"> -->
                                           <div class="col-md-4 mb-2">
                                                 <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fas fa-cart-arrow-down -alt" style="margin-right: 5px;"></i>
                                                     Quantity
                                                </span>
                                            </div>
                                            <!-- </div> -->
                                            <input type="text" required name="quantity"  value=<?php echo $quantity;?> class="form-control" style="margin-top: 0em; padding: 5px; border: 2px solid #e2e2e2;">
                                        </div>
                                           </div>

                                            <!-- <div class="row"> -->
                                            <div class="col-md-4 mb-2">
                                                 <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fas fa-rocket -alt" style="margin-right: 5px;"></i>
                                                     Mode Of Shipment
                                                </span>
                                            </div>
                                            <!-- </div> -->
                                            <input type="text" required name="mode_of_ship"  value=<?php echo $mos;?> class="form-control" style="margin-top: 0em; padding: 5px; border: 2px solid #e2e2e2;">
                                        </div>
                                           </div>
                                           
                                          <!-- <div class="row"> -->
                                          <div class="col-md-4 mb-2">
                                                 <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fas fa-road -alt" style="margin-right: 5px;"></i>
                                                     Type Of Shipment
                                                </span>
                                            </div>
                                            <!-- </div> -->
                                            <input type="text" required name="type_of_ship"  value=<?php echo $tos;?> class="form-control" style="margin-top: 0em; padding: 5px; border: 2px solid #e2e2e2;">
                                        </div>
                                           </div> 

                                           <br> <br>
                                            <!-- <div class="row"> -->
                                          <div class="col-md-4 mb-2">
                                                 <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fas fa-comments -alt" style="margin-right: 5px;"></i>
                                                     Comment
                                                </span>
                                            </div>
                                            <!-- </div> -->
                                            <input type="text" required name="comments"  value=<?php echo $comment;?> class="form-control" style="margin-top: 0em; padding: 5px; border: 2px solid #e2e2e2;">
                                        </div>
                                           </div>  

                                           <div class="col-md-4 mb-2">
                                                 <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fas fa-calendar-alt" style="margin-right: 5px;"></i>
                                                     Start Date
                                                </span>
                                            </div>
                                            <input type="date" required name="start_date" value=<?php echo $startdate;?> class="form-control" style="margin-top: 0em; padding: 5px; border: 2px solid #e2e2e2;">
                                            </div>
                                           </div>
                                            <div class="col-md-4 mb-2">
                                                <div class="input-group">
                                                   <div class="input-group-prepend">
                                                       <span class="input-group-text">
                                                           <i class="fas fa-calendar-alt" style="margin-right: 5px;"></i>
                                                            Delivery Date
                                                       </span>
                                                   </div>
                                                   <input type="date" required  value=<?php echo $deliverydate;?> name="delivery_date" class="form-control" style="margin-top: 0em; padding: 5px; border: 2px solid #e2e2e2;">
                                                   </div>
                                           </div>

                                           <br> <br>
                                           <div class="col-md-4 mb-2">
                                               <div class="input-group">
                                                   <div class="input-group-prepend">
                                                       <span class="input-group-text">
                                                           <i class="fa fa-map-marker-alt" style="margin-right: 5px;"></i>
                                                            Current Location
                                                       </span>
                                                   </div>
                                                   <input type="text"  required name="present_loc" value=<?php echo $presentloc;?> class="form-control" style="margin-top: 0em; padding: 5px; border: 2px solid #e2e2e2;">
                                                   </div>
                                           </div>
                                           <div class="col-md-4 mb-2">
                                               <div class="input-group">
                                                   <div class="input-group-prepend">
                                                       <span class="input-group-text">
                                                           <i class="fas fa-calendar-alt" style="margin-right: 5px;"></i>
                                                            In Transit
                                                       </span>
                                                   </div>
                                                   <div id="demo" class="clockStyle form-control" style="border-top-right-radius: 5px; border-bottom-right-radius: 5px;"></div>
                                                    </div>
                                                <script>
                                                var d = new Date();
                                                document.getElementById("demo").innerHTML = d.toDateString();
                                                </script>
                                           </div>
                                           <div class="col-md-4 mb-2">
                                               <div class="input-group">
                                                   <div class="input-group-prepend">
                                                       <span class="input-group-text">
                                                           <i class="fas fa-stopwatch" style="margin-right: 5px;"></i>
                                                            In Transit
                                                       </span>
                                                   </div>
                                                   <style>
                                                       .clockStyle {
                                                           background: #fff;
                                                           padding: 6px;
                                                           font-family: "Arial Black", Gadget, sans-serif;
                                                           font-size: 16px;
                                                           font-weight: bold;
                                                           letter-spacing: 2px;
                                                       }
                                                   </style>
                                                   <div id="clockDisplay" class="clockStyle form-control" style="border-top-right-radius: 5px; border-bottom-right-radius: 5px;"></div>
                                                   <script>
                                                        function renderTime() {
                                                            var currentTime = new Date();
                                                            var diem = "AM";
                                                            var h = currentTime.getHours();
                                                            var m = currentTime.getMinutes();
                                                            var s = currentTime.getSeconds();
                                                            
                                                            if (h == 0) {
                                                                h = 12;
                                                            }
                                                            else if (h > 12) {
                                                                h = h - 12;
                                                                diem = "PM";
                                                            }
                                                            if (h < 10) {
                                                                h = "0" + h;
                                                            }
                                                               if (m < 10) {
                                                                m = "0" + m;
                                                            }
                                                               if (s < 10) {
                                                                s = "0" + s;
                                                            }
                                                            
                                                            var myClock = document.getElementById('clockDisplay');
                                                            myClock.textContent = h + ":" + m + ":" + s + " " + diem;
                                                            myClock.innerText = h + ":" + m + ":" + s + " " + diem;
                                                            myClock.innerHTML = h + ":" + m + ":" + s + " " + diem;
                                                            
                                                            setTimeout('renderTime()', 1000);
                                                        }
                                                        renderTime();
                                                   </script>
                                               </div>
                                           </div>
                                       </div>
                                       <br> 
                                       <div class="row px-3">
      <!-- Transit Status -->
                                        <div class="col-md-12" style="background: #e9ecef; border-radius: 10px!important;">
                                            <h5 class="text-secondary mt-2">
                              <i class="fa fa-hourglass-start" aria-hidden="true"></i>
                                            <b>Transit Status</b>
                                            </h5>
                                            <div>
                                            <table class="table table-stripped table-bordered" style="background: white; border-radius: 10px !important;  border: 5px solid #007bff; width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th>Progress</th>
                                                        <th>Consignment Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody style='font-size: 14px !important; padding: 5px'>
                                                    <tr>
                                                        <td>
                                                            <progress class="slider" id="prog" value="50" max="100" style="width: 100%"></progress>
                                                            <span id="indicate"></span>
                                                             <br>
                                                             <?php  $sql="select * from client_details ";
                                                                 $result= mysqli_query($conn, $sql);
                                                                 $row = mysqli_num_rows($result);  ?>
                                                             <input class="slider" value="<?php echo $row['range_value']; ?>" type="range" required id="prorange" name="range_value" min="0" value="50" max="100" style="width: 100%">
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
                                                             <select class="slider" id="select2" required name="select2" style="border-radius: 5px; margin-top: 5px; width: 100%">
                                                                <option value="" disabled="disabled" selected="selected">--Select an option--</option>
                                                                <option value="hold">On Hold</option>
                                                                <option value="active">In Transit</option>
                                                                <option value="delivery">Delivered</option>
                                                                <option value="held">Held at Destination Airport Facility</option>
                                                                <option value="Adp Global Delivery">Departed Adp Global Delivery Location</option>
                                                                <option value="ongoing">Ongoing Custom Security Check</option>
                                                                <option value="delayed">Delayed</option>
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
                                                                case 'delivery' :
                                                                   output2.innerHTML = 'Delivered';
                                                                   output2.setAttribute("class", "delivery");
                                                               break;
                                                                 case 'held' :
                                                                   output2.innerHTML = 'Held at Destination Airport Facility';
                                                                   output2.setAttribute("class", "hold");
                                                               break;
                                                                case 'Adp Global Delivery' :
                                                                   output2.innerHTML = 'Departed Adp Global Delivery Location';
                                                                   output2.setAttribute("class", "In Transit");
                                                               break;
                                                                case 'ongoing' :
                                                                   output2.innerHTML = 'Ongoing Custom Security Check';
                                                                   output2.setAttribute("class", "hold");
                                                               break;
                                                                case 'delayed' :
                                                                   output2.innerHTML = 'Delayed';
                                                                   output2.setAttribute("class", "hold");
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
                                       </div>
                                       
                                       <br>
                                   </div>
                                   <br> 
                               </div>
                               <div class="col-12 text-center custom-bg">
                                   <input type="submit" name="update" style="font-weight: bold; font-size: 24px; margin: 20px;" class="btn btn-primary" name="submit_detailss" value="Submit">    
         
                               </div>
<!--                       </div>-->
                    </div>    
                </form>
                <br>
                <br>
           </div>      
    </body>
</html>
