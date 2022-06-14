<?php 

class C_tim extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->my_login->check_login();
        $this->load->model('model_select');
	}


	public function index()
	{
		//$data['tim'] = $this->M_tim->tampil()->result_array();
		//$data['tim2'] = $this->M_tim->tampil()->result();
        //$data['dosen'] = $this->M_dosen->tampil()->result_array();
        $data['prodi'] = $this->M_prodi->tampil_prodi()->result();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/tim/v_prodi', $data);
		$this->load->view('templates_admin/footer');
	}

    public function olah_data($id_jurusan)
    {
        $data['tim'] = $this->M_tim->tampil($id_jurusan)->result_array();
        $data['tim2'] = $this->M_tim->tampil($id_jurusan)->result();
        $data['dosen'] = $this->M_dosen->tampil($id_jurusan)->result_array();

        $data['data2'] = $this->M_prodi->getProdi($id_jurusan)->row();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/tim/v_tim', $data);
        $this->load->view('templates_admin/footer');
    }

    public function get_email()
    {
        $id = $this->input->post('id');
        $data = $this->M_dosen->get_email($id);
        echo json_encode($data);
    }

	public function insert($id_jurusan)
    {
        if ($this->input->post()) {
            //insert data ke database
            //memanggil model
            $data = $this->input->post();
            //memanggil model
            $this->M_tim->insert_tim($data);
            $this->session->set_flashdata('insert_data','Data Berhasil Ditambahkan !!');
            redirect('admin/C_tim/olah_data/'.$id_jurusan);
        }
        else{
        $data['prodi']=$this->model_select->prodi();
        $data['data2'] = $this->M_prodi->getProdi($id_jurusan)->row();
        $this->load->view('admin/tim/v_insert', $data);
        }
    }
    
    public function delete($id_profil, $id_jurusan)
    {
        $where = array('id_profil'=> $id_profil);
        $this->M_prodi->hapus_data($where,'profil');
        $this->session->set_flashdata('hapus_data','Data Berhasil Dihapus !!');
        redirect('admin/C_tim/olah_data/'.$id_jurusan);
    }
}