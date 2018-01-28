<!DOCTYPE html>
<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") 
   {
      $myusername = mysqli_real_escape_string($db,$_POST['user']);
      $mypassword = mysqli_real_escape_string($db,$_POST['pass']); 
      
      $sql = "SELECT id FROM users WHERE user = '$myusername' and pass = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      $count = mysqli_num_rows($result);
		
      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername; 
      }
      else 
      {
         $error = "Login info is wrong.";
      }
   }
?>
<html>
	<head>
		
		<link rel="stylesheet" href="style.css">
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
        <meta charset=utf-8">
		<link rel="icon" href="favicon.ico" type="image/x-icon"/>
		<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"> 
		
		<title>Sign up</title>
	</head>
<body>
	<header>
		<div class="background" style="height: 200px;"></div>
		<nav>
			<ul>
			  <li><a href="index.html">Home</a></li>
			  <li><a href="news.html">News</a></li>
			  <li><a href="contact.html">Contact</a></li>
			  <li><a href="about-us.html">About</a></li>
			  <li><a href="signup.html">Sign up</a></li>
			  <li><a href="signin.html">Sign in</a></li>
			</ul>
		</nav>
	</header>
	<main>
		<h1>Sign in</h1>
		<div id="signin">
		<form action="">
	<div class="container">
    <label><b>E-mail</b></label>
    <input type="text" placeholder="Enter e-mail" name="user" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" required>

    <button type="submit" class="signinbtn">Login</button>
  </div>
</form>
		</div>
	</main>
	<footer>
		<p>FOOTER</p>
	</footer>
</body>
</html>