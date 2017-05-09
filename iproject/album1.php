
<?php
session_start();
?>

<?php require_once("includes/connection.php"); ?>

<?php
if(isset($_SESSION["session_username"])){
// echo "Session is set"; // for testing purposes
header("Location: enteralbum1.php");
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
                <img class="img-responsive img-rounded" src="Pilots/a1.jpg" alt="123">
            </div>
            <!-- /.col-md-8 -->
            <div class="col-md-4">
                
                <p> <iframe src="https://open.spotify.com/embed?uri=spotify:album:1Fexc96V24RL17Ko9VXUOM" width="300" height="420" frameborder="0" allowtransparency="true"></iframe></p>
                
                
            
                
                
            </div>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Well -->
        <div class="row">
            <div class="col-lg-12">
                <div class="well text-center">
                    <Strong>Twenty One Pilots</Strong> is the debut studio album by American band Twenty One Pilots, released independently on December 29, 2009. The album sold 115,000 copies and peaked at number 139 on the U.S. Billboard 200. This is the only album that features Nick Thomas on bass and keyboards and Chris Salih on drums, before they both left the band in 2011. Since then, the band consists only of lead vocalist Tyler Joseph and drummer Josh Dun.
                    
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
