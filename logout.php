
<?php
session_start(); 
session_destroy(); 
$url = 'login.php';
header('Location: index.php' . $url); 

?>
