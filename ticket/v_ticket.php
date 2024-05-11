<?php
require_once ('../conect/conexion.php');
$consulta ='SELECT * FROM ticket';
$resultado = $conexion->prepare($consulta);
$resultado->execute();
?>




<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <script src="../js/bootstrap.js"></script>
    <link rel="stylesheet" href="../css/DataTables/css/jquery.dataTables.css">
    <script type="text/javascript" src="../js/jQuery-3.7.0/jquery-3.7.0.js"></script>
    <script type="text/javascript" src="../js/DataTables/jquery.dataTables.js"></script>
    <!-- <script type="text/javascript" src="../js/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="../css/dataTables.dataTables.min.css">
    <script type="text/javascript" src="../js/dataTables.min.js"></script>
   -->
    <script type="text/javascript">
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>

    <title>Ticket</title>
</head>
<body>




<div class="div_header page-header">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 text-center"><h1 class="titulo">LISTADO DE TICKET </h1></div>
        <div class="col-md-3"></div>
    </div>
</div>





<div class="container">
    <table id="example" name="usuarios" class="display table table-striped" cellspacing="0" width="100%">
        <thead class=" table table-striped table-dark">
        <tr class="active">
            <td>Numero Ticket</td>
            <td>Usuario</td>
            <td>Fecha</td>
            <td>prioridad</td>
            <td>estado</td>
            <td></td>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($resultado as $row)  {   ?>
        <tr>
            <td><?php echo $row['n_ticket']  ?></td>
            <td><?php
                $consulta2 = "SELECT *FROM usuario WHERE id_user = :id_user";
                $proceso2 = $conexion->prepare($consulta2);
                $proceso2->execute(array('id_user' => $row['id_user']));
                $resultado2 = $proceso2->fetch();


                    echo $resultado2['nombre']." ".$resultado2['apellido'];


                ?></td>
            <td><?php echo $row['fecha_ticket']?></td>
            <td><?php echo $row['prioridad']   ?></td>
            <td><?php echo $row['estado']   ?></td>
            <td><a href="t_detalle.php?id=<?php echo $row['id_ticket']?>" class="btn btn-success">Detalle</a></td>
        </tr><?php } ?>
        </tbody>
    </table>
    <a href="../init.php" class="btn btn-success">Volver</a>
</div>

</body>
</html>











