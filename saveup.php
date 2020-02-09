<?php
session_start();
include 'dbconnection.php';
$email =$_SESSION['email'];
$puid=$_SESSION['puid'];
$pfname=$_POST['fname'];
$plname=$_POST['lname'];
$pdob=$_POST['dob'];
$pblood=$_POST['pblood'];
$padd=$_POST['padds'];
$pnum=$_POST['pnum'];
$pemail=$_POST['pemail'];
$pbio=$_POST['pbio'];

$query="UPDATE pblood SET fname='$pfname',lname='$plname',dob='$pdob',padds='$padd',pnum='$pnum',pemail='$pemail',pbio='$pbio'   WHERE puid=$puid ";
$data = mysqli_query($conn,$query);


if ($conn->query($query) === TRUE) {
   echo '<script type="text/javascript">';
echo'alert("registration sucessfull ");';
echo 'window.location = "http://localhost/bb/editprofile.php";';
echo '</script>';
    

} else {
    echo "Error updating record: " . $conn->error;
}



?>