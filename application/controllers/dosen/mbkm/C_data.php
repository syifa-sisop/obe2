<?php 

class C_data extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->my_login->check_login();
	}
	

	public function index()
	{
		$data['jurusan'] = $this->M_jurusan->tampil()->result();
        $data['user'] = $this->M_profil->tampil_dosen()->result();
        $data['prodi2'] = $this->M_jurusan->tampil_data()->result_array();
        $data['matkul'] = $this->M_matkul->tampil3()->result();
        $data['setting'] = $this->M_setting->tampil();

        $data['mbkm'] = $this->M_mbkm->tampil_data()->result();
        $data['luar'] = $this->M_mbkm->tampil_luar()->result();
        $data['non'] = $this->M_mbkm->tampil_non()->result();

        $data['mbkm2'] = $this->M_mbkm->tampil_data2()->result_array();
        $data['luar2'] = $this->M_mbkm->tampil_luar()->result_array();
        $data['non2'] = $this->M_mbkm->tampil_non()->result_array();
        $data['tahun'] = $this->M_matkul->tampil_ajaran_aktif()->row();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_dosen/sidebar', $data);
		$this->load->view('dosen/mbkm/v_data', $data);
		$this->load->view('templates_admin/footer');
	}

}