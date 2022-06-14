<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class FormLoop extends CI_Controller {

  public function index()
  {
    $data['title'] = "Insert Form Looping Using Javascript";
    $this->load->view('form_loop', $data);
  }

  public function post($id_matkul)
  {
    if ($this->input->post()) {
            //insert data ke database
            $i = 0; // untuk loopingnya
            $a = $this->input->post('kode_bary');
            $b = $this->input->post('last_name');
            if ($a[0] !== null) 
            {
              foreach ($a as $row) 
              {
                $data = [
                  'kode_bary'=>$row,
                  'last_name'=>$b[$i],
                ];

                $insert = $this->db->insert('biodata', $data);
                if ($insert) {
                  $i++;
                }
              }
            }
            $data = $this->input->post();
            //memanggil model
            $this->M_rumpun->insert_subcpmk($data);
            $this->session->set_flashdata('insert_data','Data Berhasil Ditambahkan !!');
            redirect('dosen/C_rps/index/'.$id_matkul);
        }
        else{
        $data['cpmk2'] = $this->M_rumpun->cpmk($id_matkul)->result();
        $data['cpmk']=$this->M_rumpun->cpmk2();
        $data['data'] = $this->M_matkul->getDataByID($id_matkul)->row();
        $data['user'] = $this->M_profil->tampil_dosen()->result();

        $this->load->view('dosen/rps/v_insertsubcpmk', $data);
        }
    $i = 0; // untuk loopingnya
    $a = $this->input->post('first_name');
    $b = $this->input->post('last_name');
    if ($a[0] !== null) 
    {
      foreach ($a as $row) 
      {
        $data = [
          'first_name'=>$row,
          'last_name'=>$b[$i],
        ];

        $insert = $this->db->insert('biodata', $data);
        if ($insert) {
          $i++;
        }
      }
    }

    $arr['success'] = true;
    $arr['notif']  = '<div class="alert alert-success">
      <i class="fa fa-check"></i> Data Berhasil Disimpan
    </div>';
    return $this->output->set_output(json_encode($arr));

  }

}

/* End of file FormLoop.php */
/* Location: ./application/controllers/FormLoop.php */
  

 
