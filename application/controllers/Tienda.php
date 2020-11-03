<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tienda extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->model('model_tienda');
	}

	public function index()
	{
		if($this->session->userdata("id_rol") == 1){
			$data = array(
				'page_title' => 'Tienda',
				'view' => 'tienda',
				'icon' => '<i class="fal fa-cart-plus"></i>',
				'data_view' => array()
			);
			$tienda = $this->model_tienda->get_tienda();
			$data['tienda'] = $tienda;
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
				'page_title' => 'Agregar tienda',
				'view' => 'acciones/add_view',
				'icon' => '<i class="fal fa-cart-plus"></i>',
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
					'nombre' => $this->input->post('nombre'),
					'ubicacion' => $this->input->post('ubicacion'),
					'bodega' => $this->input->post('bodega')
				);

				if($this->model_tienda->set_tienda($data)){
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

	public function accion($idtienda){
		if($this->session->userdata("id_rol") == 1){
			$data = array(
				'page_title' => 'Editar tienda',
				'view' => 'acciones/act_view',
				'icon' => '<i class="fal fa-cart-plus"></i>',
				'data_view' => array()
			);

			$tienda = $this->model_tienda->obtener_act($idtienda);
			$data['tienda'] = $tienda;
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
					'idtienda' => $this->input->post('idtienda'),
					'nombre' => $this->input->post('nombre'),
					'ubicacion' => $this->input->post('ubicacion'),
					'bodega' => $this->input->post('bodega')
				);

				if($this->model_tienda->actualizar($data)){
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

	/* Eliminar tienda */
	public function borrar_ajax($id_codigo){
		$this->model_tienda->eliminar($id_codigo);
	}

}
