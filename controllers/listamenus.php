<?php
//controller/listaempleados
require '../fw/fw.php';
require '../models/Menus.php';
require '../views/ListaMenus.php';

$me = new Menus();
$menus = $me->getTodos();

$e = new ListaMenus();
$e->menus = $menus;
$e->render();


?>