<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <script src="../js/bootstrap.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <title>Registro de Usuarios</title>
</head>
<body>


<div class="div_header page-header">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 text-center"><h1 class="titulo">INGRESO DE USUARIO </h1></div>
        <div class="col-md-3"></div>
    </div>
</div>

    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form action="usuario_p.php" method="post">
                <div class="row">
                        <label for="username" class="form-label">Nombre de Usuario</label>
                        <input type="text" class="form-control" name="username" id="username" placeholder="Nombre de usuario" required>
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" placeholder="Nombre" name="nombre" id="nombre" required>
                        <label for="apellido" class="form-label">Apellido</label>
                        <input type="text" class="form-control" placeholder="Apellido" name="apellido" id="apellido" required>
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" placeholder="Email" name="email" id="email" required>
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control"  placeholder="contraseña" name="password" id="password" required>
                        <input type="submit"  class="btn btn-success btnguardar" value="guardar">

                </div>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>



</div>
</body>
</html>