<?php
//controller/altapagos
require '../fw/fw.php';
require '../models/pagosById.php';
require '../views/VistaPago.php';

// Se inicia la Sesion Para que mantenga los datos.
session_start();

//Corresponden al pago por ML
// $at = new altaPagos();
// $fin = $at->insertarPedido($_SESSION["mesaid"],$_SESSION["listadepedidos"]);


//Muestro el estado del Pedido

$ats = new altaPagos();
$todos = $ats->getTodos();

$v = new VistaPago();
$v->ordenes = $todos;
$v->render();




//dentro de indexInvitado tengo la Eliminacion de las Cookies de Sesion y la Destruccion de la misma.
//Cada vez que ingrese al /home, sera un invitado nuevo y cualquier pedido cargado sera eliminado.


?>