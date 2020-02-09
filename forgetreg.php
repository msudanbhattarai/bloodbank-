<?php
session_start();
include 'dbconnection.php';
if(isset($_POST['submit']))
{   
    $pemail=$_POST['pemail'];
     $preg=$_POST['preg'];
    $sql = "SELECT * FROM PBLOOD WHERE pemail='$pemail' && preg='$preg' ";
    $query = "SELECT * FROM OBLOOD WHERE oemail='$pemail' && oreg='$preg'";
    $datap = mysqli_query($conn,$sql);
    $datao =  mysqli_query($conn,$query);
    $totalo = mysqli_num_rows($datao);
    $totalp = mysqli_num_rows($datap);
    if($totalo==1)
    {
      
      $_SESSION['email']="$pemail";
      

      header('location:forgot.php');
    }
    else
    {
      echo '<script type="text/javascript">';
      echo'alert("email and security code incorrect");';
      echo 'window.location = "http://localhost/bb/index.php";';
      echo '</script>';
    
    }
    if($totalp==1)
    {
      
      $_SESSION['email']="$pemail";
      header('location:forgot.php');
    }
    else
    {
      echo '<script type="text/javascript">';
      echo'alert("email and security code incorrect");';
      echo 'window.location = "http://localhost/bb/index.php";';
      echo '</script>';
    
    }
}

    

?> 