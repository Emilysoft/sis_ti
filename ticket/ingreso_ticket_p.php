<?php
require("../conect/conexion.php");

$id_usuario = 7;
$n_ticket = random_int(1,9).date("Ys");;
$incidencia = $_POST["incidencia"];
$img="mesaje de prueba";
$prioridad = $_POST["prioridad"];
$estado = "activo";

try {
    $insert='INSERT INTO ticket VALUES (null, :id_user, :n_ticket, :incidencia, :img, :prioridad, :estado)';
    $sentencia = $conexion->prepare($insert);
    $sentencia->execute(array(':id_user'=>$id_usuario, ':n_ticket'=> $n_ticket ,':incidencia'=>$incidencia,':img'=>$img,':prioridad'=>$prioridad,':estado'=>$estado));

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

if(!$sentencia)
{
    echo "Tu wa no funciona bruto";
} else
{
    echo "uwu";

    echo $id_usuario;
    echo $incidencia;
    echo $img;
    echo $prioridad;
    echo $estado;



}




?>