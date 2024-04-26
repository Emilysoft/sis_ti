<?php

    require("../conect/conexion.php");

    $username = $_POST["username"];
    $name = $_POST["nombre"];
    $lastname = $_POST["apellido"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $estado = 1;

    $insert='INSERT INTO usuario VALUES (null, :username, :nombre, :apellido, :email, :password, :estado)';
    $sentencia = $conexion->prepare($insert);
    $sentencia->execute(array(':username'=>$username,':nombre'=>$nombre,':apellido'=>$lastname,':email'=>$email,':password'=>$password,':estado'=>$estado));

    if(!$sentencia){

        echo "tu wa no esta sirviendo para nada";
    }else
    {

        echo "Este es un mensaje";

    }


// estados = 0 -> incativo 1-> activo pendiente de validacion 2->activo y validado 3-> baneado











?>