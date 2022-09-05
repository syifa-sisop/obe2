<?php 

class C_matriks extends CI_Controller{
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

        $data['cpl3'] = $this->M_setting->tampil_cpl3()->result_array();
        $data['cpl2'] = $this->M_setting->tampil_cpl3()->result();
        $data['cpl4'] = $this->M_setting->tampil_cpl3()->result();

        $data['dalam'] = $this->M_mbkm->tampil_data()->result(); 
        $data['dalam2'] = $this->M_mbkm->tampil_data()->result_array(); 
        $data['cpl'] = $this->M_mbkm->tampil_cpl()->result();
        $data['dalamcpl'] = $this->M_mbkm->tampil_dalam_cpl()->result();

        $data['luar'] = $this->M_mbkm->tampil_luar()->result();
        $data['luar2'] = $this->M_mbkm->tampil_luar()->result_array();   
        $data['cpl_luar'] = $this->M_mbkm->tampil_cpl2()->result();
        $data['luarcpl'] = $this->M_mbkm->tampil_luar_cpl()->result();

        $data['non'] = $this->M_mbkm->tampil_non()->result();
        $data['non2'] = $this->M_mbkm->tampil_non()->result_array();  
        $data['cpl_non'] = $this->M_mbkm->tampil_cpl3()->result(); 
        $data['noncpl'] = $this->M_mbkm->tampil_non_cpl()->result();
        $data['tahun'] = $this->M_matkul->tampil_ajaran_aktif()->row();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_dosen/sidebar', $data);
		$this->load->view('dosen/mbkm/v_matriks', $data);
		$this->load->view('templates_admin/footer');
	}

}