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
		<title>Page One</title>
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
			  <h3>Page One</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam mauris nisl, elementum id odio sed, pharetra lacinia mauris. Aliquam erat volutpat. Aenean lobortis vitae sem eu rhoncus. Aenean elit turpis, rhoncus id arcu gravida, tempor sollicitudin libero. Ut ultrices arcu et enim laoreet egestas. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In hac habitasse platea dictumst. Nam a sollicitudin diam. Integer vitae leo et diam suscipit consequat et at sapien. Sed finibus rhoncus auctor. Mauris rutrum nec velit ac fringilla. Donec mi mauris, venenatis eget sagittis et, interdum at velit. Sed vel placerat ligula, sit amet placerat neque. Maecenas sed fermentum dolor, sed lobortis justo.
					
					Mauris lacinia euismod ex, et auctor enim venenatis in. Etiam laoreet nisi et pharetra interdum. Vestibulum viverra tempus risus a feugiat. Cras at quam bibendum, gravida augue eu, tincidunt nunc. Praesent maximus massa vitae velit consectetur, non interdum erat facilisis. In ante libero, placerat quis ultricies nec, scelerisque pellentesque mi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Praesent ornare diam quis nibh tristique, ac laoreet ex fermentum. Nunc risus tellus, volutpat nec ultrices quis, aliquet non nulla. Aenean interdum arcu et ipsum sollicitudin viverra. Aliquam sed posuere mauris.
					
					Donec eleifend lacus non viverra placerat. Cras rhoncus mauris eget condimentum vehicula. Morbi auctor, felis eu fermentum auctor, nulla leo lacinia dolor, ut consequat tortor orci vitae purus. Nullam sit amet lacus libero. Pellentesque venenatis sagittis ante et consectetur. Suspendisse ut placerat tortor, in placerat elit. Ut leo sapien, mattis id urna tristique, venenatis tincidunt odio. Praesent tempor tempor hendrerit. Maecenas tempus consequat ante.
					
					Ut ultrices et libero at finibus. Mauris nec sagittis nunc. Curabitur tristique viverra finibus. Integer aliquet velit vitae luctus dignissim. Proin quis dui mattis, sodales massa ac, gravida ipsum. Cras condimentum metus aliquet libero bibendum placerat. Aliquam orci velit, porttitor faucibus euismod in, auctor et ante. Donec convallis diam nec fringilla egestas. Nullam sed leo pulvinar, porta risus eget, fringilla orci. Donec ultricies non erat sit amet bibendum. Aliquam et augue at ex congue porta sit amet commodo nibh. Curabitur tristique ornare dui vel interdum. Donec vel pharetra nisi. Ut eleifend non neque id interdum. Nam a odio elit.
					
					Donec condimentum, massa sed aliquet porta, nunc purus aliquam enim, nec posuere nisl orci tincidunt libero. Nullam eu diam ut mi tempor condimentum in eget est. Nullam at massa nisl. Mauris sed enim a est sollicitudin blandit ac sed ante. Nulla gravida tellus in hendrerit finibus. Nullam vitae nibh egestas, eleifend metus vitae, egestas felis. Mauris auctor, nibh nec ultricies feugiat, massa nibh lacinia lorem, vel lobortis augue arcu non sapien. Duis sit amet sapien id augue egestas venenatis. Curabitur sed risus porta, vulputate libero sit amet, facilisis nisl. Nulla egestas semper tortor, id imperdiet orci malesuada id. Vestibulum at lacus eu ligula molestie vehicula quis sed ipsum. Vestibulum finibus ornare nisi. In vel tincidunt nibh. Donec fermentum aliquam risus ut feugiat.
				</p>
			</section>
		
		</div>
	
	</body>
</html>
