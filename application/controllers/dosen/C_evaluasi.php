<?php 

class C_evaluasi extends CI_Controller{
    
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
		$data['print'] = $this->M_matkul->get_spesific($id_matkul, $id_pengampu)->result_array();

		$data['evaluasi'] = $this->M_evaluasi->tampil($id_matkul)->result();
		$data['evaluasi2'] = $this->M_evaluasi->tampil($id_matkul)->result_array();
		$data['detail'] = $this->M_rumpun->detail($id_matkul)->result();
		$data['detail2'] = $this->M_rumpun->detail($id_matkul)->result_array();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_dosen/sidebar2', $data);
		$this->load->view('dosen/evaluasi/v_evaluasi', $data);
		$this->load->view('templates_admin/footer');
	}

	public function insert($id_matkul, $id_pengampu)
    {
        if ($this->input->post()) {
            //insert data ke database
            //memanggil model
            $data = $this->input->post();
            //memanggil model
            $this->M_evaluasi->insert($data);
            $this->session->set_flashdata('insert_data','Data Berhasil Ditambahkan !!');
            redirect('dosen/C_evaluasi/index/'.$id_matkul.'/'.$id_pengampu);
        }
    }

    public function ubah($id_matkul, $id_pengampu)
    {
        $id_evaluasi = $this->input->post('id_evaluasi');

        $data = array(
            'id_detailrps'              => $this->input->post('id_detailrps'),
            'asesmen'              => $this->input->post('asesmen')
        );
        $update = $this->M_evaluasi->updateFile($id_evaluasi, $data);

        if ($update) {
            $this->session->set_flashdata('update_data','Data Berhasil Diupdate !!');
            redirect(base_url('dosen/C_evaluasi/index/'.$id_matkul.'/'.$id_pengampu));
        }else{
            echo "Gagal";
            }
    }

    public function delete($id_matkul, $id_evaluasi, $id_pengampu)
    {
        $where = array('id_evaluasi'=> $id_evaluasi);
        $this->M_rumpun->hapus_data($where,'evaluasi');
        $this->session->set_flashdata('hapus_data','Data Berhasil Dihapus !!');
        redirect('dosen/C_evaluasi/index/'.$id_matkul.'/'.$id_pengampu);
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

        
        $data['abcd'] = $this->M_matkul->get_spesific($id_matkul, $id_pengampu)->result();
        $data['evaluasi'] = $this->M_evaluasi->tampil($id_matkul)->result();
		$data['evaluasi2'] = $this->M_evaluasi->tampil($id_matkul)->result_array();
		$data['detail'] = $this->M_rumpun->detail($id_matkul)->result();
		$data['detail2'] = $this->M_rumpun->detail($id_matkul)->result_array();

        $this->load->view('templates_admin/header');
        $this->load->view('dosen/evaluasi/v_print', $data);
        $this->load->view('templates_admin/footer');
        
    }

    public function export($id_matkul)
    {
        $data['matkul'] = $this->M_matkul->getDataByID($id_matkul)->result();
        $matkul = $this->M_matkul->getDataByID($id_matkul)->result();
        $rinci = $this->M_matkul->getDatarinci($id_matkul)->result();
        $evaluasi = $this->M_evaluasi->tampil($id_matkul)->result();

        require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel.php');
        require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

        $excel = new PHPExcel();

        $excel->getProperties()->setCreator("e-OBE UPNV Jatim");
        $excel->getProperties()->setLastModifiedBy("e-OBE UPNV Jatim");
        $excel->getProperties()->setTitle("Evaluasi RPS");
        $excel->getProperties()->setSubject("");
        $excel->getProperties()->setDescription("");

        $excel->setActiveSheetIndex(0);

        $excel->getActiveSheet()->setCellValue('A1', 'UNIVERSITAS PEMBANGUNAN NASIONAL VETERAN JAWA TIMUR');
        foreach($matkul as $matkull){
                $excel->getActiveSheet()->setCellValue('A2', 'Fakultas '.$matkull->nama_fakultas.' Prodi '. $matkull->nama);
                $excel->getActiveSheet()->setCellValue('A3', 'RENCANA ASESMEN DAN EVALUASI (ASSESMENT AND EVALUATION PLAN)');
            }

        $excel->getActiveSheet()->setCellValue('A5', 'Mata Kuliah');
        $excel->getActiveSheet()->setCellValue('A6', 'Kode Matkul');
        $excel->getActiveSheet()->setCellValue('C6', 'SKS Credit');
        $excel->getActiveSheet()->setCellValue('E6', 'Semester');
        $excel->getActiveSheet()->setCellValue('A7', 'Dosen Pengampu Lecturer');
        $excel->getActiveSheet()->setCellValue('A8', 'Bentuk Asesmen dan Evaluasi');

        $excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $excel->getActiveSheet()->getStyle('A2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $excel->getActiveSheet()->getStyle('A3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $excel->getActiveSheet()->getStyle('A8')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $excel->getActiveSheet()->getStyle('A5')->getFont()->setBold(true);
        $excel->getActiveSheet()->getStyle('A6')->getFont()->setBold(true);
        $excel->getActiveSheet()->getStyle('C6')->getFont()->setBold(true);
        $excel->getActiveSheet()->getStyle('E6')->getFont()->setBold(true);
        $excel->getActiveSheet()->getStyle('A7')->getFont()->setBold(true);
        $excel->getActiveSheet()->getStyle('A8')->getFont()->setBold(true);
        $excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(14);
        $excel->getActiveSheet()->getStyle('A2')->getFont()->setSize(12);
        $excel->getActiveSheet()->getStyle('A3')->getFont()->setSize(12);


            foreach($rinci as $rinci){
               $excel->getActiveSheet()->setCellValue('B7', $rinci->nama_dosen);
            }
            foreach($data['matkul'] as $dataa){
            $sks = $dataa->sks_teori + $dataa->sks_praktek;
        
            $excel->getActiveSheet()->setCellValue('B5', $dataa->nama_matkul);
            $excel->getActiveSheet()->setCellValue('B6', $dataa->kode_matkul);
            $excel->getActiveSheet()->setCellValue('D6', $sks);
            $excel->getActiveSheet()->setCellValue('F6', $dataa->semester);
            }

        $excel->getActiveSheet()->mergeCells('A1:F1');
        $excel->getActiveSheet()->mergeCells('A2:F2');
        $excel->getActiveSheet()->mergeCells('A3:F3');
        $excel->getActiveSheet()->mergeCells('B5:F5');
        $excel->getActiveSheet()->mergeCells('B7:F7');
        $excel->getActiveSheet()->mergeCells('A8:F8');


        $excel->getActiveSheet()->setCellValue('A10', 'Minggu Ke-');
        $excel->getActiveSheet()->setCellValue('B10', 'Sub Capaian Pembelajaran MK Lesson Learning Outcome (LLO)');
        $excel->getActiveSheet()->setCellValue('D10', 'Bentuk Asesmen (Assesment Mode)');
        $excel->getActiveSheet()->setCellValue('F10', 'Bobot Weight (%)');

        $excel->getActiveSheet()->mergeCells('B10:C10');
        $excel->getActiveSheet()->mergeCells('D10:E10');

        $excel->getActiveSheet()->getStyle('A10')->getFont()->setBold(true);
        $excel->getActiveSheet()->getStyle('B10')->getFont()->setBold(true);
        $excel->getActiveSheet()->getStyle('D10')->getFont()->setBold(true);
        $excel->getActiveSheet()->getStyle('F10')->getFont()->setBold(true);

        $baris = 11;

        foreach($evaluasi as $evaluasii){
                $excel->getActiveSheet()->setCellValue('A'.$baris, $evaluasii->minggu);
                $excel->getActiveSheet()->setCellValue('B'.$baris, $evaluasii->subcpmk);
                $excel->getActiveSheet()->setCellValue('D'.$baris, $evaluasii->asesmen);
                $excel->getActiveSheet()->setCellValue('F'.$baris, $evaluasii->bobot);

                $baris++;
        }



        $filename="Evaluasi_RPS".date("d-m-Y-H-i-s").'.xlsx';
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