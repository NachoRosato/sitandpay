<?php 

    // consulta a la base para comprobar que Exista la mesa elegida por el usuario
    
    class altaPagos extends Model { 
        public function insertarPedido($mesaid, $lista_pedidos) {

            return true;

            //aca iria la integracion  de mercado Pago y la Query para agregar el Pedido.
        }

    }

    class ValidacionMesa extends Exception {  }
?>