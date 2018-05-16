<?php
    ini_set("error_reporting",E_ALL);
    ini_set("log_errors","1");
    ini_set("error_log","php_errors.txt");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
        <link rel="stylesheet" href="../css/style.css" style type="text/css">
        <?php
			include "changetheme.php";
		?>
		<title>Preferences</title>
	</head>
	<body>
		
		<div class="container">
			
			<header>
			   <h3>COMP233 Assignment 3</h3>
			</header>
			  
			<nav>
			  <ul>
			    <li><a href="home.php">Home</a></li>
			    <li><a href="pageone.php">Page One</a></li>
			    <li><a href="pagetwo.php">Page Two</a></li>
			    <li><a href="pagethree.php">Page Three</a></li>
			    <li><a href="preferences.php">Preferences</a></li>
			    <li><a href="logout.php">Logout</a></li>
			  </ul>
			</nav>
			
			<section>
				<h3>Preferences</h3>
			    
				<form class="pref" name="myform" action="../php/processpref.php" method="POST">
				    <text>Theme</text>
				    <br>
				    <label>Which theme would you like</label>
				    <select name="theme">
				        <option value="light" selected="selected">Light</option>
				        <option value="dark">Dark</option>
				    </select>
				    <br>
				    <br>
				    <text>Text Size</text>
				    <br>
				    <label>What text size would you like</label>
				    <select name="size">
				        <option value="80">80%</option>
				        <option value="90" selected="selected">90%</option>
				        <option value="100">100%</option>
				        <option value="110">110%</option>
				        <option value="120">120%</option>
				    </select>
				    <br>
				    <br>
				    <text>Navigation Menu Placement</text>
				    <br>
				    <label for="left">Left</label>
				    <input type="radio" id="left" value="left" name="navi" checked>
				    <label for="right">Right</label>
				    <input type="radio" id="right" value="right" name="navi">
				    <br>
				    <br>
				    <input type="submit" value="Save Preferences">
				</form>
				    
			</section>
		
		</div>
	
	</body>
</html>
