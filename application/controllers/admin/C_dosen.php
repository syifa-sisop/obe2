<?php 
class C_dosen extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->my_login->check_login();
	}

	public function index()
	{
		
    	$data['prodi2'] = $this->M_prodi->tampil_prodi()->result_array();
        $data['prodi'] = $this->M_prodi->tampil_prodi()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/dosen/v_prodi', $data);
		$this->load->view('templates_admin/footer');
	}

    public function olah_data($id_jurusan)
    {
        $data['dosen'] = $this->M_dosen->tampil($id_jurusan)->result_array();
        $data['dosen2'] = $this->M_dosen->tampil($id_jurusan)->result();
        $data['data2'] = $this->M_prodi->getProdi($id_jurusan)->row();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/dosen/v_dosen', $data);
        $this->load->view('templates_admin/footer');
    }

	public function insert($id_jurusan)
    {
        if ($this->input->post()) {
            //insert data ke database
            //memanggil model
            $data = $this->input->post();
            //memanggil model
            $this->M_dosen->insert_dosen($data);
            $this->session->set_flashdata('insert_data','Data Berhasil Ditambahkan !!');
            redirect('admin/C_dosen/olah_data/'.$id_jurusan);
        }
    }

    public function ubah ($id_jurusan)
    {
    	$id_user = $this->input->post('id_user');

        $data = array(
            'nama_dosen'     => $this->input->post('nama_dosen'),
            //'nip'              => $this->input->post('nip'),
            'email'              => $this->input->post('email')
            //'id_jurusan'              => $this->input->post('id_jurusan')
        );
        $item = [
            //'username'          => $this->input->post('username'),
            'email'             => $this->input->post('email')
            //'password'          => md5($this->input->post('password'))
        ];

        $update = $this->M_dosen->updateDosen($id_user, $data);
        $update2 = $this->M_dosen->updateUser($id_user, $item);

        if ($update && $update2) {
            $this->session->set_flashdata('update_data','Data Berhasil Diupdate !!');
            redirect('admin/C_dosen/olah_data/'.$id_jurusan);
        }else{
            echo "Gagal";
            }
      
    }
    public function delete_dosen($id_dosen)
    {
        $where1 = array('id_dosen' => $id_dosen);
        $where2 = array('id_dosen' => $id_dosen);

        $spn1 = $this->M_dosen->hapus_data('pengampu_mk', $where1);
        $spn2 = $this->M_dosen->hapus_data('dosen', $where2);


        if($spn1>=1){
            if($spn2>=1){
            $this->session->set_flashdata('hapus_user','Data Berhasil Dihapus !!');
            redirect('admin/C_dosen');
            }
            $this->session->set_flashdata('hapus_user','Data Berhasil Dihapus !!');
            redirect('admin/C_dosen');
        }
    }
}