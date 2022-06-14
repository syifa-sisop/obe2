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

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/matriks/v_fakultas', $data);
		$this->load->view('templates_admin/footer');
	}

	public function prodi($id_fakultas)
	{
        $data['prodi'] = $this->M_prodi->get_data($id_fakultas)->result();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/matriks/v_prodi', $data);
		$this->load->view('templates_admin/footer');
	}

	public function detail($id_jurusan)
	{
		
		$data['prodi'] = $this->M_prodi->getProdi($id_jurusan)->result();

		$data['profil'] = $this->M_lulusan->get_profil($id_jurusan)->result();
		$data['profil2'] = $this->M_lulusan->get_profil($id_jurusan)->result_array();
		$data['cpl'] = $this->M_lulusan->get_cpl($id_jurusan)->result();

		$data['kajian'] = $this->M_lulusan->get_kajian($id_jurusan)->result();
		$data['kajian2'] = $this->M_lulusan->get_kajian($id_jurusan)->result_array();
		$data['cpl_kajian'] = $this->M_lulusan->get_kajian2($id_jurusan)->result();

		$data['matkul'] = $this->M_matkul->tampil22($id_jurusan)->result();
        $data['matkul2'] = $this->M_matkul->tampil22($id_jurusan)->result_array();
        $data['cpl_matkul'] = $this->M_lulusan->get_cpl_matkul($id_jurusan)->result();

        $data['kajian_matkul'] = $this->M_lulusan->get_kajian_mk($id_jurusan)->result();

        $this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/matriks/v_detail', $data);
		$this->load->view('templates_admin/footer');
	}

	public function pdf_profil($id_jurusan)
    {
    	$data['profil'] = $this->M_setting->tampil_profil2($id_jurusan)->result();
    	$data['profil2'] = $this->M_setting->tampil_profil2($id_jurusan)->result_array();
    	$data['cpl'] = $this->M_lulusan->tampil_cpl2($id_jurusan)->result();

    	$data['data'] = $this->M_prodi->getProdi2($id_jurusan)->row();

    	$this->load->view('templates_admin/header');
		$this->load->view('kurikulum/matriks/v_print_profil', $data);
		$this->load->view('templates_admin/footer');
    }

    public function pdf_kajian($id_jurusan)
    {
    	$data['kajian'] = $this->M_kajian->tampil2($id_jurusan)->result();
        $data['kajian2'] = $this->M_kajian->tampil2($id_jurusan)->result_array();
        $data['cpl_kajian'] = $this->M_lulusan->tampil_kajian2($id_jurusan)->result();

    	$data['data'] = $this->M_prodi->getProdi2($id_jurusan)->row();

    	$this->load->view('templates_admin/header');
		$this->load->view('kurikulum/matriks/v_print_kajian', $data);
		$this->load->view('templates_admin/footer');
    }

    public function pdf_matkul($id_jurusan)
    {
    	$data['matkul'] = $this->M_matkul->tampil22($id_jurusan)->result();
        $data['matkul2'] = $this->M_matkul->tampil22($id_jurusan)->result_array();
        $data['cpl_matkul'] = $this->M_lulusan->tampil_matkul2($id_jurusan)->result();
        $data['cpl_matkul2'] = $this->M_lulusan->tampil_matkul2($id_jurusan)->result_array();

    	$data['data'] = $this->M_prodi->getProdi2($id_jurusan)->row();

    	$this->load->view('templates_admin/header');
		$this->load->view('kurikulum/matriks/v_print_matkul', $data);
		$this->load->view('templates_admin/footer');
    }

    public function pdf_kajianmk($id_jurusan)
    {
    	$data['kajian2'] = $this->M_kajian->tampil2($id_jurusan)->result_array();
    	$data['kajian_matkul'] = $this->M_lulusan->tampil_kajian_mk2($id_jurusan)->result();

    	$data['data'] = $this->M_prodi->getProdi2($id_jurusan)->row();

    	$this->load->view('templates_admin/header');
		$this->load->view('kurikulum/matriks/v_print_kajianmk', $data);
		$this->load->view('templates_admin/footer');
    }
}