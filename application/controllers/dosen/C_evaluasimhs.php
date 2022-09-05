<?php 
class C_evaluasimhs extends CI_Controller{

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

		$data['evaluasi'] = $this->M_evaluasi->tampil_evaluasi_mhs($id_matkul, $id_pengampu)->result_array();
        $data['id'] = $this->M_evaluasi->tampil_evaluasi_mhs($id_matkul, $id_pengampu)->row();
        $data['cplmk'] = $this->M_evaluasi->cpl2($id_matkul)->result();

        $data['nilai_cpl'] = $this->M_nilai->tampil_data2($id_matkul, $id_pengampu)->result();

        //$data['cplmk2'] = $this->M_nilai->tampil_nilai_cpl($id_cplmk,$id_matkul)->result();
        $data['tahun'] = $this->M_matkul->tampil_ajaran_aktif()->row();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_dosen/sidebar2', $data);
		$this->load->view('dosen/evaluasi/v_mahasiswa', $data);
		$this->load->view('templates_admin/footer');
	}

	public function detail($id_matkul, $id_user, $id_pengampu)
	{
		$data['jurusan'] = $this->M_jurusan->tampil()->result();
		$data['user'] = $this->M_profil->tampil_dosen()->result();
		$data['prodi2'] = $this->M_jurusan->tampil_data()->result_array();
		$data['matkul'] = $this->M_matkul->tampil3()->result();
		$data['data'] = $this->M_matkul->getDataByID($id_matkul)->row();
		$data['abcd'] = $this->M_matkul->get_spesific($id_matkul, $id_pengampu)->result();
        $data['tahun'] = $this->M_matkul->tampil_ajaran_aktif()->row();

		//$data['evaluasi'] = $this->M_evaluasi->get_evaluasi($id_user)->result();

		$data['evaluasi'] = $this->M_evaluasi->tampil_evaluasi($id_user, $id_matkul)->result();
		$data['evaluasi3'] = $this->M_evaluasi->tampil_evaluasi($id_user, $id_matkul)->result_array();
		$data['evaluasi2'] = $this->M_evaluasi->get_spesific($id_user, $id_matkul)->result();
		$data['evaluasi4'] = $this->M_evaluasi->get_spesific($id_user, $id_matkul)->result_array();
		$data['evaluasi5'] = $this->M_evaluasi->get_spesific($id_user, $id_matkul)->result_array();
		$data['eval2'] = $this->M_evaluasi->get_spesific2($id_user, $id_matkul)->result();

		$data['hasil'] = $this->M_evaluasi->get_hasil($id_user)->result();
		$data['bobot'] = $this->M_evaluasi->tampil_nilai($id_user, $id_matkul)->result();

		$data['detail2'] = $this->M_evaluasi->tampil($id_matkul)->result_array();
		$data['cplmk'] = $this->M_evaluasi->cpl2($id_matkul)->result();
        

		$this->load->view('templates_admin/header');
		$this->load->view('templates_dosen/sidebar2', $data);
		$this->load->view('dosen/evaluasi/v_detail', $data);
		$this->load->view('templates_admin/footer');
	}

	public function nilai($id_matkul, $id_user, $id_pengampu)
    {
        if ($this->input->post()) {
            //insert data ke database
            //memanggil model
            $data = $this->input->post();
            //memanggil model
            $this->M_evaluasi->insert_nilai($data);
            $this->session->set_flashdata('insert_data','Data Berhasil Ditambahkan !!');
            redirect('dosen/C_evaluasimhs/detail/'.$id_matkul.'/'.$id_user.'/'.$id_pengampu);
        }
    }

    public function ubah($id_matkul, $id_user, $id_pengampu)
    {
        $id_evaluasimhs = $this->input->post('id_evaluasimhs');

        $data = array(
            'id_evaluasi2'              => $this->input->post('id_evaluasi'),
            'nilai_mhs'              => $this->input->post('nilai_mhs')
        );
        $update = $this->M_evaluasi->updatenilai($id_evaluasimhs, $data);

        if ($update) {
            $this->session->set_flashdata('update_data','Data Berhasil Diupdate !!');
            redirect('dosen/C_evaluasimhs/detail/'.$id_matkul.'/'.$id_user.'/'.$id_pengampu);
        }else{
            echo "Gagal";
            }
    }

    public function hitung($id_matkul, $id_user, $id_pengampu)
    {
        $id_evaluasimhs = $this->input->post('id_evaluasimhs');
        $nilai_mhs = $this->input->post('nilai_mhs');
        $bobot = $this->input->post('bobot');
        $hasil = $nilai_mhs * $bobot;
        $hasil2 = $hasil/100;

        $data = array(
            'bobot_mhs'              => $hasil2
        );
        $update = $this->M_evaluasi->updatenilai($id_evaluasimhs, $data);

        if ($update) {
            $this->session->set_flashdata('update_data','Data Berhasil Diupdate !!');
            redirect('dosen/C_evaluasimhs/detail/'.$id_matkul.'/'.$id_user.'/'.$id_pengampu);
        }else{
            echo "Gagal";
            }
    }

    public function delete($id_evaluasimhs,$id_matkul,  $id_user, $id_pengampu)
    {
        $where = array('id_evaluasimhs'=> $id_evaluasimhs);
        $this->M_evaluasi->hapus_data($where,'evaluasi_mhs');
        $this->session->set_flashdata('hapus_data','Data Berhasil Dihapus !!');
        redirect('dosen/C_evaluasimhs/detail/'.$id_matkul.'/'.$id_user.'/'.$id_pengampu);
    }


    public function hitung_cpl($id_cplmk, $id_user, $id_matkul, $id_pengampu)
    {
    	$data['nilai']= $this->M_evaluasi->ambil_nilai($id_cplmk, $id_user)->result();
    	$data['nilai2']= $this->M_evaluasi->ambil_nilai2($id_cplmk, $id_user)->result();
        $data['tahun'] = $this->M_matkul->tampil_ajaran_aktif()->row();
    	//$bobot_mhs = $get_data['nilai_mhs'];
		//echo($bobot_mhs);

    	$data['jurusan'] = $this->M_jurusan->tampil()->result();
		$data['user'] = $this->M_profil->tampil_dosen()->result();
		$data['prodi2'] = $this->M_jurusan->tampil_data()->result_array();
		$data['matkul'] = $this->M_matkul->tampil3()->result();
		$data['data'] = $this->M_matkul->getDataByID($id_matkul)->row();
		$data['abcd'] = $this->M_matkul->get_spesific($id_matkul, $id_pengampu)->result();

		//$data['evaluasi'] = $this->M_evaluasi->get_evaluasi($id_user)->result();

		$data['evaluasi'] = $this->M_evaluasi->tampil_evaluasi($id_user, $id_matkul)->result();
		$data['evaluasi3'] = $this->M_evaluasi->tampil_evaluasi($id_user, $id_matkul)->result_array();
		$data['evaluasi2'] = $this->M_evaluasi->get_spesific($id_user, $id_matkul)->result();
		$data['evaluasi4'] = $this->M_evaluasi->get_spesific($id_user, $id_matkul)->result_array();
		$data['evaluasi5'] = $this->M_evaluasi->get_spesific($id_user, $id_matkul)->result_array();
		$data['eval2'] = $this->M_evaluasi->get_spesific2($id_user, $id_matkul)->result();

		$data['hasil'] = $this->M_evaluasi->get_hasil($id_user)->result();
		$data['bobot'] = $this->M_evaluasi->tampil_nilai($id_user, $id_matkul)->result();

		$data['detail2'] = $this->M_evaluasi->tampil($id_matkul)->result_array();
		$data['cplmk'] = $this->M_evaluasi->cpl2($id_matkul)->result();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_dosen/sidebar2', $data);
		$this->load->view('dosen/evaluasi/v_hitung', $data);
		$this->load->view('templates_admin/footer');
    }
    public function total_semua_cpl($id_cplmk, $id_matkul, $id_pengampu)
    {
        $data['jurusan'] = $this->M_jurusan->tampil()->result();
        $data['user'] = $this->M_profil->tampil_dosen()->result();
        $data['tahun'] = $this->M_matkul->tampil_ajaran_aktif()->row();
        $data['prodi2'] = $this->M_jurusan->tampil_data()->result_array();
        $data['matkul'] = $this->M_matkul->tampil3()->result();
        $data['data'] = $this->M_matkul->getDataByID($id_matkul)->row();
        $data['abcd'] = $this->M_matkul->get_spesific($id_matkul, $id_pengampu)->result();
        $data['id'] = $this->M_evaluasi->tampil_evaluasi_mhs($id_matkul, $id_pengampu)->row();

        $data['nilai_cpl2'] = $this->M_nilai->tampil_nilai_cpl($id_cplmk, $id_matkul, $id_pengampu)->row();
        $data['nilai_cpl'] = $this->M_nilai->tampil_nilai_cpl($id_cplmk, $id_matkul, $id_pengampu)->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_dosen/sidebar2', $data);
        $this->load->view('dosen/evaluasi/v_hitung_total', $data);
        $this->load->view('templates_admin/footer');
    }

    public function cpl($id_matkul, $id_user, $id_pengampu)
    {
        if ($this->input->post()) {
            //insert data ke database
            //memanggil model
            $data = $this->input->post();
            //memanggil model
            $this->M_evaluasi->insert_cpl($data);
            $this->session->set_flashdata('insert_data','Data Berhasil Ditambahkan !!');
            redirect('dosen/C_evaluasimhs/detail/'.$id_matkul.'/'.$id_user.'/'.$id_pengampu);
        }
    }

    public function total_cpl($id_cplmk, $id_matkul, $id_pengampu)
    {
        if ($this->input->post()) {
            //insert data ke database
            //memanggil model
            $data = $this->input->post();
            //memanggil model
            $this->M_nilai->insert_cpl($data);
            $this->session->set_flashdata('insert_data','Data Berhasil Ditambahkan !!');
            redirect('dosen/C_evaluasimhs/index/'.$id_matkul.'/'.$id_pengampu);
        }
    }

    public function cetak($id_matkul,$id_user, $id_pengampu)
   {
   		$data['jurusan'] = $this->M_jurusan->tampil()->result();
		$data['user'] = $this->M_profil->tampil_dosen()->result();
		$data['prodi2'] = $this->M_jurusan->tampil_data()->result_array();
		$data['matkul'] = $this->M_matkul->tampil3()->result();
		$data['data'] = $this->M_matkul->getDataByID($id_matkul)->row();
		$data['abcd'] = $this->M_matkul->get_spesific($id_matkul, $id_pengampu)->result();

		//$data['evaluasi'] = $this->M_evaluasi->get_evaluasi($id_user)->result();

		$data['evaluasi'] = $this->M_evaluasi->tampil_evaluasi($id_user, $id_matkul)->result();
		$data['ambil_data'] = $this->M_evaluasi->ambil_data($id_user)->result();

		$data['hasil'] = $this->M_evaluasi->get_hasil($id_user)->result();
		$data['bobot'] = $this->M_evaluasi->tampil_nilai($id_user, $id_matkul)->result();

		//print_r($data);

		$data['detail2'] = $this->M_evaluasi->tampil($id_matkul)->result_array();
		$data['cplmk'] = $this->M_evaluasi->cpl2($id_matkul)->result();

		$this->load->view('templates_admin/header');
        $this->load->view('dosen/evaluasi/v_printhasil', $data);
        $this->load->view('templates_admin/footer');
   } 

   public function export($id_matkul, $id_user){
   		$evaluasi = $this->M_evaluasi->tampil_evaluasi($id_user, $id_matkul)->result();
   		$ambil_data = $this->M_evaluasi->ambil_data($id_user)->result();
   		$bobot = $this->M_evaluasi->tampil_nilai($id_user, $id_matkul)->result();

   		require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel.php');
        require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

        $excel = new PHPExcel();

        $excel->getProperties()->setCreator("e-OBE UPNV Jatim");
        $excel->getProperties()->setLastModifiedBy("e-OBE UPNV Jatim");
        $excel->getProperties()->setTitle("Evaluasi RPS (Mahasiswa)");
        $excel->getProperties()->setSubject("");
        $excel->getProperties()->setDescription("");

        $excel->setActiveSheetIndex(0);

        $excel->getActiveSheet()->setCellValue('A1', 'VI. Portofolio Penilaian & Evaluasi proses dan hasil belajar setiap Mahasiswa');
        foreach($evaluasi as $evaluasii){
                $excel->getActiveSheet()->setCellValue('A2', 'Nama : '.$evaluasii->nama_mhs);
                $excel->getActiveSheet()->setCellValue('A3', 'NPM : ' .$evaluasii->npm );
            }
        $excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true);
        $excel->getActiveSheet()->getStyle('A2')->getFont()->setBold(true);
        $excel->getActiveSheet()->getStyle('A3')->getFont()->setBold(true);
        $excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(14);

        $excel->getActiveSheet()->mergeCells('A1:I1');
        $excel->getActiveSheet()->mergeCells('A2:I2');
        $excel->getActiveSheet()->mergeCells('A3:I3');


        $excel->getActiveSheet()->setCellValue('A5', 'Minggu Ke-')->getStyle('A5')->getFont()->setBold(true);
        $excel->getActiveSheet()->setCellValue('B5', 'CPL')->getStyle('B5')->getFont()->setBold(true);
        $excel->getActiveSheet()->setCellValue('C5', 'CPMK')->getStyle('C5')->getFont()->setBold(true);
        $excel->getActiveSheet()->setCellValue('D5', 'Sub-CPMK')->getStyle('D5')->getFont()->setBold(true);
        $excel->getActiveSheet()->setCellValue('E5', 'Indikator')->getStyle('E5')->getFont()->setBold(true);
        $excel->getActiveSheet()->setCellValue('F5', 'Bentuk Soal')->getStyle('F5')->getFont()->setBold(true);
        $excel->getActiveSheet()->setCellValue('G5', 'Bobot sub-CPMK (%)')->getStyle('G5')->getFont()->setBold(true);
        $excel->getActiveSheet()->setCellValue('H5', 'Nilai Mhs (0-100)')->getStyle('H5')->getFont()->setBold(true);
        $excel->getActiveSheet()->setCellValue('I5', 'Σ (Nilai x Bobot)')->getStyle('I5')->getFont()->setBold(true);

        $baris = 6;

        foreach($ambil_data as $ambil_dataa){
                $excel->getActiveSheet()->setCellValue('A'.$baris, $ambil_dataa->minggu);
                $excel->getActiveSheet()->setCellValue('B'.$baris, $ambil_dataa->kode_cpl);
                $excel->getActiveSheet()->setCellValue('C'.$baris, $ambil_dataa->kode_baru);
                $excel->getActiveSheet()->setCellValue('D'.$baris, $ambil_dataa->kode_subcpmk);
                $excel->getActiveSheet()->setCellValue('E'.$baris, $ambil_dataa->indikator);
                $excel->getActiveSheet()->setCellValue('F'.$baris, $ambil_dataa->asesmen);
                $excel->getActiveSheet()->setCellValue('G'.$baris, $ambil_dataa->bobot);
                $excel->getActiveSheet()->setCellValue('H'.$baris, $ambil_dataa->nilai_mhs);
                $excel->getActiveSheet()->setCellValue('I'.$baris, $ambil_dataa->bobot_mhs);

                $baris++;
        }

        $baris2 = $baris++;
        $baris3 = $baris2 + 1;

        $excel->getActiveSheet()->setCellValue('A'.$baris3, 'Kode CPL')->getStyle('A'.$baris3)->getFont()->setBold(true);
        $excel->getActiveSheet()->setCellValue('B'.$baris3, 'Total Bobot CPL (Mhs) ')->getStyle('B'.$baris3)->getFont()->setBold(true);
        $excel->getActiveSheet()->setCellValue('D'.$baris3, 'Total Bobot CPL  ')->getStyle('D'.$baris3)->getFont()->setBold(true);
        $excel->getActiveSheet()->setCellValue('F'.$baris3, 'Hasil CPL  ')->getStyle('F'.$baris3)->getFont()->setBold(true);
        $excel->getActiveSheet()->setCellValue('H'.$baris3, 'Ketercapaian CPL pada MK  ')->getStyle('H'.$baris3)->getFont()->setBold(true);


        $excel->getActiveSheet()->mergeCells('B'.$baris3.':C'.$baris3);
		$excel->getActiveSheet()->mergeCells('D'.$baris3.':E'.$baris3);
		$excel->getActiveSheet()->mergeCells('F'.$baris3.':G'.$baris3);
		$excel->getActiveSheet()->mergeCells('H'.$baris3.':I'.$baris3);

		$baris4 = $baris3 + 1;
		foreach($bobot as $bobott){
				$excel->getActiveSheet()->setCellValue('A'.$baris4, $bobott->kode_cpl);
                $excel->getActiveSheet()->setCellValue('B'.$baris4, $bobott->nilai_cpl);
                $excel->getActiveSheet()->setCellValue('D'.$baris4, $bobott->total_bobot);
                $excel->getActiveSheet()->setCellValue('F'.$baris4, $bobott->hasil_cpl);
                $excel->getActiveSheet()->setCellValue('H'.$baris4, $bobott->ket_cpl);

                $baris4++;
		}


		$filename="Evaluasi RPS (Mahasiswa)".date("d-m-Y-H-i-s").'.xlsx';
         $excel->getActiveSheet()->setTitle("RPS");

                header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'); //mime type
                header('Content-Disposition: attachment;filename="'.$filename.'"'); //tell browser what's the file name
                header('Cache-Control: max-age=0'); //no cache

        $writer=PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
        ob_end_clean();
        $writer->save('php://output');
        exit;

   }
}