<?php
//controller/listacarrito
require '../fw/fw.php';
require '../models/Menus.php';
require '../models/mesasId.php';
require '../views/VistaCarrito.php';

session_start();

//si en el paso 2 no tengo estas variables no puedo continuar.
if (empty($_SESSION["listadepedidos"])) die ("error de validacion 3. No contiene Pedidos Activos. Vuelva al Home");
if (empty($_SESSION['codigomesa'])) die ("error de validacion 4");



// Compruebo que la longitud de codigomesa sea la correcta.
if (strlen($_SESSION['codigomesa']["mesa"] > 6)) die ("error de validacion 5. No contiene un Numero de Mesa Correcto. Vuelva AL home");

// Compruebo que la longitud de codigomesa sea la correcta.
if (strlen($_SESSION['codigomesa']["mesa"]) < 6) die ("error de validacion 6. No contiene un Numero de Mesa Correcto. Vuelva AL home");

// Compruebo que la mesa exista en Mi restorant.
if(strlen($_SESSION['codigomesa']["mesa"]) == 6){

    $cm = new mesasId();
    $varios = $cm->getMesaId($_SESSION['codigomesa']["mesa"]);

    $_SESSION["mesaid"] = $varios;    

}

$me = new Menus();
$todos = $me->getPedido($_SESSION["listadepedidos"]);


$v = new VistaCarrito();
$v->menus = $todos;
$v->render();



?>