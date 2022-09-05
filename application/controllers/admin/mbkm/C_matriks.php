<?php 
class C_matriks extends CI_Controller{
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
		$this->load->view('admin/mbkm/v_fakultas2', $data);
		$this->load->view('templates_admin/footer');
	}

	public function prodi($id_fakultas)
	{
        $data['prodi'] = $this->M_prodi->get_data($id_fakultas)->result();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/mbkm/v_prodi2', $data);
		$this->load->view('templates_admin/footer');
	}

	public function detail($id_jurusan)
	{
		$data['setting'] = $this->M_setting->tampil2($id_jurusan);

        $data['cpl3'] = $this->M_setting->tampil_cpl2($id_jurusan)->result_array();
        $data['cpl2'] = $this->M_setting->tampil_cpl2($id_jurusan)->result();
        $data['cpl4'] = $this->M_setting->tampil_cpl2($id_jurusan)->result();

        $data['dalam'] = $this->M_mbkm->tampil_data3($id_jurusan)->result(); 
        $data['dalam2'] = $this->M_mbkm->tampil_data3($id_jurusan)->result_array(); 
        $data['cpl'] = $this->M_mbkm->tampil_cpl_jurusan($id_jurusan)->result();
        $data['dalamcpl'] = $this->M_mbkm->tampil_dalam_cpl2($id_jurusan)->result();

        $data['luar'] = $this->M_mbkm->tampil_luar2($id_jurusan)->result();
        $data['luar2'] = $this->M_mbkm->tampil_luar2($id_jurusan)->result_array();   
        $data['cpl_luar'] = $this->M_mbkm->tampil_cpl2_jurusan($id_jurusan)->result();
        $data['luarcpl'] = $this->M_mbkm->tampil_luar_cpl2($id_jurusan)->result();

        $data['non'] = $this->M_mbkm->tampil_non2($id_jurusan)->result();
        $data['non2'] = $this->M_mbkm->tampil_non2($id_jurusan)->result_array();  
        $data['cpl_non'] = $this->M_mbkm->tampil_cpl3_jurusan($id_jurusan)->result(); 
        $data['noncpl'] = $this->M_mbkm->tampil_non_cpl2($id_jurusan)->result();

        $this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/mbkm/v_matriks', $data);
		$this->load->view('templates_admin/footer');
	}
}