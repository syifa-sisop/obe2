<?php 
class C_histori extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->my_login->check_login();
	}
	public function index($id_matkul, $id_pengampu)
	{
		$data['jurusan'] = $this->M_jurusan->tampil()->result();
		$data['user'] = $this->M_profil->tampil_dosen()->result();
		$data['user2'] = $this->M_profil->tampil_dosen()->result_array();
		$data['prodi2'] = $this->M_jurusan->tampil_data()->result_array();
		$data['matkul'] = $this->M_matkul->tampil3()->result();
		$data['data'] = $this->M_matkul->getDataByID($id_matkul)->row();
		$data['abcd'] = $this->M_matkul->get_spesific($id_matkul, $id_pengampu)->result();
		$data['matkul2'] = $this->M_matkul->tampil4()->result();
		$data['tahun'] = $this->M_matkul->tampil_ajaran_aktif()->row();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_dosen/sidebar2', $data);
		$this->load->view('dosen/histori/v_histori', $data);
		$this->load->view('templates_admin/footer');
	}

	public function detail($id_matkul)
	{
		$data['jurusan'] = $this->M_jurusan->tampil()->result();
		$data['user'] = $this->M_profil->tampil_profil()->result();
		$data['prodi2'] = $this->M_jurusan->tampil_data()->result_array();
		$data['tahun'] = $this->M_matkul->tampil_ajaran_aktif()->row();

		$data['data'] = $this->M_matkul->getDataByID($id_matkul)->row();
		$data['data2'] = $this->M_matkul->getDataByID($id_matkul)->result();
		$data['data3'] = $this->M_matkul->getDataByID2($id_matkul)->result();
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


		$this->load->view('templates_admin/header');
		$this->load->view('templates_kurikulum/sidebar', $data);
		$this->load->view('kurikulum/rps/v_detail', $data);
		$this->load->view('templates_admin/footer');
	}

	public function print($id_matkul)
	{
		$data['jurusan'] = $this->M_jurusan->tampil()->result();
		$data['user'] = $this->M_profil->tampil_profil()->result();
		$data['prodi2'] = $this->M_jurusan->tampil_data()->result_array();

		$data['data'] = $this->M_matkul->getDataByID($id_matkul)->row();
		$data['data2'] = $this->M_matkul->getDataByID($id_matkul)->result();
		$data['data3'] = $this->M_matkul->getDataByID2($id_matkul)->result();

		$data['rinci'] = $this->M_matkul->getDatarinci($id_matkul)->result();
		$data['data4'] = $this->M_matkul->getDataByID2($id_matkul)->result_array();

		$data['cplmk'] = $this->M_rumpun->cpl2($id_matkul)->result();
		$data['cplmk2'] = $this->M_rumpun->cpl2($id_matkul)->result_array();
		
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


		$this->load->view('templates_admin/header');
		$this->load->view('kurikulum/rps/v_print', $data);
		$this->load->view('templates_admin/footer');
		
	}
}