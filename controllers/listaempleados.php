<?php
//controller/listaempleados
require '../fw/fw.php';
require '../models/Empleados.php';
require '../views/ListaEmpleados.php';

$e = new Empleados();
$todos = $e->getTodos();

$v = new ListaEmpleados();
$v->empleados = $todos;
$v->render();

?>