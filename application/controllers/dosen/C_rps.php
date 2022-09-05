
<?php 
class C_rps extends CI_Controller{
    
	function __construct()
	{
		parent::__construct();
		$this->my_login->check_login();
	}

	public function index($id_matkul, $id_pengampu)
	{
        //$id_matkul = $this->input->post('id_matkul');
		$data['jurusan'] = $this->M_jurusan->tampil()->result();
		$data['user'] = $this->M_profil->tampil_dosen()->result();
        $data['user2'] = $this->M_profil->tampil_dosen()->result_array();
		$data['prodi2'] = $this->M_jurusan->tampil_data()->result_array();
		$data['matkul'] = $this->M_matkul->tampil3()->result();
		$data['data'] = $this->M_matkul->getDataByID($id_matkul)->row();
		$data['data2'] = $this->M_matkul->getDataByID($id_matkul)->result();
		$data['data3'] = $this->M_matkul->getDataByID2($id_matkul)->result();
		$data['data4'] = $this->M_matkul->getDataByID2($id_matkul)->result_array();
        $data['tahun'] = $this->M_matkul->tampil_ajaran_aktif()->row();

		$data['cplmk'] = $this->M_rumpun->cpl2($id_matkul)->result();
        $data['cplmk2'] = $this->M_rumpun->cpl2($id_matkul)->result_array();
		$data['cpmk'] = $this->M_rumpun->cpmk($id_matkul)->result();
        $data['cpmk2'] = $this->M_rumpun->cpmk($id_matkul)->result_array();
		$data['subcpmk'] = $this->M_rumpun->subcpmk($id_matkul)->result();
		$data['subcpmk2'] = $this->M_rumpun->subcpmk($id_matkul)->result_array();
		$data['kajian'] = $this->M_rumpun->kajian($id_matkul)->result();
		$data['kajian2'] = $this->M_rumpun->kajian($id_matkul)->result_array();
		$data['utama'] = $this->M_rumpun->utama($id_matkul)->result();
		$data['utama2'] = $this->M_rumpun->utama($id_matkul)->result_array();
		$data['pendukung'] = $this->M_rumpun->pendukung($id_matkul)->result();
		$data['pendukung2'] = $this->M_rumpun->pendukung($id_matkul)->result_array();
		$data['syarat'] = $this->M_rumpun->syarat($id_matkul)->result();
		$data['syarat2'] = $this->M_rumpun->syarat($id_matkul)->result_array();
		$data['detail'] = $this->M_rumpun->detail($id_matkul)->result();
		$data['detail2'] = $this->M_rumpun->detail($id_matkul)->result_array();

        $data['media'] = $this->M_rumpun->media($id_matkul)->result();
        $data['media2'] = $this->M_rumpun->media($id_matkul)->result_array();

        $data['kajian_matkul'] = $this->M_lulusan->tampil_kajian_mk5($id_matkul)->result_array();

        $data['print'] = $this->M_matkul->get_spesific($id_matkul, $id_pengampu)->result_array();
        $data['abcd'] = $this->M_matkul->get_spesific($id_matkul, $id_pengampu)->result();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_dosen/sidebar2', $data);
		$this->load->view('dosen/rps/v_rps', $data);
		$this->load->view('templates_admin/footer');
	}

	function ambil_data(){

		$modul=$this->input->post('modul');
		$id=$this->input->post('id');

		if($modul=="aspek"){
		echo $this->M_rumpun->aspek($id);
		}
		else if($modul=="cpl"){
		echo $this->M_rumpun->cpl($id);

		}

	}

	public function insert_rumpun($id_matkul, $id_pengampu)
    {
        if ($this->input->post()) {
            //insert data ke database
            //memanggil model
            $data = $this->input->post();
            //memanggil model
            $this->M_rumpun->insert_data($data);
            $this->session->set_flashdata('insert_data','Data Berhasil Ditambahkan !!');
            redirect('dosen/C_rps/index/'.$id_matkul.'/'.$id_pengampu);
        }
    }

