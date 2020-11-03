<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('model_producto');
	}
	/* SELECT */
	public function index()
	{
		if($this->session->userdata("login")){
			$data = array(
				'page_title' => 'Productos',
				'view' => 'productos',
				'icon' => '<i class="fal fa-pills"></i>',
				'data_view' => array()
			);
			$producto = $this->model_producto->get_producto();
			$data['producto'] = $producto;
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
		if($this->session->userdata("login")){
			$data = array(
				'page_title' => 'Agregar producto',
				'view' => 'acciones/add_view',
				'icon' => '<i class="fal fa-pills"></i>',
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
		if($this->session->userdata("login")){
			if($this->input->is_ajax_request()){
				$data = array(
					'nombre' => $this->input->post('nombre'),
					'precio_base' => $this->input->post('precio_base'),
					'costo' => $this->input->post('costo'),
					'disponible_website' => $this->input->post('disponible_website')
				);

				if($this->model_producto->set_producto($data)){
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

	public function accion($id_codigo){
		if($this->session->userdata("login")){
			$data = array(
				'page_title' => 'Editar producto',
				'view' => 'acciones/act_view',
				'icon' => '<i class="fal fa-pills"></i>',
				'data_view' => array()
			);

			$producto = $this->model_producto->obtener_act($id_codigo);
			$data['producto'] = $producto;
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
		if($this->session->userdata("login")){
			if($this->input->is_ajax_request()){
				$data = array(
					'id_codigo' => $this->input->post('id_codigo'),
					'nombre' => $this->input->post('nombre'),
					'precio_base' => $this->input->post('precio_base'),
					'costo' => $this->input->post('costo'),
					'disponible_website' => $this->input->post('disponible_website')
				);

				if($this->model_producto->actualizar($data)){
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

	/* Eliminar productos */
	public function borrar_ajax($id_codigo){
		$this->model_producto->eliminar($id_codigo);
	}
}
