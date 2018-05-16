<?php
    ini_set("error_reporting",E_ALL);
    ini_set("log_errors","1");
    ini_set("error_log","php_errors.txt");
?>
<?php
$theme = $_POST["theme"];
$textsize = $_POST["size"];
$navi = $_POST["navi"];


setcookie("theme", $theme, time() + (365*24*60*60));
setcookie("size", $textsize, time() + (365*24*60*60));
setcookie("navi", $navi, time() + (365*24*60*60));
header("location: ./../php/home.php" );
?>