    public function insert_utama($id_matkul, $id_pengampu)
    {
        if ($this->input->post()) {
            //insert data ke database
            //memanggil model
            $data = $this->input->post();
            //memanggil model
            $this->M_rumpun->insert_utama($data);
            $this->session->set_flashdata('insert_data','Data Berhasil Ditambahkan !!');
            redirect('dosen/C_rps/index/'.$id_matkul.'/'.$id_pengampu);
        }
    }

    public function insert_pendukung($id_matkul,$id_pengampu)
    {
        if ($this->input->post()) {
            //insert data ke database
            //memanggil model
            $data = $this->input->post();
            //memanggil model
            $this->M_rumpun->insert_pendukung($data);
            $this->session->set_flashdata('insert_data','Data Berhasil Ditambahkan !!');
            redirect('dosen/C_rps/index/'.$id_matkul.'/'.$id_pengampu);
        }
    }

    public function insert_syarat($id_matkul, $id_pengampu)
    {
        if ($this->input->post()) {
            //insert data ke database
            //memanggil model
            $data = $this->input->post();
            //memanggil model
            $this->M_rumpun->insert_syarat($data);
            $this->session->set_flashdata('insert_data','Data Berhasil Ditambahkan !!');
            redirect('dosen/C_rps/index/'.$id_matkul.'/'.$id_pengampu);
        }
    }

    public function insert_media($id_matkul, $id_pengampu)
    {
        if ($this->input->post()) {
            //insert data ke database
            //memanggil model
            $data = $this->input->post();
            //memanggil model
            $this->M_rumpun->insert_media($data);
            $this->session->set_flashdata('insert_data','Data Berhasil Ditambahkan !!');
            redirect('dosen/C_rps/index/'.$id_matkul.'/'.$id_pengampu);
        }
    }

    public function insert_detail($id_matkul, $id_pengampu)
    {
        if ($this->input->post()) {
            //insert data ke database
            //memanggil model
            $data = $this->input->post();
                        //memanggil model
            $this->M_rumpun->insert_detail($data);
            $this->session->set_flashdata('insert_data','Data Berhasil Ditambahkan !!');
            redirect('dosen/C_rps/index/'.$id_matkul.'/'.$id_pengampu);
        }
    }

    public function ubah_rumpun($id_matkul, $id_pengampu)
    {
    	$id_deskripsimk = $this->input->post('id_deskripsimk');

        $data = array(
            'rumpun_mk'     => $this->input->post('rumpun_mk'),
            'deskripsi_mk'              => $this->input->post('deskripsi_mk')
        );
        $update = $this->M_rumpun->updateFile($id_deskripsimk, $data);

        if ($update) {
            $this->session->set_flashdata('update_data','Data Berhasil Diupdate !!');
            redirect(base_url('dosen/C_rps/index/'.$id_matkul.'/'.$id_pengampu));
        }else{
            echo "Gagal";
            }
    }

    public function ubah_kajian($id_matkul, $id_pengampu)
    {
    	$id_bahan2 = $this->input->post('id_bahan2');

        $data = array(
            'id_kajian'              => $this->input->post('id_kajian')
        );
        $update = $this->M_rumpun->updateFile2($id_bahan2, $data);

        if ($update) {
            $this->session->set_flashdata('update_data','Data Berhasil Diupdate !!');
            redirect(base_url('dosen/C_rps/index/'.$id_matkul.'/'.$id_pengampu));
        }else{
            echo "Gagal";
            }
    }

    public function ubah_utama($id_matkul, $id_pengampu)
    {
    	$id_utama = $this->input->post('id_utama');

        $data = array(
            'pustaka_utama'              => $this->input->post('pustaka_utama')
        );
        $update = $this->M_rumpun->updateFile3($id_utama, $data);

        if ($update) {
            $this->session->set_flashdata('update_data','Data Berhasil Diupdate !!');
            redirect(base_url('dosen/C_rps/index/'.$id_matkul.'/'.$id_pengampu));
        }else{
            echo "Gagal";
            }
    }

