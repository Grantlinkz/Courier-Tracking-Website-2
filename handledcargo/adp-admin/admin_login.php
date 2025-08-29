<?php
    session_start(); 
    include_once 'includes/dbh.inc.php';
    ob_start();
    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Login</title>
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
        
        .container {
            padding: 16px;
            width: 70%;
            height: auto;
            margin: 0px auto;
        }
        
        h2 {
            text-transform: uppercase;
            margin-top: 0;
            font-size: 2rem;
            margin-bottom: .5rem;
            font-family: inherit;
            font-weight: 500;
            line-height: 1.2;
            color: inherit;
        }
        
        .imgContainer {
           text-align: center;
           margin: 10px auto;
           width: 20%;
           height: 30%
        }
        
        form {
            border: 3px solid #f1f1f1;
        }
        
        label {
            margin: 0;
            display: inline-block;
            margin-bottom: .5rem;
        }
        img {
            min-width: 100%;
            max-height: 100%;
        }
        
        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }       
        
        button {
            margin: 8px 0;
            width: 100%;
        }
        </style>
    </head>
    
    <body>
        <!-- Header -->
        <nav class="navbar navbar-expand-md navbar-light bg-light fixed">
            <a href="../index.php" class="navbar-brand"><img src="images/logo.png" style="width: 200px; height: 64px;" alt="logo"> </a>
        </nav>
        
        <section class="container">
                <h2 class="text-center">Admin Log in</h2>
                <form method="POST"  enctype="multipart/form-data">
                    <div class="imgContainer">
                        <img class="img-responsive img-fluid" src="images/login_key.png" alt="admin login" class="avatar">
                    </div>
                    <div class="container">
                        <label for="user_name">
                            <b>Username</b>
                        </label>
                        <input id="user_name" name="admin_name" type="text" placeholder="Enter Username" name="admin_user" required>
                        <label for="psw">
                            <b>Password</b>
                        </label>
                        <input id="psw" type="password" name="admin_password" placeholder="Enter Password" name="password" required>
                        <button type="submit" class="btn btn-primary" name="admin_submit">Login</button>
                    </div>
                </form>
               <?php
                if(isset($_POST['admin_submit'])) {
                    $admin_name = mysqli_real_escape_string($conn, $_POST['admin_name']);
                    $admin_password = mysqli_real_escape_string($conn, $_POST['admin_password']);
                    
                    //INSERT INTO DATABASE
                    //$sql = "INSERT INTO admin (admin_name, admin_password)
                   // VALUES ('$admin_name', $admin_password)";
                    $sql="select * from admin where admin_name='$admin_name' && admin_password= '$admin_password'";
                   $result= mysqli_query($conn, $sql);
                   $resultChecker = mysqli_num_rows($result);
                   $row=mysqli_fetch_array($result);
                    if($resultChecker ==1){
                        $_SESSION['admin_name']=$row['admin_name'];
                        $_SESSION['admin_password']=$row['admin_password'];
                            header("Location: admin_cpanel.php");     
                    }
                    else {
                        echo "<center>
                                    <div class='alert alert-success alert-dismissible  fade show col-md-8'>  
                                        <strong> Invalid login Details </strong>
                                     </div>
                            </center>";
                    }
                }
               
               ?>
              
        </section>
        
        
         <!-- footer -->
         <footer>
           <div class="container py-3 py-md-4">
               <div style="float: left;">
                   <img style="max-height: 100%; min-height: 100%;" src="images/comodo_secure_seal_113x59_transp.png">
               </div>
               <div class="footer">
                   <p class="text-center font-weight-light"> Copyright © 2006 Flitglobal Delivery. All Rights Reserved.</p>
               </div>
           </div>
        </footer>
    </body>
</html>
