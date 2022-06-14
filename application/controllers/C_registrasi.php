<?php 

class C_registrasi extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
        $data['prodi'] = $this->M_prodi->tampil_jurusan()->result();
		$this->load->view('registrasi', $data);
	}

	public function login()
	{
		$this->load->view('login');
	}

	public function input()
    {
    	$this->form_validation->set_rules('nama_mhs', 'Nama', 'required|trim');
    	$this->form_validation->set_rules('npm', 'NPM', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|is_unique[user.email]');
        //$this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('no_hp', 'No Hp', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]');

        if( $this->form_validation->run() == false) {

            $data['prodi'] = $this->M_prodi->tampil_jurusan()->result();
            $this->load->view('registrasi', $data);
        }
        else {
            
            $data = [
                'email'         => $this->input->post('email'),
                'password'      => md5($this->input->post('password')),
                'level'        => '4',
                'status'        => 'Aktif',
                'date_created'  => time()
            ];

             $item = [
                'nama_mhs'         => $this->input->post('nama_mhs'),
                'npm'         => $this->input->post('npm'),
                'email'         => $this->input->post('email'),
                'no_hp'         => $this->input->post('no_hp'),
                'id_jurusan'         => $this->input->post('id_jurusan'),
                'gambar'          => 'gambar.png'
            ];

            //token
            $token = base64_encode(random_bytes(32));
            $user_token = [
                'email'         => $this->input->post('email'),
                'token'         => $token,
                'date_created'  => time()
            ];

            $this->db->insert('user', $data);
            $item['id_user'] = $this->db->insert_id();
            $this->db->insert('mahasiswa', $item);
            $this->db->insert('user_token', $user_token);

            //$this->_sendEmail($token, 'verify');

           $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">
                                                  <strong> Account has been registered Please login</strong>
                                                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                </div>');
            redirect('C_registrasi/login');
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

        if($type == 'verify'){
            $this->email->subject('Account activation');
            $this->email->message('<strong>ACTIVATE YOUR ACCOUNT</strong><br> Hooray! 🎉🎉<br> Click below to complete your registration and activate your account. <br><a href="'. base_url() . 'C_registrasi/verify?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">ACTIVATE ACCOUNT</a>');
        }else{
            echo "gagal";
        }
        

        if($this->email->send()){
            return true;
        }else {
            echo $this->email->print_debugger();
            die;
        }
    }

    public function verify()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if($user){ 
            $user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();

            if($user_token){ 
                $this->db->set('status', "Aktif");
                $this->db->where('email', $email);
                $this->db->update('user');

                $this->db->delete('user_token', ['email' => $email]);

                $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">
                                                  <strong> Account has been activated! Please login</strong>
                                                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                </div>');
                redirect('C_registrasi/login');

            }else{
                $this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                  <strong> Account activation failed!! Wrong Token</strong>
                                                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                </div>');
                redirect('C_registrasi/login');
            }
        }else{
            $this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                  <strong> Account activation failed!! Wrong Email</strong>
                                                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                </div>');
            redirect('C_registrasi/login');
        }
    }

    public function masuk()
    {
        $this->my_login->do_login();
   
    }

	function logout()
    {
        $this->session->sess_destroy();
        redirect('C_dashboard');
    }
}