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
		<title>Home</title>		
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
			  <h3>Home Page</h3>
			  <p>Mauris lacinia euismod ex, et auctor enim venenatis in. Etiam laoreet nisi et pharetra interdum. Vestibulum viverra tempus risus a feugiat. Cras at quam bibendum, gravida augue eu, tincidunt nunc. Praesent maximus massa vitae velit consectetur, non interdum erat facilisis. In ante libero, placerat quis ultricies nec, scelerisque pellentesque mi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Praesent ornare diam quis nibh tristique, ac laoreet ex fermentum. Nunc risus tellus, volutpat nec ultrices quis, aliquet non nulla. Aenean interdum arcu et ipsum sollicitudin viverra. Aliquam sed posuere mauris.</p>
			</section>
		
		</div>
	
	</body>
</html>
