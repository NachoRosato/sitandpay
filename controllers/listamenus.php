<?php
//controller/listamenus
require '../fw/fw.php';
require '../models/Menus.php';
require '../models/mesasId.php';
require '../views/VistaMenu.php';

session_start();


// Compruebo que la sesion este vacia y le cargo un array, de lo contrario continuo.
if (!empty($_SESSION["listadepedidos"])) {
    
    $_SESSION["listadepedidos"] = array();
}

// Compruebo que el codigo mesa que viene por QR se haya cargado en la session. De lo contrario no podemos inciar.
if (empty($_SESSION['codigomesa'])) die ("No posee un codigo de mesa. Vuelva a Escanear el Codigo QR.");



$me = new Menus();
$todos = $me->getTodos();

//Valido si tengo cargada alguna variable POST, si existe la guardo en una variable de Sesion y Creo la vista Menu para que siga eligiendo.
if(isset($_POST['menuid'])) {
    
    $_SESSION["listadepedidos"][] = $_POST['menuid'];
    $v = new VistaMenu();
    $v->menus = $todos;
 }
else{
    $v = new VistaMenu();
    $v->menus = $todos;
}

$v->render();

?>
