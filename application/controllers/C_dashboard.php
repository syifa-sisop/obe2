<?php 

class C_dashboard extends CI_Controller{

	public function index()
	{
		$data['tahun'] = $this->M_matkul->tampil_ajaran_aktif()->row();

		$this->load->view('templates_admin/header');
		$this->load->view('templates/sidebar', $data);
		$this->load->view('umum/v_dashboard');
		$this->load->view('templates_admin/footer');
	}


}