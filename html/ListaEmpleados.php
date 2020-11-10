<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista empleados</title>
</head>

<body>
    <h1>Listado de empleados</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
        </tr>

        <?php foreach($this->empleados as $e) { ?>
        <tr><td><?=$e['empleado_id']?></td><td><?=$e['nombre']?></td></tr> <?php } ?>
    </table>
</body>

</html>