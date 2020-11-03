<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('login_model');
	}
	public function index(){

		if($this->session->userdata("login")){
			redirect(base_url().'home');
		}else{
			$data = array(
				'page_title' => 'Clínica USAM',
				'view' => 'login_view',
				'icon' => '<i class="fad fa-hospital-user"></i>',
				'data_view' => array()
			);
			$this->load->view('template/main_view', $data);
		}		
	}

	public function auth(){
		// Reglas de validacion
		$this->form_validation->set_rules('usuario','usuario','required|trim');
		$this->form_validation->set_rules('clave','clave','required|trim');
		// Delimitadores
		$this->form_validation->set_error_delimiters('<div class="small alert alert-danger" role="alert">','</div>');
		// Mensaje
		$this->form_validation->set_message('required','Debe llenar el campo %s para continuar');
		$usuario = $this->input->post('usuario');
		$contrasena = $this->input->post('clave');
		$res = $this->login_model->login($usuario,$contrasena);

		if($this->form_validation->run() === FALSE){
			$data = array(
				'page_title' => 'Clínica USAM',
				'view' => 'login_view',
				'icon' => '<i class="fad fa-hospital-user"></i>',
				'data_view' => array()
			);
			$this->load->view('template/main_view', $data);
		}else{
			if(!$res){
				redirect(base_url());
			}else{
				$data = array(
					'id_usuario' => $res->id_usuario,
					'id_rol' => $res->id_rol,
					'usuario' => $res->usuario,
					'clave' => $res->contrasena,
					'login' => TRUE
				);
				$this->session->set_userdata($data);
				redirect(base_url().'home');
			}
		}		
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}