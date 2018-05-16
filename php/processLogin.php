<?php
    ini_set("error_reporting",E_ALL);
    ini_set("log_errors","1");
    ini_set("error_log","php_errors.txt");
?>
<?php
$username = $_POST["uname"];
$password = $_POST["pwd"];
if($username === "test" && $password === "test")
{
    setcookie("logged_in", "true");
    if(isset($_POST["remember"]))
    {
        setcookie("auto_login", "true", time() + (7*24*60*60));   
    }
    header("location: ./../php/home.php" );
}
else
{
    header("location: ./../php/login.php" );
}
?>