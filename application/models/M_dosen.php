<?php  

class M_dosen extends CI_Model{

	public function tampil($id_jurusan)
    {
        $this->db->select('*');
                $this->db->from('dosen');
                $this->db->join('user','dosen.id_user = user.id_user', 'LEFT');
                $this->db->join('jurusan','dosen.id_jurusan = jurusan.id_jurusan', 'LEFT');
                $this->db->where('dosen.id_jurusan', $id_jurusan);
        $query = $this->db->get();
        return $query;
    }

    public function tampil2()
    {
        $this->db->select('*');
                $this->db->from('dosen');
                $this->db->join('user','dosen.id_user = user.id_user', 'LEFT');
                $this->db->join('jurusan','dosen.id_jurusan = jurusan.id_jurusan', 'LEFT');
                //$this->db->where('dosen.id_jurusan', $id_jurusan);
        $query = $this->db->get();
        return $query;
    }

    public function tampil_dosen()
    {
        $session = $_SESSION;
        $jurusan = $this->session->userdata('id_jurusan');
        $this->db->select('*');
                $this->db->from('dosen');
                $this->db->where('dosen.id_jurusan',$jurusan);
        $query = $this->db->get();
        return $query;
    }

    public function tampil_dosen2($id_jurusan)
    {
        $this->db->select('*');
                $this->db->from('dosen');
                $this->db->where('dosen.id_jurusan',$id_jurusan);
        $query = $this->db->get();
        return $query;
    }

    public function insert_dosen($data)
    {
        $data= [
            //'username'          => $this->input->post('username'),
            'email'             => $this->input->post('email'),
            'password'          => md5($this->input->post('password')),
            'level'             => '3',
            'status'            => 'Aktif',
            'date_created'      => time()
        ];
        
        $item = [
                'id_jurusan'    => $this->input->post('id_jurusan'),
                'nama_dosen'    => $this->input->post('nama_dosen'),
                //'nip'           => $this->input->post('nip'),
                'email'         => $this->input->post('email'),
                'gambar'        => 'gambar.png'
        ];

        $this->db->insert('user', $data);
        $item['id_user'] = $this->db->insert_id();
        $this->db->insert('dosen', $item);
         
    }

    public function updateDosen($id_user, $data){
        $this->db->where('id_user', $id_user);
        return $this->db->update('dosen', $data);
    }

    public function updateUser($id_user, $item){
        $this->db->where('id_user', $id_user);
        return $this->db->update('user', $item);
    }

    public function hapus_data($table, $where)
    {
        $spn = $this->db->delete($table, $where);
        return $spn;
    }

   public function get_dosen($id){
        $this->db->from('dosen');
        $this->db->order_by('nama_dosen','ASC');
        $this->db->where('id_jurusan', $id);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_email($id)
    {
        $this->db->from('dosen');
        $this->db->where('dosen.id_jurusan', $id);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_matkul($id)
    {
        $this->db->from('matkul');
        $this->db->where('matkul.id_jurusan', $id);
        $query = $this->db->get();
        return $query->result();
    }
}