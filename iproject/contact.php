<?php
session_start();
?>

<?php require_once("includes/connection.php"); ?>

<?php
if(isset($_SESSION["session_username"])){
// echo "Session is set"; // for testing purposes
header("Location: entercontact.php");
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
    
    <link href="css/contactus.css" rel="stylesheet">
    <link href="css/21p.css" rel="stylesheet">
    

  
</head>

<body>                       <!-- BACKGROUND PICTURE-->

    <!-- Navigation -->
    <!-- NAVBAR-->
    
    
<?php include("navbar.php")?>
    
     <!-- NAVBAR ENDS-->
    
    
    <!-- Page Content -->
    <div class="container">


        <!-- Content Row -->
     
        
        <div class="container">
  <form action="/action_page.php">

    <label for="fname">Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">
    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">Uzbekistan</option>
      <option value="canada">Russia</option>
      <option value="usa">Kazakhstan</option>
        <option value="usa">Ukraine</option>
        <option value="usa">Other</option>
    </select>

    <label for="subject">Issue</label>
    <textarea id="subject" name="subject" placeholder="Write something..." style="height:200px"></textarea>

    <input type="submit" value="Submit">

  </form>
            
            
            
             <div class="col-md-3">
                    <h2><strong>Group 4</strong></h2>
                 <p><strong>Vyacheslav Yugay.</strong> u1510416(15-8)</p>
                 <p><strong>Yusupbek. Eshmuratov.</strong> u1510(15-8)</p>
                 <p><strong>Firdavs Bagirov.</strong> u1510432(15-8)</p>
                 <p><strong>Marine Bakunts.</strong> u1510373(15-5)</p>
                 <p><strong>Salauat Kdirbaev.</strong> u1510396(15-5)</p>
                 
                 
                 
                 
                
            </div>
            <div class="col-md-3">
                 <h2><strong>IUT</strong></h2>
                 <p><strong>Inha University in Tashkent</strong> u1510416</p>
                
                 <p>Адрес: Ziyolilar str 9, Mirzo Ulugbek district, Tashkent, Uzbekistan</p>
                <p>Phone: +998 71 289 99 99</p>
                <p>Foundation: 2 october 2014.</p>
                 
                 
                 
                <a class="btn btn-default" href="location.php" target="_blank">location</a>
            </div>
            
            
            
            
            
            <div class="col-md-5">
                 <img class="img-responsive img-rounded" src="Pilots/iut.png" alt="123">
                 
                 
                
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
