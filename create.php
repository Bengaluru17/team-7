<?php
$servername = "localhost:3306";
$username = "root";
$password = "root";
$dbname = "reachinghands";

$name=$_POST["name"];
$role=$_POST["role"];
$uname=$_POST["username"];
$pass=$_POST["password"];

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM user";
$result = mysqli_query($conn, $sql);
$uid=mysqli_num_rows($result)+1;
$sql = "insert into user values('$uid','$uname','$pass')";
$result = mysqli_query($conn, $sql);
if($role==1)
{

$sql = "insert into userrole values('$uid',1)";
$result = mysqli_query($conn, $sql);
}
elseif($role==2)
{
$sql = "insert into userrole values('$uid',3)";
$result = mysqli_query($conn, $sql);
}
else
{
$sql = "insert into userrole values('$uid',2)";
$result = mysqli_query($conn, $sql);
}
echo "New user added to the database ";
?>  
   



              




             
                   

                









    
        
