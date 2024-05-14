<?php
session_start();
session_destroy();//se destruye la sesion
$_SESSION = array();
header('Location: login.php');
?>