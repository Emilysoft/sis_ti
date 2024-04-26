<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <scrip src="js/bootstrap.js"></scrip>
    <link rel="stylesheet" href="../css/ingreso_user.css">

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
        <div class="form-group col-md-8 div_input ">

                <form action="" method="post">

                    <div class="input-group mb-3">
                        <label for="user_name" class="form-label label_g">Nombre de Usuario</label>
                        <input type="text" name="user_name" class="input_ingreso" placeholder="Nombre de Usuario" id="user_name" required>
                    </div>

                    <div class="input-group mb-3">
                        <label for="nombre" class="form-label label_g">Nombre</label>
                        <input type="text" name="nombre" class="input_ingreso" placeholder="Nombre" id="nombre" required>
                    </div>

                    <div class="input-group mb-3">
                        <label for="apellido" class="form-label label_g">Apellido</label>
                        <input type="text" name="apellido" class="input_ingreso" placeholder="Apellido" id="apellido" required>
                    </div>

                    <div class="input-group mb-3">
                        <label for="password" class="form-label label_g">Contraseña</label>
                        <input type="password" name="password" class="input_ingreso" placeholder="Contraseña" id="contraseña" required>
                    </div>

                </form>
        </div>
        <div class="col-md-2"></div>
    </div>



</body>
</html>