<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Status</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="Resources/css/update.css">
</head>
<body>


 <div class="container-fluid bg">
    <div class="row">
        <div class="col-md-4 col-sm-12 col-xs-12">
            
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12">
        <!--form start-->
        <form class="form-container" method="post" action="update.php">
          <div class="form-group">
            <label for="oid">Order ID</label>
            <input type="text" class="form-control" name="o_id"  placeholder="Enter Order Id">
          </div>
          <div class="form-group">
            <label for="update">Update Required</label>
            <input type="text" class="form-control" name="update"  placeholder="Enter Update">
          </div>
        
        <div class="form-group">
          <input type="submit"  name="submit" class="btn-logout btn" value="SUBMIT">
           
            <a href="index.php" class="btn">LOGOUT</a>
        </div>
        </form>
        <!-- form end -->
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12">
            
        </div>
    </div>
</div>    
</body>
</html>

<?php

/*
mysql_connect("localhost","root","") or die (mysql_error());
mysql_select_db("pam") or die (mysql_error());
if(isset($_POST['submit']))
{ 
   $update=$_POST['update'];
   $o_id=$_POST['o_id'];
   $query= ("update orderr set o_track= '$update' where  o_id='$o_id' ");
    if(mysql_query($query)){
      echo "<script>alert('Order Updated Successfully')</script>";
      exit();
    } 
}
*/

if(isset($_POST['o_id'])) 
                {
                    $id = $_POST['o_id'];
                    $update=$_POST['update'];
                    if(!empty($id))
                    {
                        
                        $host = "localhost";
                        $dbUsername = "root";
                        $dbPassword = "";
                        $dbname = "pam";

                        //create connection
                        $conn1 = new mysqli($host, $dbUsername, $dbPassword, $dbname);

                        if(mysqli_connect_error()) {
                            die('Connect Error('.mysqli_connect-errorno().')'.mysqli_connect_error());
                            echo"error";
                        }else{
                            $UPDATE = "UPDATE orderr set o_track='$update' where o_id='$id'";
                            $stmt1 = $conn1->prepare($UPDATE);
                            $stmt1->execute();
            
                                //$stmt1 = mysqli_query($conn1,$UPDATE);
                            
                                //while($row=mysqli_fetch_array($stmt1))
                                    //{   //$x=$row['o_track'];
                                        //echo"<input type='text' name='name' value='$x'>";
                                        echo "Updated Successfully";
                                        //echo"1";
                                //}                           
                                
                                
                        }
                    }
            }
?>


