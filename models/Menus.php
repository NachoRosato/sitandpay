<?php

// consulta a la base para traer todos los menus

class Menus extends Model
{
    public function getTodos()
    {
        $this->db->query("SELECT * FROM menu");
        return $this->db->fetchAll();
    }

    public function getPedido($lista_pedidos)
    {

        //valido que no este vacio.
        if (!isset($lista_pedidos)) throw new ValidacionPedido('error Lista Menus 1. Vuelva al Home escaneando el codigo QR!.');

        //valido que contenga al menos 1.
        if ($lista_pedidos < 1) throw new ValidacionPedido('error Lista Menus 2. No contiene un Pedido en Curso, Vuelva al Home escaneando el codigo QR!');

        //me aseguro de tener 1 menu por seleccion.
        $lista_pedidos = array_unique($lista_pedidos);

        // valido que contenga como max 6 pedidos.
        if (count($lista_pedidos) > 6) throw new ValidacionPedido('error Lista Menus 3. Excede la cantidad de pedidos, Vuelva al Home escaneando el codigo QR!');

        $this->db->query("SELECT * FROM menu");
        $temporal = $this->db->fetchAll();
        $orden = array();
        foreach ($temporal as $menu) {
            foreach ($lista_pedidos as $pedido) {
                if ($menu['id_menu'] == $pedido) {
                    $orden[] = $menu;
                }
            }
        }

        return $orden;
    }

    public function comprobarMenuId($codigoMenu,$mesaId)
    {
        // digito
        if(!ctype_digit($codigoMenu)) throw new ValidacionMenuId('error de validacion CodMenu 1. El menu seleccionado no es correcto.');

        // Compruebo que la longitud de codigomesa sea la correcta.
        if (strlen($codigoMenu) < 1) throw new ValidacionMenuId('error de validacion 2 CodMenu en Menu. El menu seleccionado no es correcto.');

        // Compruebo que la longitud de codigomesa sea la correcta. CONSULTAR SOBRE ESTA VALIDACION.
        if (strlen($codigoMenu) > 2) throw new ValidacionMenuId('error de validacion 3 CodMenu en Menu. El menu seleccionado no es correcto.');

        //sanitizo 
        $codigoMenu = substr($codigoMenu, 0, 2);
-
        //escapo las comillas
        $codigoMenu = $this->db->escape($codigoMenu);

        $menuOk = $codigoMenu;

        // me guardo el menu en la orden
        $this->db->query("INSERT INTO ordenes 
                                        (id_mesa,id_menu) 
                                        VALUES ($mesaId,$menuOk)");


        return $menuOk;
    }
}
class ValidacionPedido extends Exception
{
}

class ValidacionMenuId extends Exception
{
}

?>