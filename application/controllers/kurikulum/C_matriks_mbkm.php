<?php 
class C_matriks_mbkm extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->my_login->check_login();
	}

	public function index()
	{
		$data['setting'] = $this->M_setting->tampil();
        $data['user'] = $this->M_profil->tampil_profil()->result();
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
		$this->load->view('templates_kurikulum/sidebar', $data);
		$this->load->view('kurikulum/mbkm/v_matriks', $data);
		$this->load->view('templates_admin/footer');
	}

    public function insert()
    {
        if($this->input->post()){
                $id_mbkm = $this->input->post('id_mbkm');
                $id_jurusan = $this->input->post('id_jurusan');
                $id_user = $this->input->post('id_user');
                $categories = $this->input->post('id_cpl');

                //$user_id = $this->user_model->registerUser($data);
                foreach ($categories as $key => $id_cpl) {
                    $this->M_mbkm->insert_cpl($id_mbkm,$id_jurusan,$id_user,$id_cpl);
                }redirect('kurikulum/C_matriks_mbkm');
        
            }
    }

    public function insert2()
    {
        if($this->input->post()){
                $id_mbkm = $this->input->post('id_mbkm');
                $id_jurusan = $this->input->post('id_jurusan');
                $id_user = $this->input->post('id_user');
                $categories = $this->input->post('id_cpl');

                //$user_id = $this->user_model->registerUser($data);
                foreach ($categories as $key => $id_cpl) {
                    $this->M_mbkm->insert_cpl2($id_mbkm,$id_jurusan,$id_user,$id_cpl);
                }redirect('kurikulum/C_matriks_mbkm');
        
            }
    }

    public function insert3()
    {
        if($this->input->post()){
                $id_mbkm = $this->input->post('id_mbkm');
                $id_jurusan = $this->input->post('id_jurusan');
                $id_user = $this->input->post('id_user');
                $categories = $this->input->post('id_cpl');

                //$user_id = $this->user_model->registerUser($data);
                foreach ($categories as $key => $id_cpl) {
                    $this->M_mbkm->insert_cpl3($id_mbkm,$id_jurusan,$id_user,$id_cpl);
                }redirect('kurikulum/C_matriks_mbkm');
        
            }
    }
    public function delete()
    {
        $id_mbkm = $this->input->post('id_mbkm');
        $this->M_mbkm->hapus_cpl($id_mbkm);
        $this->session->set_flashdata('hapus_data','Data Berhasil Dihapus !!');
        redirect('kurikulum/C_matriks_mbkm');
    }

    public function delete2()
    {
        $id_mbkm = $this->input->post('id_mbkm');
        $this->M_mbkm->hapus_cpl2($id_mbkm);
        $this->session->set_flashdata('hapus_data','Data Berhasil Dihapus !!');
        redirect('kurikulum/C_matriks_mbkm');
    }

    public function delete3()
    {
        $id_mbkm = $this->input->post('id_mbkm');
        $this->M_mbkm->hapus_cpl3($id_mbkm);
        $this->session->set_flashdata('hapus_data','Data Berhasil Dihapus !!');
        redirect('kurikulum/C_matriks_mbkm');
    }
}