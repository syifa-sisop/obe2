<?php 

class C_evaluasi extends CI_Controller{

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

		$this->load->view('templates_admin/header');
		$this->load->view('templates_mahasiswa/sidebar', $data);
		$this->load->view('mahasiswa/evaluasi/v_evaluasi', $data);
		$this->load->view('templates_admin/footer');
	}

	public function evaluasi($id_matkul )
	{
		
			$data['user'] = $this->M_profil->tampil_mhs()->result();
			$data['prodi2'] = $this->M_jurusan->tampil_data()->result_array();

			$data['evaluasi'] = $this->M_evaluasi->get_spesific($id_matkul)->result();
			$data['evaluasi2'] = $this->M_evaluasi->get_spesific($id_matkul)->result_array();

			$this->load->view('templates_admin/header');
			$this->load->view('templates_mahasiswa/sidebar', $data);
			$this->load->view('mahasiswa/evaluasi/v_input',$data);
			$this->load->view('templates_admin/footer');
		
	}

	public function nilai($id_matkul)
    {
        if ($this->input->post()) {
            //insert data ke database
            //memanggil model
            $data = $this->input->post();
            //memanggil model
            $this->M_evaluasi->insert_nilai($data);
            $this->session->set_flashdata('insert_data','Data Berhasil Ditambahkan !!');
            redirect('mahasiswa/C_evaluasi/evaluasi/'.$id_matkul);
        }
    }

    public function ubah_nilai($id_matkul)
    {
    	$id_evaluasi2 = $this->input->post('id_evaluasi2');

        $data = array(
            'nilai_mhs'              => $this->input->post('nilai_mhs')
        );
        $update = $this->M_evaluasi->updatenilai($id_evaluasi2, $data);

        if ($update) {
            $this->session->set_flashdata('update_data','Data Berhasil Diupdate !!');
            redirect(base_url('mahasiswa/C_evaluasi/evaluasi/'.$id_matkul));
        }else{
            echo "Gagal";
            }
    }
}