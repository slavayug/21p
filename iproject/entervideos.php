<?php 
session_start();
if(!isset($_SESSION["session_username"])) {
	header("location:signup.php");
} else {
?>


<?php include("includes/header.php"); ?>




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
    
    
<?php include("navbarlog.php")?>
    
     <!-- NAVBAR ENDS-->
    
    
    <!-- Page Content -->
    <div class="container">

 
        <div class="row">
            <div class="col-md-6">
                <h2>Stressed Out</h2>
                <p><iframe width="480" height="240" src="http://mover.uz/video/embed/t3Spr5ym/" frameborder="0" allowfullscreen></iframe>   </p>
                
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-6">
                <h2>Ride</h2>
                <p><iframe width="480" height="240" src="http://mover.uz/video/embed/tFOJSnmm/" frameborder="0" allowfullscreen></iframe></p>
                
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-6">
                <h2>Heathens</h2>
                <p><iframe width="480" height="240" src="http://mover.uz/video/embed/BOiUk2A/" frameborder="0" allowfullscreen></iframe></p>
                
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-6">
                <h2>Heavydirtysoul</h2>
                <p><iframe width="480" height="240" src="http://mover.uz/video/embed/zBGWzsSm/" frameborder="0" allowfullscreen></iframe></p>
                
            </div>
            <!-- /.col-md-4 -->
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



<?php
}
?>