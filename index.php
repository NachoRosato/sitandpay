<?php 
    //Elimno las Cookies de Sesion

    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }

    // Destruyo la Sesion para poder Cerrar y volver al Menu Inicial
    session_destroy();

    header("Location: usuario-invitado-menu");      
    
?>