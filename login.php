<?php
session_start();
include 'dbconnection.php';
if(isset($_POST['submit']))
{
   $email=$_POST['email'];
     $pass=$_POST['pass'];
    $sql = "SELECT * FROM PBLOOD WHERE pemail='$email' && ppass='$pass' ";
    $query = "SELECT * FROM OBLOOD WHERE oemail='$email' && opass='$pass' ";
    $datap = mysqli_query($conn,$sql);
    $datao =  mysqli_query($conn,$query);
    $totalo = mysqli_num_rows($datao);
    $totalp = mysqli_num_rows($datap);
    
    if($totalo==1)
    {
      
      $_SESSION['email']="$email";
      

      header('location:profile.php');
    }
    else
    {
      echo '<script type="text/javascript">';
      echo'alert("email and password incorrect");';
      echo 'window.location = "http://localhost/bb/index.php";';
      echo '</script>';
    
    }
    if($totalp==1)
    {
      
      $_SESSION['email']="$email";
      $_SESSION['puid']="$puid";
      header('location:profile.php');
    }
    else
    {
      echo '<script type="text/javascript">';
      echo'alert("email and password incorrect");';
      echo 'window.location = "http://localhost/bb/index.php";';
      echo '</script>';
    
    }
}
?>