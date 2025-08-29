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
        <title>Add Client</title>
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
                        USER DASHBOARD
                        <small style="font-weight: normal!important; font-style: italic; font-family: arial; font-size: 15px!important">    -    Consignment details, status & travel locations</small>
                    </h3>
                </div>
               </div>
                <br>
                <!-- Start side bar -->
        
                <form enctype="multipart/form-data" method="POST" action="process.php" style="width:100%;">
                    <div class="row">
                        <!-- Company's Information -->
                        <div class="col-md-6 text-center mx-auto" style='border-radius: 10px;'>
                            <h3 class='bg-primary py-2' style='color: #fff; text-transform: uppercase; width: 100%; border-radius: 5px'><span class="fas fa-briefcase"></span> Company Details</h3>
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
                            <br>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                         <i class="fas fa-user" style="margin-right: 5px"></i>
                                        Delivery Agent: 
                                    </span>
                                </div>
                                <input type="text" required name="del_agent" class="form-control" style="margin-top: 0em; padding: 5px; border: 2px solid #e2e2e2;">
                            </div>                 
                        </div>
                       <!-- <img style="max-width: 100%;" src="images/custom-divider.png" class="mx-auto"> -->
                    </div>
                     <br>
     <!-- Sender's Information -->
                     <div class="row" style="background: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)), url('images/slide3.png'); ">
                        <div class="col-md-6">
                            <h3 class='bg-primary py-2' style='color: #fff; text-transform: uppercase; width: 100%; border-radius: 5px'><span class="fas fa-restroom ml-2"></span> Sender's Information</h3>
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
 <!-- Receiver's Information -->
                        <div class='col-md-6'>
                              <h3 class='bg-primary py-2' style='color: #fff; text-transform: uppercase; width: 100%; border-radius: 5px'><span class="fas fa-restroom ml-2"></span> Receiver's Information</h3>
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
                             <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                      <span class="input-group-text">
                                             <i class="fas fa-map-marker-alt" style="margin-right: 5px"></i>
                                             Location:  
                                      </span>
                                  </div>
                                 <input type="text" required name="receiver_location" class="form-control" style="margin-top: 0em; padding: 5px; border: 2px solid #e2e2e2;">
                                 <br>
                             </div>
                      </div>
                        <!-- <img style="max-width: 100%;" src="images/custom-divider.png" class="mx-auto"> -->
                        
               </div>
    <!-- Consignment Details -->
                <div class="row custom-bg">
                    <div class='col-md-6 text-center mx-auto'>
                        <br>
                       <h3 class='bg-primary py-2' style='color: #fff; text-transform: uppercase; width: 100%; border-radius: 5px'>Consignment Details</h3>
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
                            <input type="text" required name="type_of_ship" class="form-control" style="margin-top: 0em; padding: 5px; border: 2px solid #e2e2e2;" placeholder="frieght transport">
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
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-comments" style="margin-right: 5px;"></i>
                                     Comment
                                </span>
                            </div>
                             <input type="text" required name="comments" class="form-control" style="margin-top: 0em; padding: 5px; border: 2px solid #e2e2e2;">
                        </div>  
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <h3 style="color: #fff">Enter the delivery fee charged for this item to enable you generate a payment receipt</h3>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-currency" style="margin-right: 5px;"></i>
                                     Currency Type:
                                </span>
                            </div>
                            <select required name="currency" class="form-control" style="margin-top: 0em; padding: 5px; border: 2px solid #e2e2e2;">
                                <option disabled selected>Choose a currency</option>
                                <option>Dollars</option>
                                <option>Euro</option>
                                <option>Pounds</option>
                            </select>
                        </div>  
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-money" style="margin-right: 5px;"></i>
                                     Delivery Fee:
                                </span>
                            </div>
                             <input type="number" required name="fee" class="form-control" style="margin-top: 0em; padding: 5px; border: 2px solid #e2e2e2;">
                        </div>  
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-money" style="margin-right: 5px;"></i>
                                     Amount Paid:
                                </span>
                            </div>
                             <input type="number" required name="amount" class="form-control" style="margin-top: 0em; padding: 5px; border: 2px solid #e2e2e2;">
                        </div>  
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-money" style="margin-right: 5px;"></i>
                                     Balance Payment:
                                </span>
                            </div>
                            <input type="number" name="balance" class="form-control" style="margin-top: 0em; padding: 5px; border: 2px solid #e2e2e2;" placeholder="leave field empty if there is no balance payment">
                        </div>  
                    </div>
                      <!-- <img style="max-width: 100%;" src="images/custom-divider.png" class="mx-auto"> -->
                    </div>
     
       <div class="col-12 text-center custom-bg">
                                   <input type="submit" name="submit" style="font-weight: bold; font-size: 24px; margin: 20px;" class="btn btn-primary" name="submit_detailss" value="Submit">    
         
                               </div>
                </form>
        
           </div>   <!-- End of Form -->
           
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </body>
</html>
