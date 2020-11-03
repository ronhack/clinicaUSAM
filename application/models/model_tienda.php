<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class model_tienda extends CI_Model{
	
	public function get_tienda(){
		$this->db->select('*');
		$this->db->from('maestro_tienda');
		$tienda = $this->db->get();
		return $tienda->result();
	}

	public function set_tienda($data){
		return($this->db->insert('maestro_tienda',$data)) ? true:false;
	}

	public function obtener_act($idtienda){
		$this->db->where('idtienda ='.$idtienda);
		$tienda = $this->db->get('maestro_tienda');
		return $tienda->row();
	}

	public function actualizar($data){
		$this->db->where('idtienda',$data['idtienda']);
		return ($this->db->update('maestro_tienda',$data)) ? true:false;
	}

	public function eliminar($idtienda){
		$this->db->where('idtienda',$idtienda);
		return($this->db->delete('maestro_tienda')) ? true:false;
	}
}
?>