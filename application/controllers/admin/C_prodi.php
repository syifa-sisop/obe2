<?php 

class C_prodi extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->my_login->check_login();
	}
	public function index()
	{

		$data['data'] = $this->M_prodi->tampil_fakultas()->result_array();
        $data['data2'] = $this->M_prodi->tampil_fakultas()->result();
		$data['prodi'] = $this->M_prodi->tampil_prodi()->result();
        $data['prodi2'] = $this->M_prodi->tampil_prodi()->result_array();
        $data['dosen'] = $this->M_dosen->tampil2()->result_array();
        $data['tahun'] = $this->M_matkul->tampil_ajaran_aktif()->row();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar', $data);
		$this->load->view('admin/prodi/v_prodi', $data);
		$this->load->view('templates_admin/footer');
	}

	public function insert()
    {
        if ($this->input->post()) {
            //insert data ke database
            //memanggil model
            $data = $this->input->post();
            //memanggil model
            $this->M_prodi->insert_fakultas($data);
            $this->session->set_flashdata('insert_data','Data Berhasil Ditambahkan !!');
            redirect('admin/C_prodi');
        }
    }

    public function tambah_aksi()
    {
        if ($this->input->post()) {
            //insert data ke database
            //memanggil model
            $data = $this->input->post();
            //memanggil model
            $this->M_prodi->insert_prodi($data);
            $this->session->set_flashdata('insert_data','Data Berhasil Ditambahkan !!');
            redirect('admin/C_prodi');
        }
    }

    public function ubah ()
    {
    	$id_fakultas = $this->input->post('id_fakultas');

        $data = array(
            'nama_fakultas'     => $this->input->post('nama_fakultas'),
            'kode'              => $this->input->post('kode')
        );
        $update = $this->M_prodi->updateFile($id_fakultas, $data);

        if ($update) {
            $this->session->set_flashdata('update_data','Data Berhasil Diupdate !!');
            redirect(base_url('admin/C_prodi'));
        }else{
            echo "Gagal";
            }
    }

    public function ubah_prodi ()
    {
        $id_jurusan = $this->input->post('id_jurusan');

        $data = array(
            'nama'     => $this->input->post('nama'),
            'kode_jurusan'              => $this->input->post('kode_jurusan'),
            'koordinator_jurusan'              => $this->input->post('koordinator_jurusan'),
            'id_fakultas'     => $this->input->post('id_fakultas')
        );
        $update = $this->M_prodi->updateProdi($id_jurusan, $data);

        if ($update) {
            $this->session->set_flashdata('update_data','Data Berhasil Diupdate !!');
            redirect(base_url('admin/C_prodi'));
        }else{
            echo "Gagal";
            }
    }

    public function delete($id_fakultas)
    {
        $where = array('id_fakultas'=> $id_fakultas);
        $this->M_prodi->hapus_data($where,'fakultas');
        $this->session->set_flashdata('hapus_data','Data Berhasil Dihapus !!');
        redirect('admin/C_prodi');
    }

    public function delete_jurusan($id_jurusan)
    {
        $where = array('id_jurusan'=> $id_jurusan);
        $this->M_prodi->hapus_data($where,'jurusan');
        $this->session->set_flashdata('hapus_data','Data Berhasil Dihapus !!');
        redirect('admin/C_prodi');
    }


}