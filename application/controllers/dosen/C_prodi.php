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
		$data['user'] = $this->M_profil->tampil_dosen()->result();
		$data['user2'] = $this->M_profil->tampil_dosen()->result_array();
		$data['prodi2'] = $this->M_jurusan->tampil_data()->result_array();
		//$data['matkul'] = $this->M_matkul->tampil3()->result_array();
		$data['matkul2'] = $this->M_matkul->tampil3()->result();
		$data['matkul'] = $this->M_matkul->tampil33()->result();
		$data['tahun'] = $this->M_matkul->tampil_ajaran_aktif()->row();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_dosen/sidebar', $data);
		$this->load->view('dosen/prodi/v_prodi', $data);
		$this->load->view('templates_admin/footer');
	}

	public function setting(){
		if ($this->input->post()) {
            //insert data ke database
            //memanggil model
            $data = $this->input->post();
            //memanggil model
            $this->M_matkul->setting_dosen($data);
            $this->session->set_flashdata('insert_data','Setting Berhasil Dilakukan !!');
            redirect('dosen/C_prodi');
        }
	}
	public function ambil_data($id_matkul, $id_pengampu){
			
		$data['data'] = $this->M_matkul->getDataByID($id_matkul)->row();
		$data['abcd'] = $this->M_matkul->get_spesific($id_matkul, $id_pengampu)->result();
		$data['tahun'] = $this->M_matkul->tampil_ajaran_aktif()->row();


		$data['jurusan'] = $this->M_jurusan->tampil()->result();
		$data['user'] = $this->M_profil->tampil_dosen()->result();
		$data['prodi2'] = $this->M_jurusan->tampil_data()->result_array();
		$data['matkul'] = $this->M_matkul->tampil3()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_dosen/sidebar2', $data);
		$this->load->view('dosen/prodi/v_prodi', $data);
		$this->load->view('templates_admin/footer');
	}
}