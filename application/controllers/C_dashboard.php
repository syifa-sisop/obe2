<?php 

class C_dashboard extends CI_Controller{

	public function index()
	{

		$this->load->view('templates_admin/header');
		$this->load->view('templates/sidebar');
		$this->load->view('umum/v_dashboard');
		$this->load->view('templates_admin/footer');
	}


}