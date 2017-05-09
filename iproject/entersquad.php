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


        <!-- Content Row -->
        <div class="row">
            <div class="col-md-6">
                <h2>Tyler Joseph</h2>
                
                
                <div class="col-md-7">
                <img class="img-responsive img-rounded" src="2pacan.png" alt="123">
            </div>
                
                <p>Tyler Robert Joseph (born December 1, 1988) is an American singer-songwriter, multi-instrumentalist, record producer, and rapper. He is the lead vocalist for the musical duo Twenty One Pilots.</p>
                <a class="btn btn-default" href="https://en.wikipedia.org/wiki/Josh_Dun" target="_blank" >More Info</a>
            </div>
            <!-- /.col-md-4 -->
            
            
            
            
            
            <div class="col-md-6">
                <h2>Josh Dun</h2>
                
                <div class="col-md-7">
                <img class="img-responsive img-rounded" src="1pacan.png" alt="123">
            </div>
                <p>Joshua William "Josh" Dun (born June 18, 1988) is an American musician. He is the drummer for the musical duo Twenty One Pilots</p>
                <a class="btn btn-default" href="https://en.wikipedia.org/wiki/Tyler_Joseph" target="_blank">More Info</a>
            
 
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
