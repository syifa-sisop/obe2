<?php 

class C_profil extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->my_login->check_login();
	}


	public function index()
	{
		$data['user'] = $this->M_profil->tampil_profil()->result();
		$data['profil2'] = $this->M_profil->tampil_profil()->result();
		$data['profil3'] = $this->M_profil->tampil_profil3()->result();
		$data['tahun'] = $this->M_matkul->tampil_ajaran_aktif()->row();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_kurikulum/sidebar', $data);
		$this->load->view('kurikulum/profil/v_profil', $data);
		$this->load->view('templates_admin/footer');
	}

	public function ubah(){
		$id_dosen = $this->input->post('id_dosen');
		
		$data = $this->M_profil->getDataByID2($id_dosen)->row();
		$nama = './uploads/'.$data->gambar;

			$config['upload_path']          = './uploads/';
			$config['allowed_types']        = 'png|jpeg|jpg|gif';

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('userfile'))
			{

					$data = array(
					'nama_dosen'	=> $this->input->post('nama_dosen'),
					'nip'	=> $this->input->post('nip'),
					'tempat_lahir'	=> $this->input->post('tempat_lahir'),
					'tgl_lahir'	=> $this->input->post('tgl_lahir'),
					'alamat'	=> $this->input->post('alamat'),
					'no_telp'	=> $this->input->post('no_telp')
					
				);
				$update = $this->M_profil->updateFile2($id_dosen, $data);

				if ($update) {
					$this->session->set_flashdata('update_data','Data Berhasil Diupdate !!');
					redirect(base_url('kurikulum/C_profil'));
				}else{
					echo "Gagal";
				}
			}
			else{
				$upload_data = $this->upload->data();
				$name = $upload_data['file_name'];

				$data = array(
					'nama_dosen'	=> $this->input->post('nama_dosen'),
					'nip'	=> $this->input->post('nip'),
					'tempat_lahir'	=> $this->input->post('tempat_lahir'),
					'tgl_lahir'	=> $this->input->post('tgl_lahir'),
					'alamat'	=> $this->input->post('alamat'),
					'no_telp'	=> $this->input->post('no_telp'),
					'gambar'	=> $name
				);
				$update = $this->M_profil->updateFile2($id_dosen, $data);

				if ($update) {
					$this->session->set_flashdata('update_data','Data Berhasil Diupdate !!');
					redirect(base_url('kurikulum/C_profil'));
				}else{
					echo "Gagal";
				}
			}			
		
	}

	public function password()
	{
		$id_user = $this->input->post('id_user');
	
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if( $this->form_validation->run() == false) {

            $this->load->view('kurikulum/profil/v_profil');
        }
        else {
            $data = [
                'password'      => md5($this->input->post('password1'))
            ];

            $update = $this->M_profil->updateuser($id_user, $data);
            if ($update) {
			$this->session->set_flashdata('update_data','Data Berhasil Diupdate !!');
			redirect(base_url('kurikulum/C_profil'));
			}else{
			echo "Gagal";
			}
        }
	}
}