<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class model_producto extends CI_Model{
	
	public function get_producto(){
		$this->db->select('*');
		$this->db->from('maestro_producto');
		$producto = $this->db->get();
		return $producto->result();
	}

	public function set_producto($data){
		return($this->db->insert('maestro_producto',$data)) ? true:false;
	}

	public function obtener_act($id_codigo){
		$this->db->where('id_codigo ='.$id_codigo);
		$producto = $this->db->get('maestro_producto');
		return $producto->row();
	}

	public function actualizar($data){
		$this->db->where('id_codigo',$data['id_codigo']);
		return ($this->db->update('maestro_producto',$data)) ? true:false;
	}

	public function eliminar($id_codigo){
		$this->db->where('id_codigo',$id_codigo);
		return($this->db->delete('maestro_producto')) ? true:false;
	}
}
?>