<?php
session_start();
?>

<?php require_once("includes/connection.php"); ?>

<?php
if(isset($_SESSION["session_username"])){
// echo "Session is set"; // for testing purposes
header("Location: enterindex.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>



    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Twenty One Pilots</title><link rel="icon" type="image/png" href="ti.png">

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
