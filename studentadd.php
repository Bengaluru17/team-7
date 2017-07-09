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
$name=$_POST["name"];
$dob=$_POST["dob"];
$school=$_POST["school"];
$class=$_POST["class"];
$gender=$_POST["gender"];
$sql="insert into student (Name,dob,school,class,gender)values('$name','$dob','$school','$class','$gender')";
$result = mysqli_query($conn, $sql);
header('location: admin.php')
?>