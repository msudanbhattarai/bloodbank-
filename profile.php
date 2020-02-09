<?php
session_start();
include 'dbconnection.php';
$email =$_SESSION['email'];
$query="select * FROM pblood WHERE pemail='$email'";
$data = mysqli_query($conn,$query);
$result= mysqli_fetch_assoc($data);
$dbname1="dpost";
if(!empty($abc))
{
$conn1 = mysqli_connect($abc,$username,$password,$dbname1);
}
$red=date('Y-m-d');
$query1="select * FROM post WHERE reg='$red'";
$data1 = mysqli_query($conn1,$query1);
$result1= mysqli_fetch_assoc($data1);

 $img1=$result1['img1'];
 $img2=$result1['img2'];
 $img3=$result1['img3'];
  $fname=$result['fname'];
  $lname=$result['lname'];
  $dob=$result['dob'];
  $pgender=$result['pgender'];
  $pblood=$result['pblood'];
  $padds=$result['padds'];
  $pnum=$result['pnum'];
  $pemail=$result['pemail'];
  $ppass=$result['ppass'];
  $pbio=$result['pbio'];
  $pprofile=$result['pprofile'];
$_SESSION['puid']=$result['puid'];
$pfile=$result['pprofile'];

 
$rowcount=mysqli_num_rows($data);
$row12=mysqli_num_rows($data1);

if(!$rowcount==1)
{
    header('location:index.php');
}
 
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BLOODBANKNPL</title>
    <script src="https://kit.fontawesome.com/0b5ac7632d.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="header.css">
    <link rel="stylesheet" type="text/css" href="dropodown.css">


        

    </style>
    
