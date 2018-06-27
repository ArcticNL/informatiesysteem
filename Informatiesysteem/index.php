<?php
	// inlogpagina maken
	// SQL database
	// SQL table maken (Hiervoor otnwerp nodig)
	// Inloggegevens aanmaken
	// WE maken een verbinding met de database
	// We gaan aanmelden op het systeem
	
	// Systeem opbouwen
	
	// SET VARIABLES
	$UNfromDB = 'test';
	$PWfromDB = 'test';
	
	// DATABAS
	include 'database.php';
	
	// TABLE SELECTEREN
	
	//GEGEVENS UIT TABEL HALEN
	
	// CHECK FORM
	if (isset ($_POST['Submit'])) {
		if (empty ($_POST['Username'])) {
			echo 'No username detected!';
		}
		if (empty ($_POST['Password'])) {
		echo 'No password detected!';
		}
		if (($_POST['Username'] == $UNfromDB) AND ($_POST['Password'] == $PWfromDB)) {
			echo 'Login';
			// Doorsturen naar dashboard
			header('location: Dashboard');
		} else {
			echo 'De gegevens zijn onjuist';
		}
	}
?>

<html>
	<head>
		<Title>Inlogpagina</title>
		<link rel ="stylesheet" type="text/css" href="css/stylesheet.css">
	</head>
<nav>
  <ul>
    <li><strong>Home</strong></li>
    <li><a href="./site/site.html">Site</a></li>
  </ul>
</nav>
	
	<body>

		
		<form action="">
  <div class="imgcontainer">
    <img src="img3.png" alt="Avatar" class="avatar" style="width:128px;height:128px;">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Login</button>

  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
		
	
	</body>
</html> 

