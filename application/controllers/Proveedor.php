<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proveedor extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('model_proveedor');
	}

	public function index()
	{
		if($this->session->userdata("id_rol") == 1){			
			$data = array(
				'page_title' => 'Proveedores',
				'view' => 'proveedores',
				'icon' => '<i class="fal fa-user-friends"></i>',
				'data_view' => array()
			);
			$proveedor = $this->model_proveedor->get_proveedor();
			$data['proveedor'] = $proveedor;
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
				'page_title' => 'Agregar proveedor',
				'view' => 'acciones/add_view',
				'icon' => '<i class="fal fa-user-friends"></i>',
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
					'direccion' => $this->input->post('direccion'),
					'telefono' => $this->input->post('telefono')
				);

				if($this->model_proveedor->set_proveedor($data)){
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

	public function accion($idproveedor){
		if($this->session->userdata("id_rol") == 1){
			$data = array(
				'page_title' => 'Editar proveedor',
				'view' => 'acciones/act_view',
				'icon' => '<i class="fal fa-user-friends"></i>',
				'data_view' => array()
			);

			$proveedor = $this->model_proveedor->obtener_act($idproveedor);
			$data['proveedor'] = $proveedor;
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
					'idproveedor' => $this->input->post('idproveedor'),
					'nombre' => $this->input->post('nombre'),
					'direccion' => $this->input->post('direccion'),
					'telefono' => $this->input->post('telefono')
				);

				if($this->model_proveedor->actualizar($data)){
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

	/* Eliminar usuarios */
	public function borrar_ajax($id_codigo){
		$this->model_proveedor->eliminar($id_codigo);
	}

}