</head>
<body>
              
    <div class="container-fluid">
        <div class="row row1">
            <div class="col-md-8 col8"><img align="left" src="bank.png" class="rounded-circle" width="170px" height="130px " ><h>BLOOD BANK</h2></div>
            <div class="col-md-4" align="left">
                    <nav class="navbar navbar-expand-sm">
                            <form class="form-inline" action="login.php" method="POST">
                              <input class="form-control mr-sm-2" type="text" placeholder="Search">
                            <span> <button class="btn btn-danger" type="submit">Search</button></span>
                            </form>
                            </nav>
            </div>
            </div>  
            </div> 
            <nav class="navbar navbar-expand-md bg-dark navbar-warning sticky-top">
                <a class="navbar-brand rounded" href="#">
                    <img src="<?php echo $pfile ?>"  alt="Logo" class="rounded-circle " style="width:40px;">
                
 
             </a>
             <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#collapsiblenavbar" >
                 <span class="navbar-toggler-icon"></span>

             </button>
             <div class ="collapse navbar-collapse" id="collapsiblenavbar" >
                 <ul class ="navbar-nav text-center">
                     <li class="navbar-item ">
                         <a class="nav-link" href="profile.php" >Home</a>
                     </li>
                     <li class ="navbar-item">
                        <a class="nav-link" href="#" >Events

                        </a>
                    </li>
                     <li class ="navbar-item" disabled>
                        
                         <a class="nav-link" href="#" disabled>Message <span class="badge badge-light "> 4
                             </span></a>

                     </li>
                     <li class ="navbar-item" disabled>
                         <a class="nav-link" href="#" disabled>Notification<span class="badge badge-light caret"> 5</span>

                         </a>
                     </li>
                 </ul>
                     <ul class ="navbar-nav justify-content-end text-right ml-auto">
                     <a class=" navbar-item navbar-link logout text-danger text-center "  href="index.php">logout <span><i class="fas fa-sign-out-alt"></i></span></a>
                    </ul>
                 
             </div>
          
            </nav>
            <!--about part colm-->
            <div class="container-fluid pt-3">
                <div class="row ">
                    <div class="col-md-1">

                    </div>
                    
            <div class="col-md-7 table-bordered">
                
                <form action="fileupload.php" method="POST" enctype="multipart/form-data" >
                <div class="form-group p-7 ">
                
                   <h5 class="p-3">Create post :</h5>
                    <textarea class="form-control " rows="5" id="comment" name="text"></textarea><br>
                    <input  class="toup" type ="file" name="filetoupload" style="opacity: 0.0;"> 
                    <button type="submit" class="btn btn-primary " name="submit" value="submit">Post</button> 
                    </form>
                    <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#myModal" ><i class="fas fa-image " ></i> Photo
                    </button> 
                    <br>
                    <hr>
                   
                      <!-- The Modal -->
                      <form action="fileupload.php" method="POST" enctype="multipart/form-data">
                      <div class="modal fade" id="myModal">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                          
                            <!-- Modal Header -->
                            <div class="modal-header">
                              <h4 class="modal-title">Upload photos</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            
                            <!-- Modal body -->
                            <div class="modal-body">
                                    <!--extract data-->
                                <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet">

                                <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
                            
                                <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" media="all" rel="stylesheet" type="text/css"/>
                            
                                <style type="text/css">
                            
                                    .main-section{
                            
                                        margin:0 auto;
                            
                                        padding: 20px;
                            
                                        margin-top: 100px;
                            
                                        background-color: #fff;
                            
                                        box-shadow: 0px 0px 20px #c1c1c1;
                            
                                    }
                            
                                    .fileinput-remove,
                            
                                    .fileinput-upload{
                            
                                        display: none;
                            
                                    }
                            
                                </style>
                               
                                 <div class="form-group">

                                    <div class="file-loading">
            
                                        <input id="file-1" type="file" name="filetoupload[]" multiple class="file" data-overwrite-initial="false" data-max-file-count="5">
            
                                    </div>
                                    
            
                                </div>
                                <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/js/fileinput.js" type="text/javascript"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/themes/fa/theme.js" type="text/javascript"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" type="text/javascript"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" type="text/javascript"></script>



    <script type="text/javascript">

        $("#file-1").fileinput({

            theme: 'fa',

            uploadUrl: "fileupload.php",

            allowedFileExtensions: ['jpg', 'png', 'gif','JPEG','JPG'],

            overwriteInitial: false,

            maxFileSize:5000,

            maxFilesNum: 5,

            slugCallback: function (filename) {

                return filename.replace('(','_').replace(']', '_');

            }

        });

    </script>
    <input type="text" class="form-control" name="text1" placeholder=" Write Something.."><br>
    <button type="submit" class="btn btn-primary " value="post1">Post</button> 
    <br>
    <!---end -->

                            </div>
                            
                            <!-- Modal footer -->
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                            
                    
    </form>
                      </div>
                  </div>
                      </div>
                  
                  </form>
            </div> 
            <div class="media border p-3">
    <img src="<?php echo $pfile ?>" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
    <div class="media-body">
      <h4> <small><i><?php echo $red=date('Y-m-d');?> </i></small></h4>
      <div class="container">
          <div class="row">
      <p  class="card-img-top profileimg rounded-circle"><?php 
      include'dbconnection.php';
      $dbname1="dpost";
        if(!empty($abc))
        {
        $conn1 = mysqli_connect($abc,$username,$password,$dbname1);
        }
        
      $query1="select * FROM post WHERE pemail='$email'";
      $data1 = mysqli_query($conn1,$query1);
        
             if($row12>0)
             {
           // output data of each row
            
              while($row1=mysqli_fetch_assoc($data1))
               {
                if(!$row1['img1']="0")
                {
                $pic1=$row1['img1'];
                echo "<img src=".$pic1." height='100' weidth='150' >";
                $pic2=$row1['img2'];
                   
                echo "<img src=".$pic2."  height='100' weidth='150' >";
                $pic3=$row1['img3'];
            
                echo "<img src=".$pic3."  height='100' weidth='150' >";
                }
              
              }

            } 
        
           ?></p>      
    </div>
  </div>
        </div>
        </div>
                </div>
                
            
            <div class ="col-md-4 table-bordered">
                <div class="card" style="width:400px">
                    <br>
                    <img class="card-img-top profileimg rounded-circle" src="<?php echo $pfile ?>" alt="Card image" style="width:50%">
                    <div class="card-body">
                      <h4 class="card-title mark text-center text-capitalize"><?php echo "$fname $lname"; ?></h4>
                      <p class="card-text">Bio: <?php echo "$pbio"; ?></p>
                      <br>
                      <a href="editprofile.php" class="btn btn-primary butp" >Edit Profile</a>
                      <br>
                      <br>
                      <p>Date of Birth : <?php echo "$dob"; ?></p>
                      <br>
                      <p>Blood Group :<?php echo "$pblood"; ?></p>
                      <br>
                      <p>Address :<?php echo "$padds"; ?></p>
                      <br>
                      <p>Phone number :<?php echo "$pnum"; ?></p>
                      <br>
                      <!--
                      <p>Total Donation :<?php /* echo "$tdo";*/ ?></p>
                            -->
                    


                    </div>
            </div>
            <hr>
            </div>
           
        </div>
        </div>

       
            </body>
            </html>";
  