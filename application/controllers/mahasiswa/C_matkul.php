<?php 
class C_matkul extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->my_login->check_login();
	}
	public function index()
	{

		$data['user'] = $this->M_profil->tampil_mhs()->result();
		$data['prodi2'] = $this->M_jurusan->tampil_data()->result_array();

		$data['matkul'] = $this->M_pengampu->tampil_matkul_mhs()->result_array();
		$data['matkul2'] = $this->M_pengampu->tampil_matkul_mhs()->result();
		$data['pilih'] = $this->M_pengampu->tampil_matkul_pilih()->result_array();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_mahasiswa/sidebar', $data);
		$this->load->view('mahasiswa/matkul/v_matkul', $data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah_aksi()
    {
        if ($this->input->post()) {
            //insert data ke database
            //memanggil model
            $data = $this->input->post();
            //memanggil model
            $this->M_pengampu->insert_matkul_mhs($data);
            $this->session->set_flashdata('insert_data','Data Berhasil Ditambahkan !!');
            redirect('mahasiswa/C_matkul');
        }
    }

    public function ubah ()
    {
    	$id_matkulmhs = $this->input->post('id_matkulmhs');

        $data = array(
            'id_pengampu'     => $this->input->post('id_pengampu')
        );
        $update = $this->M_pengampu->update_matkul_mhs($id_matkulmhs, $data);

        if ($update) {
            $this->session->set_flashdata('update_data','Data Berhasil Diupdate !!');
            redirect(base_url('mahasiswa/C_matkul'));
        }else{
            echo "Gagal";
            }
    }

    public function delete($id_matkulmhs)
    {
        $where = array('id_matkulmhs'=> $id_matkulmhs);
        $this->M_pengampu->hapus_data($where,'matkul_mhs');
        $this->session->set_flashdata('hapus_data','Data Berhasil Dihapus !!');
        redirect('mahasiswa/C_matkul');
    }
}