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

<body>                       
    
<?php include("navbarlog.php")?>
    
     <!-- NAVBAR ENDS-->
      <!-- Page Content -->
    <div class="container">

        <!-- Heading Row -->
        <div class="row">
            <div class="col-md-8">
                <img class="img-responsive img-rounded" src="Pilots/9.jpg" alt="123">
            </div>
            <!-- /.col-md-8 -->
            <div class="col-md-4">
                
                <p><iframe src="https://embed.spotify.com/?uri=spotify%3Aalbum%3A3cQO7jp5S9qLBoIVtbkSM1" width="300" height="420" frameborder="0" allowtransparency="true"></iframe></p>
            </div>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Well -->
        <div class="row">
            <div class="col-lg-12">
                <div class="well text-center">
                    <Strong>Blurryface</Strong> is the fourth studio album by American musical duo Twenty One Pilots. It is the band's second album released through Fueled by Ramen. Originally set to be released on May 19, 2015, it was released two days earlier on May 17, via iTunes. The album was preceded by its lead single, "Fairly Local", released on March 17, 2015. It also contains the Billboard Hot 100 top-five singles, "Stressed Out" and "Ride", which reached numbers two and five on the chart, respectively. The album has sold 1.5 million copies in the United States as of April 2017. It was the eighth best-selling album of 2016 with 1.5 million copies sold worldwide, according to the International Federation of the Phonographic Industry
                    
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>

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