<?php
//controller/listamenus
require '../fw/fw.php';
require '../models/Menus.php';
require '../models/mesasId.php';
require '../views/VistaMenu.php';

session_start();

// validacion del codigomesa

// Compruebo que el codigo mesa que viene por QR se haya cargado en la session. De lo contrario no podemos inciar. NO HACER DIES.
if (!isset($_SESSION["codigomesa"])) die ("error de validacion 1. No posee un codigo de mesa. Vuelva a Escanear el Codigo QR.");

// Compruebo que la mesa exista en Mi restorant.
if(strlen($_SESSION["codigomesa"]) == 6){

    $cm = new mesasId();
    $mesaOk = $cm->getMesaId($_SESSION["codigomesa"]);    
    $_SESSION["mesaid"] = $mesaOk;    

}

$me = new Menus();
$todos = $me->getTodos();

// Valido si tengo cargada alguna variable POST, si existe la valido y luego la guardo en una variable de Sesion y Creo la vista Menu para que siga eligiendo.
if(isset($_POST['menuid'])) {

    //le envio el numero de mesa para cargar el menu, con su valor de mesa correspondiente.    
    $menuIdOk = $me->comprobarMenuId($_POST['menuid'],$_SESSION["mesaid"]);    
    $_SESSION["listadepedidos"][] = $menuIdOk;
    $v = new VistaMenu();
    $v->menus = $todos;
 }
else{

    $v = new VistaMenu();
    $v->menus = $todos;
}

$v->render();

?>
