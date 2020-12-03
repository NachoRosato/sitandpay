<?php
//controller/listamenus
require '../fw/fw.php';
require '../models/Menus.php';
require '../views/VistaMenu.php';

session_start();

// Compruebo que la sesion este vacia y le cargo un array, de lo contrario continuo.
if (empty($_SESSION["listadepedidos"])) {
    $_SESSION["listadepedidos"] = array();
}


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
