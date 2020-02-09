<?php
session_start();
?>
<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();
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
    <script src="location.js"></script>
</head>
<body>
        
              
    <div class="container-fluid">
        <div class="row row1">
            <div class="col-md-8 col8"><img align="left" src="bank.png" class="rounded-circle" width="170px" height="130px " ><h>BLOOD BANK</h2></div>
            <div class="col-md-4" align="left">
                    <nav class="navbar navbar-expand-sm">
                            <form class="form-inline" action="search.php" method="POST">
                            
                              <input type="hidden" name="submitted" value="true"/>
                                <select style="width: 150px; height: 38px;margin-top:2px; " name="city" id="city" required>
                                    <option value="">--Loaction--</option>
                                    <optgroup title="Rupandehi" label="&raquo; Rupendehi"></optgroup>
                                    <option value="Aama" >Aama</option>
                                    <option value="Aanandaban" >Aanandaban</option>
                                    <option value="Amari" >Amari</option>
                                
                                <option value="AmawaMarchawar" >AmawaMarchawar</option>
                                
                                <option value="AmuwPaschim" >AmuwPaschim</option>
                                
                                <option value="Asurena" >Asurena</option>
                                
                                <option value="Babhani" >Babhani</option>
                                
                                <option value="Bagaha" >Bagaha</option>
                                
                                <option value="Bagauli" >Bagauli</option>
                                <option value="Bairghat" >Bairghat</option>
                                <option value="Balarampur" >Balarampur</option>
                                <option value="  Basantapur" >  Basantapur</option>
                                <option value=" Betakuiya" > Betakuiya</option>
                                
                                <option value=" BangaiMarchwar" > BangaiMarchwar</option>
                                <option value="Baragadewa" >Baragadewa</option>
                                <option value=" Barsauli" > Barsauli</option>
                                <option value="Bhagawanpur" >Bhagawanpur</option>
                                <option value=" Bisunpura">Bisunpura</option>
                                <option value="Bodabar" > Bodabar</option>
                                <option value=" Bogadi" > Bogadi</option>
                                <option value=" Butwal" > Butwal</option>
                                <option value=" Chhipagada" > Chhipagada</option>
                                <option value=" ChhotakiRamnaga" > ChhotakiRamnaga</option>
                                <option value=" Chilhiya" > Chilhiya</option>
                                <option value=" DayaNagar" > DayaNagar</option>
                                <option value=" Devadaha" > Devadaha</option>
                                <option value=" Dhakadhai" > Dhakadhai</option>
                                <option value=" Dhamauli" > Dhamauli</option>
                                <option value=" Dudharakchhe" > Dudharakchhe</option>
                                <option value=" Ekala" > Ekala</option>
                                <option value=" Farena" > Farena</option>
                                <option value=" Gajedi" > Gajedi</option>
                                <option value=" Gangoliya" > Gangoliya</option>
                                <option value=" Gonaha" > Gonaha</option>
                                <option value=" Hanaiya" > Hanaiya</option>
                                <option value=" HatiBangai" > HatiBangai</option>
                                <option value=" HatiPharsatika" > HatiPharsatika</option>
                                <option value=" Jogada" > Jogada</option>
                                <option value=" Kamahariya" > Kamahariya</option>
                                <option value="  Karaiya" >  Karaiya</option>
                                <option value=" Karauta" > Karauta</option>
                                <option value=" Karmahawa" > Karmahawa</option>
                                <option value=" Kataya" > Kataya</option>
                                <option value=" Kerbani" > Kerbani</option>
                                <option value=" KhadawaBangai" > KhadawaBangai</option>
                                <option value=" Khudabazar" > Khudabazar</option>
                                <option value=" Lumbini" > Lumbini</option>
                                <option value=" Madhabaliya" > Madhabaliya</option>
                                <option value=" Madhuwani" > Madhuwani</option>
                                <option value=" Mainahiya" > Mainahiya</option>
                                <option value=" Makrahar" > Makrahar</option>
                                <option value=" ManMateriya" > ManMateriya</option>
                                <option value=" ManPakadi" > ManPakadi</option>
                                <option value=" Maryadpur" > Maryadpur</option>
                                <option value=" Masina" > Masina</option>
                                <option value=" Motipur" > Motipur</option>
                                <option value=" Padsari" > Padsari</option>
                                <option value="Pajarkatli" >Pajarkatli</option>
                                <option value="PakadiSakron" >PakadiSakron</option>
                                <option value="Parroha" >Parroha</option>
                                <option value="Parsa" >Parsa</option>
                                <option value=" Patekhouli" > Patekhouli</option>
                                <option value="Pharsatikar" >Pharsatikar</option>
                                <option value="Pharsatikarhati" >Pharsatikarhati</option>
                                <option value="Piprahawa" >Piprahawa</option>
                                <option value="Pokharvindi" >Pokharvindi</option>
                                <option value=" Rayapur" > Rayapur</option>
                                <option value= "Roinihawa"> Roinihawa</option>
                                <option value="Rudrapur2" >Rudrapur2</option>
                                <option value="PipariChapa" >PipariChapa</option>
                                <option value="Sadi" >Sadi</option>
                                <option value="Saljhundi" >Saljhundi</option>
                                <option value="SameraMarchwar" >SameraMarchwar</option>
                                <option value="Semalar" >Semalar</option>
                                <option value="SiddharthNagar" >SiddharthNagar</option>
                                <option value="Sikatahan" >Sikatahan</option>
                                <option value="Silautiya" >Silautiya</option>
                                <option value="Sipawa" >Sipawa</option>
                                <option value="SourahaPharsatikar" >SourahaPharsatikar</option>
                                <option value="Suryapura" >Suryapura</option>
                                <option value="TamaNagar" >TamaNagar</option>
                                <option value="Tarkulaha" >Tarkulaha</option>
                                <option value="Tenahawa" >Tenahawa</option>
                                <option value="Tharki" >Tharki</option>
                                <option value="ThumhawaPiprahawa" >ThumhawaPiprahawa</option>
                                <option value="Tikuligadh" >Tikuligadh</option>
                                </select>&nbsp;
                              <select name="pblood" class="form-control " required>
                                          <option value="A+">A+</option>
                                          <option value="A-">A-</option>
                                          <option value="B+">B+</option>
                                          <option value="B-">B-</option>
                                          <option value="AB+">AB+</option>
                                          <option value="AB-">AB-</option>
                                          <option value="O+">O+</option>
                                          <option value="O-">O-</option>
                                  </select></p>
                            <span> <button class="btn btn-danger" type="submit">Search</button></span>
                            </form>
                            </nav>
                  <a class="cmd3h" style="margin-left:1.2vw;" href="#" data-toggle="modal" data-target="#loginform">Login</a>
                       
               <a class="cmd3h" style="margin-left:1vw;" href="#" data-toggle="modal" data-target="#modalRegistrationForm">Register</a>
                          
                               <!-- The Modal -->
                               <div class="modal fade" id="loginform" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                                 <div class="modal-dialog modal-md" role="document">
                                   <div class="modal-content">
                                   
                                     <!-- Modal Header -->
                                     <div class="modal-header">
                                       <h4 class="modal-title" id="exampleModalLabel1">LOGIN</h4>
                                       <button type="button" class="close" data-dismiss="modal">&times;</button>
                                     </div>
                                     
                                     <!-- Modal body -->
                                     <div class="modal-body">
                                     <form action="login.php" method="post"> 
                                           <div class="form-group">
                                               <lebel>
                                                     <i class="fas fa-mail-bulk"></i> EMAIL:
                                               </lebel>
                                               <br>
                                               <input type="text" name="email" class="form-control" required>
                                           </div>
                                           <lebel>
                                                 <i class="fas fa-key"></i> PASSWORD:
                                           </lebel>
                                           <br>
                                           <input type="password" name="pass" class="form-control" required >
                                       </div>
                                       
                                     
                                     <!-- Modal footer -->
                                     <div class="modal-footer">
                                     <a href ="#" data-toggle="modal" data-dismiss="modal"  data-target="#forgetpassword">Forgot password</a>                                        <!--forget password session-->
                                       <input type="submit" name="submit" value="LOGIN" class="btn btn-danger">
                                     </div>
                                    </form>
                                     </div>
                                   </div>
                                 </div>

                                                                                                                         <!--model for forget password-->
                            
                            <form action ="forgetreg.php" method="POST">                                                                                             <div class="modal fade" id="forgetpassword">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Forgot Password</h4>
      
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <p style="display:flex; flex-direction:row;"><i class="fas fa-at"></i>&nbsp;<input type="text" class="form-control" placeholder="Email" name="pemail" value="" required></p>
        <p style="display:flex; flex-direction:row;"><i class="fas fa-key"></i>&nbsp;<input type="password" class="form-control" placeholder="security code" name="preg" value="" required></p>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
        <input type="submit" class="btn btn-primary" name="submit" value="Save">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
