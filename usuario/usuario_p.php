<?php

    require("../conect/conexion.php");

    $username = $_POST['username'];
    $name = $_POST['nombre'];
    $lastname = $_POST['apellido'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $estado = 1;

    try{

    $insert='INSERT INTO usuario VALUES (null, :username, :nombre, :apellido, :email, :password, :estado)';
    $sentencia = $conexion->prepare($insert);
    $sentencia->execute(array(':username'=>$username,':nombre'=>$name,':apellido'=>$lastname,':email'=>$email,':password'=>$password,':estado'=>$estado));



    } catch(PDOException $e){

        print "Error!: " . $e->getMessage() . "<br/>";

    }


    if(!$sentencia){

        echo "tu wa no esta sirviendo para nada";
    }else
    {

        header("location: validacion_user.php");

    }


// estados = 0 -> incativo 1-> activo pendiente de validacion 2->activo y validado 3-> baneado











?>