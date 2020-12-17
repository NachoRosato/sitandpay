<?php
//controller/listacarrito
require '../fw/fw.php';
require '../models/Menus.php';
require '../models/mesasId.php';
require '../views/VistaCarrito.php';

session_start();

$me = new Menus();
$todos = $me->getPedido($_SESSION["listadepedidos"]);


$v = new VistaCarrito();
$v->menus = $todos;
$v->render();


?>