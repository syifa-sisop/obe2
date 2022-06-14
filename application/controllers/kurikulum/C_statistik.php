<?php 

class C_statistik extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->my_login->check_login();
	}

	public function index()
	{
		$data['setting'] = $this->M_setting->tampil();
        $data['user'] = $this->M_profil->tampil_profil()->result();

        $data['nilai_cpl'] = $this->M_nilai->tampil_data()->result();
        $data['nilai_cpl2'] = $this->M_nilai->tampil_data()->result_array();
        $data['cpl'] = $this->M_nilai->tampil_cpl()->result();
        $data['cpl2'] = $this->M_nilai->tampil_cpl()->result_array();
        $data['total'] = $this->M_nilai->tampil_total()->result();

        //$data['ambil_data'] = $this->M_nilai->ambil_data($id_cpl)->result_array();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_kurikulum/sidebar', $data);
		$this->load->view('kurikulum/statistik/v_statistik', $data);
		$this->load->view('templates_admin/footer');
	}

	public function ambil_data($id_cpl)
	{
		$data['setting'] = $this->M_setting->tampil();
        $data['user'] = $this->M_profil->tampil_profil()->result();

		$data['data'] = $this->M_nilai->ambil_data($id_cpl)->row();
		$data['ambil_data'] = $this->M_nilai->ambil_data($id_cpl)->result();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_kurikulum/sidebar', $data);
		$this->load->view('kurikulum/statistik/v_hitung', $data);
		$this->load->view('templates_admin/footer');
	}

	public function hitung_cpl($id_cpl)
	{
		if ($this->input->post()) {
            //insert data ke database
            //memanggil model
            $data = $this->input->post();
            //memanggil model
            $this->M_nilai->insert_total_cpl2($data);
            $this->session->set_flashdata('insert_data','Data Berhasil Ditambahkan !!');
            redirect('kurikulum/C_statistik/index/');
        }
	}
}