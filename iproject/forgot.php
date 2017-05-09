<!DOCTYPE html>
<html lang="en">

<head>



    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Twenty One Pilots</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/21p.css" rel="stylesheet">

</head>


    
    
    
    
    
    
    
    
    
    
    <body >                       <!-- BACKGROUND PICTURE-->

    
    
    <!-- NAVBAR-->
    
    
<?php include("navbar.php")?>
    
     <!-- NAVBAR ENDS-->
    
    <style>
body, html {
    height: 100%;
    margin: 0px;
    
}

.bg {
    /* The image used */
    background-image: url("Pilots/inverse.jpg");

    /* Full height */
    height: 100%; 
    
    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
</head>
<body>

    
    
    
      <div class="row">
            <div class="col-lg-12">
                <div class="well text-center">
                    
                    <h1>Forgot Password</h1>
<form action='#' method='post'>
<table cellspacing='5' align='center'>
<tr><td>Email id:</td><td><input type='text' name='mail'/></td></tr>
<tr><td></td><td><input type='submit' name='submit' value='Submit'/></td></tr>
</table>
</form>
<?php
if(isset($_POST['submit']))
{ 
 mysql_connect('localhost','root','') or die(mysql_error());
 mysql_select_db('new') or die(mysql_error());
 $mail=$_POST['mail'];
 $q=mysql_query("select * from usertbl where mail='".$email."' ") or die(mysql_error());
 $p=mysql_affected_rows();
 if($p!=0) 
 {
  $res=mysql_fetch_array($q);
  $to=$res['mail'];
  $subject='Remind password';
  $message='Your password : '.$res['password']; 
  $headers='From:slavayug96sy@gmail.com';
  $m=mail($to,$subject,$message,$headers);
  if($m)
  {
    echo'Check your inbox in mail';
  }
  else
  {
   echo'mail is not send';
  }
 }
 else
 {
  echo'You entered mail id is not present';
 }
}
?>
                    
                    
                    
                    
                    
                    
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
    
<div class="bg"></div>

<p align=center>TWENTY ØNE PILØTS is an American musical duo originating from Columbus, Ohio. The band was formed in 2009 by lead vocalist Tyler Joseph along with former members Nick Thomas and Chris Salih, who eventually left in 2011, and currently consists of Joseph and drummer Josh Dun. The duo rose to fame in the mid–2010s after several years of touring and independent releases.</p>

    
    <!-- Page Content -->
    
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>







</body>
    
    
    
    
    
    
    
    
    
</html>





































