<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model{

	public function login($usuario,$contrasena){
		$this->db->where("usuario",$usuario);
		$this->db->where("clave",$contrasena);

		$resultados = $this->db->get("usuario");
		if($resultados->num_rows() > 0){
			return $resultados->row();
		}else{
			return false;
		}
	}
}