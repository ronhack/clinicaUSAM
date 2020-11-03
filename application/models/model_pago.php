<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class model_pago extends CI_Model{
	
	public function get_pago(){
		$this->db->select('*');
		$this->db->from('maestro_tipo_pago');
		$pago = $this->db->get();
		return $pago->result();
	}

	public function set_pago($data){
		return($this->db->insert('maestro_tipo_pago',$data)) ? true:false;
	}

	public function obtener_act($idtipopago){
		$this->db->where('idtipopago ='.$idtipopago);
		$pago = $this->db->get('maestro_tipo_pago');
		return $pago->row();
	}

	public function actualizar($data){
		$this->db->where('idtipopago',$data['idtipopago']);
		return ($this->db->update('maestro_tipo_pago',$data)) ? true:false;
	}

	public function eliminar($idtipopago){
		$this->db->where('idtipopago',$idtipopago);
		return($this->db->delete('maestro_tipo_pago')) ? true:false;
	}
}
?>