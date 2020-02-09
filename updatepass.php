<?php
session_start();
include 'dbconnection.php';
$email =$_SESSION['email'];
$query="select * FROM pblood WHERE pemail='$email'";
$data = mysqli_query($conn,$query);
$result= mysqli_fetch_assoc($data);
$rowcount=mysqli_num_rows($data);
$pass=$_POST['pass'];
$query="UPDATE pblood SET ppass='$pass'  WHERE pemail='$email' ";
$data = mysqli_query($conn,$query);


if ($conn->query($query) === TRUE) {
   echo '<script type="text/javascript">';
echo'alert("Password Change sucessfull ");';
echo 'window.location = "http://localhost/bb/index.php";';
echo '</script>';
    

} else {
    echo "Error updating record: " . $conn->error;
}




if(!$rowcount==1)
{
    header('location:index.php');
}
?>