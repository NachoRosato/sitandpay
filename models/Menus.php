<?php 

    // consulta a la base para traer todos los menus
    
    class Menus extends Model { 
        public function getTodos() {
            $this->db->query("SELECT * FROM menu");
            return $this->db->fetchAll();
        }

        public function getPedido($lista_pedidos){
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
    }
?>