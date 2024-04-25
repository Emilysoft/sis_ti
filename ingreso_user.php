<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <scrip src="js/bootstrap.js"></scrip>
    <link rel="stylesheet" href="css/ingreso_user.css">

    <title>Ingreso Usuario</title>
</head>
<body>

    <div class="div_header page-header">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 text-center"><h1 class="titulo">INGRESO DE USUARIO </h1></div>
            <div class="col-md-2"></div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-2"></div>
        <div class="form-group col-md-8">
            <div class="row">
                <form action="" method="post">

                    <div class="input-group">
                        <label for="user_name">Nombre de Usuario</label>
                        <input type="text" name="user_name" placeholder="Nombre de Usuario" id="user_name" required>
                    </div>

                    <div class="input-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" placeholder="Nombre" id="nombre" required>
                    </div>

                    <div class="input-group">
                        <label for="apellido">Apellido</label>
                        <input type="text" name="apellido" placeholder="Apellido" id="apellido" required>
                    </div>

                    <div class="input-group">
                        <label for="password">Contraseña</label>
                        <input type="password" name="password" placeholder="Contraseña" id="contraseña" required>
                    </div>

                </form>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>



</body>
</html>