    public function ubah_pendukung($id_matkul, $id_pengampu)
    {
    	$id_pendukung = $this->input->post('id_pendukung');

        $data = array(
            'pustaka_pendukung'              => $this->input->post('pustaka_pendukung')
        );
        $update = $this->M_rumpun->updateFile4($id_pendukung, $data);

        if ($update) {
            $this->session->set_flashdata('update_data','Data Berhasil Diupdate !!');
            redirect(base_url('dosen/C_rps/index/'.$id_matkul.'/'.$id_pengampu));
        }else{
            echo "Gagal";
            }
    }

    public function ubah_syarat($id_matkul, $id_pengampu)
    {
    	$id_syarat = $this->input->post('id_syarat');

        $data = array(
            'syarat'              => $this->input->post('syarat')
        );
        $update = $this->M_rumpun->updateFile5($id_syarat, $data);

        if ($update) {
            $this->session->set_flashdata('update_data','Data Berhasil Diupdate !!');
            redirect(base_url('dosen/C_rps/index/'.$id_matkul.'/'.$id_pengampu));
        }else{
            echo "Gagal";
            }
    }

    public function ubah_media($id_matkul, $id_pengampu)
    {
        $id_media = $this->input->post('id_media');

        $data = array(
            'media'              => $this->input->post('media'),
            'jenis_media'              => $this->input->post('jenis_media')
        );
        $update = $this->M_rumpun->updateFile7($id_media, $data);

        if ($update) {
            $this->session->set_flashdata('update_data','Data Berhasil Diupdate !!');
            redirect(base_url('dosen/C_rps/index/'.$id_matkul.'/'.$id_pengampu));
        }else{
            echo "Gagal";
            }
    }

    public function ubah_detail($id_matkul, $id_pengampu)
    {
    	$id_detailrps = $this->input->post('id_detailrps');

        $data = array(
            'minggu'              => $this->input->post('minggu'),
            'id_subcpmk'              => $this->input->post('id_subcpmk'),
            'indikator'              => $this->input->post('indikator'),
            'kriteria'              => $this->input->post('kriteria'),
            'luring'              => $this->input->post('luring'),
            'daring'              => $this->input->post('daring'),
            'materi'              => $this->input->post('materi'),
            'bobot'              => $this->input->post('bobot')
        );
        $update = $this->M_rumpun->updateFile6($id_detailrps, $data);

        if ($update) {
            $this->session->set_flashdata('update_data','Data Berhasil Diupdate !!');
            redirect(base_url('dosen/C_rps/index/'.$id_matkul.'/'.$id_pengampu));
        }else{
            echo "Gagal";
            }
    }

    public function insert_kajian($id_matkul, $id_pengampu)
    {
        if ($this->input->post()) {
            //insert data ke database
            //memanggil model
            $data = $this->input->post();
            //memanggil model
            $this->M_rumpun->insert_kajian($data);
            $this->session->set_flashdata('insert_data','Data Berhasil Ditambahkan !!');
            redirect('dosen/C_rps/index/'.$id_matkul.'/'.$id_pengampu);
        }
    }

    public function update($id_matkul,$id_cplmk, $id_pengampu)
	{
			if ($this->input->post()) {
				$input = $this->input->post();
				$this->M_rumpun->update_data($input);
				$this->session->set_flashdata('update_data','Data Berhasil Diupdate !!');
				redirect('dosen/C_rps/index/'.$id_matkul.'/'.$id_pengampu);
			}
			else{
				$data['cplmk2'] = $this->M_rumpun->get_spesific($id_cplmk);
				//$data['prodi']=$this->model_select->prodi();
				$data['aspek']=$this->M_rumpun->aspek();
		        $data['data'] = $this->M_matkul->getDataByID($id_matkul)->row();
		        $data['user'] = $this->M_profil->tampil_dosen()->result();
                $data['abcd'] = $this->M_matkul->get_spesific($id_matkul, $id_pengampu)->result();
                $data['tahun'] = $this->M_matkul->tampil_ajaran_aktif()->row();

	        	$this->load->view('dosen/rps/v_updatecpl', $data);
			}
		
	}

