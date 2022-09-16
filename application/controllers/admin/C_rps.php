<?php 

class C_rps extends CI_Controller{

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
        $data['user'] = $this->M_profil->tampil_profil3()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar', $data);
		$this->load->view('admin/rps/v_rps', $data);
		$this->load->view('templates_admin/footer');
	}

	public function lihat($id_tahun)
    {
        $data['data'] = $this->M_matkul->getAjaran($id_tahun)->row();
        $data['prodi'] = $this->M_prodi->tampil_prodi()->result();
        $data['user'] = $this->M_profil->tampil_profil3()->result();
        $data['tahun'] = $this->M_matkul->tampil_ajaran_aktif()->row();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/rps/v_prodi', $data);
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
        $data['user'] = $this->M_profil->tampil_profil3()->result();
        $data['tahun'] = $this->M_matkul->tampil_ajaran_aktif()->row();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/rps/v_detail', $data);
        $this->load->view('templates_admin/footer');
    }

    public function detail($id_matkul)
	{
		$data['jurusan'] = $this->M_jurusan->tampil()->result();
		$data['user'] = $this->M_profil->tampil_profil()->result();
		$data['prodi2'] = $this->M_jurusan->tampil_data()->result_array();

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
        $data['user'] = $this->M_profil->tampil_profil3()->result();
        $data['tahun'] = $this->M_matkul->tampil_ajaran_aktif()->row();


		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar', $data);
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

	public function export($id_matkul)
	{
		$data['matkul'] = $this->M_matkul->getDataByID($id_matkul)->result();
		$matkul = $this->M_matkul->getDataByID($id_matkul)->result();
		$rinci = $this->M_matkul->getDatarinci($id_matkul)->result();
		$cplmk = $this->M_rumpun->cpl2($id_matkul)->result();
		$cpmk = $this->M_rumpun->cpmk($id_matkul)->result();
		$subcpmk = $this->M_rumpun->subcpmk($id_matkul)->result();
		$deskripsi = $this->M_matkul->getDataByID2($id_matkul)->result();
		$syarat = $this->M_rumpun->syarat($id_matkul)->result();
		$kajian = $this->M_rumpun->kajian($id_matkul)->result();
		$utama = $this->M_rumpun->utama($id_matkul)->result();
		$pendukung = $this->M_rumpun->pendukung($id_matkul)->result();
		$detail = $this->M_rumpun->detail($id_matkul)->result();

		require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel.php');
		require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

		$objPHPExcel = new PHPExcel();

		$objPHPExcel->getProperties()->setCreator("e-OBE UPNV Jatim");
		$objPHPExcel->getProperties()->setLastModifiedBy("e-OBE UPNV Jatim");
		$objPHPExcel->getProperties()->setTitle("RPS");
		$objPHPExcel->getProperties()->setSubject("");
		$objPHPExcel->getProperties()->setDescription("");

		$objPHPExcel->setActiveSheetIndex(0);

		$objPHPExcel->getActiveSheet()->setCellValue('A1', 'UNIVERSITAS PEMBANGUNAN NASIONAL VETERAN JAWA TIMUR');
		foreach($matkul as $matkull){
				$objPHPExcel->getActiveSheet()->setCellValue('A2', 'Fakultas '.$matkull->nama_fakultas.' Prodi '. $matkull->nama);
				$objPHPExcel->getActiveSheet()->setCellValue('A3', 'Rencana Pembelajaran');
			}

		$objPHPExcel->getActiveSheet()->setCellValue('A4', 'Mata Kuliah');
		$objPHPExcel->getActiveSheet()->setCellValue('B4', 'Kode');
		$objPHPExcel->getActiveSheet()->setCellValue('C4', 'Rumpun MK');
		$objPHPExcel->getActiveSheet()->setCellValue('D4', 'Bobot');
		$objPHPExcel->getActiveSheet()->setCellValue('F4', 'Semester');
		
		$objPHPExcel->getActiveSheet()->setCellValue('A6', 'Otoritas');
		$objPHPExcel->getActiveSheet()->setCellValue('B6', 'Koordinator MK');
		$objPHPExcel->getActiveSheet()->setCellValue('D6', 'Koordinator Program Studi');
		$objPHPExcel->getActiveSheet()->setCellValue('F6', 'Pengembang RP');

		$objPHPExcel->getActiveSheet()->setCellValue('A9', 'Capaian Pembelajaran');	
		$objPHPExcel->getActiveSheet()->setCellValue('B9', 'CPL- PRODI yang dibebankan pada Mata Kuliah');	

		$objPHPExcel->getActiveSheet()->mergeCells('A1:H1');
		$objPHPExcel->getActiveSheet()->mergeCells('A2:H2');
		$objPHPExcel->getActiveSheet()->mergeCells('A3:H3');
		$objPHPExcel->getActiveSheet()->mergeCells('D4:E4');
		$objPHPExcel->getActiveSheet()->mergeCells('B6:C6');
		$objPHPExcel->getActiveSheet()->mergeCells('D6:E6');
		$objPHPExcel->getActiveSheet()->mergeCells('A6:A7');
		$objPHPExcel->getActiveSheet()->mergeCells('B9:H9');

		$objPHPExcel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		$objPHPExcel->getActiveSheet()->getStyle('A2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		$objPHPExcel->getActiveSheet()->getStyle('A3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        //make the font become bold
		$objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->getStyle('A4')->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->getStyle('B4')->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->getStyle('C4')->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->getStyle('D4')->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->getStyle('F4')->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->getStyle('A6')->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->getStyle('B6')->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->getStyle('D6')->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->getStyle('F6')->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->getStyle('A9')->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->getStyle('B9')->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->setSize(14);
		$objPHPExcel->getActiveSheet()->getStyle('A2')->getFont()->setSize(12);
		$objPHPExcel->getActiveSheet()->getStyle('A3')->getFont()->setSize(12);
		//$objPHPExcel->getActiveSheet()->getStyle('A1')->getFill()->getStartColor()->setARGB('#333');
	
		$baris = 5;
		$baris2 = 7;
		$baris3 = 10;
		
		foreach($rinci as $rinci){
				$objPHPExcel->getActiveSheet()->setCellValue('F'.$baris2, $rinci->nama_dosen);
			}
		foreach($data['matkul'] as $data){
			$objPHPExcel->getActiveSheet()->setCellValue('A'.$baris, $data->nama_matkul);
			$objPHPExcel->getActiveSheet()->setCellValue('B'.$baris, $data->kode_matkul);
			$objPHPExcel->getActiveSheet()->setCellValue('C'.$baris, $data->rumpun_mk);
			$objPHPExcel->getActiveSheet()->setCellValue('D'.$baris,"SKS Teori : " .$data->sks_teori);
			$objPHPExcel->getActiveSheet()->setCellValue('E'.$baris, "SKS Praktek : ". $data->sks_praktek);
			$objPHPExcel->getActiveSheet()->setCellValue('F'.$baris, $data->semester);

			$objPHPExcel->getActiveSheet()->setCellValue('B'.$baris2, $data->koordinator);
			$objPHPExcel->getActiveSheet()->setCellValue('D'.$baris2, $data->koordinator_jurusan);


		}

		foreach($cplmk as $cplmk){
			$objPHPExcel->getActiveSheet()->setCellValue('B'.$baris3, $cplmk->kode_cpl);
			$objPHPExcel->getActiveSheet()->setCellValue('C'.$baris3, $cplmk->cpl);

			$baris3++;
			$objPHPExcel->getActiveSheet()->setCellValue('B'.$baris3, 'Capaian Pembelajaran Mata Kuliah (CP-MK)')->getStyle('B'.$baris3)->getFont()->setBold(true);			
	
		}
		$baris4 = $baris3++;
		$baris5 = $baris4+1;

		foreach($cpmk as $cpmkk){
				$objPHPExcel->getActiveSheet()->setCellValue('B'.$baris5, $cpmkk->kode_cpmk);
				$objPHPExcel->getActiveSheet()->setCellValue('C'.$baris5, $cpmkk->cpmk);

				$baris5++;

				$objPHPExcel->getActiveSheet()->setCellValue('B'.$baris5, 'Kemampuan Akhir Tiap Tahapan belajar Sub CPMK')->getStyle('B'.$baris5)->getFont()->setBold(true);	
		}

		$baris6 = $baris5++;
		$baris7 = $baris6 + 1;

		foreach($subcpmk as $subcpmkk){
				$objPHPExcel->getActiveSheet()->setCellValue('B'.$baris7, $subcpmkk->kode_subcpmk);
				$objPHPExcel->getActiveSheet()->setCellValue('C'.$baris7, $subcpmkk->subcpmk);

				$baris7++;
		}
		$baris8 = $baris7++;

		$objPHPExcel->getActiveSheet()->setCellValue('A'.$baris8, 'Deskripsi Singkat MK')->getStyle('A'.$baris8)->getFont()->setBold(true);

		foreach($deskripsi as $deskripsii){
				$objPHPExcel->getActiveSheet()->setCellValue('B'.$baris8, $deskripsii->deskripsi_mk);

		}

		$baris9 = $baris8 + 1;

		$objPHPExcel->getActiveSheet()->setCellValue('A'.$baris9, 'Mata Kuliah syarat')->getStyle('A'.$baris9)->getFont()->setBold(true);

		foreach($syarat as $syaratt){
				$objPHPExcel->getActiveSheet()->setCellValue('B'.$baris9, $syaratt->syarat);

		}

		$baris10 = $baris9 + 1;

		$objPHPExcel->getActiveSheet()->setCellValue('A'.$baris10, 'Bahan Kajian Materi Pembelajaran')->getStyle('A'.$baris10)->getFont()->setBold(true);
		foreach($kajian as $kajiann){
				$objPHPExcel->getActiveSheet()->setCellValue('B'.$baris10, $kajiann->bahan_kajian);

		}

		$baris11 = $baris10 + 1;
		$baris11a = $baris11 + 1;

		$objPHPExcel->getActiveSheet()->setCellValue('A'.$baris11, 'Pustaka')->getStyle('A'.$baris11)->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->setCellValue('B'.$baris11, 'Utama')->getStyle('B'.$baris11)->getFont()->setBold(true);

		foreach($utama as $utamaa){
				$objPHPExcel->getActiveSheet()->setCellValue('B'.$baris11a, $utamaa->pustaka_utama);
				$baris11++;

		}

		$baris12 = $baris11++;
		$baris13 = $baris12 + 1 ;
		$baris13a = $baris13 + 1 ;

		$objPHPExcel->getActiveSheet()->setCellValue('B'.$baris13, 'Pendukung')->getStyle('B'.$baris13)->getFont()->setBold(true);

		foreach($pendukung as $pendukungg){
				$objPHPExcel->getActiveSheet()->setCellValue('B'.$baris13a, $pendukungg->pustaka_pendukung);
				$baris13a++;

		}

		$baris14 = $baris13a++ ;
		$baris15 = $baris14 + 1 ;

		$objPHPExcel->getActiveSheet()->setCellValue('A'.$baris15, 'Detail RPS')->getStyle('A'.$baris15)->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->mergeCells('A'.$baris15.':H'.$baris15);
		$objPHPExcel->getActiveSheet()->getStyle('A'.$baris15)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

		$baris16 = $baris15 + 1;
		$objPHPExcel->getActiveSheet()->setCellValue('A'.$baris16, 'Minggu ke-')->getStyle('A'.$baris16)->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->setCellValue('B'.$baris16, 'Subcpmk')->getStyle('B'.$baris16)->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->setCellValue('C'.$baris16, 'Penilaian')->getStyle('C'.$baris16)->getFont()->setBold(true);
		$string = "Bentuk Pembelajaran; Metode" . PHP_EOL . " Pembelajaran; Penugasan Mahasiswa; ". PHP_EOL . " [Estimasi Waktu]";
		$objPHPExcel->getActiveSheet()->setCellValue('E'.$baris16,$string)->getStyle('E'.$baris16)->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->setCellValue('G'.$baris16, 'Materi Pembelajaran')->getStyle('G'.$baris16)->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->setCellValue('H'.$baris16, 'Bobot Penilaian')->getStyle('H'.$baris16)->getFont()->setBold(true);

		$objPHPExcel->getActiveSheet()->mergeCells('C'.$baris16.':D'.$baris16);
		$objPHPExcel->getActiveSheet()->mergeCells('E'.$baris16.':F'.$baris16);

		$baris17 = $baris16 + 1;

		foreach($detail as $detaill){
				$objPHPExcel->getActiveSheet()->setCellValue('A'.$baris17, $detaill->minggu);
				$objPHPExcel->getActiveSheet()->setCellValue('B'.$baris17, $detaill->subcpmk);
				$objPHPExcel->getActiveSheet()->setCellValue('C'.$baris17, "Indikator : ".$detaill->indikator);
				$objPHPExcel->getActiveSheet()->setCellValue('D'.$baris17, "Kriteria & Bentuk : ".$detaill->kriteria);
				$objPHPExcel->getActiveSheet()->setCellValue('E'.$baris17, "Luring : ".$detaill->luring);
				$objPHPExcel->getActiveSheet()->setCellValue('F'.$baris17, "Daring : ".$detaill->daring);
				$objPHPExcel->getActiveSheet()->setCellValue('G'.$baris17, $detaill->materi);
				$objPHPExcel->getActiveSheet()->setCellValue('H'.$baris17, $detaill->bobot);
				$baris17++;

		}


		
		 $filename="RPS".date("d-m-Y-H-i-s").'.xlsx';
		 $objPHPExcel->getActiveSheet()->setTitle("RPS");

                header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'); //mime type
                header('Content-Disposition: attachment;filename="'.$filename.'"'); //tell browser what's the file name
                header('Cache-Control: max-age=0'); //no cache

        $writer=PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
        ob_end_clean();
        $writer->save('php://output');
        exit;

	}
}
