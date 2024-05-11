<?php

    require("../conect/conexion.php");

    $username = $_POST['username'];
    $name = $_POST['nombre'];
    $lastname = $_POST['apellido'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $tipo_usuario = 1;
    $estado = 1;

    $password2 = password_hash($password, PASSWORD_DEFAULT);

    try{

    $insert='INSERT INTO usuario VALUES (null, :username, :nombre, :apellido, :email, :password, :tipo_usuario, :estado)';
    $sentencia = $conexion->prepare($insert);
    $sentencia->execute(array(':username'=>$username,':nombre'=>$name,':apellido'=>$lastname,':email'=>$email,':password'=>$password2, ':tipo_usuario'=>$tipo_usuario ,':estado'=>$estado));



    } catch(PDOException $e){

        print "Error!: " . $e->getMessage() . "<br/>";

    }


    if(!$sentencia){

        echo "tu wa no esta sirviendo para nada";
    }else
    {

    header("location: usuarios.php");

    }


// estados = 0 -> incativo 1-> activo pendiente de validacion 2->activo y validado 3-> baneado
// tipo_usurio = 1 -> user normal 2-> administrador










?>