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
        
              
  
                   <div class="container">
                       <div class="row">

                      
                     
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
            
                                        <input id="file-1" type="file" name="file"  class="file" data-overwrite-initial="false" data-min-file-count="1">
            
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

            uploadUrl: "/imageUpload.php",

            allowedFileExtensions: ['jpg', 'png', 'gif'],

            overwriteInitial: false,

            maxFileSize:2000,

            maxFilesNum: 1,

            slugCallback: function (filename) {

                return filename.replace('(', '_').replace(']', '_');

            }

        });

    </script>
    
    <br>
    <!---end -->

                        
                            
                            <!-- Modal footer -->
                            
                                <button type="submit" class="btn btn-primary " value="post1">Save</button> 
                  </div>
    </div>
    </body>
    </html>

                      