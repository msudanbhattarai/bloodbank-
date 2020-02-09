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
$ptext=$_POST['text1'];
$d=0;$b=0;
/*echo $email;*/
/*echo $ptext;*/
/*print_r($_FILES['filetoupload']['name']);
echo count($_FILES['filetoupload']['name']);*/
 $red = date('Y-m-d');
/*echo $red;*/
/*echo "hello".count($_FILES['filetoupload']['name']);*/
    $sql ="INSERT INTO post(pemail,ptext,img1,img2,img3,img4,img5,reg) VALUE('$email','$ptext','','','','','','$red')" ;
    if (mysqli_query($conn,$sql)) {
        echo '<script type="text/javascript">';
        echo'alert("uploaded sucessfull ");';
        echo '</script>';
            
    } else {
        echo "Error creating table: " . mysqli_error($conn);
    }   
if(count($_FILES['filetoupload']['name'])>=0)
    {
    for($i=1;$i<=4;$i++)
    {
        
        $b=$b+1;
        $file  = $_FILES['filetoupload'];
    
        $file_name = $_FILES['filetoupload']['name'][$b];
        $file_type = $_FILES['filetoupload']['type'][$b];
        $file_size = $_FILES['filetoupload']['size'][$b];
        $file_tem_loc = $_FILES['filetoupload']['tmp_name'][$b];
        $file_store = "post/".$file_name;
        if( $i>=1 || $i<=4 )
            {
                move_uploaded_file($file_tem_loc,$file_store);
            }
            $query="UPDATE post SET img$i='post/$file_name' WHERE reg='$red' && pemail='$email'";
            $data = mysqli_query($conn,$query);
                if ($conn->query($query) === TRUE)
                 { 
                    echo '<script type="text/javascript">';
                    
                    echo 'window.location = "http://localhost/bb/profile.php";';
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