<?php 

class C_mbkm extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->my_login->check_login();
	}
	

	public function index()
	{
		$data['setting'] = $this->M_setting->tampil();
        $data['user'] = $this->M_profil->tampil_profil()->result();

        $data['mbkm'] = $this->M_mbkm->tampil_data()->result();
        $data['luar'] = $this->M_mbkm->tampil_luar()->result();
        $data['non'] = $this->M_mbkm->tampil_non()->result();

        $data['mbkm2'] = $this->M_mbkm->tampil_data2()->result_array();
        $data['luar2'] = $this->M_mbkm->tampil_luar()->result_array();
        $data['non2'] = $this->M_mbkm->tampil_non()->result_array();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_kurikulum/sidebar', $data);
		$this->load->view('kurikulum/mbkm/v_data', $data);
		$this->load->view('templates_admin/footer');
	}

    public function tambah_dalam()
    {
        if ($this->input->post()) {
            //insert data ke database
            //memanggil model
            $data = $this->input->post();
            //memanggil model
            $this->M_mbkm->insert_data($data);
            $this->session->set_flashdata('insert_data','Data Berhasil Ditambahkan !!');
            redirect('kurikulum/C_mbkm');
        }
    }

    public function ubah_dalam()
    {
        $id_mbkm = $this->input->post('id_mbkm');

        $data = array(
            'kode_mbkm'     => $this->input->post('kode_mbkm'),
            'nama_mbkm'              => $this->input->post('nama_mbkm'),
            'sks_mbkm'              => $this->input->post('sks_mbkm'),
            'semester_mbkm'              => $this->input->post('semester_mbkm'),
            'status_mbkm'              => $this->input->post('status_mbkm')
        );
        $update = $this->M_mbkm->updateFile($id_mbkm, $data);

        if ($update) {
            $this->session->set_flashdata('update_data','Data Berhasil Diupdate !!');
            redirect(base_url('kurikulum/C_mbkm'));
        }else{
            echo "Gagal";
            }
    }

    public function delete($id_mbkm)
    {
        $where = array('id_mbkm'=> $id_mbkm);
        $this->M_mbkm->hapus_data($where,'mbkm');
        $this->session->set_flashdata('hapus_data','Data Berhasil Dihapus !!');
        redirect('kurikulum/C_mbkm');
    }
}