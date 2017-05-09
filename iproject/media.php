<?php
session_start();
?>

<?php require_once("includes/connection.php"); ?>

<?php
if(isset($_SESSION["session_username"])){
// echo "Session is set"; // for testing purposes
header("Location: entermedia.php");
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

<body>                       <!-- BACKGROUND PICTURE-->

    <!-- Navigation -->
    <!-- NAVBAR-->
    
    
<?php include("navbar.php")?>
    
     <!-- NAVBAR ENDS-->
    
    
    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-md-6">
                <h1>Videos</h1>
                
                <a class="btn btn-default" href="videos.php">Watch</a>
                <img class="img-responsive img-rounded" src="Pilots/videos.jpg" alt="123">
          
                
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-6">
                <h1>Photos</h1>
                <a class="btn btn-default" href="gallery.php">See more</a>
                
                <img class="img-responsive img-rounded" src="Pilots/photos.jpg" alt="123">
                
            </div>
 
        </div>
        <!-- /.row -->

        <!-- Footer -->
        <footer>
            
            
            
          <?php include("social.php")?>    <!-- Social Link -->
        
        
        
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>



</body>

</html>
