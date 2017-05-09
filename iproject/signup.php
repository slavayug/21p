<?php
session_start();
?>

<?php require_once("includes/connection.php"); ?>


<?php

if(isset($_SESSION["session_username"])){
// echo "Session is set"; // for testing purposes
header("Location: enterindex.php");
}

if(isset($_POST["login"])){

if(!empty($_POST['username']) && !empty($_POST['password'])) {
    $username=$_POST['username'];
    $password=$_POST['password'];

    $query =mysql_query("SELECT * FROM usertbl WHERE username='".$username."' AND password='".$password."'");

    $numrows=mysql_num_rows($query);
    if($numrows!=0)

    {
    while($row=mysql_fetch_assoc($query))
    {
    $dbusername=$row['username'];
    $dbpassword=$row['password'];
    }

    if($username == $dbusername && $password == $dbpassword)

    {


    $_SESSION['session_username']=$username;

    /* Redirect browser */
    header("Location: enterindex.php");
    }
    } else {

 $message =  "Invalid username or password!";
    }

} else {
    $message = "All fields are required!";
}
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
   <!-- <form action="/action_page.php">-->
<form name="loginform" id="loginform" action="" method="POST">
  <div class="imgcontainer">
    <img src="su.png" alt="Sign Up" class="avatar">
  </div>

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" id="username" class="input" value="" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="password" class="input" value="" required>

    <button type="submit" name="login" class="button">Login</button>
    <input type="checkbox" checked="checked"> Remember me
  </div>

  <div class="container" style="background-color:#f1f1f1">
      
      
    <button type="button" class="cancelbtn " onclick="window.location.href='index.php'">Cancel</button>
      
    <span class="psw">Forgot <a href="forgot.php">password?</a></span>
  </div>
</form>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>



</body>

</html>
