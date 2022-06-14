<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lupa_password extends CI_Controller
{
    public function index()
    {

        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $config['site_url'] = 'http://localhost/obe/';


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('lupa');
        } else {
            $email = $this->input->post('email');
            $clean = $this->security->xss_clean($email);
            $userInfo = $this->User_model->getUserInfoByEmail($clean);

            if (!$userInfo) {
                $this->session->set_flashdata('notif', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                  <strong> Email address salah, silakan coba lagi.!!</strong>
                                                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                </div>');
                redirect(site_url('Lupa_password'), 'refresh');
            }

            //build token   
            $token = base64_encode(random_bytes(32));
            $user_token = [
                'email'         => $this->input->post('email'),
                'token'         => $token,
                'date_created'  => time()
            ];
            $this->db->insert('user_token', $user_token);
            $this->_sendEmail($token, 'forgot');
            $this->session->set_flashdata('notif','<div class="alert alert-success alert-dismissible fade show" role="alert">
                                                  <strong> Please check your email to reset your password!!</strong>
                                                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                </div>');
            redirect(site_url('Lupa_password'), 'refresh');
        }
    }

    private function _sendEmail($token, $type)
    {
        $config = [
            'protocol'  => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'cobasambiroto123@gmail.com',
            'smtp_pass' => '#sambiroto8686',
            'smtp_port' =>  465,
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'newline'   => "\r\n"

        ];

        $this->load->library('email',$config);
        $this->email->from('cobasambiroto123@gmail.com', 'Admin e-OBE UPNV Jatim');
        $this->email->to($this->input->post('email'));

        if($type== 'forgot'){
            $this->email->subject('Reset Password');
            $this->email->message('<strong>RESET YOUR PASSWORD</strong><br> Click below to reset your password. <br><a href="'. base_url() . 'Lupa_password/reset_password?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">RESET PASSWORD</a>');
        }
        

        if($this->email->send()){
            return true;
        }else {
            echo $this->email->print_debugger();
            die;
        }
    }

    public function reset_password()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');

        $user = $this->db->get_where('user', ['email' => $email, 'status' => "Aktif"])->row_array();

        if($user){ 

            $user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();

            if($user_token){
                $this->session->set_userdata('reset_email', $email);
                $this->changePassword();
            }else{
                $this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                  <strong> Reset Password failed!! Wrong Token</strong>
                                                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                </div>');
                redirect('C_registrasi/login');
            }
        }else{
            $this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                  <strong> Reset Password failed!! Wrong Email</strong>
                                                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                </div>');
            redirect('C_registrasi/login    ');
        }
    }

    public function changePassword(){

        if(!$this->session->userdata('reset_email')) {
            redirect('C_registrasi/login');
        }

        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if( $this->form_validation->run() == false) {

            $this->load->view('reset');
        }
        else {
            $password = md5($this->input->post('password1'));
            $email = $this->session->userdata('reset_email');

            $this->db->set('password', $password);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->db->delete('user_token', ['email' => $email]);
            $this->session->unset_userdata('reset_email');

            $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">
                                                  <strong> Password has been changed! Please login.</strong>
                                                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                </div>');
            redirect('C_registrasi/login');
        }

        
    }
    
}