<?php
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
        <title>Send Mail | Best Delivery Logistics </title>
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
        </style>
    </head>
    <body>
         <!-- Header -->
        <nav class="navbar navbar-expand-md navbar-light bg-light fixed">
            <a href="../index.php" class="navbar-brand"><img src="images/logo.png" style="width: 200px; height: 64px;" alt="logo"> </a>
            <a href="admin_cpanel.php" style="color: #640c23 !important; font-weight: bold !important; text-decoration: none;">
                <i class="fas fa-home"></i> 
                CPANEL
            </a>
        </nav>
         <div class="container-fluid" style="background:#f4f4fd;">
            <br>
            <div class="col-md-12">
                <h3 style="font-size: 1.75rem;">
                    ADMIN SEND MAIL
                    <small style="font-weight: normal!important; font-style: italic; font-family: arial; font-size: 15px!important">    -   Confidential section</small>
                </h3>
            </div>
            <br>
            <form method="POST" enctype="multipart/form-data" style="width: 100%;">
                <div class="row">
                    <br>
                    <div class="col-md-12" style="height:auto">
                        <div class="col-md-12" style="background: #007bff; border-radius: 10px;">
                            <div class="detail-sub1 font-effect-3d font-effect-emboss" style="font-size: 40px; color: white!important">
                                <i class="fas fa-envelope" style="padding: 5px"></i>
                                 Admin Mail Section 
                            </div>
                            <div class="col-md-12" style="background: white; height: auto; border-radius: 10px;">
                                <br>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-user" style="margin-right: 5px;"></i>
                                            Client's name
                                        </span>
                                    </div>
                                    <input type="text" name="client_name" class="form-control text-primary" required style="margin-top: 0em; padding: 5px;">
                                </div>
                                <br>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fab fa-slack-hash" style="margin-right: 5px;"></i>
                                            Client's mail
                                        </span>
                                    </div>
                                    <input type="text" name="client_mail" class="form-control text-primary" required style="margin-top: 0em; padding: 5px;">
                                </div>
                                <br>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-smile-beam" style="margin-right: 5px;"></i>
                                            Title of the message
                                        </span>
                                    </div>
                                    <input type="text" name="title" class="form-control text-primary" required style="margin-top: 0em; padding: 5px;">
                                </div>
                                <br>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="far fa-envelope" style="margin-right: 5px;"></i>
                                            Message
                                        </span>
                                    </div>
                                    <textarea name="message" class="form-control text-primary" required style="margin-top: 0em; padding: 5px; height: 50px;"></textarea>
                                </div>
                                <br>
                            </div>
                            <br>
                        </div>
                        <div class="text-center">
                             <button type="submit" class="btn btn-primary" name="submit" style="font-weight: bold; font-size: 24px; margin-top: 20px;">
                                Send Mail
                                <i class="fas fa-share-square"></i>
                            </button>
                        </div>
                        <br>
                    </div>
                </div>
            </form>
         </div>
         <br>
         <br>
        <footer>
           <div class="container py-3 py-md-4">
               <div style="float: left;">
                   <img style="max-height: 100%; min-height: 100%;" src="images/comodo_secure_seal_113x59_transp.png">
               </div>
               <div class="footer">
                   <p class="text-center"> Copyright © 2008 Arrowgo courier logistic. All Rights Reserved.</p>
               </div>
           </div>
        </footer>
        <?php
        // put your code here
        ?>
    </body>
</html>
