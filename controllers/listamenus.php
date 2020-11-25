<?php
//controller/listamenus
require '../fw/fw.php';
require '../models/Menus.php';
require '../views/VistaMenu.php';

$me = new Menus();
$todos = $me->getTodos();


$v = new VistaMenu();
$v->menus = $todos;
$v->render();

?>