</form>
      </div>
    </div>
  </div>
 

                                <!-- Modal -->
        <div class="modal fade" id="modalRegistrationForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Registration Form</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
                    </div>
                  
                      <div class="modal-body">
                        <div class="container mt-3">
                            <h2></h2>
                            <br>
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                              <li class="nav-item">
                                <a class="nav-link active bg-danger" data-toggle="tab" href="#personal">Become a Donor</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link bg-danger" data-toggle="tab" href="#organization" disabled>organization</a>
                              </li>
                             
                            </ul>
                          
                            <!-- Tab panes -->
                            <div class="tab-content">
                              <div id="personal" class="container tab-pane active"><br>
                                <h3>personal </h3>
                                <div class="container">
                                    <form action="personal.php" method="POST">
                                  <p style="display:flex; flex-direction:row;"><i class="fas fa-user-tie">&nbsp;</i><input type="text" class="form-control" placeholder="firstname" name="fname" value="" required></p>
                                  <p style="display:flex; flex-direction:row;"><i class="fas fa-user-tie">&nbsp;</i><input type="text" class="form-control" placeholder="lastname" name="lname" value="" required></p>
                                  <p style="display:flex; flex-direction:row;"><i class="fas fa-calendar-alt">&nbsp;</i><input type="date" class="form-control" placeholder="Date Of Birth" name="dob" value="" required></p>
                                  <p><i class="fas fa-male">&nbsp;</i><input type="radio" name="pgender" value="male"> Male &nbsp;<i class="fas fa-female"></i>&nbsp;<input type="radio" name="pgender" value="female"> Female</p>
                                  <p style="display:flex; flex-direction:row;"><i class="fas fa-heart"></i>&nbsp;
                                      <select name="pblood" class="form-control " required>
                                          <option value="A+">A+</option>
                                          <option value="A-">A-</option>
                                          <option value="B+">B+</option>
                                          <option value="B-">B-</option>
                                          <option value="AB+">AB+</option>
                                          <option value="AB-">AB-</option>
                                          <option value="O+">O+</option>
                                          <option value="O-">O-</option>
                                  </select></p>
                                  
                                 
                                  <p style="display:flex; flex-direction:row;"><i class="fas fa-address-book"></i>&nbsp;  <span>
                                <select  name="padds" id="city" required>
                                    <option value="">--Loaction--</option>
                                    <optgroup title="Rupandehi" label="&raquo; Rupendehi"></optgroup>
                                    <option value="Aama" >Aama</option>
                                    <option value="Aanandaban" >Aanandaban</option>
                                    <option value="Amari" >Amari</option>
                                
                                <option value="AmawaMarchawar" >AmawaMarchawar</option>
                                
                                <option value="AmuwPaschim" >AmuwPaschim</option>
                                
                                <option value="Asurena" >Asurena</option>
                                
                                <option value="Babhani" >Babhani</option>
                                
                                <option value="Bagaha" >Bagaha</option>
                                
                                <option value="Bagauli" >Bagauli</option>
                                <option value="Bairghat" >Bairghat</option>
                                <option value="Balarampur" >Balarampur</option>
                                <option value="  Basantapur" >  Basantapur</option>
                                <option value=" Betakuiya" > Betakuiya</option>
                                
                                <option value=" BangaiMarchwar" > BangaiMarchwar</option>
                                <option value="Baragadewa" >Baragadewa</option>
                                <option value=" Barsauli" > Barsauli</option>
                                <option value="Bhagawanpur" >Bhagawanpur</option>
                                <option value=" Bisunpura">Bisunpura</option>
                                <option value="Bodabar" > Bodabar</option>
                                <option value=" Bogadi" > Bogadi</option>
                                <option value=" Butwal" > Butwal</option>
                                <option value=" Chhipagada" > Chhipagada</option>
                                <option value=" ChhotakiRamnaga" > ChhotakiRamnaga</option>
                                <option value=" Chilhiya" > Chilhiya</option>
                                <option value=" DayaNagar" > DayaNagar</option>
                                <option value=" Devadaha" > Devadaha</option>
                                <option value=" Dhakadhai" > Dhakadhai</option>
                                <option value=" Dhamauli" > Dhamauli</option>
                                <option value=" Dudharakchhe" > Dudharakchhe</option>
                                <option value=" Ekala" > Ekala</option>
                                <option value=" Farena" > Farena</option>
                                <option value=" Gajedi" > Gajedi</option>
                                <option value=" Gangoliya" > Gangoliya</option>
                                <option value=" Gonaha" > Gonaha</option>
                                <option value=" Hanaiya" > Hanaiya</option>
                                <option value=" HatiBangai" > HatiBangai</option>
                                <option value=" HatiPharsatika" > HatiPharsatika</option>
                                <option value=" Jogada" > Jogada</option>
                                <option value=" Kamahariya" > Kamahariya</option>
                                <option value="  Karaiya" >  Karaiya</option>
                                <option value=" Karauta" > Karauta</option>
                                <option value=" Karmahawa" > Karmahawa</option>
                                <option value=" Kataya" > Kataya</option>
                                <option value=" Kerbani" > Kerbani</option>
                                <option value=" KhadawaBangai" > KhadawaBangai</option>
                                <option value=" Khudabazar" > Khudabazar</option>
                                <option value=" Lumbini" > Lumbini</option>
                                <option value=" Madhabaliya" > Madhabaliya</option>
                                <option value=" Madhuwani" > Madhuwani</option>
                                <option value=" Mainahiya" > Mainahiya</option>
                                <option value=" Makrahar" > Makrahar</option>
                                <option value=" ManMateriya" > ManMateriya</option>
                                <option value=" ManPakadi" > ManPakadi</option>
                                <option value=" Maryadpur" > Maryadpur</option>
                                <option value=" Masina" > Masina</option>
                                <option value=" Motipur" > Motipur</option>
                                <option value=" Padsari" > Padsari</option>
                                <option value="Pajarkatli" >Pajarkatli</option>
                                <option value="PakadiSakron" >PakadiSakron</option>
                                <option value="Parroha" >Parroha</option>
                                <option value="Parsa" >Parsa</option>
                                <option value=" Patekhouli" > Patekhouli</option>
                                <option value="Pharsatikar" >Pharsatikar</option>
                                <option value="Pharsatikarhati" >Pharsatikarhati</option>
                                <option value="Piprahawa" >Piprahawa</option>
                                <option value="Pokharvindi" >Pokharvindi</option>
                                <option value=" Rayapur" > Rayapur</option>
                                <option value= "Roinihawa"> Roinihawa</option>
                                <option value="Rudrapur2" >Rudrapur2</option>
                                <option value="PipariChapa" >PipariChapa</option>
                                <option value="Sadi" >Sadi</option>
                                <option value="Saljhundi" >Saljhundi</option>
                                <option value="SameraMarchwar" >SameraMarchwar</option>
                                <option value="Semalar" >Semalar</option>
                                <option value="SiddharthNagar" >SiddharthNagar</option>
                                <option value="Sikatahan" >Sikatahan</option>
                                <option value="Silautiya" >Silautiya</option>
                                <option value="Sipawa" >Sipawa</option>
                                <option value="SourahaPharsatikar" >SourahaPharsatikar</option>
                                <option value="Suryapura" >Suryapura</option>
                                <option value="TamaNagar" >TamaNagar</option>
                                <option value="Tarkulaha" >Tarkulaha</option>
                                <option value="Tenahawa" >Tenahawa</option>
                                <option value="Tharki" >Tharki</option>
                                <option value="ThumhawaPiprahawa" >ThumhawaPiprahawa</option>
                                <option value="Tikuligadh" >Tikuligadh</option>
                                </select> </span>
                              </p>  
                                  <p style="display:flex; flex-direction:row;"><i class="fas fa-mobile-alt"></i>&nbsp;<input type="number" class="form-control" placeholder="Mobile" name="pnum"  value="" required></p>
                                  <p style="display:flex; flex-direction:row;"><i class="fas fa-at"></i>&nbsp;<input type="text" class="form-control" placeholder="Email" name="pemail" value="" required></p>
                                  <p style="display:flex; flex-direction:row;"><i class="fas fa-key"></i>&nbsp;<input type="password" class="form-control" placeholder="Password" name="ppass" value="" required></p>
                                  <p style="display:flex; flex-direction:row;"><i class="fas fa-key"></i>&nbsp;<input type="password" class="form-control" placeholder="security code" name="preg" value="" required></p>
                                  
                                  <input type="submit" class="btn btn-primary" value="Save">
                                </form>
                              </div>
                              </div>
                              <div id="organization" class="container tab-pane fade"><br>
                                <h3>organization</h3>
                                <form action="origs.php" method="POST">
                                <p style="display:flex; flex-direction:row;"><i class="fas fa-user-tie">&nbsp;</i><input type="text" class="form-control" placeholder=" Organization Name" name="name" required></p>
                                <p style="display:flex; flex-direction:row;"><i class="fas fa-calendar-alt">&nbsp;</i><input type="date" class="form-control" placeholder="Date Of establish" name="doe" required></p>
                                <p style="display:flex; flex-direction:row;"><i class="fas fa-address-book"></i>&nbsp;  <span>
                                <select style="width:  " name="adds" id="city" required>
                                    <option value="">--Loaction--</option>
                                    <optgroup title="Rupandehi" label="&raquo; Rupendehi"></optgroup>
                                    <option value="Aama" >Aama</option>
                                    <option value="Aanandaban" >Aanandaban</option>
                                    <option value="Amari" >Amari</option>
                                
                                <option value="AmawaMarchawar" >AmawaMarchawar</option>
                                
                                <option value="AmuwPaschim" >AmuwPaschim</option>
                                
                                <option value="Asurena" >Asurena</option>
                                
                                <option value="Babhani" >Babhani</option>
                                
                                <option value="Bagaha" >Bagaha</option>
                                
                                <option value="Bagauli" >Bagauli</option>
                                <option value="Bairghat" >Bairghat</option>
                                <option value="Balarampur" >Balarampur</option>
                                <option value="  Basantapur" >  Basantapur</option>
                                <option value=" Betakuiya" > Betakuiya</option>
                                
                                <option value=" BangaiMarchwar" > BangaiMarchwar</option>
                                <option value="Baragadewa" >Baragadewa</option>
                                <option value=" Barsauli" > Barsauli</option>
                                <option value="Bhagawanpur" >Bhagawanpur</option>
                                <option value=" Bisunpura">Bisunpura</option>
                                <option value="Bodabar" > Bodabar</option>
                                <option value=" Bogadi" > Bogadi</option>
                                <option value=" Butwal" > Butwal</option>
                                <option value=" Chhipagada" > Chhipagada</option>
                                <option value=" ChhotakiRamnaga" > ChhotakiRamnaga</option>
                                <option value=" Chilhiya" > Chilhiya</option>
                                <option value=" DayaNagar" > DayaNagar</option>
                                <option value=" Devadaha" > Devadaha</option>
                                <option value=" Dhakadhai" > Dhakadhai</option>
                                <option value=" Dhamauli" > Dhamauli</option>
                                <option value=" Dudharakchhe" > Dudharakchhe</option>
                                <option value=" Ekala" > Ekala</option>
                                <option value=" Farena" > Farena</option>
                                <option value=" Gajedi" > Gajedi</option>
                                <option value=" Gangoliya" > Gangoliya</option>
                                <option value=" Gonaha" > Gonaha</option>
                                <option value=" Hanaiya" > Hanaiya</option>
                                <option value=" HatiBangai" > HatiBangai</option>
                                <option value=" HatiPharsatika" > HatiPharsatika</option>
                                <option value=" Jogada" > Jogada</option>
                                <option value=" Kamahariya" > Kamahariya</option>
                                <option value="  Karaiya" >  Karaiya</option>
                                <option value=" Karauta" > Karauta</option>
                                <option value=" Karmahawa" > Karmahawa</option>
                                <option value=" Kataya" > Kataya</option>
                                <option value=" Kerbani" > Kerbani</option>
                                <option value=" KhadawaBangai" > KhadawaBangai</option>
                                <option value=" Khudabazar" > Khudabazar</option>
                                <option value=" Lumbini" > Lumbini</option>
                                <option value=" Madhabaliya" > Madhabaliya</option>
                                <option value=" Madhuwani" > Madhuwani</option>
                                <option value=" Mainahiya" > Mainahiya</option>
                                <option value=" Makrahar" > Makrahar</option>
                                <option value=" ManMateriya" > ManMateriya</option>
                                <option value=" ManPakadi" > ManPakadi</option>
                                <option value=" Maryadpur" > Maryadpur</option>
                                <option value=" Masina" > Masina</option>
                                <option value=" Motipur" > Motipur</option>
                                <option value=" Padsari" > Padsari</option>
                                <option value="Pajarkatli" >Pajarkatli</option>
                                <option value="PakadiSakron" >PakadiSakron</option>
                                <option value="Parroha" >Parroha</option>
                                <option value="Parsa" >Parsa</option>
                                <option value=" Patekhouli" > Patekhouli</option>
                                <option value="Pharsatikar" >Pharsatikar</option>
                                <option value="Pharsatikarhati" >Pharsatikarhati</option>
                                <option value="Piprahawa" >Piprahawa</option>
                                <option value="Pokharvindi" >Pokharvindi</option>
                                <option value=" Rayapur" > Rayapur</option>
                                <option value= "Roinihawa"> Roinihawa</option>
                                <option value="Rudrapur2" >Rudrapur2</option>
                                <option value="PipariChapa" >PipariChapa</option>
                                <option value="Sadi" >Sadi</option>
                                <option value="Saljhundi" >Saljhundi</option>
                                <option value="SameraMarchwar" >SameraMarchwar</option>
                                <option value="Semalar" >Semalar</option>
                                <option value="SiddharthNagar" >SiddharthNagar</option>
                                <option value="Sikatahan" >Sikatahan</option>
                                <option value="Silautiya" >Silautiya</option>
                                <option value="Sipawa" >Sipawa</option>
                                <option value="SourahaPharsatikar" >SourahaPharsatikar</option>
                                <option value="Suryapura" >Suryapura</option>
                                <option value="TamaNagar" >TamaNagar</option>
                                <option value="Tarkulaha" >Tarkulaha</option>
                                <option value="Tenahawa" >Tenahawa</option>
                                <option value="Tharki" >Tharki</option>
                                <option value="ThumhawaPiprahawa" >ThumhawaPiprahawa</option>
                                <option value="Tikuligadh" >Tikuligadh</option>
                                </select> </span>
                              </p>  
                                <p style="display:flex; flex-direction:row;"><i class="fas fa-at"></i>&nbsp;<input type="text" class="form-control" placeholder="Email" name="oemail" required></p>
                                <p style="display:flex; flex-direction:row;"><i class="fas fa-key"></i>&nbsp;<input type="password" class="form-control" placeholder="Password" name="pass" required></p>
                                <p style="display:flex; flex-direction:row;"><i class="fas fa-key"></i>&nbsp;<input type="password" class="form-control" placeholder="security code" name="oreg" value="" required></p>
                                <input type="submit" class="btn btn-primary" name="submit" value="Save">
                              </form>
                              </div>
                              
                            </div>
                          </div>
                          
                    </div>

                        <div class="modal-footer">
                          
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                           

                        </div>
                   
                </div>
            </div>
        </div>
                               </div>   
               
            
                </div>
    
        </div>
    </div>
          
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3"></div>
        </div>
    </div>

    <div class="bgimg">
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <div class="containner">
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar"> <span class="navbar-toggler-icon"></span> </button>
                    <div class="collapse navbar-collapse " id="collapsenavbar"  >
                        <ul class="navbar-nav text-center">
                            <li class="nav-item " >
                                <div class="dropdown  ">
                                    <button type="button" class="btn btn-primary dropdown-toggle " data-toggle="dropdown"><i class="fas fa-map-marked-alt"></i>
                                        LOCATION
                                    </button>
                                    <div class="dropdown-menu bg-danger">
                                        <a class="dropdown-item" data-toggle="modal" data-target="#rupandehi">
                                            Rupandehi
                                        </a>
                                        <a class="dropdown-item" data-toggle="modal" data-target="#kathmandu">
                                          kathmandu
                                      </a>
                                          
                                        
                                          
                                      
                                      <a class="dropdown-item" data-toggle="modal" data-target="#pokhara">
                                        Pokhara
                                    </a>
                                      
                                    </div>
                               </div>
                            </li>
                            <li class="nav-item ">
                                    <a href="index.php" class="nav-link  text-white"><i class="fas fa-home"></i> HOME</a>
                                </li>
                                <li class="nav-item">
                                        <a href="about.php" class="nav-link  text-white"><i class="far fa-address-card"></i> ABOUT</a>
                                    </li>
                                    <li class="nav-item">
                                            <a href="contact.php" class="nav-link  text-white"><i class="fas fa-users-cog"></i> CONTACT</a>
                                        </li>
                                        <li class="nav-item">
                                                <a href="" class="nav-link  text-white"></a>
                                            </li>

                        </ul>
                    </div>
            </div>
            </nav>
            </div>
          <br>
          </div>
          <div class="container ">
            <div class="row ">
              <div class="mx-auto" style="width: 1100px;">
               
          <div id="demo" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
              <li data-target="#demo" data-slide-to="0" class="active"></li>
              <li data-target="#demo" data-slide-to="1"></li>
              <li data-target="#demo" data-slide-to="2"></li>
            </ul>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="blood.jpg" alt="Los Angeles" width="1100" height="300">
                <div class="carousel-caption">
                  <h3>Donation </h3>
                  <p>donation program</p>
                </div>   
              </div>
              <div class="carousel-item">
                <img src="blood1.jpg" alt="Chicago" width="1100" height="300">
                <div class="carousel-caption">
                  <h3>blood bank</h3>
                  <p>blood bank donation </p>
                </div>   
              </div>
              <div class="carousel-item">
                <img src="blood2.jpg" alt="New York" width="1100" height="300">
                <div class="carousel-caption">
                  <h3>donate !!!!</h3>
                  <p>We love donating</p>
                </div>   
              </div>
            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
          </div>
        </div>
      </div>
      </div>
         
         
  <div>
      <!--model for the location used-->
      <!-- The Modal -->
  <div class="modal " id="rupandehi">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <div class="container mt-3">
                <h2>Location Rupandehi:</h2>
                <br>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                  <li class="nav-item">
                    <a class="nav-link active bg-danger" data-toggle="tab" href="#home">Butwal</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link bg-danger" data-toggle="tab" href="#menu1">Bhairahawa</a>
                  </li>
                 
                </ul>
              
                <!-- Tab panes -->
                <div class="tab-content">
                  <div id="home" class="container tab-pane active"><br>
                    <h3>Butwal </h3>
                    <div class="container">
                        <div class="row">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28264.636220569282!2d83.45454918400887!3d27.683936799286393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39968658856b84bb%3A0x4edd260bbdcbf723!2sNepal%20Red%20Cross%20Society!5e0!3m2!1sen!2snp!4v1578650424218!5m2!1sen!2snp" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                  </div>
                  </div>
                  </div>
                  <div id="menu1" class="container tab-pane fade"><br>
                    <h3>Bhairahawa</h3>
                    
                  </div>
                  
                </div>
              </div>
              
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

  <!---kathmandu location model-->
  <div class="modal " id="kathmandu">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <div class="container mt-3">
                <h2>location Kathmandu:</h2>
                <br>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                  <li class="nav-item">
                    <a class="nav-link active bg-danger" data-toggle="tab" href="#bhaktapur">Bhaktapur</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link bg-danger" data-toggle="tab" href="#lalitpur">Lalitpur</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link bg-danger" data-toggle="tab" href="#Soalteemod">Soalteemod</a>
                  </li>
                </ul>
              
                <!-- Tab panes -->
                <div class="tab-content">
                  <div id="bhaktapur" class="container tab-pane active"><br>
                    <h3>Bhaktapur </h3>
                    <div class="container">
                        <div class="row">
                          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19864.331768501863!2d85.40977826168805!3d27.668281118942776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1aa4a1a6b0d9%3A0x1a0f1c68f517736d!2sNepal%20Red%20Cross%20Society%20Bhaktapur%20District%20Chapter!5e0!3m2!1sen!2snp!4v1578819106285!5m2!1sen!2snp" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                  </div>
                  </div>
                  </div>
                  <div id="lalitpur" class="container tab-pane fade"><br>
                    <h3>Lalitpur</h3>
                    <div class="container">
                      <div class="row">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16426.41725481313!2d85.33064762432244!3d27.673714543054253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5e3b35414bf259ad!2sNepal%20Blood%20Bank!5e0!3m2!1sen!2snp!4v1578819281187!5m2!1sen!2snp" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        
                </div>
                    
                  </div>
                  
                </div>
                <div id="Soalteemod" class="container tab-pane active"><br>
                  <h3>Soalteemod </h3>
                  <div class="container">
                      <div class="row">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4848.713368898605!2d85.2915095964013!3d27.699618574071465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x23d588bcf9ea038e!2sNepal%20Red%20Cross%20Society%20Blood%20Bank%2C%20Soalteemod!5e0!3m2!1sen!2snp!4v1578819824383!5m2!1sen!2snp" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
                </div>
                </div>
              </div>
              
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  </div>  
  <!---pokhara modal-->       
  <div>
    
<div class="modal " id="pokhara">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    
      <!-- Modal Header -->
      <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      
      <!-- Modal body -->
      <div class="modal-body">
          <div class="container mt-3">
              <h2>Location Rupandehi:</h2>
              <br>
              <!-- Nav tabs -->
              <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a class="nav-link active bg-danger" data-toggle="tab" href="#pokhara">Pokhara</a>
                </li>
                
               
              </ul>
            
              <!-- Tab panes -->
              <div class="tab-content">
                <div id="pokhara" class="container tab-pane active"><br>
                  <h3>Pokhara </h3>
                  <div class="container">
                      <div class="row">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9151.583738111562!2d83.99327323477539!3d28.210748204961156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399595cbaa3c5001%3A0x917d5897d26b04b8!2sBlood%20Bank!5e0!3m2!1sen!2snp!4v1578820071304!5m2!1sen!2snp" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
                </div>
                </div>
                
                
              </div>
            </div>
            
      </div>
      
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      
    </div>
  </div>
</div>
<br>


</body>
</html>
