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


    <title>Nuevo Ticket</title>
</head>
<body>
<div class="div_header page-header">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 text-center"><h1 class="titulo">Nuevo Ticket</h1></div>
        <div class="col-md-3"></div>
    </div>
</div>

<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <form action="ingreso_ticket_p.php" method="post">
            <div class="row">
                <div class="mb-3">
                    <label for="incidencia" class="form-label">Incidencia</label>
                    <textarea class="form-control" id="incidencia" name="incidencia"  cols="30" rows="10"></textarea>
                </div>
                <div class="mb-3">
                    <label for="">Inserte Imagen</label>
                    <input type="file" name="file" id="file"class="form-control">
                </div>
                <div class="mb-3">
                    <label for="prioridad">Prioridad del Ticket</label>
                    <select class="form-select" id="prioridad" name="prioridad">
                        <option value="baja">Baja</option>
                        <option value="media">Media</option>
                        <option value="alta">Alta</option>
                        <option value="urgente">Urgente</option>
                    </select>
                </div>
                <div class="mb-3">
                    <input type="submit"  class="btn btn-success btnguardar" value="Enviar">
                </div>
            </div>
        </form>
    </div>

    <div class="col-md-3"></div>
</div>




</body>
</html>