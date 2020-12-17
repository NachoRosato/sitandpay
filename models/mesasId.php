<?php

// consulta a la base para comprobar que Exista la mesa elegida por el usuario

class mesasId extends Model
{

    public function getMesaId($codigoMesa){
        
        // Compruebo que la longitud de codigomesa sea la correcta.
        if (strlen($codigoMesa) < 6) throw new ValidacionMesa('error MesaID 1. Su mesa no es valida, vuelva a escanear el QR!');

        // Compruebo que la longitud de codigomesa sea la correcta.
        if (strlen($codigoMesa) > 6) throw new ValidacionMesa('error MesaID 2. Su mesa no es valida, vuelva a escanear el QR!');

        //sanitizo 
        $codigoMesa = substr($codigoMesa, 0, 6);

        //escapo los strings
        $codigoMesa = $this->db->escape($codigoMesa);

        //soluciono los comodines (consulto con un LIKE)
        $codigoMesa = $this->db->escapeWildcards($codigoMesa);

        $codigoTemp = $codigoMesa;

        $busq = $this->db->query("SELECT * 
                                        FROM mesa
                                             WHERE codigo LIKE '%$codigoTemp%' ");
        //me guardo los datos.                                  
        $temporal = $this->db->fetch();

        // compruebo que exista un solo resultado.
        $resultado = $this->db->numRows($busq);

        // Valido si el resultado es distinto de 1, error.
        if ($resultado != 1) throw new ValidacionMesa('error MesaID 3. Su mesa no es valida, vuelva a escanear el QR!');        

        // Si todas las validaciones dieron OK, me guardo el ID DE MESA.
        if ($temporal['codigo'] == $codigoTemp) {

            $mesaOk = $temporal['id_mesa'];
        }
        
        return $mesaOk;
    }
}

class ValidacionMesa extends Exception
{
}

?>