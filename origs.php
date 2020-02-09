<?php

include 'dbconnection.php';
$oname = $_POST['name'];
$odoe=$_POST['doe'];
$oradds=$_POST['adds'];
$oemail=$_POST['oemail'];
$orpass=$_POST['pass'];
$oreg=$_POST['oreg'];

$sql="INSERT INTO oblood(oname,odoe,oadds,oemail,opass,oprofile,obio,oreg) VALUES('$oname','$odoe','$oradds','$oemail','$orpass','','','oreg')";

$sqli = "CREATE TABLE $oname (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    post VARCHAR(30) NOT NULL,
    image VARCHAR(30) NOT NULL,
    reg_date TIMESTAMP
    )";
    if (mysqli_query($conn,$sqli)) {
       
     echo "";
    } else {
        echo "Error creating table: " . mysqli_error($conn);
    }

if (mysqli_query($conn,$sql))
{
    echo '<script type="text/javascript">';
echo'alert("Your Group Already Created ");';
echo 'window.location = "http://localhost/bb/index.php";';
echo '</script>';

}
else
{
    die("failed:".mysqli_error($conn));
}



?>