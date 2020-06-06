<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Client</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="Resources/css/client.css">
</head>
<body>
    <div class="container-fluid bg">
    <div class="row">
        <div class="col-md-4 col-sm-12 col-xs-12">
            
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12">
        <!--form start-->
        <form class="form-container" action="login.php" method="post">
          <div class="form-group">
            <h2 align="center" class="heading">CLIENT LOGIN</h2>
          </div>
          <div class="form-group">
            <label for="userid">Login ID</label>
            <input type="text" class="form-control" name="u_id" placeholder="Enter Your User Id">
          </div>
          <div class="form-group">
            <label for="Password">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Enter Your Password">
          </div>
          <br>
          <div class="form-group">
          <input type="submit"  name="submit" class="btn btn-success btn-block" value="Submit">
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

/*session_start();
mysql_connect("localhost","root","") or die (mysql_error());
mysql_select_db("pam") or die (mysql_error());
if(isset($_POST['submit']))
    
{ 
    
   $u_id=$_POST['u_id'];
   $password=$_POST['password'];
    $res=mysql_query("select * from user where u_id='$u_id' ");
   $client_res = mysql_query("select * from client where fc_uid = '$u_id'");
    $row= mysql_fetch_array($res);
   $client_row = mysql_fetch_array($client_res);
   $_SESSION["loginName"] = $row['u_name'];
    if($password==$row['password'] && Client==$row['C/S']){
        $_SESSION["clientID"] = $client_row['c_id'];
        header('location:client.php');
    }
    else
        echo "Invalid id or password";
        
 } 


*/

$username = $_POST['u_id'];
$password = $_POST['password'];

if(!empty($u_id) || !empty($password) ){
  
  $host = "localhost";
  $dbUsername = "root";
  $dbPassword = "";
  $dbname = "pam";

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    if(mysqli_connect_error()) {
      die('Connect Error('.mysqli_connect-errorno().')'.mysqli_connect_error());
      echo "n";
      }
    else{
      $SELECT = mysqli_query($conn, "SELECT * from user where u_id = '$username' && password = '$password'");
      $count = mysqli_num_rows($SELECT);
      if($count == 1){
        echo"test";
        header("location: client.php");
      //if($row["username"]) == $ID && $row["password"] == $password ){
        //echo "Login successful! Welcome!" ;
          } 
        else{
          //header("location: login.php");
            echo "Wrong password!";
        }
      }


}
else{
  echo "All fields required" ;
}

?>
