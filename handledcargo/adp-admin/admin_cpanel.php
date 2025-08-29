<?php
    session_start();
    if($_SESSION['admin_name']=="" ||$_SESSION['admin_password']=="" ){
        header("Location: admin_login.php");
    }
    
    include_once 'includes/dbh.inc.php';
    
    // include_once 'includes/contactDetails.php';
?>
<!DOCTYPE html>
<html>
    <head>
         <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Cpanel </title>
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
            <a href="../index.php" class="navbar-brand"><img src="images/logo.png" style="width: 100px; height: 64px;" alt="logo"> </a>
              <a href="admin_cpanel.php" style="color: #640c23 !important; font-weight: bold !important; text-decoration: none;">
                <i class="fas fa-home"></i> 
                CPANEL
            </a>
        </nav>
        <?php
            // include_once 'includes/contactDetails.php';
        ?>
        <div>
            <br>
            <!-- Add new Client -->
            <center>
                <a href="add_client.php" target="_self" class="btn btn-primary">
                    <i class="fas fa-plus-circle"></i>
                    ADD NEW CLIENT
                </a> 
            </center>
            <br>
            <!-- Contact Message -->
            <center>
                <a href="contact_mail.php" target="_self" class="btn btn-primary">
                    <i class="far fa-share-square"></i>
                    VIEW CONTACT MESSAGE FROM THE CONTACT FORM ON YOUR WEBSITE
                </a>
                <hr>
                <br>
            </center>
            <div class="container-fluid">
                <a href="" class="btn btn-primary">
                    <i class="fas fa-plus-circle"></i>
                     STATS: <?php  $sql="select * from client_details ";
                   $result= mysqli_query($conn, $sql);
                   $resultChecker = mysqli_num_rows($result); echo $resultChecker ?>
                </a>
                <a href="setting.php" class="btn btn-primary" style="float:right !important; margin-left: 10px;">
                    <i class="fas fa-cogs"></i>
                    Setting
                </a>
                <a href="log_out.php" class="btn btn-danger" style="float:right !important;">
                    Log out
                    <i class="fas fa-sign-out-alt"></i>
                </a>
                <center>
                    <h3>CLIENT'S INFORMATION OVERVIEW</h3>
                </center>
                <div class="table-responsive">
                <table class="table table-stripped table-bordered" style="font-size: 14px !important">
                     <thead>
                        <tr>
                            <th>S/N</th>
                            <th>RECEIVER</th>
                            <th>EMAIL</th>
                            <th>PHONE NO</th>
                            <th>LOCATION</th>
                            <th>CONSIGNMENT ID</th>
                            <th style="background: red!important; color: white!important">
                            <center>
                                ACTION
                            </center>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if($resultChecker > 0) {
                                $count=1;
                                while($rows = mysqli_fetch_assoc($result)) {
                                  $client_id = $rows['id'];
                        ?>
                        <tr>
                            <td><?php echo $count; ?></td>
                            <td><?php echo $rows['receiver_name']; ?></td>
                            <td><?php echo $rows['receiver_email']; ?></td>
                            <td><?php echo $rows['receiver_phone']; ?></td>
                            <td><?php echo $rows['receiver_location']; ?></td>
                            <td><?php echo $rows['track_no'] ?></td>
                            <td>  
                            <center style="font-size: 14px !important">  
                                <a style="font-size: 14px !important" href='includes/contactDetails.php?del=<?php echo $rows['id']; ?>' type='button' class='btn btn-danger mb-4' style='margin-right: 5px;'><i class='fas fa-trash-alt'></i> Delete Consignment</a>
                               <a style="font-size: 14px !important" id="" href='update_client.php?id=<?php echo $rows['id'] ?>' target='_self' type='button' class='btn btn-info mb-4' style='margin-right: 5px'><i class='fas fa-pen'></i> Update Location</a>
                            </center>
                            </td>   
                        </tr>
                  <?php
                        $count++;
                        }
                   }
                  ?>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
        
       
    </body>
</html>
