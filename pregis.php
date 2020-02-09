
<?php
$abc= "localhost";
$username="root";
$password="";
$dbname="pdata";
if(!empty($abc))
{
$conn = mysqli_connect($abc,$username,$password,$dbname);
if($conn)
{
    echo"connection ok";

}
else{
    die("connection failed because".mysqli_connect_error());

}
}

/*
if(mysqli_query($conn,$sql))
{
    echo"sucess";


}
else
{
    die("failed:".mysqli_error($conn));
}
?>
*/
 