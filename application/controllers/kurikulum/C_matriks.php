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
        $data['user'] = $this->M_profil->tampil_profil()->result();

        $data['id'] = $this->M_setting->tampil_profil()->row();
        $data['profil'] = $this->M_setting->tampil_profil()->result();
        $data['profil2'] = $this->M_setting->tampil_profil()->result_array();
		$data['profilcpl'] = $this->M_setting->tampil_profil2()->result();
        $data['cpl'] = $this->M_lulusan->tampil_cpl()->result_array();
        $data['cpl2'] = $this->M_lulusan->tampil_cpl()->result();
        $data['skl'] = $this->M_lulusan->tampil_skl()->result();
        $data['skl2'] = $this->M_lulusan->tampil_skl()->result_array();
        $data['cpl3'] = $this->M_lulusan->tampil_cpl3()->result_array();
        $data['cpll'] = $this->M_lulusan->tampil_cpl3()->result();
        $cpll = $this->M_lulusan->tampil_cpl3()->result();
        $data['profil_cpl2'] = $this->M_lulusan->tampil()->result();
        $data['profil_cpl'] = $this->M_lulusan->tampil()->row();
        
        //$data['cpl_baru'] = $this->M_lulusan->tampil_cpl_baru()->result();

        $data['kajian'] = $this->M_kajian->tampil()->result();
        $data['kajian3'] = $this->M_kajian->tampil()->result();
        $data['kajian2'] = $this->M_kajian->tampil()->result_array();
        //$data['kajiancpl'] = $this->M_kajian->tampil3()->result();
        $data['kajianskl'] = $this->M_kajian->tampil5()->result();
        $data['cpl_kajian'] = $this->M_lulusan->tampil_kajian()->result();
        $data['skl_kajian'] = $this->M_lulusan->tampil_kajian3()->result();

        $data['matkul'] = $this->M_matkul->tampil_matkul_baru()->result();
        $data['matkul2'] = $this->M_matkul->tampil_matkul_baru()->result_array();
        $data['cpl_matkul'] = $this->M_lulusan->tampil_matkul()->result();
        $data['cpl_matkul2'] = $this->M_lulusan->tampil_matkul()->result_array();
        $data['matkulcpl'] = $this->M_lulusan->tampil_matkul3()->result();

        $data['kajian_matkul'] = $this->M_lulusan->tampil_kajian_mk()->result();
        $data['matkulkajian'] = $this->M_lulusan->tampil_kajian_mk3()->result();
        $data['tahun'] = $this->M_matkul->tampil_ajaran_aktif()->row();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_kurikulum/sidebar', $data);
		$this->load->view('kurikulum/matriks/v_matriks', $data);
		$this->load->view('templates_admin/footer');
	}

	public function insert()
	{
		if($this->input->post()){
				$id_lulusan = $this->input->post('id_lulusan');
			    $id_jurusan = $this->input->post('id_jurusan');
			   // $id_user = $this->input->post('id_user');
				$categories = $this->input->post('id_cpl');

				//$user_id = $this->user_model->registerUser($data);
				foreach ($categories as $key => $id_cpl) {
					$this->M_lulusan->insert_data($id_lulusan,$id_jurusan,$id_cpl);
				}redirect('kurikulum/C_matriks');
		
			}
	}

	public function insert_kajian()
	{
		if($this->input->post()){
				$id_kajian = $this->input->post('id_kajian');
			    $id_jurusan = $this->input->post('id_jurusan');
				$categories = $this->input->post('id_skl');

				//$user_id = $this->user_model->registerUser($data);
				foreach ($categories as $key => $category) {
					$this->M_lulusan->insert_kajian($id_kajian,$id_jurusan,$category);
				}redirect('kurikulum/C_matriks');
		
			}
	}


	public function insert_kajianmk()
	{
		if($this->input->post()){
				$id_matkul = $this->input->post('id_matkul');
			    $id_jurusan = $this->input->post('id_jurusan');
				$categories = $this->input->post('id_kajian');

				//$user_id = $this->user_model->registerUser($data);
				foreach ($categories as $key => $category) {
					$this->M_lulusan->insert_kajianmk($id_matkul,$id_jurusan,$category);
				}redirect('kurikulum/C_matriks');
		
			}
	}

	public function delete()
    {
    	$id_lulusan = $this->input->post('id_lulusan');
        $this->M_lulusan->hapus_data($id_lulusan);
        $this->session->set_flashdata('hapus_data','Data Berhasil Dihapus !!');
        redirect('kurikulum/C_matriks');
    }

    public function delete_kajian()
    {
    	$id_kajian = $this->input->post('id_kajian');
        $this->M_lulusan->hapus_data2($id_kajian);
        $this->session->set_flashdata('hapus_data','Data Berhasil Dihapus !!');
        redirect('kurikulum/C_matriks');
    }

    public function delete_kajianmk()
    {
    	$id_matkul = $this->input->post('id_matkul');
        $this->M_lulusan->hapus_data3($id_matkul);
        $this->session->set_flashdata('hapus_data','Data Berhasil Dihapus !!');
        redirect('kurikulum/C_matriks');
    }

    public function pdf_profil()
    {
    	$data['profil'] = $this->M_setting->tampil_profil()->result();
    	$data['profil2'] = $this->M_setting->tampil_profil()->result_array();
    	$data['cpll'] = $this->M_lulusan->tampil_cpl3()->result();
    	$data['profilcpl'] = $this->M_setting->tampil_profil2()->result();
    	$data['cpl'] = $this->M_lulusan->tampil_cpl()->result();

    	$data['data'] = $this->M_lulusan->profil()->row();

    	$this->load->view('templates_admin/header');
		$this->load->view('kurikulum/matriks/v_print_profil', $data);
		$this->load->view('templates_admin/footer');
    }

    public function pdf_kajian()
    {
    	$data['kajian'] = $this->M_kajian->tampil()->result();
        $data['kajian2'] = $this->M_kajian->tampil()->result_array();
        $data['cpl_kajian'] = $this->M_lulusan->tampil_kajian()->result();
        //$data['kajiancpl'] = $this->M_kajian->tampil3()->result();
        $data['kajianskl'] = $this->M_kajian->tampil5()->result();

    	$data['data'] = $this->M_lulusan->profil()->row();

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

    	$data['data'] = $this->M_lulusan->profil()->row();

    	$this->load->view('templates_admin/header');
		$this->load->view('kurikulum/matriks/v_print_matkul', $data);
		$this->load->view('templates_admin/footer');
    }

    public function pdf_kajianmk()
    {
    	$data['kajian2'] = $this->M_kajian->tampil()->result_array();
    	$data['kajian_matkul'] = $this->M_lulusan->tampil_kajian_mk()->result();
        $data['matkulkajian'] = $this->M_lulusan->tampil_kajian_mk3()->result();

    	$data['data'] = $this->M_lulusan->profil()->row();

    	$this->load->view('templates_admin/header');
		$this->load->view('kurikulum/matriks/v_print_kajianmk', $data);
		$this->load->view('templates_admin/footer');
    }

}