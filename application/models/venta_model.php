<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class venta_model extends CI_Model {

    public function porId($idventa){
        $venta = new StdClass();
        $venta->detalles = $this->detalleDeVenta($idventa);
        $venta->productos = $this->productosVendidosDeUnaVenta($idventa);
        return $venta;
    }

	
	public function detalleventa($idventa)
	{		
        $this->db->select("venta.idventa, venta.fecha, sum(detalle.cantidad * detalle.precio) as total");
        $this->db->from("venta");
        $this->db->join("detalle", "detalle.idventa = venta.idventa");
        $this->db->where("detalle.idventa", $idventa);
        $this->db->group_by("venta.idventa");    		
		return $this->db->get();		
		
	}

	private function productosVendidosDeUnaVenta($idventa){        
        $this->db->select("producto.descripcion, detalle.precio, detalle.cantidad");
        $this->db->from("producto");
        $this->db->join("detalle", "detalle.idproducto = productos.idproducto");
        $this->db->where("detalle.idventa", $idVenta);
        return $this->db->get();        
    }

    public function todas(){        
        $this->db->select("venta.idVenta, venta.fecha, sum(detalle.cantidad * detalle.precio) as total");
        $this->db->from("venta");
        $this->db->join("detalle", "detalle.idventa = venta.idventa");
        $this->db->group_by("ventas.idventa");        
        return $this->db->get();  
    }

     public function eliminar($idventa){
     	$this->db->where('idventa',$idventa);
     	$this->db->delete('venta');        
    }
    
    public function nueva($productosVendidos){
        # Primero registramos la venta
        $detalleDeVenta = array("fecha" => date("Y-m-d H:i:s"));
        $this->db->insert("venta", $detalleDeVenta);

        # Ahora tomamos su ID
        # Ver: https://parzibyte.me/blog/2018/03/20/ultimo-id-insertado-codeigniter/
        $idventa = $this->db->insert_id();

        # Recorrer el carrito
        foreach($productosVendidos as $producto){
            # El producto que insertamos es diferente al del carrito, sólo necesitamos algunas cosas:
            $detalleDeProductoVendido = array(
                "idproducto" => $producto->id,
                "cantidad" => $producto->cantidad,
                "precio" => $producto->precioVenta,
                "idventa" => $idVenta,
            );
            $this->db->insert("detalle", $detalleDeProductoVendido);
        }
        return true;
    }

	public function agregarproducto($data)
	{
		$this->db->insert('producto',$data);		
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
