<?php
require("../conect/conexion.php");

$id_usuario = 5;
$n_ticket = random_int(1,9).date("Ys");;
$incidencia = $_POST["incidencia"];
$asunto = $_POST["asunto"];
$fecha = date("Y-m-d");

// ****************  IMAGEN *******************
$img = $_FILES["file"]["name"];
$url_temp = $_FILES["file"]["tmp_name"];
$url_insert = dirname( __FILE__) . "/data";
$url_target = str_replace("\\", "/", $url_insert) . '/' .$img;

if(!file_exists($url_insert)){
    mkdir($url_insert, 0777, true);
};

if(move_uploaded_file($url_temp, $url_target)){
    echo "El archivo" . htmlspecialchars(basename($img)) . " ha sido subido correctamente";

}else{

    echo "Ha ocurrido un error";

}
$img2= $url_target;
// ****************************************************

$prioridad = $_POST["prioridad"];
$estado = "activo";

try {
    $insert='INSERT INTO ticket VALUES (null, :id_user, :n_ticket,:fecha_ticket,:asunto , :incidencia, :img, :prioridad, :estado)';
    $sentencia = $conexion->prepare($insert);
    $sentencia->execute(array(':id_user'=>$id_usuario, ':n_ticket'=> $n_ticket ,':fecha_ticket'=>$fecha ,':asunto'=>$asunto ,':incidencia'=>$incidencia,':img'=>$img2,':prioridad'=>$prioridad,':estado'=>$estado));

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

if(!$sentencia)
{
    echo "Tu wa no funciona bruto";
} else
{
    header("location: ../init.php");

}




?>