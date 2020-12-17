<?php 

session_start(); 
session_destroy();
session_unset();


//si existe el codigo lo guardo

if(isset($_GET['mesa'])){

    session_start();
    
        $_SESSION["codigomesa"] = $_GET['mesa'];
        
}

    header("Location: usuario-invitado-menu");

?>