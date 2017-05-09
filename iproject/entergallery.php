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

    
    
    
    
    
    
<style>
div.gallery {
    margin: auto;
    border: 10px solid #ccc;
    float: auto;
    width: 800px;
}

div.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 100px;
    text-align: center;
}
</style>
</head>
<body>

    <?php include("navbarlog.php")?>
    
<div class="gallery">
  <a target="_blank" href="#">
    <img src="Pilots/1.jpg">
  </a>
</div>

<div class="gallery">
  <a target="_blank" href="#">
    <img src="Pilots/2.png">
  </a>
  
</div>

<div class="gallery">
  <a target="_blank" href="#">
    <img src="Pilots/3.jpg">
  </a>
  
</div>

<div class="gallery">
  <a target="_blank" href="#">
    <img src="Pilots/4.png">
  </a>
  
    
      <a target="_blank" href="#">
    <img src="Pilots/5.jpg">
  </a>
</div>

<div class="gallery">
  <a target="_blank" href="#">
    <img src="Pilots/6.png">
  </a>
  
</div>

<div class="gallery">
  <a target="_blank" href="#">
    <img src="Pilots/7.jpg">
  </a>
  
</div>

<div class="gallery">
  <a target="_blank" href="#">
    <img src="Pilots/8.png">
  </a>
    <a target="_blank" href="#">
    <img src="Pilots/9.jpg">
  </a>
</div>

<div class="gallery">
  <a target="_blank" href="#">
    <img src="Pilots/10.png">
  </a>
  
</div>

<div class="gallery">
  <a target="_blank" href="#">
    <img src="Pilots/11.jpg">
  </a>
  
</div>

<div class="gallery">
  <a target="_blank" href="#">
    <img src="Pilots/12.png">
  </a>
    <a target="_blank" href="#">
    <img src="Pilots/13.jpg">
  </a>
</div>

<div class="gallery">
  <a target="_blank" href="#">
    <img src="Pilots/14.jpg">
  </a>
  
</div>

<div class="gallery">
  <a target="_blank" href="#">
    <img src="Pilots/15.jpg">
  </a>
  
</div>

<div class="gallery">
  <a target="_blank" href="#">
    <img src="Pilots/16.jpg">
  </a>
  
      <a target="_blank" href="#">
    <img src="Pilots/17.jpg">
  </a>
</div>

<div class="gallery">
  <a target="_blank" href="#">
    <img src="Pilots/18.jpg">
  </a>
  
</div>

<div class="gallery">
  <a target="_blank" href="#">
    <img src="Pilots/19.jpg">
  </a>
  
</div>

  <footer>
            
            
            
          <?php include("social.php")?>    <!-- Social Link -->
        
        
        
        </footer>
</body>
</html>




















<?php
}
?>