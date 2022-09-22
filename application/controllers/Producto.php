<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto extends CI_Controller {

	
	public function index()
	{
		$listaproductos=$this->producto_model->listaproductos();
		$data['producto']=$listaproductos;


		$this->load->view('inc/header1');
		$this->load->view('listaproductos',$data);
		$this->load->view('inc/footer1');		
	}

	public function index2()
	{
		$listaproductos=$this->producto_model->listaproductos();
		$data['producto']=$listaproductos;


		$this->load->view('inc/header2');
		$this->load->view('listaproductos2',$data);
		$this->load->view('inc/footer2');		
	}

	
	public function guest()
	{
		$this->load->view('inc/header');
		$this->load->view('panelguest');
		$this->load->view('inc/footer');		
	}

	public function agregar()
	{
		
		$this->load->view('inc/header1');
		$this->load->view('formularioproducto');
		$this->load->view('inc/footer1');		
	}

	public function agregarbd()
	{
        $data['nombre']=$_POST['nombre'];        
        $data['precio']=$_POST['precio'];        
        $data['stock']=$_POST['stock'];       
     


		$lista=$this->producto_model->agregarproducto($data);
		redirect('producto/index','refresh');
	
	}

	public function eliminarbd()
	{
		$idproducto=$_POST['idproducto'];
		$this->producto_model->eliminarproducto($idproducto);
		redirect('producto/index','refresh');

	}


	public function modificar()
	{
		$idproducto=$_POST['idproducto'];
		$data['infoproducto']=$this->producto_model->recuperarproducto($idproducto);
		$this->load->view('inc/header1');
		$this->load->view('formulariomodificarproducto',$data);
		$this->load->view('inc/footer1');
	}

	public function modificarbd()
	{
		$idproducto=$_POST['idproducto'];

		$data['nombre']=$_POST['nombre'];        
        $data['precio']=$_POST['precio'];        
        $data['stock']=$_POST['stock'];        
        
        $nombrearchivo=$idproducto.".png";

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


        $this->producto_model->modificarproducto($idproducto,$data);
        $this->upload->data();
        redirect('producto/index','refresh');

	}

	public function deshabilitarbd()
	{
		$idproducto=$_POST['idproducto'];
		$data['habilitado']='0';        
        
        $this->producto_model->modificarproducto($idproducto,$data);
        redirect('producto/index','refresh');

	}

	public function deshabilitados()
	{
		$listaproductos=$this->producto_model->listaproductosdeshabilitados();
		$data['producto']=$listaproductos;


		$this->load->view('inc/header1');
		$this->load->view('listadeshabilitadosproductos',$data);
		$this->load->view('inc/footer1');		
	}

	public function habilitarbd()
	{
		$idproducto=$_POST['idproducto'];
		$data['habilitado']='1';        
        

        $this->producto_model->modificarproducto($idproducto,$data);
        redirect('producto/deshabilitados','refresh');

	}

	public function listapdf()
	{
		$listaproductos=$this->producto_model->listaproductos();
		$listaproductos=$listaproductos->result();

		$this->pdf=new Pdf();
		$this->pdf->AddPage();
		$this->pdf->AliasNbPages();
		$this->pdf->SetTitle("Lista de productos");
		$this->pdf->SetLeftMargin(15);
		$this->pdf->SetRightMargin(15);
		$this->pdf->SetFillColor(210,210,210);
		$this->pdf->SetFont('Arial','B',11);
		$this->pdf->Cell(30);
		$this->pdf->Cell(120,10,'LISTA DE PRODUCTOS',0,0,'C',1);
		$this->pdf->Ln(20);



		$this->pdf->Cell(7,5,'No.','TBLR',0,'L',1);
		$this->pdf->Cell(90,5,'Nombre producto','TBLR',0,'L',1);
		$this->pdf->Cell(40,5,'Precio unitario','TBLR',0,'L',1);
		$this->pdf->Cell(40,5,'Stock disponible','TBLR',0,'L',1);
		$this->pdf->Ln(5);

		$num=1;
		foreach ($lista as $row) {
			$nombre=$row->nombre;
			$precio=$row->precio;
			$stock=$row->stock;

			$this->pdf->Cell(7,5,$num,'TBLR',0,'L',0);
			$this->pdf->Cell(90,5,$nombre,'TBLR',0,'L',0);
			$this->pdf->Cell(40,5,$precio,'TBLR',0,'L',0);
			$this->pdf->Cell(40,5,$stock,'TBLR',0,'L',0);
			$this->pdf->Ln(5);
			$num++;
		}

		$this->pdf->Output("listaproductos.pdf",'I');


	}

	public function vender()
	{
		$data['infoventas']=$this->venta_model1->listaVentas();

		$this->load->view('header2');
		$this->load->view('formulariovender',$data);
		$this->load->view('footer2');

	}



}
