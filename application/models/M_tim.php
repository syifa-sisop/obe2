<?php  

class M_tim extends CI_Model{

	public function tampil($id_jurusan)
    {
        $this->db->select('*');
                $this->db->from('profil');
                $this->db->join('user','profil.id_user = user.id_user', 'LEFT');
                $this->db->join('dosen','profil.id_dosen = dosen.id_dosen', 'LEFT');
                $this->db->join('jurusan','profil.id_jurusan = jurusan.id_jurusan', 'LEFT');
                $this->db->where('profil.id_jurusan', $id_jurusan);
        $query = $this->db->get();
        return $query;
    }

    public function tampil_tim()
    {
        $session = $_SESSION;
        $jurusan = $this->session->userdata('id_jurusan');
        $this->db->select('*');
                $this->db->from('profil');
                $this->db->join('dosen','profil.id_dosen = dosen.id_dosen', 'LEFT');
                $this->db->where('profil.id_jurusan',$jurusan);
        $query = $this->db->get();
        return $query;
    }

    public function tampil_tim2($id_jurusan)
    {
        $this->db->select('*');
                $this->db->from('profil');
                $this->db->join('dosen','profil.id_dosen = dosen.id_dosen', 'LEFT');
                $this->db->where('profil.id_jurusan',$id_jurusan);
        $query = $this->db->get();
        return $query;
    }

    public function insert_tim($data)
    {
        $data= [
            //'username'          => $this->input->post('username'),
            'email'             => $this->input->post('email'),
            'password'          => md5($this->input->post('password')),
            'level'             => '2',
            'status'            => 'Aktif',
            'date_created'      => time()
        ];
        
        $item = [
                'id_jurusan'    => $this->input->post('prodi'),
                'id_dosen'    => $this->input->post('dosen'),
                //'nip'           => $this->input->post('nip'),
                'email'         => $this->input->post('email')
        ];

        $this->db->insert('user', $data);
        $item['id_user'] = $this->db->insert_id();
        $this->db->insert('profil', $item);
         
    }
}