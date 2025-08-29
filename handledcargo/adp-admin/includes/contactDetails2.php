  <?php  
    include_once 'dbh.inc.php';

	$id = $_GET['delContact'];
   // echo $id;
	$query = $conn->query("DELETE FROM quote WHERE id = '$id'");
    ?>
    <meta http-equiv="refresh" content="1; url=../contact_mail.php">

                <!-- <center>
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
                </table> -->
