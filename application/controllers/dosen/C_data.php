<?php 

class C_data extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->my_login->check_login();
	}

	public function index()
	{
		$data['setting'] = $this->M_setting->tampil();
		$data['profil'] = $this->M_setting->tampil_profil()->result();
		$data['profil2'] = $this->M_setting->tampil_profil()->result_array();
		$data['cpl'] = $this->M_setting->tampil_cpl()->result_array();
		$data['cpl2'] = $this->M_setting->tampil_cpl()->result();
		$data['aspek'] = $this->M_setting->tampil_aspek();
		$data['aspek2'] = $this->M_setting->tampil_aspek2();

        $data['dosen'] = $this->M_dosen->tampil_dosen()->result_array();
        $data['matkul'] = $this->M_matkul->tampil2()->result();
        $data['matkul2'] = $this->M_matkul->tampil2()->result_array();
        $data['pengampu'] = $this->M_pengampu->tampil_data()->result_array();
        $data['tim'] = $this->M_tim->tampil_tim()->result_array();
        $data['landasan'] = $this->M_landasan->tampil()->result();
        $data['landasan2'] = $this->M_landasan->tampil()->result_array();

        $data['kajian'] = $this->M_kajian->tampil()->result();
        $data['kajian2'] = $this->M_kajian->tampil()->result_array();

        $data['user'] = $this->M_profil->tampil_dosen()->result();
        $data['user2'] = $this->M_profil->tampil_dosen()->result_array();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_dosen/sidebar', $data);
		$this->load->view('dosen/kurikulum/v_data', $data);
		$this->load->view('templates_admin/footer');
	}
}