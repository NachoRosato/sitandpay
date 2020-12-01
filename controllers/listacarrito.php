<?php
//controller/listacarrito
require '../fw/fw.php';
require '../models/Menus.php';
require '../views/VistaCarrito.php';

$me = new Menus();
$todos = $me->getTodos();


$v = new VistaCarrito();
$v->menus = $todos;

$v->render();



?>