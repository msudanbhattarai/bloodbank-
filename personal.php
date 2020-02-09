<?php
include'dbconnection.php';

$pfname=$_POST['fname'];

$plname=$_POST['lname'];
$pdob=$_POST['dob'];
$pgender=$_POST['pgender'];
$pblood=$_POST['pblood'];
$padd=$_POST['padds'];
$pnum=$_POST['pnum'];
$pemail=$_POST['pemail'];
$ppass=$_POST['ppass'];
$preg=$_POST['preg'];

	$sql = "INSERT INTO pblood(fname,lname,dob,pgender,pblood,padds,pnum,pemail,ppass,pprofile,pbio,preg) VALUES('$pfname','$plname','$pdob','$pgender','$pblood','$padd','$pnum','$pemail','$ppass','','','$preg')";
if(mysqli_query($conn,$sql))
{
	$sql = "CREATE TABLE $pfname (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
post VARCHAR(30) NOT NULL,
image VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";
if (mysqli_query($conn,$sql)) {
    echo "";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

   
echo '<script type="text/javascript">';
echo'alert("registration sucessfull ");';
echo 'window.location = "http://localhost/bb/index.php";';
echo '</script>';
    
}	
else
{
	die('connection failed due to--'.mysqli_error($conn));
}











 ?>