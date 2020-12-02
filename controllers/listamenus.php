<?php
//controller/listamenus
require '../fw/fw.php';
require '../models/Menus.php';
require '../views/VistaMenu.php';

session_start();
if (empty($_SESSION["listadepedidos"])) {
    $_SESSION["listadepedidos"] = array();
}


$me = new Menus();
$todos = $me->getTodos();

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
