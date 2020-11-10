<?php 
//models/empleados.php
class Empleados extends Model{
    public function getTodos() {
        $this->db->query("SELECT * FROM empleados");
        return $this->db->fetchAll();
    }
}



?>