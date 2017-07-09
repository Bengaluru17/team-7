 <?php
 session_unset();
 session_start();
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 
 </head>
 <body>
 <?php
$servername = "localhost:3306";
$username = "root";
$password = "root";
$dbname = "reachinghands";

$uname=$_POST["uname"];
$pass=$_POST["pass"];
$_SESSION["user"]=$uname;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT uid FROM user WHERE username = '$uname' and password = '$pass'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result)>0) {
$uid=mysqli_fetch_assoc($result)["uid"];
$sql = "SELECT rid FROM userrole WHERE uid = '$uid'";
$result = mysqli_query($conn, $sql);
$rid=mysqli_fetch_assoc($result)["rid"];
$sql = "SELECT rname FROM role WHERE rid = '$rid'";
$result=mysqli_query($conn, $sql);

    // output data of each row
	$role=mysqli_fetch_assoc($result)["rname"];
	if($role=="admin")
	{
    header("location: admin.php");
    }
	elseif($role=="Incharge")
	{
	 header("location: incharge.php");
	}
	elseif($role=="manager")
	{
	header("location: manager.html");
	}

}
 else {
  
   header("location: home.html");
}
$conn->close();
?>

</body>
</html>
 