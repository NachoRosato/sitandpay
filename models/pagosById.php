<?php 

    // consulta a la base para comprobar que Exista la mesa elegida por el usuario
    
    class altaPagos extends Model { 

        public function getTodos(){
            $this->db->query("SELECT * FROM ordenes");
            return $this->db->fetchAll();
         }


        // Corresponden a la Construccion del Pago

        // public function insertarPedido($mesaid, $lista_pedidos) {

            
        //     //aca iria la integracion  de mercado Pago y la Query para agregar el Pedido.           

        //     // if(pagoOK){


        //     // }else{

        //     //     pagoOk = false
        //     // }

        //     // return pagoOK;

      
        //     return true;
        // }

    }

    class ValidacionPagos extends Exception {  }
?>