<?php 
class C_pengampu extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->my_login->check_login();
		$this->load->model('model_select');
	}

	public function index()
	{
		$data['ajaran'] = $this->M_matkul->tampil_ajaran();
        $data['ajaran2'] = $this->M_matkul->tampil_ajaran2();

		//$data['prodi'] = $this->M_prodi->tampil_prodi()->result();
        $data['tahun'] = $this->M_matkul->tampil_ajaran_aktif()->row();
        $data['user'] = $this->M_profil->tampil_profil3()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar', $data);
		$this->load->view('admin/pengampu/v_ajaran', $data);
		$this->load->view('templates_admin/footer');
	}

	public function kelola($id_tahun)
    {
        $data['data'] = $this->M_matkul->getAjaran($id_tahun)->row();
        $data['prodi'] = $this->M_prodi->tampil_prodi()->result();
         $data['tahun'] = $this->M_matkul->tampil_ajaran_aktif()->row();
         $data['user'] = $this->M_profil->tampil_profil3()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/pengampu/v_prodi', $data);
        $this->load->view('templates_admin/footer');
    }

	public function olah_data($id_jurusan,$id_tahun)
	{
		$data['data'] = $this->M_matkul->getAjaran($id_tahun)->row();

		$data['pengampu'] = $this->M_pengampu->tampil($id_jurusan, $id_tahun)->result_array();
		$data['pengampu2'] = $this->M_pengampu->tampil($id_jurusan, $id_tahun)->result();
		$data['dosen2'] = $this->M_dosen->tampil($id_jurusan)->result_array();
		$data['matkul'] = $this->M_matkul->tampil_aktif($id_jurusan, $id_tahun)->result_array();
		$data['dosen'] = $this->M_dosen->tampil($id_jurusan)->result();
		$data['dosen3'] = $this->M_dosen->tampil($id_jurusan)->result();
		$data['dosen4'] = $this->M_dosen->tampil($id_jurusan)->result();
		$data['matkul2'] = $this->M_matkul->tampil_aktif($id_jurusan, $id_tahun)->result();
		$data['dosen5'] = $this->M_dosen->tampil($id_jurusan)->row();
		//$data['prodi2'] = $this->M_prodi->tampil_prodi()->result_array();
		//$data['prodi']=$this->model_select->prodi();
		$data['data2'] = $this->M_prodi->getProdi($id_jurusan)->row();
		$data['tahun'] = $this->M_matkul->tampil_ajaran_aktif()->row();
		$data['user'] = $this->M_profil->tampil_profil3()->result();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar', $data);
		$this->load->view('admin/pengampu/v_pengampu', $data);
		$this->load->view('templates_admin/footer');
	}

	public function insert($id_jurusan, $id_tahun)
    {
        if ($this->input->post()) {
            //insert data ke database
            //memanggil model
            $data = $this->input->post();
            //memanggil model
            $this->M_pengampu->insert_data($data);
            $this->session->set_flashdata('insert_data','Data Berhasil Ditambahkan !!');
            redirect('admin/C_pengampu/olah_data/'.$id_jurusan.'/'.$id_tahun);
        }
    }

    public function ubah ($id_jurusan, $id_tahun)
    {
    	$id_pengampu = $this->input->post('id_pengampu');

        $data = array(
            'id_matkul'     => $this->input->post('id_matkul'),
            'id_dosen'              => $this->input->post('id_dosen'),
            'nama_dosen3'              => $this->input->post('nama_dosen3'),
            'nama_dosen2'              => $this->input->post('nama_dosen2'),
            'koordinator'              => $this->input->post('koordinator'),
            'kelas'              => $this->input->post('kelas')
        );
        $update = $this->M_pengampu->updateFile($id_pengampu, $data);

        if ($update) {
            $this->session->set_flashdata('update_data','Data Berhasil Diupdate !!');
           redirect('admin/C_pengampu/olah_data/'.$id_jurusan.'/'.$id_tahun);
        }else{
            echo "Gagal";
            }
    }

	public function delete($id_pengampu, $id_jurusan, $id_tahun)
    {
        $where1 = array('id_pengampu' => $id_pengampu);

        $spn1 = $this->M_pengampu->hapus_data2('matkul_mhs', $where1);
        $spn2 = $this->M_pengampu->hapus_data2('nilai_cpl', $where1);
        $spn3 = $this->M_pengampu->hapus_data2('nilai_matkul_cpl', $where1);
        $spn4 = $this->M_pengampu->hapus_data2('pengampu_mk', $where1);

        if($spn1>=1){
            if($spn2>=1){
            $this->session->set_flashdata('hapus_user','Data Berhasil Dihapus !!');
            redirect('admin/C_pengampu/olah_data/'.$id_jurusan.'/'.$id_tahun);
            }
            if($spn3>=1){
            $this->session->set_flashdata('hapus_user','Data Berhasil Dihapus !!');
            redirect('admin/C_pengampu/olah_data/'.$id_jurusan.'/'.$id_tahun);
            }
            if($spn4>=1){
            $this->session->set_flashdata('hapus_user','Data Berhasil Dihapus !!');
            redirect('admin/C_pengampu/olah_data/'.$id_jurusan.'/'.$id_tahun);
            }
            $this->session->set_flashdata('hapus_user','Data Berhasil Dihapus !!');
            redirect('admin/C_pengampu/olah_data/'.$id_jurusan.'/'.$id_tahun);
        }

    }

    public function tambah_data($id_jurusan,$id_tahun)
    {
    	$data['data'] = $this->M_matkul->getAjaran($id_tahun)->row();
    	$data['prodi'] = $this->M_prodi->tampil_prodi()->result();
		$data['pengampu'] = $this->M_pengampu->tampil($id_jurusan, $id_tahun)->result_array();
		$data['pengampu2'] = $this->M_pengampu->tampil($id_jurusan, $id_tahun)->result();
		$data['dosen2'] = $this->M_dosen->tampil($id_jurusan)->result_array();
		$data['matkul'] = $this->M_matkul->tampil_aktif($id_jurusan, $id_tahun)->result_array();
		$data['dosen'] = $this->M_dosen->tampil($id_jurusan)->result();
		$data['dosen3'] = $this->M_dosen->tampil($id_jurusan)->result();
		$data['dosen4'] = $this->M_dosen->tampil($id_jurusan)->result();
		$data['matkul2'] = $this->M_matkul->tampil_aktif($id_jurusan, $id_tahun)->result();
		$data['dosen5'] = $this->M_dosen->tampil($id_jurusan)->result();
		//$data['prodi2'] = $this->M_prodi->tampil_prodi()->result_array();
		//$data['prodi']=$this->model_select->prodi();
		$data['data2'] = $this->M_prodi->getProdi($id_jurusan)->row();
		$data['tahun'] = $this->M_matkul->tampil_ajaran_aktif()->row();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar', $data);
		$this->load->view('admin/pengampu/v_pengampu_insert', $data);
		$this->load->view('templates_admin/footer');
    }
}