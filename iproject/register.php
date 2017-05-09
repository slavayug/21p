<?php require_once("includes/connection.php"); ?>



	<?php

if(isset($_POST["register"])){


if(!empty($_POST['full_name']) && !empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['password'])) {
	$full_name=$_POST['full_name'];
	$email=$_POST['email'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	

		
	$query=mysql_query("SELECT * FROM usertbl WHERE username='".$username."'");
	$numrows=mysql_num_rows($query);
	
	if($numrows==0)
	{
    //$pass = md5($password);
	$sql="INSERT INTO usertbl
			(full_name, email, username,password) 
			VALUES('$full_name','$email', '$username', '$password')";

	$result=mysql_query($sql);


	if($result){
	 $message = "Account Successfully Created";
	} else {
	 $message = "Failed to insert data information!";
	}

	} else {
	 $message = "That username already exists! Please try another one!";
	}

} else {
	 $message = "All fields are required!";
}
}
?>


<?php if (!empty($message)) {echo "<p class=\"error\">" . "MESSAGE: ". $message . "</p>";} ?>
	

	
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
  
<form name="registerform" id="registerform" action="register.php" method="post">
  <div class="imgcontainer">
    <img src="re.png" alt="Registration" class="avatar">
     
      
      
  </div>

  <div class="container">
    <label><b>Full name</b></label>
    <input type="text" placeholder="Enter Full name" name="full_name" id="full_name" class="input" value="" required>  
      
    <label><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" class="input" value="" required>
      
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" id="username" class="input" value="" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="password" class="input" value="" required>

    <button type="submit" name="register" id="register" class="button">Register</button>	




	
