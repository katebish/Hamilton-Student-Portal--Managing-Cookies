<?php
    ini_set("error_reporting",E_ALL);
    ini_set("log_errors","1");
    ini_set("error_log","php_errors.txt");
?>
<!DOCTYPE html>
<?php
if(isset($_COOKIE["auto_login"]))
{
    setcookie("logged_in", "true");
    header('location: home.php');
}
if(isset($_COOKIE["logged_in"]))
{
    header('location: home.php');
}
?>

<html>
	<head>
		<meta charset="UTF-8">
        <link rel="stylesheet" href="../css/style.css" style type="text/css">
                 <?php
include "changetheme.php";
	?>
		<title>Login</title>
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
			    <li><a href="login.php">Login</a></li>
			  </ul>
			</nav>
			
			<section>
				<form name="form1" class="pref" action="../php/processLogin.php" method="POST" >
					<text>Login</text>
					<br>
					<label>Username</label>
				    <input type="text" name="uname">
				    <br>
				    <br>
				    <label>Password</label>
				    <input type="text" name="pwd"> <br><br>
				    <input type="checkbox" name="remember" value="check"> Keep me logged in for a week <br><br>
				    <input type="submit" value="submit form"> 
				    <input type="submit" value="reset form"> 
				</form>
			
			</section>
		
		</div>
	
	</body>
</html>
