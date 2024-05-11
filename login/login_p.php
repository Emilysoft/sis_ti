<?php
session_start();
require("../conect/conexion.php");

if($_POST) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $password2 = hash('sha512',$password);//encriptar password


    $sql = 'SELECT * FROM usuario where username= :username AND password=:password';
    $sentencia = $conexion->prepare($sql);
    $sentencia->execute(array(':username' => $username, ':password' => $password2));
    $resultado = $sentencia->fetch();

    if($resultado!=false) {

        echo "Datos correctos oniichan";
        header("location:../user/menu.php");

    }else
    {
        $_SESSION['error_login']="correo o contraseña incorrectos";
        header("location:../login/login.php");
    }

}else
{
    header("location:../login/login.php");

}


    ?>