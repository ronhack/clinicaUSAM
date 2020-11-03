<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}
	public function index(){
		$data = array(
			'page_title' => 'Clínica USAM',
			'view' => 'home_view',
			'icon' => '<i class="fad fa-hospital-user"></i>',
			'data_view' => array()
		);
		$this->load->view('template/main_view', $data);		
	}
}