<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class model_proveedor extends CI_Model{
	
	public function get_proveedor(){
		$this->db->select('*');
		$this->db->from('maestro_proveedor');
		$proveedor = $this->db->get();
		return $proveedor->result();
	}

	public function set_proveedor($data){
		return($this->db->insert('maestro_proveedor',$data)) ? true:false;
	}

	public function obtener_act($idproveedor){
		$this->db->where('idproveedor ='.$idproveedor);
		$proveedor = $this->db->get('maestro_proveedor');
		return $proveedor->row();
	}

	public function actualizar($data){
		$this->db->where('idproveedor',$data['idproveedor']);
		return ($this->db->update('maestro_proveedor',$data)) ? true:false;
	}

	public function eliminar($idproveedor){
		$this->db->where('idproveedor',$idproveedor);
		return($this->db->delete('maestro_proveedor')) ? true:false;
	}
}
?>