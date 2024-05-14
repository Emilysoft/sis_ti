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

    if($resultado!=false and $resultado['tipo_usuario']==1) {

        $_SESSION['id_user'] = $resultado['id_user'];
        $_SESSION['nombre'] = $resultado['nombre'];
        $_SESSION['tipo_usuario'] = $resultado['tipo_usuario'];
        $_SESSION['estado'] = $resultado['estado'];

        header("location:../user/principal_user.php");

    }elseif($resultado!=false  and $resultado['tipo_usuario']==2){

        $_SESSION['id_user'] = $resultado['id_user'];
        $_SESSION['nombre'] = $resultado['nombre'];
        $_SESSION['tipo_usuario'] = $resultado['tipo_usuario'];
        $_SESSION['estado'] = $resultado['estado'];

        header("location:../init.php");

    }
    else
    {
        $_SESSION['error_login']="correo o contraseña incorrectos";
        header("location:../login/login.php");
    }

}else
{
    header("location:../login/login.php");

}


    ?>