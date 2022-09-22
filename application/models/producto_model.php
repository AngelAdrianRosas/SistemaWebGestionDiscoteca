<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto_model extends CI_Model {

	
	public function listaproductos()
	{
		$this->db->select('*');
		$this->db->from('producto');
		$this->db->where('habilitado','1');
		return $this->db->get();		
	}

	public function agregarproducto($data)
	{
		$this->db->insert('producto',$data);		
	}

	public function eliminarproducto($idproducto)
	{
		$this->db->where('idproducto',$idproducto);
		$this->db->delete('producto');
	}

	public function recuperarproducto($idproducto)
	{
		$this->db->select('*');
		$this->db->from('producto');
		$this->db->where('idproducto',$idproducto);
		return $this->db->get();
	}


	public function modificarproducto($idproducto,$data)
	{
		$this->db->where('idproducto',$idproducto);
		$this->db->update('producto',$data);
	}

	public function listaproductosdeshabilitados()
	{
		$this->db->select('*');
		$this->db->from('producto');
		$this->db->where('habilitado','0');
		return $this->db->get();		
	}

}
