<?php 

    // consulta a la base para traer todos los menus
    
    class Menus extends Model { 
        public function getTodos() {
            $this->db->query("SELECT * FROM menu");
            return $this->db->fetchAll();
        }

        public function getPedido($lista_pedidos){

            //valido que contenga al menos 1 valor.
            if(empty($lista_pedidos)) die ("error Menus 1. Vuelva al Home.");

            //valido que contenga valores numericos.
            if($lista_pedidos < 1) die ("error Menus 2. No contiene un Pedido en Curso, vuelva al Home!");

            $lista_pedidos = array_unique($lista_pedidos);
            $this->db->query("SELECT * FROM menu");
            $temporal = $this->db->fetchAll();
            $orden = array();
            foreach($temporal as $menu){
                foreach($lista_pedidos as $pedido){
                    if($menu['id_menu'] == $pedido){
                        $orden[]=$menu;
                        
                    }
                }              
            }
            return $orden;
        }

        

    //     -- Se utilizo JavaScript--    
    //     public function getTotal($lista_pedidos){
    //         $lista_pedidos = array_unique($lista_pedidos);
    //         $this->db->query("SELECT * FROM menu");
    //         $temporal = $this->db->fetchAll();
    //         $orden = array();
    //         foreach($temporal as $menu){
    //             foreach($lista_pedidos as $pedido){
    //                 if($menu['id_menu'] == $pedido){
    //                     $orden[]=$menu;
    //                 }
    //             }              
    //         }
    //         $total = array_sum($orden);            
    //         return $total;
    //     }

    }

    class ValidacionException extends Exception {

        


    }
?>