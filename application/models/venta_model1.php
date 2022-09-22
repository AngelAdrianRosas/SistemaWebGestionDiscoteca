<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class venta_model1 extends CI_Model {

    public function listaVentas()
    {
        $this->db->select('*');
        $this->db->from('venta');        
        return $this->db->get();        
    }

}
