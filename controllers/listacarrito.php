<?php
//controller/listacarrito
require '../fw/fw.php';
require '../models/Menus.php';
require '../views/VistaCarrito.php';

session_start();

//si en el paso 2 no tengo estas variables no puedo continuar.
if (empty($_SESSION["listadepedidos"])) die ("error de validacion 3. No contiene Pedidos Activos. Vuelva AL home");
// if (empty($_SESSION["mesaid"])) die ("error de validacion 4");


$me = new Menus();
$todos = $me->getPedido($_SESSION["listadepedidos"]);


$v = new VistaCarrito();
$v->menus = $todos;
$v->render();



?>