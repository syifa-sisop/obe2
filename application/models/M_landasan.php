<?php  

class M_landasan extends CI_Model{

    public function tampil()
    {
        $session = $_SESSION;
        $jurusan = $this->session->userdata('id_jurusan');
        $this->db->select('*');
                $this->db->from('landasan');
                $this->db->where('landasan.id_jurusan',$jurusan);
        $query = $this->db->get();
        return $query;
    }

    public function tampil2($id_jurusan)
    {
        $this->db->select('*');
                $this->db->from('landasan');
                $this->db->where('landasan.id_jurusan',$id_jurusan);
        $query = $this->db->get();
        return $query;
    }

    function insert_data($data)
    {
        $session = $_SESSION;
        $data= [
            'id_user'           => $this->session->userdata('id_user'),
            'filosofis'  =>$data['filosofis'],
            'psikologis'  =>$data['psikologis'],
            'sosiologis'  =>$data['sosiologis'],
            'iptek'  =>$data['iptek'],
            'id_jurusan'  =>$data['id_jurusan']
        ];
        
        $this->db->insert('landasan', $data);
         
    }

    public function updateFile($id_landasan, $data){
        $this->db->where('id_landasan', $id_landasan);
        return $this->db->update('landasan', $data);
    }
}