<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function listausers()
	{
		$this->db->select('*');
		//$this->db->from('usuarios');
		$this->db->from('user');
		$this->db->where('habilitado','1');				
		return $this->db->get();		
	}

	public function agregaruser($data)
	{
		//$this->db->insert('usuarios',$data);		
		$this->db->insert('user',$data);
	}		

	
	public function eliminaruser($iduser)
	{		
		$this->db->where('iduser',$iduser);
		$this->db->delete('user');
	}

	
	public function recuperaruser($iduser)
	{
		$this->db->select('*');		
		$this->db->from('user');		
		$this->db->where('iduser',$iduser);
		return $this->db->get();
	}

	
	public function modificaruser($iduser,$data)
	{		
		$this->db->where('iduser',$iduser);		
		$this->db->update('user',$data);
	}

	public function listausersdeshabilitados()
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('habilitado','0');
		return $this->db->get();		
	}



}
