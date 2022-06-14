<?php  
defined('BASEPATH') OR exit('No direct script acess allowed');

class My_login
{
    protected $CI;

    public function __construct()
    {
        $this->CI =& get_instance();
        //load model Auth
        $this->CI->load->model('User_model');
    }
    public function do_login()
    {
        $data = $this->CI->input->post();
        $this->CI->session->set_userdata('id_user', $data->id_user);
        $this->CI->session->set_userdata('email', $data->email);
        $this->CI->session->set_userdata('level', $data->level);

        $result = $this->CI->User_model->select($data);
        $cek = $this->CI->User_model->cek_status($data);

        if (count($result)==0) {
            $this->CI->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                  <strong>Username atau Password Anda Salah!!</strong> 
                                                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                </div>');
            redirect('C_registrasi/login');
        }elseif($cek['status']=="Tidak") {
            $this->CI->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                  <strong>This account has not been activated!!</strong> 
                                                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                </div>');
            redirect('C_registrasi/login');
        } 

        else {
            $this->CI->session->set_userdata($result);
            if($result['level']=="1")
                redirect('admin/C_dashboard');
            elseif($result['level']=="2")
                redirect('kurikulum/C_dashboard');
            elseif($result['level']=="3")
                redirect('dosen/C_dashboard');
            elseif($result['level']=="4")
                redirect('mahasiswa/C_dashboard');
            else{
                echo "Anda Belum Terdaftar";
            }
        }
    }
    
    //fungsi check login 
    public function check_login()
    {
        //jika belum login, dikebalikan ke halaman login
        if($this->CI->session->userdata('email')==""){
            $this->CI->session->set_flashdata('message','<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                  <strong> Anda Belum Login!!</strong>
                                                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                </div>');
            redirect('C_registrasi/login');
        }
    }
}   