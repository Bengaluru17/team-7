<?php
$servername = "localhost:3306";
$username = "root";
$password = "root";
$dbname = "reachinghands";$conn = new mysqli($servername, $username, $password, $dbname);
$type=$_POST["type"];
$commodity=$_POST["Commodity"];
$qty=$_POST["qty"];
$cost=$_POST["cost"];
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "insert into request values ('$commodity','$type','$qty','$cost')";
$result = mysqli_query($conn, $sql);
header('location: incharge.html');
?>