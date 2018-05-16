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
		<title>Logout</title>
	</head>
	<body>
		<div class="container">
			<header id="head">
			   <h3>Hamilton - Student Portal</h3>
			</header>
			<?php
			setcookie("logged_in", "", time() - 60);
			setcookie("auto_login", "", time() - 60);
			?>
			<nav>
			  <ul>
			    <li><a href="home.php">Home</a></li>
			    <li><a href="pageone.php">Page One</a></li>
			    <li><a href="pagetwo.php">Page Two</a></li>
			    <li><a href="pagethree.php">Page Three</a></li> 
			    <li><a href="login.php">Login</a></li>
			  </ul>
			</nav>
			<section>
			  <h3>Home Page</h3>
			  <p>London is the capital city of England. It is the most populous city in the  United Kingdom, with a metropolitan area of over 13 million inhabitants.</p>
			  <p>Standing on the River Thames, London has been a major settlement for two millennia, its history going back to its founding by the Romans, who named it Londinium.</p>
			</section>
		</div>
	</body>
</html>
