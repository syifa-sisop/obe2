<?php 

class C_dashboard extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->my_login->check_login();
	}


	public function index()
	{
		$data['user'] = $this->M_profil->tampil_dosen()->result();
		$data['tahun'] = $this->M_matkul->tampil_ajaran_aktif()->row();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_dosen/sidebar', $data);
		$this->load->view('dosen/v_dashboard');
		$this->load->view('templates_admin/footer');
	}


}