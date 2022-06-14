<?php 

class C_nilai extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->my_login->check_login();
	}
	public function index()
	{

		$data['user'] = $this->M_profil->tampil_mhs()->result();
		$data['prodi2'] = $this->M_jurusan->tampil_data()->result_array();

		$data['matkul'] = $this->M_pengampu->tampil_matkul_mhs()->result_array();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_mahasiswa/sidebar', $data);
		$this->load->view('mahasiswa/nilai/v_nilai', $data);
		$this->load->view('templates_admin/footer');
	}

	public function detail($id_matkul, $id_user)
	{

		$data['user'] = $this->M_profil->tampil_mhs()->result();
		$data['prodi2'] = $this->M_jurusan->tampil_data()->result_array();

		$data['matkul'] = $this->M_pengampu->tampil_matkul_mhs()->result_array();

		$data['evaluasi2'] = $this->M_evaluasi->get_spesific($id_user, $id_matkul)->result();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_mahasiswa/sidebar', $data);
		$this->load->view('mahasiswa/nilai/v_detail', $data);
		$this->load->view('templates_admin/footer');
	}
}