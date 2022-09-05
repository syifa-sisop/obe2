<?php 
class C_matkul extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->my_login->check_login();
	}


	public function index()
	{

        $data['ajaran'] = $this->M_matkul->tampil_ajaran();
        $data['ajaran2'] = $this->M_matkul->tampil_ajaran2();
        $data['tahun'] = $this->M_matkul->tampil_ajaran_aktif()->row();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar', $data);
		$this->load->view('admin/matkul/v_matkul', $data);
		$this->load->view('templates_admin/footer');
	}

    public function kelola($id_tahun)
    {
        $data['data'] = $this->M_matkul->getAjaran($id_tahun)->row();
        $data['prodi'] = $this->M_prodi->tampil_prodi()->result();
        $data['tahun'] = $this->M_matkul->tampil_ajaran_aktif()->row();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/matkul/v_prodi', $data);
        $this->load->view('templates_admin/footer');
    }

    public function olah_data($id_jurusan,$id_tahun)
    {
        $data['matkul'] = $this->M_matkul->tampil($id_jurusan, $id_tahun);
        $data['matkul3'] = $this->M_matkul->tampil_matkul3($id_tahun);
        $data['ajaran'] = $this->M_matkul->tampil_ajaran();
        $data['matkul2'] = $this->M_matkul->tampil_data($id_jurusan,$id_tahun);
        $data['ajaran2'] = $this->M_matkul->tampil_ajaran2();
        $data['ganjil'] = $this->M_matkul->tampil_ganjil($id_tahun);
        $data['genapp'] = $this->M_matkul->tampil_genap($id_tahun)->result();
        $data['genapa'] = $this->M_matkul->tampil_genap($id_tahun)->result_array();
        $data['data'] = $this->M_matkul->getAjaran($id_tahun)->row();
        $data['data2'] = $this->M_prodi->getProdi($id_jurusan)->row();
        $data['prodi2'] = $this->M_prodi->tampil_prodi()->result_array();
        $data['tahun'] = $this->M_matkul->tampil_ajaran_aktif()->row();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/matkul/v_detail', $data);
        $this->load->view('templates_admin/footer');
    }

	public function tambah_aksi($id_jurusan,$id_tahun)
    {
        if ($this->input->post()) {
            //insert data ke database
            //memanggil model
            $data = $this->input->post();
            //memanggil model
            $this->M_matkul->insert_data($data);
            $this->session->set_flashdata('insert_data','Data Berhasil Ditambahkan !!');
             redirect('admin/C_matkul/olah_data/'.$id_jurusan.'/'.$id_tahun);
        }
    }

    public function tambah_matkul()
    {
        if ($this->input->post()) {
            //insert data ke database
            //memanggil model
            $data = $this->input->post();
            //memanggil model
            $this->M_matkul->insert_matkulgenap($data);
            $this->session->set_flashdata('insert_data','Data Berhasil Ditambahkan !!');
            redirect('admin/C_matkul');
        }
    }

    public function tambah_ajaran()
    {
        if ($this->input->post()) {
            //insert data ke database
            //memanggil model
            $data = $this->input->post();
            //memanggil model
            $this->M_matkul->insert_ajaran($data);
            $this->session->set_flashdata('insert_data','Data Berhasil Ditambahkan !!');
            redirect('admin/C_matkul');
        }
    }

    public function ubah ($id_jurusan, $id_tahun)
    {
    	$id_matkul = $this->input->post('id_matkul');

        $data = array(
            'nama_matkul'     => $this->input->post('nama_matkul'),
            'kode_matkul'              => $this->input->post('kode_matkul'),
            //'kelas'              => $this->input->post('kelas'),
            'sks_teori'              => $this->input->post('sks_teori'),
            'sks_praktek'              => $this->input->post('sks_praktek'),
            'semester'              => $this->input->post('semester')
        );
        $update = $this->M_matkul->updateFile($id_matkul, $data);

        if ($update) {
            $this->session->set_flashdata('update_data','Data Berhasil Diupdate !!');
           redirect('admin/C_matkul/olah_data/'.$id_jurusan.'/'.$id_tahun);
        }else{
            echo "Gagal";
            }
    }

    public function ubah_ajaran ()
    {
        $id_tahun = $this->input->post('id_tahun');

        $data = array(
            'tahun_ajaran'     => $this->input->post('tahun_ajaran'),
            'semester_ajaran'              => $this->input->post('semester_ajaran'),
            'status_ajaran'              => $this->input->post('status_ajaran')
        );
        $update = $this->M_matkul->updateAjaran($id_tahun, $data);

        if ($update) {
            $this->session->set_flashdata('update_data','Data Berhasil Diupdate !!');
            redirect(base_url('admin/C_matkul'));
        }else{
            echo "Gagal";
            }
    }

    public function ubah_ganjil()
    {
        $ganjil = $this->input->post('semester_ajaran');

        $data = array(
            'id_tahun'     => $this->input->post('tahun')
        );
        $update = $this->M_matkul->updateGanjil($ganjil,$data);

        if ($update) {
            $this->session->set_flashdata('update_data','Data Berhasil Diupdate !!');
            redirect(base_url('admin/C_matkul'));
        }else{
            echo "Gagal";
            }
    }

    public function ubah_genap()
    {
        $genap = $this->input->post('semester_ajaran');

        $data = array(
            'id_tahun'     => $this->input->post('tahun')
        );
        $update = $this->M_matkul->updateGenap($genap,$data);

        if ($update) {
            $this->session->set_flashdata('update_data','Data Berhasil Diupdate !!');
            redirect(base_url('admin/C_matkul'));
        }else{
            echo "Gagal";
            }
    }

    public function delete_matkul($id_matkul, $id_jurusan, $id_tahun)
    {
        $where1 = array('id_matkul' => $id_matkul);
        $where2 = array('id_matkul' => $id_matkul);

        $spn1 = $this->M_matkul->hapus_data('pengampu_mk', $where1);
        $spn2 = $this->M_matkul->hapus_data('matkul', $where2);

        if($spn1>=1){
            if($spn2>=1){
            $this->session->set_flashdata('hapus_user','Data Berhasil Dihapus !!');
           redirect('admin/C_matkul/olah_data/'.$id_jurusan.'/'.$id_tahun);
            }
            $this->session->set_flashdata('hapus_user','Data Berhasil Dihapus !!');
           redirect('admin/C_matkul/olah_data/'.$id_jurusan.'/'.$id_tahun);
        }
    }

    public function delete_ajaran($id_tahun)
    {
        $where1 = array('id_tahun' => $id_tahun);
        $where2 = array('id_tahun' => $id_tahun);

        $spn1 = $this->M_matkul->hapus_data('matkul', $where1);
        $spn2 = $this->M_matkul->hapus_data('tahun_ajaran', $where2);


        if($spn1>=1){
            if($spn2>=1){
            $this->session->set_flashdata('hapus_user','Data Berhasil Dihapus !!');
            redirect('admin/C_matkul');
            }
            $this->session->set_flashdata('hapus_user','Data Berhasil Dihapus !!');
            redirect('admin/C_matkul');
        }
    }

}