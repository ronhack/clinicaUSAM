<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pago extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('model_pago');
	}

	public function index()
	{
		if($this->session->userdata("id_rol") == 1){
			$data = array(
				'page_title' => 'Método de Pago',
				'view' => 'pago',
				'icon' => '<i class="fal fa-credit-card"></i>',
				'data_view' => array()
			);
			$pago = $this->model_pago->get_pago();
			$data['pago'] = $pago;
			$this->load->view('template/main_view',$data);
		}else{
			$data = array(
				'page_title' => 'Clínica USAM',
				'view' => 'home_view',
				'icon' => '<i class="fad fa-hospital-user"></i>',
				'data_view' => array()
			);
			$this->load->view('template/main_view', $data);
		}
	}

	/* ACCIONES */
	public function agregar_accion(){
		if($this->session->userdata("id_rol") == 1){
			$data = array(
				'page_title' => 'Agregar pago',
				'view' => 'acciones/add_view',
				'icon' => '<i class="fal fa-credit-card"></i>',
				'data_view' => array()
			);
			$this->load->view('template/main_view',$data);
		}else{
			$data = array(
				'page_title' => 'Clínica USAM',
				'view' => 'home_view',
				'icon' => '<i class="fad fa-hospital-user"></i>',
				'data_view' => array()
			);
			$this->load->view('template/main_view', $data);
		}
		
	}

	public function agregar(){
		if($this->session->userdata("id_rol") == 1){
			if($this->input->is_ajax_request()){
				$data = array(
					'descripcion' => $this->input->post('descripcion')
				);

				if($this->model_pago->set_pago($data)){
					echo json_encode(array('success' => 1));
				}else{
					echo json_encode(array('success' => 0));
				}
			}else{
				echo 'No se puede agregar el registro';
			}
		}else{
			$data = array(
				'page_title' => 'Clínica USAM',
				'view' => 'home_view',
				'icon' => '<i class="fad fa-hospital-user"></i>',
				'data_view' => array()
			);
			$this->load->view('template/main_view', $data);
		}
		
	}

	public function accion($idtipopago){
		if($this->session->userdata("id_rol") == 1){
			$data = array(
				'page_title' => 'Editar pago',
				'view' => 'acciones/act_view',
				'icon' => '<i class="fal fa-credit-card"></i>',
				'data_view' => array()
			);

			$pago = $this->model_pago->obtener_act($idtipopago);
			$data['pago'] = $pago;
			$this->load->view('template/main_view',$data);
		}else{
			$data = array(
				'page_title' => 'Clínica USAM',
				'view' => 'home_view',
				'icon' => '<i class="fad fa-hospital-user"></i>',
				'data_view' => array()
			);
			$this->load->view('template/main_view', $data);
		}
		
	}

	public function editar(){
		if($this->session->userdata("id_rol") == 1){
			if($this->input->is_ajax_request()){
				$data = array(
					'idtipopago' => $this->input->post('idtipopago'),
					'descripcion' => $this->input->post('descripcion')
				);

				if($this->model_pago->actualizar($data)){
					echo json_encode(array('success' => 1));
				}else{
					echo json_encode(array('success' => 0));
				}
			}else{
				echo 'No se pudo acceder';
			}
		}else{
			$data = array(
				'page_title' => 'Clínica USAM',
				'view' => 'home_view',
				'icon' => '<i class="fad fa-hospital-user"></i>',
				'data_view' => array()
			);
			$this->load->view('template/main_view', $data);
		}
		
	}

	/* Eliminar metodos de pago */
	public function borrar_ajax($id_codigo){
		$this->model_pago->eliminar($id_codigo);
	}

}
