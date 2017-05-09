<?php
session_start();
?>

<?php require_once("includes/connection.php"); ?>

<?php
if(isset($_SESSION["session_username"])){
// echo "Session is set"; // for testing purposes
header("Location: enteralbum2.php");
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

<body>                       
    
<?php include("navbar.php")?>
    
     <!-- NAVBAR ENDS-->
      <!-- Page Content -->
    <div class="container">

        <!-- Heading Row -->
        <div class="row">
            <div class="col-md-8">
                <img class="img-responsive img-rounded" src="Pilots/a22.jpg" alt="123">
            </div>
            <!-- /.col-md-8 -->
            <div class="col-md-4">
                
                <p> <iframe src="https://embed.spotify.com/?uri=spotify%3Aalbum%3A2r2r78NE05YjyHyVbVgqFn" width="300" height="420" frameborder="0" allowtransparency="true"></iframe></p>
            </div>
            <!-- /.col-md-4 -->
        </div>
        

        <hr>

        
        <div class="row">
            <div class="col-lg-12">
                <div class="well text-center">
                    <Strong>Vessel</Strong> is the third studio album by American musical duo Twenty One Pilots, which was released on January 8, 2013. It is the band's first album released via Fueled by Ramen, and is their major-label debut album. As of July 2016, the album has sold over 569,000 copies.
                    
                </div>
            </div>
            
        </div>

        <!-- Footer -->
        <footer>
               
          <?php include("social.php")?>    <!-- Social Link -->
        
        </footer>

    </div>
    

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>



</body>

</html>