	public function update_cpmk($id_matkul,$id_cpmk, $id_pengampu)
	{
			if ($this->input->post()) {
				$input = $this->input->post();
				$this->M_rumpun->update_cpmk($input);
				$this->session->set_flashdata('update_data','Data Berhasil Diupdate !!');
				redirect('dosen/C_rps/index/'.$id_matkul.'/'.$id_pengampu);
			}
			else{
				$data['cpmk2'] = $this->M_rumpun->get_spesific2($id_cpmk);
				//$data['prodi']=$this->model_select->prodi();
				$data['cplmk']=$this->M_rumpun->cplmk($id_matkul);
		        $data['data'] = $this->M_matkul->getDataByID($id_matkul)->row();
		        $data['user'] = $this->M_profil->tampil_dosen()->result();
                $data['abcd'] = $this->M_matkul->get_spesific($id_matkul, $id_pengampu)->result();
                $data['tahun'] = $this->M_matkul->tampil_ajaran_aktif()->row();

	        	$this->load->view('dosen/rps/v_updatecpmk', $data);
			}
		
	}

	public function update_subcpmk($id_matkul,$id_subcpmk, $id_pengampu)
	{
			if ($this->input->post()) {
				$input = $this->input->post();
				$this->M_rumpun->update_subcpmk($input);
				$this->session->set_flashdata('update_data','Data Berhasil Diupdate !!');
				redirect('dosen/C_rps/index/'.$id_matkul.'/'.$id_pengampu);
			}
			else{
				$data['subcpmk2'] = $this->M_rumpun->get_subcpmk($id_subcpmk);
				//$data['prodi']=$this->model_select->prodi();
				$data['cpmk2'] = $this->M_rumpun->cpmk($id_matkul)->result();
		        $data['data'] = $this->M_matkul->getDataByID($id_matkul)->row();
		        $data['user'] = $this->M_profil->tampil_dosen()->result();
                $data['abcd'] = $this->M_matkul->get_spesific($id_matkul, $id_pengampu)->result();
                $data['tahun'] = $this->M_matkul->tampil_ajaran_aktif()->row();
                $data['cplmk2'] = $this->M_rumpun->cpl2($id_matkul)->result_array();

	        	$this->load->view('dosen/rps/v_updatesubcpmk', $data);
			}
		
	}
    public function insert_cpl($id_matkul, $id_pengampu)
    {
        if ($this->input->post()) {
            //insert data ke database
            //memanggil model
            $data = $this->input->post();
            //memanggil model
            $this->M_rumpun->insert_cpl($data);
            $this->session->set_flashdata('insert_data','Data Berhasil Ditambahkan !!');
            redirect('dosen/C_rps/index/'.$id_matkul.'/'.$id_pengampu);
        }
        else{
        $data['aspek']=$this->M_rumpun->aspek();
        $data['data'] = $this->M_matkul->getDataByID($id_matkul)->row();
        $data['user'] = $this->M_profil->tampil_dosen()->result();
        $data['abcd'] = $this->M_matkul->get_spesific($id_matkul, $id_pengampu)->result();
        $data['tahun'] = $this->M_matkul->tampil_ajaran_aktif()->row();

        $this->load->view('dosen/rps/v_insertcpl', $data);
        }
    }

