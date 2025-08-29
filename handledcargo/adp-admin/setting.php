<?php
    session_start();
    ob_start();
        if($_SESSION['admin_name']=="" ||$_SESSION['admin_password']=="" ){
        header("Location: admin_login.php");
    }
    include_once 'includes/dbh.inc.php';
    
    $sql = 'SELECT * FROM admin';
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
   
?>
<!DOCTYPE html>
<html>
    <head>
         <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Setting | Best Delivery Logistics </title>
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
             .bg-light {
            background: #091b27 !important;
        }
        
        footer {
            background: #1b1b1b;
        }

        .footer p {
            font-size: 16px;
            letter-spacing: 1px;
            color: #ccc;
        }
        
        @media (max-width: 1200px) {
            footer {
                position:static !important;
            }
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
                        ADMIN SETTING 
                        <small style="font-weight: normal!important; font-style: italic; font-family: arial; font-size: 15px!important">    -    Confidential section </small>
                    </h3>
                </div>
                <br>
                        <!-- Details -->
                <div class="col-md-12" style="height: auto;">
                        <div class="col-md-12" style="background: #007bff; border-radius: 10px;">
                            <div class="detail-sub1 font-effect-3d font-effect-embross" style="font-size: 40px; color: white !important">
                                <span class="fa fa-cog fa-spin fa-2x"></span>
                                <span class="fa fa-cog fa-spin fa-1x fa-fw"></span>
                                Update Admin Information
                            </div>    
                            <div class="col-md-12" style="background:white; height: auto; border-radius: 10px;">
                                <form  method="post">    
                                <br> 
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-user" style="margin-right: 5px;"></i>
                                            Username:
                                        </span>
                                    </div>
                                    <input type="text" name="admin_name" value="<?php echo $row['admin_name'] ?>"class="form-control" required style="margin-top: 0em; padding: 5px; border: 2px solid #e2e2e2;">
                                </div>
                                <br>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fab fa-slack-hash" style="margin-right: 5px;"></i>
                                            Password:
                                        </span>
                                    </div>
                                    <input type="text" name="admin_password" value="<?php echo $row['admin_password'] ?>" class="form-control" required style="margin-top: 0em; padding: 5px; border: 2px solid #e2e2e2;">
                                </div>
                                <br>
                                <br>
                                <div class="text-center">
                                   <input type="submit" name="submit_details" style="font-weight: bold; font-size: 24px; margin-top: 20px;" class="btn btn-primary" value="Update">    
                               </div>
                                <br>
                                </form>
                                <?php
                                    if(isset($_POST['submit_details'])) {
                                        $admin_name = mysqli_real_escape_string($conn, $_POST['admin_name']);
                                        $admin_password = mysqli_real_escape_string($conn, $_POST['admin_password']);
                                        
                                        $update = "UPDATE admin SET admin_name='$admin_name', admin_password='$admin_password' WHERE id=1";
                                        mysqli_query($conn, $update);
                                        header("Location: setting.php?update=success");
                                    }
                                
                                ?>
                            </div>
                            <br>
                        </div>
                    <br>
                </div>
            </div>       
         <!-- footer -->
       <footer class="fixed-bottom">
           <div class="container py-3 py-md-4">
               <div style="float: left;">
                   <img style="max-height: 100%; min-height: 100%;" src="images/comodo_secure_seal_113x59_transp.png">
               </div>
               <div class="footer">
                   <p class="text-center font-weight-light"> Copyright © 2005 Global Assurance. All Rights Reserved.</p>
               </div>
           </div>
        </footer>
    </body>
</html>
