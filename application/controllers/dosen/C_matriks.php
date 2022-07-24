<?php 

class C_matriks extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->my_login->check_login();
	}

	public function index()
	{
		$data['setting'] = $this->M_setting->tampil();
        $data['jurusan'] = $this->M_jurusan->tampil()->result();
        $data['user'] = $this->M_profil->tampil_dosen()->result();
        $data['user2'] = $this->M_profil->tampil_dosen()->result_array();

        $data['id'] = $this->M_setting->tampil_profil()->row();
        $data['profil'] = $this->M_setting->tampil_profil()->result();
        $data['profil2'] = $this->M_setting->tampil_profil()->result_array();
		$data['profilcpl'] = $this->M_setting->tampil_profil2()->result();
        $data['cpl'] = $this->M_lulusan->tampil_cpl()->result_array();
        $data['cpl2'] = $this->M_lulusan->tampil_cpl()->result();
        $data['cpl3'] = $this->M_lulusan->tampil_cpl3()->result_array();
        $data['cpll'] = $this->M_lulusan->tampil_cpl3()->result();
        $cpll = $this->M_lulusan->tampil_cpl3()->result();
        $data['profil_cpl2'] = $this->M_lulusan->tampil()->result();
        $data['profil_cpl'] = $this->M_lulusan->tampil()->row();
        
        //$data['cpl_baru'] = $this->M_lulusan->tampil_cpl_baru()->result();

        $data['kajian'] = $this->M_kajian->tampil()->result();
        $data['kajian3'] = $this->M_kajian->tampil()->result();
        $data['kajian2'] = $this->M_kajian->tampil()->result_array();
        $data['kajiancpl'] = $this->M_kajian->tampil3()->result();
        $data['cpl_kajian'] = $this->M_lulusan->tampil_kajian()->result();

        $data['matkul'] = $this->M_matkul->tampil_matkul_baru()->result();
        $data['matkul2'] = $this->M_matkul->tampil_matkul_baru()->result_array();
        $data['cpl_matkul'] = $this->M_lulusan->tampil_matkul()->result();
        $data['cpl_matkul2'] = $this->M_lulusan->tampil_matkul()->result_array();
        $data['matkulcpl'] = $this->M_lulusan->tampil_matkul3()->result();

        $data['kajian_matkul'] = $this->M_lulusan->tampil_kajian_mk()->result();
        $data['matkulkajian'] = $this->M_lulusan->tampil_kajian_mk3()->result();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_dosen/sidebar', $data);
		$this->load->view('dosen/kurikulum/v_matriks', $data);
		$this->load->view('templates_admin/footer');
	}

    public function pdf_profil()
    {
        $data['profil'] = $this->M_setting->tampil_profil()->result();
        $data['profil2'] = $this->M_setting->tampil_profil()->result_array();
        $data['cpll'] = $this->M_lulusan->tampil_cpl3()->result();
        $data['profilcpl'] = $this->M_setting->tampil_profil2()->result();
        $data['cpl'] = $this->M_lulusan->tampil_cpl()->result();

        $data['data'] = $this->M_lulusan->profil_dosen()->row();

        $this->load->view('templates_admin/header');
        $this->load->view('kurikulum/matriks/v_print_profil', $data);
        $this->load->view('templates_admin/footer');
    }

    public function pdf_kajian()
    {
        $data['kajian'] = $this->M_kajian->tampil()->result();
        $data['kajian2'] = $this->M_kajian->tampil()->result_array();
        $data['cpl_kajian'] = $this->M_lulusan->tampil_kajian()->result();
        $data['kajiancpl'] = $this->M_kajian->tampil3()->result();

        $data['data'] = $this->M_lulusan->profil_dosen()->row();

        $this->load->view('templates_admin/header');
        $this->load->view('kurikulum/matriks/v_print_kajian', $data);
        $this->load->view('templates_admin/footer');
    }

    public function pdf_matkul()
    {
        $data['matkul'] = $this->M_matkul->tampil_matkul_baru()->result();
        $data['matkul2'] = $this->M_matkul->tampil_matkul_baru()->result_array();
        $data['cpl_matkul'] = $this->M_lulusan->tampil_matkul()->result();
        $data['cpl_matkul2'] = $this->M_lulusan->tampil_matkul()->result_array();
        $data['matkulcpl'] = $this->M_lulusan->tampil_matkul3()->result();

        $data['data'] = $this->M_lulusan->profil_dosen()->row();

        $this->load->view('templates_admin/header');
        $this->load->view('kurikulum/matriks/v_print_matkul', $data);
        $this->load->view('templates_admin/footer');
    }

    public function pdf_kajianmk()
    {
        $data['kajian2'] = $this->M_kajian->tampil()->result_array();
        $data['kajian_matkul'] = $this->M_lulusan->tampil_kajian_mk()->result();
        $data['matkulkajian'] = $this->M_lulusan->tampil_kajian_mk3()->result();

        $data['data'] = $this->M_lulusan->profil_dosen()->row();

        $this->load->view('templates_admin/header');
        $this->load->view('kurikulum/matriks/v_print_kajianmk', $data);
        $this->load->view('templates_admin/footer');
    }
}