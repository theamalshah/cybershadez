<?php 

require "dbconnect.php";
session_start();
?>

<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin :Cyber Shade</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
       <link href="js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    <style type="text/css">
      body{
        background: url(img/bg.jpg);
      }
      
    </style>
</head>
<body>
  

    <div class="container">  
      <div class="row">
        <div class="col-lg-3">&nbsp;</div>
        <div class="col-lg-6 text-center active"><a href="index.php"><h2>Login</h2></a></div>
        <!--<div class="col-lg-3 text-center active"><a href="registration.php"><h2>Registration</h2></a></div>-->
        <div class="col-lg-3">&nbsp;</div>

      </div>
      <div class="row">
        <div class="col-lg-3">&nbsp;</div>
        <div class="col-lg-6">
          <form role="form" action="checklogin.php" method="POST">
              <div class="form-group">
                 <label for="disabledSelect">User Name</label>
                 <input class="form-control" type="text" placeholder="User Name" name="uname" required />
              </div>
              <div class="form-group">
                  <label for="disabledSelect">Password </label>
                  <input class="form-control" type="password" placeholder="password" name="pass" required />
              </div>
              <div class="col-lg-3">&nbsp;</div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3">&nbsp;</div>
           <div class="col-lg-6">

       

                    
                   <div>
                    <button type="submit" class="btn btn-primary" name="btn_sb">Log In</button>
                  </div>
            </div>
             <div class="col-lg-3">&nbsp;</div>
        </div>
      </form>


  <script src="js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="js/dataTables/jquery.dataTables.js"></script>
    <script src="js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="js/custom.js"></script>
    
   
</body>
</html>

