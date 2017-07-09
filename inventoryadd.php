<?php
$servername = "localhost:3306";
$username = "root";
$password = "root";
$dbname = "reachinghands";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$commodity=$_POST["commodity"];
$type=$_POST["type"];
$qty=$_POST["qty"];
$sql="select * from inventory WHERE Commodity='$commodity' AND type= $type'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>=1)
{
$sql="update inventory SET qty=qty+'$qty' WHERE Commodity='$commodity' AND type= $type'";
$result = mysqli_query($conn, $sql);
}
else
{
$sql="insert into inventory (Commodity,type,qty) values('$commodity','$type','$qty')";
$result = mysqli_query($conn, $sql);
}
header('location: admin.php')
?>