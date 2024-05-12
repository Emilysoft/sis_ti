<?php
require_once ("../conect/conexion.php");

$id_ticket = $_GET["id"];

$consulta = "SELECT  * FROM ticket WHERE id_ticket = :id_ticket";
$proceso = $conexion->prepare($consulta);
$proceso->execute(array('id_ticket' => $id_ticket));
$resultado = $proceso->fetch();


$consulta2 = "SELECT *FROM usuario WHERE id_user = :id_user";
$proceso2 = $conexion->prepare($consulta2);
$proceso2->execute(array('id_user' => $resultado["id_user"]));
$resultado2 = $proceso2->fetch();
?>




<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/bootstrap.js"></script>
    <title>Detalle de Ticket</title>
</head>
<body>
<?php
require_once('../user/menu_user.php');
?>
    <div class="div_header page-header">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 text-center"><h1 class="titulo">DETALLE DE TICKET</h1></div>
            <div class="col-md-3"></div>
        </div>
    </div>


    <div class="container">
        <div class="row">

            <div class="col-md-1"></div>


            <div class="col-md-10 div_contenedor">

                <div class="mb-3 row">
                    <label for="id_ticket" class="col-sm-2 col-form-label">Nº de Ticket</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="id_ticket" value="<?php echo $resultado["id_ticket"]?>" readonly disabled>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="id_ticket" class="col-sm-2 col-form-label">Nº de Soporte</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="id_ticket" value="<?php echo $resultado["n_ticket"]?>" readonly disabled>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="id_ticket" class="col-sm-2 col-form-label">Usuario</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="id_ticket" value="<?php echo $resultado2["username"]?>" disabled readonly>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="fecha_ticket" class="col-sm-2 col-form-label">Fecha de ticket</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="fecha_ticket" value="<?php echo $resultado["fecha_ticket"]?>" readonly disabled>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="id_ticket" class="col-sm-2 col-form-label">Solicitante</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="id_ticket" value="<?php echo $resultado2["nombre"] ." ". $resultado2["apellido"]?>" disabled readonly>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="asunto" class="col-sm-2 col-form-label">Asunto</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="asunto" value="<?php echo $resultado["asunto"] ?>" disabled readonly>
                    </div>
                </div>


                <div class="mb-3 row">
                    <label for="id_ticket" class="col-sm-2 col-form-label">Incidencia</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="incidencia" name="incidencia"  cols="30" rows="10" readonly disabled> <?php echo $resultado["incidencia"] ?> </textarea>
                    </div>
                </div>

                <?php
                $url = $resultado["img"];
                // Usar el de abajo solo cuando se prueba en Mac
                   $nuevaurl = str_replace("/Applications/MAMP/htdocs/","http://localhost:8888/",$url);
                // $nuevaurl = str_replace("/opt/lampp/htdocs/","http://localhost:80/",$url);
                //Usar el de arriba solo cuando se prueba en Linux
                ?>

                <div class="mb-3 row">
                    <label for="id_ticket" class="col-sm-2 col-form-label">Imagen</label>
                    <div class="col-sm-10">
                        <img src=" <?php echo  $nuevaurl ?>" class="img-fluid" alt="200">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="id_ticket" class="col-sm-2 col-form-label">Prioridad</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="id_ticket" value="<?php echo $resultado["prioridad"]?>" disabled readonly>
                    </div>
                </div>

                <div class="mb-3 row ">
                    <label for="id_ticket" class="col-sm-2 col-form-label">Estado</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="id_ticket" value="<?php echo $resultado["estado"]?>" disabled readonly>
                    </div>
                </div>
                <div class="float-end">
                    <a href="v_ticket.php" class="btn btn-success div_contenedor">Volver</a>
                    <a href="#" class="btn btn-primary div_contenedor">Resolver</a>
                </div>

            </div>
            <div class="col-md-1"></div>
        </div>
    </div>


</body>
</html>