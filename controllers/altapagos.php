<?php
//controller/altapagos
require '../fw/fw.php';
require '../models/Menus.php';
require '../views/VistaPago.php';

// copie todo solamente para que no de error
session_start();

$me = new Menus();
$todos = $me->getPedido($_SESSION["listadepedidos"]);


$v = new VistaPago();
$v->menus = $todos;

$v->render();



?>