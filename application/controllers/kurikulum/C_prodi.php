<?php 

class C_prodi extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->my_login->check_login();
	}
	public function index()
	{
		
		$data['jurusan'] = $this->M_jurusan->tampil()->result();
		$data['user'] = $this->M_profil->tampil_profil()->result();
		$data['prodi2'] = $this->M_jurusan->tampil_data()->result_array();
		$data['tahun'] = $this->M_matkul->tampil_ajaran_aktif()->row();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_kurikulum/sidebar', $data);
		$this->load->view('kurikulum/prodi/v_prodi', $data);
		$this->load->view('templates_admin/footer');
	}

	public function setting(){
		if ($this->input->post()) {
            //insert data ke database
            //memanggil model
            $data = $this->input->post();
            //memanggil model
            $this->M_prodi->insert_setting($data);
            $this->session->set_flashdata('insert_data','Setting Berhasil Dilakukan !!');
            redirect('kurikulum/C_prodi');
        }
	}
}