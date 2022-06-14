<?php 

class C_data extends CI_Controller{
	function __construct()
	{
        
		parent::__construct();
		$this->my_login->check_login();
	}

	public function index()
	{
		$data['setting'] = $this->M_setting->tampil();
		$data['profil'] = $this->M_setting->tampil_profil()->result();
		$data['profil2'] = $this->M_setting->tampil_profil()->result_array();
		$data['cpl'] = $this->M_setting->tampil_cpl()->result_array();
		$data['cpl2'] = $this->M_setting->tampil_cpl()->result();
		$data['aspek'] = $this->M_setting->tampil_aspek();
		$data['aspek2'] = $this->M_setting->tampil_aspek2();

        $data['dosen'] = $this->M_dosen->tampil_dosen()->result_array();
        $data['matkul'] = $this->M_matkul->tampil2()->result();
        $data['matkul2'] = $this->M_matkul->tampil2()->result_array();
        $data['pengampu'] = $this->M_pengampu->tampil_data()->result_array();
        $data['tim'] = $this->M_tim->tampil_tim()->result_array();
        $data['landasan'] = $this->M_landasan->tampil()->result();
        $data['landasan2'] = $this->M_landasan->tampil()->result_array();

        $data['kajian'] = $this->M_kajian->tampil()->result();
        $data['kajian2'] = $this->M_kajian->tampil()->result_array();

        $data['user'] = $this->M_profil->tampil_profil()->result();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_kurikulum/sidebar', $data);
		$this->load->view('kurikulum/kurikulum/v_data', $data);
		$this->load->view('templates_admin/footer');
	}

    public function tambah_kajian()
    {
        if ($this->input->post()) {
            //insert data ke database
            //memanggil model
            $data = $this->input->post();
            //memanggil model
            $this->M_kajian->insert_data($data);
            $this->session->set_flashdata('insert_data','Data Berhasil Ditambahkan !!');
            redirect('kurikulum/C_data');
        }
    }

    public function tambah_landasan()
    {
        if ($this->input->post()) {
            //insert data ke database
            //memanggil model
            $data = $this->input->post();
            //memanggil model
            $this->M_landasan->insert_data($data);
            $this->session->set_flashdata('insert_data','Data Berhasil Ditambahkan !!');
            redirect('kurikulum/C_data');
        }
    }

	public function tambah_profil()
    {
        if ($this->input->post()) {
            //insert data ke database
            //memanggil model
            $data = $this->input->post();
            //memanggil model
            $this->M_setting->insert_data($data);
            $this->session->set_flashdata('insert_data','Data Berhasil Ditambahkan !!');
            redirect('kurikulum/C_data');
        }
    }

    public function tambah_cpl()
    {
        if ($this->input->post()) {
            //insert data ke database
            //memanggil model
            $data = $this->input->post();
            //memanggil model
            $this->M_setting->insert_cpl($data);
            $this->session->set_flashdata('insert_data','Data Berhasil Ditambahkan !!');
            redirect('kurikulum/C_data');
        }
    }

    public function ubah_landasan()
    {
        $id_landasan = $this->input->post('id_landasan');

        $data = array(
            'filosofis'     => $this->input->post('filosofis'),
            'psikologis'              => $this->input->post('psikologis'),
            'sosiologis'              => $this->input->post('sosiologis'),
            'iptek'              => $this->input->post('iptek')
            //'id_setting'              => $this->input->post('id_setting')
        );
        $update = $this->M_landasan->updateFile($id_landasan, $data);

        if ($update) {
            $this->session->set_flashdata('update_data','Data Berhasil Diupdate !!');
            redirect(base_url('kurikulum/C_data'));
        }else{
            echo "Gagal";
            }
    }

    public function ubah_kajian()
    {
        $id_kajian = $this->input->post('id_kajian');

        $data = array(
            'nama_kajian'              => $this->input->post('nama_kajian'),
            'deskripsi'              => $this->input->post('deskripsi')
            //'id_setting'              => $this->input->post('id_setting')
        );
        $update = $this->M_kajian->updateFile($id_kajian, $data);

        if ($update) {
            $this->session->set_flashdata('update_data','Data Berhasil Diupdate !!');
            redirect(base_url('kurikulum/C_data'));
        }else{
            echo "Gagal";
            }
    }

    public function ubah_profil()
    {
    	$id_lulusan = $this->input->post('id_lulusan');

        $data = array(
            'kode_lulusan'     => $this->input->post('kode_lulusan'),
            'profil'              => $this->input->post('profil'),
            'deskripsi'              => $this->input->post('deskripsi')
            //'id_setting'              => $this->input->post('id_setting')
        );
        $update = $this->M_setting->updateFile($id_lulusan, $data);

        if ($update) {
            $this->session->set_flashdata('update_data','Data Berhasil Diupdate !!');
            redirect(base_url('kurikulum/C_data'));
        }else{
            echo "Gagal";
            }
    }

    public function ubah_mk()
    {
        $id_matkul = $this->input->post('id_matkul');

        $data = array(
            'jenis_mk'     => $this->input->post('jenis_mk')
        );
        $update = $this->M_matkul->updateFile($id_matkul, $data);

        if ($update) {
            $this->session->set_flashdata('update_data','Data Berhasil Diupdate !!');
            redirect(base_url('kurikulum/C_data'));
        }else{
            echo "Gagal";
            }
    }

    public function ubah_cpl()
    {
    	$id_cpl = $this->input->post('id_cpl');

        $data = array(
            'kode_cpl'     => $this->input->post('kode_cpl'),
            'cpl'              => $this->input->post('cpl'),
            'sumber'              => $this->input->post('sumber'),
            'id_aspek'              => $this->input->post('id_aspek')
        );
        $update = $this->M_setting->updateCpl($id_cpl, $data);

        if ($update) {
            $this->session->set_flashdata('update_data','Data Berhasil Diupdate !!');
            redirect(base_url('kurikulum/C_data'));
        }else{
            echo "Gagal";
            }
    }


    public function delete($id_lulusan)
    {
        $where = array('id_lulusan'=> $id_lulusan);
        $this->M_setting->hapus_data($where,'profil_lulusan');
        $this->session->set_flashdata('hapus_data','Data Berhasil Dihapus !!');
        redirect('kurikulum/C_data');
    }

    public function delete_cpl($id_cpl)
    {
        $where = array('id_cpl'=> $id_cpl);
        $this->M_setting->hapus_data($where,'cpl');
        $this->session->set_flashdata('hapus_data','Data Berhasil Dihapus !!');
        redirect('kurikulum/C_data');
    }

    public function delete_landasan($id_landasan)
    {
        $where = array('id_landasan'=> $id_landasan);
        $this->M_setting->hapus_data($where,'landasan');
        $this->session->set_flashdata('hapus_data','Data Berhasil Dihapus !!');
        redirect('kurikulum/C_data');
    }

    public function delete_kajian($id_kajian)
    {
        $where = array('id_kajian'=> $id_kajian);
        $this->M_setting->hapus_data($where,'kajian');
        $this->session->set_flashdata('hapus_data','Data Berhasil Dihapus !!');
        redirect('kurikulum/C_data');
    }

}