    public function insert_cpmk($id_matkul, $id_pengampu)
    {
        if ($this->input->post()) {
            //insert data ke database
            //memanggil model
            $data = $this->input->post();
            //memanggil model
            $this->M_rumpun->insert_cpmk($data);
            $this->session->set_flashdata('insert_data','Data Berhasil Ditambahkan !!');
            redirect('dosen/C_rps/index/'.$id_matkul.'/'.$id_pengampu);
        }
        else{
        $data['cplmk']=$this->M_rumpun->cplmk($id_matkul);
        $data['data'] = $this->M_matkul->getDataByID($id_matkul)->row();
        $data['user'] = $this->M_profil->tampil_dosen()->result();
        $data['abcd'] = $this->M_matkul->get_spesific($id_matkul, $id_pengampu)->result();
        $data['tahun'] = $this->M_matkul->tampil_ajaran_aktif()->row();

        $this->load->view('dosen/rps/v_insertcpmk', $data);
        }
    }

    public function insert_subcpmk($id_matkul, $id_pengampu)
    {
        if ($this->input->post()) {
            //insert data ke database
            //memanggil model
            $data = $this->input->post();
            //memanggil model
            $this->M_rumpun->insert_subcpmk($data);
            $this->session->set_flashdata('insert_data','Data Berhasil Ditambahkan !!');
            redirect('dosen/C_rps/index/'.$id_matkul.'/'.$id_pengampu);
        }
        else{
        $data['cpmk2'] = $this->M_rumpun->cpmk($id_matkul)->result();
        $data['cpmk']=$this->M_rumpun->cpmk2();
        $data['data'] = $this->M_matkul->getDataByID($id_matkul)->row();
        $data['user'] = $this->M_profil->tampil_dosen()->result();
        $data['abcd'] = $this->M_matkul->get_spesific($id_matkul, $id_pengampu)->result();
        $data['cplmk2'] = $this->M_rumpun->cpl2($id_matkul)->result_array();
        $data['tahun'] = $this->M_matkul->tampil_ajaran_aktif()->row();

        $this->load->view('dosen/rps/v_insertsubcpmk', $data);
        }
    }

  
    public function delete( $id_cplmk,$id_matkul, $id_pengampu)
    {
        $where = array('id_cplmk'=> $id_cplmk);
        $this->M_rumpun->hapus_data($where,'cpl_mk');
        $this->session->set_flashdata('hapus_data','Data Berhasil Dihapus !!');
        redirect('dosen/C_rps/index/'.$id_matkul.'/'.$id_pengampu);
    }

    public function delete_cpmk( $id_cpmk, $id_matkul,$id_pengampu)
    {
        $where = array('id_cpmk'=> $id_cpmk);
        $this->M_rumpun->hapus_data($where,'cpmk');
        $this->session->set_flashdata('hapus_data','Data Berhasil Dihapus !!');
        redirect('dosen/C_rps/index/'.$id_matkul.'/'.$id_pengampu);
    }

    public function delete_subcpmk( $id_subcpmk, $id_matkul,$id_pengampu)
    {
        $where = array('id_subcpmk'=> $id_subcpmk);
        $this->M_rumpun->hapus_data($where,'subcpmk');
        $this->session->set_flashdata('hapus_data','Data Berhasil Dihapus !!');
        redirect('dosen/C_rps/index/'.$id_matkul.'/'.$id_pengampu);
    }

    public function delete_kajian($id_matkul, $id_bahan2, $id_pengampu)
    {
        $where = array('id_bahan2'=> $id_bahan2);
        $this->M_rumpun->hapus_data($where,'bahan_kajian2');
        $this->session->set_flashdata('hapus_data','Data Berhasil Dihapus !!');
        redirect('dosen/C_rps/index/'.$id_matkul.'/'.$id_pengampu);
    }

    public function delete_utama( $id_utama,$id_matkul, $id_pengampu)
    {
        $where = array('id_utama'=> $id_utama);
        $this->M_rumpun->hapus_data($where,'pustaka_utama');
        $this->session->set_flashdata('hapus_data','Data Berhasil Dihapus !!');
        redirect('dosen/C_rps/index/'.$id_matkul.'/'.$id_pengampu);
    }

