<?php 

class C_dashboard extends CI_Controller{

	public function index()
	{
		$data['user'] = $this->M_profil->tampil_mhs()->result();
		$data['prodi2'] = $this->M_jurusan->tampil_data()->result_array();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_mahasiswa/sidebar', $data);
		$this->load->view('mahasiswa/v_dashboard');
		$this->load->view('templates_admin/footer');
	}


}