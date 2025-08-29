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
        <title>Delete Contact | Best Delivery Logistics </title>
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
            <a href="../index.php" class="navbar-brand"><img src="images/LOG3.png" alt="logo"> </a>
            <a href="admin_cpanel.php" style="color: #640c23 !important; font-weight: bold !important; text-decoration: none;">
                <i class="fas fa-home"></i> 
                CPANEL
            </a>
        </nav>
         <br>
         <div class="container-fluid">
            <div class="alert alert-success alert-dismissible fade show">
                   <center>
                       <strong>Success! </strong>
                       You have deleted a message
                   </center>
                   <button type="button" class="close" data-dismiss="alert">x</button>
            </div>
            <br>
            <a href="" class="btn btn-primary">
                <i class="fas fa-plus-circle"></i>
                 STATS: 2 Clients
            </a>
            <a href="" class="btn btn-primary" style="float:right !important; margin-left: 10px;">
                <i class="fas fa-cogs"></i>
                Setting
            </a>
            <a href="log_out.php" class="btn btn-danger" style="float:right !important;">
                Log out
                <i class="fas fa-sign-out-alt"></i>
            </a>

            <br>
             <center>
                <h3>CLIENT'S CONTACT US MESSAGES</h3>
            </center>
            <div class="alert alert-success alert-dismissible fade show">
                <center>
                    <strong>SMILES! </strong>
                    YOU DON'T HAVE ANY CONTACT US MESSAGES YET 
                </center>
                <button type="button" class="close" data-dismiss="alert">x</button>
            </div>
         </div>
         
          <footer class="fixed-bottom">
           <div class="container py-3 py-md-4">
               <div style="float: left;">
                   <img style="max-height: 100%; min-height: 100%;" src="images/comodo_secure_seal_113x59_transp.png">
               </div>
               <div class="footer">
                   <p class="text-center"> Copyright © 2008 Arrowgo courier logistic. All Rights Reserved.</p>
               </div>
           </div>
        </footer>
         
    </body>
</html>