    public function delete_pendukung($id_pendukung,$id_matkul,  $id_pengampu)
    {
        $where = array('id_pendukung'=> $id_pendukung);
        $this->M_rumpun->hapus_data($where,'pustaka_pendukung');
        $this->session->set_flashdata('hapus_data','Data Berhasil Dihapus !!');
        redirect('dosen/C_rps/index/'.$id_matkul.'/'.$id_pengampu);
    }

    public function delete_syarat($id_syarat, $id_matkul, $id_pengampu)
    {
        $where = array('id_syarat'=> $id_syarat);
        $this->M_rumpun->hapus_data($where,'syarat');
        $this->session->set_flashdata('hapus_data','Data Berhasil Dihapus !!');
        redirect('dosen/C_rps/index/'.$id_matkul.'/'.$id_pengampu);
    }

    public function delete_media($id_media, $id_matkul, $id_pengampu)
    {
        $where = array('id_media'=> $id_media);
        $this->M_rumpun->hapus_data($where,'media');
        $this->session->set_flashdata('hapus_data','Data Berhasil Dihapus !!');
        redirect('dosen/C_rps/index/'.$id_matkul.'/'.$id_pengampu);
    }

    public function delete_detail( $id_detailrps,$id_matkul, $id_pengampu)
    {
        $where = array('id_detailrps'=> $id_detailrps);
        $this->M_rumpun->hapus_data($where,'detail_rps');
        $this->session->set_flashdata('hapus_data','Data Berhasil Dihapus !!');
        redirect('dosen/C_rps/index/'.$id_matkul.'/'.$id_pengampu);
    }

    public function print($id_matkul, $id_pengampu)
    {
        $data['jurusan'] = $this->M_jurusan->tampil()->result();
        $data['user'] = $this->M_profil->tampil_profil()->result();
        $data['prodi2'] = $this->M_jurusan->tampil_data()->result_array();

        $data['print'] = $this->M_matkul->get_spesific($id_matkul, $id_pengampu)->result_array();

        $data['data'] = $this->M_matkul->getDataByID($id_matkul)->row();
        $data['data2'] = $this->M_matkul->getDataByID($id_matkul)->result();
        $data['data3'] = $this->M_matkul->getDataByID2($id_matkul)->result();

        $data['rinci'] = $this->M_matkul->getDatarinci($id_matkul)->result();
        $data['data4'] = $this->M_matkul->getDataByID2($id_matkul)->result_array();


        $data['cplmk'] = $this->M_rumpun->cpl2($id_matkul)->result();
        $data['cpmk'] = $this->M_rumpun->cpmk($id_matkul)->result();
        $data['subcpmk'] = $this->M_rumpun->subcpmk($id_matkul)->result();
        $data['subcpmk2'] = $this->M_rumpun->subcpmk($id_matkul)->result_array();
        $data['kajian'] = $this->M_rumpun->kajian($id_matkul)->result();
        $data['kajian2'] = $this->M_rumpun->kajian($id_matkul)->result_array();
        $data['utama'] = $this->M_rumpun->utama($id_matkul)->result();
        $data['utama2'] = $this->M_rumpun->utama($id_matkul)->result_array();
        $data['pendukung'] = $this->M_rumpun->pendukung($id_matkul)->result();
        $data['pendukung2'] = $this->M_rumpun->pendukung($id_matkul)->result_array();
        $data['syarat'] = $this->M_rumpun->syarat($id_matkul)->result();
        $data['syarat2'] = $this->M_rumpun->syarat($id_matkul)->result_array();
        $data['detail'] = $this->M_rumpun->detail($id_matkul)->result();
        $data['detail2'] = $this->M_rumpun->detail($id_matkul)->result_array();
        $data['media'] = $this->M_rumpun->media($id_matkul)->result();
        $data['media2'] = $this->M_rumpun->media($id_matkul)->result_array();
        $data['abcd'] = $this->M_matkul->get_spesific($id_matkul, $id_pengampu)->result();


        $this->load->view('templates_admin/header');
        $this->load->view('kurikulum/rps/v_print', $data);
        $this->load->view('templates_admin/footer');
        
    }
}