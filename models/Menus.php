<?php 

    // consulta a la base para traer todos los menus
    
    class Menus extends Model { 
        public function getTodos() {
            $this->db->query("SELECT * FROM menu");
            return $this->db->fetchAll();
        }
    }
?>