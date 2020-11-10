<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de cargos</title>
</head>
<body>
    <h1>Listado de cargos</h1>

    <?php foreach ($this->cargos as $c) { ?> 
        <?=$c['descripcion']?> <br>
    <?php } ?>
    </body>
</html>