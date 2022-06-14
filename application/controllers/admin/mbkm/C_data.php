<?php 
class C_data extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->my_login->check_login();
	}

	public function index()
	{
		$data['data'] = $this->M_prodi->tampil_fakultas()->result_array();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/mbkm/v_fakultas', $data);
		$this->load->view('templates_admin/footer');
	}

	public function prodi($id_fakultas)
	{
        $data['prodi'] = $this->M_prodi->get_data($id_fakultas)->result();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/mbkm/v_prodi', $data);
		$this->load->view('templates_admin/footer');
	}

	public function detail($id_jurusan)
	{
		$data['setting'] = $this->M_setting->tampil2($id_jurusan);

        $data['mbkm'] = $this->M_mbkm->tampil_data3($id_jurusan)->result();
        $data['luar'] = $this->M_mbkm->tampil_luar2($id_jurusan)->result();
        $data['non'] = $this->M_mbkm->tampil_non2($id_jurusan)->result();

        $this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/mbkm/v_data', $data);
		$this->load->view('templates_admin/footer');
	}

}