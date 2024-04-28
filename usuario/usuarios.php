<?php
require_once ('../conect/conexion.php');
$consulta ='SELECT * FROM usuario';
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
    <script type="text/javascript" src="../js/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="../css/dataTables.dataTables.min.css">
    <script type="text/javascript" src="../js/dataTables.min.js"></script>



    <script type="text/javascript">
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>

    <title>Usuarios</title>
</head>
<body>
<div class="jumbotron">
    <h1>Lista de Usuarios</h1>
</div>
<a href="../init.php" class="btn btn-success">Volver</a>
<div class="container">
    <table id="example" name="usuarios" class="display table table-striped" cellspacing="0" width="100%">
        <thead>
            <tr class="active">
                <td>id usuario</td>
                <td>username</td>
                <td>Nombre</td>
                <td>Apellido</td>
                <td>Email</td>
                <td>Tipo Usuario</td>
                <td>Estado</td>
                <td>Accion</td>
            </tr>
        </thead>
            <?php foreach ($resultado as $row)  {   ?>
        <tbody>
            <tr>
                <td><?php echo $row['id_user']   ?></td>
                <td><?php echo $row['username']   ?></td>
                <td><?php echo $row['nombre']  ?></td>
                <td><?php echo $row['apellido']   ?></td>
                <td><?php echo $row['email']   ?></td>
                <td><?php echo $row['tipo_usuario']   ?></td>
                <td><?php echo $row['estado']   ?></td>
                <td><a href="#" class="btn btn-danger">Eliminar</a></td>
            </tr><?php } ?>
        </tbody>
    </table>
</div>

</body>
</html>










