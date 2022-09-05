<?php 

class C_dashboard extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->my_login->check_login();
	}


	public function index()
	{
		$data['user'] = $this->M_profil->tampil_profil()->result();
		$data['prodi2'] = $this->M_jurusan->tampil_data()->result_array();
		$data['tahun'] = $this->M_matkul->tampil_ajaran_aktif()->row();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_kurikulum/sidebar', $data);
		$this->load->view('kurikulum/prodi/v_prodi', $data);
		$this->load->view('templates_admin/footer');
	}


}