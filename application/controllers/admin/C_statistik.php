<?php 
class C_statistik extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->my_login->check_login();
	}

	public function index()
	{
		$data['data'] = $this->M_prodi->tampil_fakultas()->result_array();
		$data['tahun'] = $this->M_matkul->tampil_ajaran_aktif()->row();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar', $data);
		$this->load->view('admin/statistik/v_fakultas', $data);
		$this->load->view('templates_admin/footer');
	}

	public function prodi($id_fakultas)
	{
        $data['prodi'] = $this->M_prodi->get_data($id_fakultas)->result();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/statistik/v_prodi', $data);
		$this->load->view('templates_admin/footer');
	}

	public function detail($id_jurusan)
	{
		$data['setting'] = $this->M_setting->tampil2($id_jurusan);

        $data['nilai_cpl'] = $this->M_nilai->tampil_data3($id_jurusan)->result();
        $data['nilai_cpl2'] = $this->M_nilai->tampil_data3($id_jurusan)->result_array();
        $data['cpl'] = $this->M_nilai->tampil_cpl2($id_jurusan)->result();
        $data['cpl2'] = $this->M_nilai->tampil_cpl2($id_jurusan)->result_array();
        $data['total'] = $this->M_nilai->tampil_total2($id_jurusan)->result();

        $this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/statistik/v_statistik', $data);
		$this->load->view('templates_admin/footer');
	}
}