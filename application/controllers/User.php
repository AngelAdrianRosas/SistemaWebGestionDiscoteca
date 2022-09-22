<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	
	public function index()
	{
		$listausers=$this->user_model->listausers();		
		$data['user']=$listausers;


		$this->load->view('inc/header1');
		$this->load->view('listausers',$data);
		$this->load->view('inc/footer1');		
	}

	public function guest()
	{
		$this->load->view('inc/header1');
		$this->load->view('panelguest');
		$this->load->view('inc/footer1');		
	}

	
	public function agregar()
	{
		
		$this->load->view('inc/header1');
		$this->load->view('formulariouser');
		$this->load->view('inc/footer1');		
	}

	public function agregarbd()
	{
		$data['login']=$_POST['login'];
		$data['password']=$_POST['password'];
		$data['tipo']=$_POST['tipo'];
        $data['nombres']=$_POST['nombres'];        
        $data['primerApellido']=$_POST['primerApellido'];        
        $data['segundoApellido']=$_POST['segundoApellido'];
        $data['edad']=$_POST['edad'];        
               
        


		$lista=$this->user_model->agregaruser($data);
		/*redirect('crearUsuario/index','refresh');¨*/
		redirect('user/index','refresh');
	
	}	

	public function eliminarbd()
	{
		//$idusuario=$_POST['idusuario'];
		$iduser=$_POST['iduser'];
		//$this->user_model->eliminarusuario($idusuario);
		$this->user_model->eliminarusuario($iduser);
		redirect('user/index','refresh');

	}

	public function modificar()
	{
		//$idusuario=$_POST['idusuario'];
		$iduser=$_POST['iduser'];		
		$data['infouser']=$this->user_model->recuperaruser($iduser);
		$this->load->view('inc/header1');
		$this->load->view('formulariomodificaruser',$data);
		$this->load->view('inc/footer1');
	}

	public function modificarbd()
	{
		//$idusuario=$_POST['idusuario'];
		$iduser=$_POST['iduser'];
		$data['nombres']=$_POST['nombres'];        
        $data['primerApellido']=$_POST['primerApellido'];        
        $data['segundoApellido']=$_POST['segundoApellido'];        
        $data['edad']=$_POST['edad'];
        
        $nombrearchivo=$iduser.".png";

        $config['upload_path']='./uploads/';
        $config['file_name']=$nombrearchivo;
        $direccion="./uploads/".$nombrearchivo;
        if(file_exists($direccion))
        {
           unlink($direccion);    
        }
        

        $config['allowed_types']='png';
        $this->load->library('upload',$config);


        if(!$this->upload->do_upload())
        {
           $data['error']=$this->upload->display_errors();
        }else{
           $data['imagen']=$nombrearchivo;
        } 
        
        $this->user_model->modificaruser($iduser,$data);
        $this->upload->data();
        redirect('user/index','refresh');

	}


	public function deshabilitarbd()
	{
		$iduser=$_POST['iduser'];
		$data['habilitado']='0';        
        
        $this->user_model->modificaruser($iduser,$data);
        redirect('user/index','refresh');

	}

	public function deshabilitados()
	{
		$listausers=$this->user_model->listausersdeshabilitados();
		$data['user']=$listausers;


		$this->load->view('inc/header1');
		$this->load->view('listadeshabilitadosusers',$data);
		$this->load->view('inc/footer1');		
	}

	public function habilitarbd()
	{
		$iduser=$_POST['iduser'];
		$data['habilitado']='1';        
        

        $this->user_model->modificaruser($iduser,$data);
        redirect('user/deshabilitados','refresh');

	}

	


	

}
