<?php
//controller/altapagos
require '../fw/fw.php';
require '../models/Menus.php';
require '../views/VistaPago.php';

// Se inicia la Sesion Para que mantenga los datos.
session_start();

$me = new Menus();
$todos = $me->getPedido($_SESSION["listadepedidos"]);


$v = new VistaPago();
$v->menus = $todos;
$v->render();


//dentro de Index tengo la Eliminacion de las Cookies de Sesion y la Destruccion de la misma.
//Cada vez que ingrese al /home, sera un invitado nuevo y cualquier pedido cargado sera eliminado.


?>