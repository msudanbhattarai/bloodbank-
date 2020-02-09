<?php
session_start();
include 'dbconnection.php';
$email =$_SESSION['email'];
$query="select * FROM pblood WHERE pemail='$email'";
$data = mysqli_query($conn,$query);
$result= mysqli_fetch_assoc($data);
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
                     <li class ="navbar-item">
                        
                         <a class="nav-link" href="#">Message <span class="badge badge-light "> 4
                             </span></a>

                     </li>
                     <li class ="navbar-item">
                         <a class="nav-link" href="#" >Notification<span class="badge badge-light caret"> 5</span>

                         </a>
                     </li>
                 </ul>
                     <ul class ="navbar-nav justify-content-end text-right ml-auto">
                     <a class=" navbar-item navbar-link logout text-danger text-center "  href="index.php">logout <span><i class="fas fa-sign-out-alt"></i></span></a>
                    </ul>
                 
             </div>
                
            </nav>
            
            <div class="container p-3">
                <div class="col">

                <div class="card p-2 col" style="width:1000px">
                    <img  class="card-img-top profileimg rounded-circle" src="<?php echo $pfile ?>"  alt="username" width="200px" style="width:50%">
                    <br>
                   

                    <div class="input-group mb-3">
                            <div class="input-group-prepend">
                            <form action="upload.php" method="POST" enctype="multipart/form-data">
                              <span class="input-group-text btn btn-primary ">Change profile picture</span>
                            </div>
                            <input type="file"  name="filetoupload" class="btn  "  >
                            <input type="submit" value="upload image " class="btn btn-primary " name="submit">
                          </div> 

                          </form>
 
                    
                </div>
                
  
                     
                      </div>
                  
                      <form action="saveup.php" method="POST" >
                    <div class="card-body">
                        
                        <!--Bio-->
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text">Edit Bio</span>
                            </div>
                            <input type="text" class="form-control" value="<?php echo"$pbio";?>" placeholder="<?php echo"$pbio";?>" id="usr" name="pbio">
                          </div> <hr><br>
                       

                        
                      <!--username-->
                      <br>
                      <h4 class="card-title"> 
                          <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text">Email</span>
                        </div>
                        <input type="text" class="form-control" placeholder="<?php echo"$pemail";?>" id="usr" value="<?php echo"$pemail";?>" name="pemail">
                      </div> <hr><br>
                        <!--name-->
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text">Name</span>
                            </div>
                            <input type="text" class="form-control" name="fname" value="<?php echo"$fname";?>" placeholder="<?php echo"$fname";?>">
                            <input type="text" class="form-control" name="lname" value="<?php echo"$lname";?>" placeholder="<?php echo"$lname";?>">
                          </div><hr><br>
                          <!--address-->
                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text">Address</span>
                            </div>
                            <input type="text" class="form-control" name="padds" value="<?php echo"$padds";?>" placeholder="<?php echo"$padds";?>">
                          </div><hr><br>
                          <!--phonenumber-->
                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text">Phone Number</span>
                            </div>
                            <input type="number" class="form-control" name="pnum" value="<?php echo"$pnum";?>" placeholder="<?php echo"$pnum";?>">
                          </div><hr><br>
                          <!--address-->
                         
                          <!--bBlood group-->
                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text">Blood Group &nbsp;<i class="fas fa-heart"></i></span>
                            </div>
                            <select name="pblood" class="custom-select">
                                <option selected value="<?php echo"$pblood";?>"><?php echo"$pblood";?></option>
                                         <option value="A+">A+</option>
                                          <option value="A-">A-</option>
                                          <option value="B+">B+</option>
                                          <option value="B-">B-</option>
                                          <option value="AB+">AB+</option>
                                          <option value="AB-">AB-</option>
                                          <option value="O+">O+</option>
                                          <option value="O-">O-</option>
                                                 </select>
                          </div><hr><br>
                            
                            
                          <!--Date of birth-->
                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text">Date of Birth </span>
                            </div>
      
        <div class="input-group-prepend">
            <div class='input-group date' id='datetimepicker10'>
                <input type='text' class="form-control" value="<?php echo"$dob";?>" name="dob" placeholder="<?php echo"$dob";?>" />
                <span class="input-group-addon">
                <span ><i class="fas fa-calendar-alt"></i>
                    </span>
                    
                </span>
            </div>
        </div>
    
    <script type="text/javascript">
        $(function () {
            $('#datetimepicker10').datetimepicker({
                viewMode: 'years',
                format: 'YYYY/MM/DD'
            });
        });
    </script>
               
                            
                          </div><hr><br>
                          </h4>
                          <button type="submit" class="btn btn-primary "  >Save Update</button>  
                          <hr>
                          </form>

                          
                          

                      
                    
              
                   
                </div>
               
                      
                      <br>
                      </div>
                      </div>
                      </div>
                    </div>
                    <link href="./css/prettify-1.0.css" rel="stylesheet">
        <link href="./css/base.css" rel="stylesheet">
        <link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
		<script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
        
        <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
        
        
        <script src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>
            
                      