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
		<title>Page Three</title>
	</head>
	<body>
	
		<div class="container">
		
			<header>
			   <h3>Hamilton - Student Portal</h3>
			</header>
			  
			<nav>
			  <ul>
			    <li><a href="home.php">Home</a></li>
			    <li><a href="pageone.php">Page One</a></li>
			    <li><a href="pagetwo.php">Page Two</a></li>
			    <li><a href="pagethree.php">Page Three</a></li>
			    <?php
					if(isset($_COOKIE["logged_in"]))
					{
						echo "<li><a href='preferences.php'>Preferences</a></li>";
					    echo "<li><a href='logout.php'>Logout</a></li>";
					    
					}
					else
					{
					     echo "<li><a href='login.php'>Login</a><li/>";
					}
				?>
			  </ul>
			</nav>
			
			<section>
			  <h3>Page Three</h3>
			  <h4>Sydney</h4>
			  <img src="../images/sydney1.jpg"  alt="Sydney Harbour">
			  <img src="../images/sydney2.jpg"  alt="Sydney Harbour Bridge">
			  <img src="../images/sydney3.jpg"  alt="Sydney Opera House">
			</section>
		
		</div>
	
	</body>
</html>
