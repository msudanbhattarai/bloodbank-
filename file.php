<?php
session_start();
$abc= "localhost";
$username="root";
$password="";
$dbname="dpost";
if(!empty($abc))
{
$conn = mysqli_connect($abc,$username,$password,$dbname);
}

$email =$_SESSION['email'];
$ptext=isset($_POST['text1']);
$d=0;$b=0;
echo $email;
echo $ptext;
echo count($_FILES['filetoupload']['name']);

 $red = date('Y-m-d-i-s');
echo $red;
    $sql ="INSERT INTO post(pemail,ptext,img1,img2,img3,img4,img5,reg) VALUE('$email','$ptext','','','','','','$red')" ;
    if (mysqli_query($conn,$sql)) {
        echo '<script type="text/javascript">';
        echo'alert("registration sucessfull ");';
        echo '</script>';
            
    } else {
        echo "Error creating table: " . mysqli_error($conn);
    }   
if(count($_FILES['filetoupload']['name'])>0)
    {
    for($i=1;$i<=4;$i++)
    {
        if($i==2)
        {
        break;
        }
        echo $i;
        $b=$b+1;
        $file  = $_FILES['filetoupload'];
    
    $file_name = $_FILES['filetoupload']['name'][$i];
    $file_type = $_FILES['filetoupload']['type'][$i];
    $file_size = $_FILES['filetoupload']['size'][$i];
    $file_tem_loc = $_FILES['filetoupload']['tmp_name'][$i];
    $file_store = "post/".$file_name;
   
             $query="UPDATE post SET img$i='post/$file_name' WHERE reg='$red' && pemail='$email'";
            $data = mysqli_query($conn,$query);
                if ($conn->query($query) === TRUE)
                 {
                    echo '<script type="text/javascript">';
                     
                    echo '</script>';
         
     
                 } 
                 else
                {
                    die("failed:".mysqli_connect_error($conn));
                }
                
        
    
    }
    if($i<6)
    {
        for($c=$b;$c<=5;$c++)
        {
            $sql ="UPDATE post SET img$c='$d' WHERE reg='$red' && pemail='$email' ";
            $data = mysqli_query($conn,$sql);
    if ($conn->query($sql) === TRUE) {
        echo '<script type="text/javascript">';
     echo'alert("uploaded sucessfull ");';
     
     echo '</script>';
          
     }else {
        echo "Error updating record: " . $conn->error;
    }
    
        }
    }

}
else
{
    for($i=1;$i<=5;$i++)
    {
        $sql ="UPDATE post SET img$i='$d' WHERE reg='$red' && pemail='$email' ";
        
    }

}
    
?>