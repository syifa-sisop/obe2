<?php 

class C_data extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->my_login->check_login();
	}

	public function index()
	{
		$data['user'] = $this->M_profil->tampil_profil3()->result();
		$data['data'] = $this->M_prodi->tampil_fakultas()->result_array();
		$data['tahun'] = $this->M_matkul->tampil_ajaran_aktif()->row();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar', $data);
		$this->load->view('admin/kurikulum/v_fakultas', $data);
		$this->load->view('templates_admin/footer');
	}


	public function prodi($id_fakultas)
	{
        $data['prodi'] = $this->M_prodi->get_data($id_fakultas)->result();
        $data['user'] = $this->M_profil->tampil_profil3()->result();
        $data['tahun'] = $this->M_matkul->tampil_ajaran_aktif()->row();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar', $data);
		$this->load->view('admin/kurikulum/v_data', $data);
		$this->load->view('templates_admin/footer');
	}

	public function detail($id_jurusan)
	{
		$data['setting'] = $this->M_setting->tampil2($id_jurusan);
		$data['landasan'] = $this->M_landasan->tampil2($id_jurusan)->result();
		$data['profil'] = $this->M_setting->tampil_profil22($id_jurusan)->result();
		$data['cpl'] = $this->M_setting->tampil_cpl2($id_jurusan)->result_array();
		$data['kajian'] = $this->M_kajian->tampil2($id_jurusan)->result();
		$data['matkul'] = $this->M_matkul->tampil22($id_jurusan)->result();
		$data['dosen'] = $this->M_dosen->tampil_dosen2($id_jurusan)->result_array();
		$data['pengampu'] = $this->M_pengampu->tampil_data2($id_jurusan)->result_array();
		$data['tim'] = $this->M_tim->tampil_tim2($id_jurusan)->result_array();
		$data['user'] = $this->M_profil->tampil_profil3()->result();
		$data['tahun'] = $this->M_matkul->tampil_ajaran_aktif()->row();
		$data['skl'] = $this->M_skl->tampil2($id_jurusan)->result_array();
        $data['skl2'] = $this->M_skl->tampil2($id_jurusan)->result();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar', $data);
		$this->load->view('admin/kurikulum/v_detail', $data);
		$this->load->view('templates_admin/footer');
	}
}