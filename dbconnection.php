<?php

$abc= "localhost";
$username="root";
$password="";
$dbname="pdata";
if(!empty($abc))
{
$conn = mysqli_connect($abc,$username,$password,$dbname);
}
?>
