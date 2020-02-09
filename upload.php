<?php

session_start();
include 'dbconnection.php';
$email =$_SESSION['email'];
$puid=$_SESSION['puid'];

if(isset($_POST['filetoupload']))
{
    
    $file  = $_FILES['filetoupload'];
    
    $file_name = $_FILES['filetoupload']['name'];
    $file_type = $_FILES['filetoupload']['type'];
    $file_size = $_FILES['filetoupload']['size'];
    $file_tem_loc = $_FILES['filetoupload']['tmp_name'];
    $file_store = "profile/".$file_name;
    
    print_r ($file_store);
    
    $extension = pathinfo("$file_store",PATHINFO_EXTENSION);
    if(!file_exists("$file_store"))
    {
        
    /*if($extension=="JPG"||$filet=="jpg")
    {*/
   if (move_uploaded_file($file_tem_loc,$file_store))
   {
    $query="UPDATE pblood SET pprofile='profile/$file_name'  WHERE puid=$puid ";
    $data = mysqli_query($conn,$query);
    if ($conn->query($query) === TRUE) {
        echo '<script type="text/javascript">';
     echo'alert("uploaded sucessfull ");';
     echo 'window.location = "http://localhost/bb/editprofile.php";';
     echo '</script>';
         
     
     } else {
         echo "Error updating record: " . $conn->error;
     }

   }
   else
   {
       die("failed");
   }
/*}*/

/*else{
    echo " sorry not jpg format";
}*/
  
}
else
{
    $query="UPDATE pblood SET pprofile='profile/$file_name'  WHERE puid=$puid ";
    $data = mysqli_query($conn,$query);
    if ($conn->query($query) === TRUE) {
        echo '<script type="text/javascript">';
     echo'alert("uploaded sucessfull ");';
     echo 'window.location = "http://localhost/bb/editprofile.php";';
     echo '</script>';
         
     
     }
    
}
}
else{
    echo '<script type="text/javascript">';
     echo'alert("NO PHOTO SELECTED ");';
     echo 'window.location = "http://localhost/bb/editprofile.php";';
     echo '</script>';
}
?>