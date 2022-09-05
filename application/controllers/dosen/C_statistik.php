<?php 
class C_statistik extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->my_login->check_login();
	}

	public function index()
	{
		$data['jurusan'] = $this->M_jurusan->tampil()->result();
		$data['user'] = $this->M_profil->tampil_dosen()->result();
		$data['user2'] = $this->M_profil->tampil_dosen()->result_array();
		$data['prodi2'] = $this->M_jurusan->tampil_data()->result_array();
		$data['matkul'] = $this->M_matkul->tampil3()->result();
		$data['setting'] = $this->M_setting->tampil();

        $data['nilai_cpl'] = $this->M_nilai->tampil_data()->result();
        $data['nilai_cpl2'] = $this->M_nilai->tampil_data()->result_array();
        $data['cpl'] = $this->M_nilai->tampil_cpl()->result();
        $data['cpl2'] = $this->M_nilai->tampil_cpl()->result_array();
        $data['total'] = $this->M_nilai->tampil_total()->result();
        $data['tahun'] = $this->M_matkul->tampil_ajaran_aktif()->row();

        //$data['ambil_data'] = $this->M_nilai->ambil_data($id_cpl)->result_array();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_dosen/sidebar', $data);
		$this->load->view('dosen/statistik/v_statistik', $data);
		$this->load->view('templates_admin/footer');
	}
}