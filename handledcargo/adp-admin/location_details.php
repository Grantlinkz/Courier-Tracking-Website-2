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
               
                <form enctype="multipart/form-data" method="POST" action="location.php" style="width:100%;">
                    <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
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
                                                     Pickup Destination Location
                                                </span>
                                            </div>
                                            <input type="text" required name="pickup" class="form-control" style="margin-top: 0em; padding: 5px; border: 2px solid #e2e2e2;">
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
                                            <input type="date" required name="start_date" class="form-control" style="margin-top: 0em; padding: 5px; border: 2px solid #e2e2e2;">
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
                                                   <input type="date" required name="delivery_date" class="form-control" style="margin-top: 0em; padding: 5px; border: 2px solid #e2e2e2;">
                                                   </div>
                                           </div>
                                           <div class="col-md-4 mb-2">
                                               <div class="input-group">
                                                   <div class="input-group-prepend">
                                                       <span class="input-group-text">
                                                           <i class="fa fa-map-marker-alt" style="margin-right: 5px;"></i>
                                                            Current Location
                                                       </span>
                                                   </div>
                                                   <input type="text" required name="present_loc" class="form-control" style="margin-top: 0em; padding: 5px; border: 2px solid #e2e2e2;">
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
                                                             <input class="slider" type="range" required id="prorange" name="range_value" min="0" value="50" max="100" style="width: 100%">
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
                                   <input type="submit" name="submit" style="font-weight: bold; font-size: 24px; margin: 20px;" class="btn btn-primary" name="submit_detailss" value="Submit">    
         
                               </div>
<!--                       </div>-->
                    </div>    
                </form>
        
           </div>   <!-- End of Form -->
           
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </body>
</html>
