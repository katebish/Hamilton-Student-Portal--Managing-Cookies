<?php
    ini_set("error_reporting",E_ALL);
    ini_set("log_errors","1");
    ini_set("error_log","php_errors.txt");
?>
<?php
if(!isset($_COOKIE["theme"])){
    echo '<link rel="stylesheet" href="../css/light.css" type="text/css">';
}   	
if(!isset($_COOKIE["navi"])){
	echo '<link rel="stylesheet" href="../css/left.css" type="text/css">';
}
if(!isset($_COOKIE["size"])){
	echo '<link rel="stylesheet" href="../css/90.css" type="text/css">';
}

if(isset($_COOKIE["theme"])){
	if($_COOKIE["theme"] === "dark"){
		echo '<link rel="stylesheet" href="../css/dark.css" type="text/css">';
	}
	else
	{
		echo '<link rel="stylesheet" href="../css/light.css" type="text/css">';
	}
}

if(isset($_COOKIE["navi"])){
	if($_COOKIE["navi"] === "left"){
		echo '<link rel="stylesheet" href="../css/left.css" type="text/css">';
	}
	else
	{
		echo '<link rel="stylesheet" href="../css/right.css" type="text/css">';
	}
}

if(isset($_COOKIE["size"])){
	if($_COOKIE["size"] === "80"){
		echo '<link rel="stylesheet" href="../css/80.css" type="text/css">';
	}
	else if($_COOKIE["size"] === "90"){
		echo '<link rel="stylesheet" href="../css/90.css" type="text/css">';
	}
	else if($_COOKIE["size"] === "100"){
		echo '<link rel="stylesheet" href="../css/100.css" type="text/css">';
	}
	else if($_COOKIE["size"] === "110"){
		echo '<link rel="stylesheet" href="../css/110.css" type="text/css">';
	}
	else if($_COOKIE["size"] === "120"){
		echo '<link rel="stylesheet" href="../css/120.css" type="text/css">';
	}
}
?>