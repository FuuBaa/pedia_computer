<?php
session_start();

$_SESSION['id']='';
$_SESSION['email']='';


unset($_SESSION['id']);
unset($_SESSION['email']);

session_unset();
session_destroy();
header('Location:login.php');

?>