<?php 

    // consulta a la base para comprobar que Exista la mesa elegida por el usuario
    
    class mesasId extends Model { 
       
        public function getMesaId($codigomesa) {
           
            // tengo un error de matcheo de los tipos, la idea es que si coincide el codigo del array que le envio a la funcion, sino coincide largar un throw.
            // 

            // $this->db->query("SELECT * FROM mesa");
            // $temporal = $this->db->fetchAll();
            // $mesaOk = array();
            // foreach($temporal as $mesa){
            //     foreach($codigomesa as $codigo){
            //         if($mesa['codigo'] == $codigo){
            //             $mesaOk[]=$mesa;                        
            //         }
            //     }              
            // }

            return true;
        }

    }

    class ValidacionMesa extends Exception {  }
?>