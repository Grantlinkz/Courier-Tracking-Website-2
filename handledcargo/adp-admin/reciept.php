<?php
    include_once 'includes/dbh.inc.php';
    session_start();
    if($_SESSION['admin_name']=="" ||$_SESSION['admin_password']=="" ){
        header("Location: admin_login.php");
    }
    
   
    
    $sql = "SELECT * FROM client_details WHERE id=(SELECT max(id) FROM client_details)";
    $result = mysqli_query($conn, $sql);  
    $row = mysqli_fetch_array($result);
    
    
?>
<!DOCTYPE html>
<html>
     <head>
         <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Receipt</title>
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
        <script src="../adp-js/pdf.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
        
        <style>
            * {
                font-size: 10px !important;
            }
        footer {
            background: #1b1b1b;
        }

        .footer p {
            font-size: 16px;
            letter-spacing: 1px;
            color: #ccc;
        }
        </style>
    </head>
    <body>
           <!-- Navigation -->
        <nav class="navbar navbar-expand-md navbar-light bg-light fixed">
            <a href="../index.php" class="navbar-brand"><img src="images/logo.png" style="width: 100px; height: 64px;" alt="logo"> </a>
            <a href="admin_cpanel.php" style="color: #640c23 !important; font-weight: bold !important; text-decoration: none; font-size: 15px !important">
                <i class="fas fa-home"></i> 
                GO BACK TO CPANEL
            </a>
        </nav>
           <div class="container mt-2">
                 <div class="col-md-12 text-right mb-3">
                    <button class="btn btn-primary" id="download">download pdf</button>
                </div>
           </div>
        <div class="container mt-2" id="invoice">
            <div class="row">
                <div class="col-6">
                    <p style="text-transform: uppercase"><b>Shipping Invoice</b></p>
                    <p>
                     <?php
                        echo $row['invoice_no']; 
                     ?>
                        <!-- <br> -->
                    <!-- <img src="images/barcode.jpg" style="width: 150px; height: 80px;" alt="logo"> -->
                    </p>
                    <p>
                        <?php
                            $get_date = date("Y-m-d");
                            $date= date_create($get_date);
                            echo date_format($date,"M d, Y");
                        ?>
                    </p>
                </div>
                <div class="col-6 text-right">
                    <img src="images/logo.png" style="width: 100px; height: 64px;" alt="logo">
                    <p><b>Adp Global Delivery</b></p>
                    <em>
                        Head Office: 2235 Pacific Hwy, <br>San Diego, CA 92101, USA
                    <br>contactus@adpglobaexdelivery.com, adp.deliverylogistics@aol.com
                    <br>+18582473566, +1 (850) 692-8956
                    </em>
                </div>
            </div>
            <div class="row">
                  <div class="col-6 text-left">
                    <b>TRACKING NUMBER: <?php echo $row['track_no'] ?></b>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-6">
                    <h5 class="bg-primary p-2" style="color: #fff">BILL TO:</h5>
                    <p><?php echo $row['sender_name'] ?></p>
                    <p><?php echo $row['sender_location'] ?></p>
                    <p><?php echo $row['sender_phone'] ?></p>
                    <p><?php echo $row['sender_email'] ?></p>
                </div>
                <div class="col-6 text-right">
                    <h5 class="bg-primary p-2" style="color: #fff">SHIP TO:</h5>
                    <p><?php echo $row['receiver_name'] ?></p>
                    <p><?php echo $row['receiver_location'] ?></p>
                    <p><?php echo $row['receiver_phone'] ?></p>
                    <p><?php echo $row['receiver_email'] ?></p>
                </div>
            </div>
            <hr>
             <table class="table">
                 <thead class="bg-primary" style="color: #fff">
                  <tr>
                    <th>Goods Description</th>
                    <th class="text-right">Shipping Charges</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                      <td style="text-transform: capitalize !important">
                        Quantity: (<?php echo $row['quantity'] ?>)
                        <br><br>
                        Mode of Shipment: (<?php echo $row['mode_of_ship'] ?>)
                        <br><br>
                        Type of Shipment: (<?php echo $row['type_of_ship'] ?>)
                    </td>
                    <td class="text-right">
                        Total Amount: <?php
                            if($row['currency']=='Euro'){
                                $seperate = $row['fee'];
                                $new_seperate = number_format($seperate,2); 
                               echo "€".$new_seperate; 
                            }
                            else if($row['currency']=='Dollars'){
                                $seperate = $row['fee'];
                                $new_seperate = number_format($seperate,2); 
                               echo "$".$new_seperate; 
                            }
                            else if($row['currency']=='Pounds'){
                                $seperate = $row['fee'];
                                $new_seperate = number_format($seperate,2); 
                               echo "£".$new_seperate; 
                            }
                                ?>
                        <br><br>
                        Amount Paid: 
                            <?php 
                            if($row['currency']=='Euro'){
                                $seperate = $row['amount'];
                                $new_seperate = number_format($seperate,2); 
                               echo "€".$new_seperate; 
                            }
                            else if($row['currency']=='Dollars'){
                                $seperate = $row['amount'];
                                $new_seperate = number_format($seperate,2); 
                               echo "$".$new_seperate; 
                            }
                            else if($row['currency']=='Pounds'){
                                $seperate = $row['amount'];
                                $new_seperate = number_format($seperate,2); 
                               echo "£".$new_seperate; 
                            }
                                    ?>
                        <br><br>
                        Balance to be paid: <?php
                         if($row['currency']=='Euro'){
                             $seperate = $row['balance'];
                                $new_seperate = number_format($seperate,2); 
                               echo "€".$new_seperate; 
                            }
                            else if($row['currency']=='Dollars'){
                                $seperate = $row['balance'];
                                $new_seperate = number_format($seperate,2); 
                               echo "$".$new_seperate; 
                            }
                            else if($row['currency']=='Pounds'){
                                $seperate = $row['balance'];
                                $new_seperate = number_format($seperate,2); 
                               echo "£".$new_seperate; 
                            }
                                ?>
                    </td>
                  </tr>
                </tbody>
              </table>
        </div>
    </body>
</html>
