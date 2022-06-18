<?php  

class M_kajian extends CI_Model{

    public function tampil()
    {
        $session = $_SESSION;
        $jurusan = $this->session->userdata('id_jurusan');
        $this->db->select('*');
                $this->db->from('kajian');
                $this->db->where('kajian.id_jurusan',$jurusan);
        $query = $this->db->get();
        return $query;
    }

    public function tampil2($id_jurusan)
    {
        $this->db->select('*');
                $this->db->from('kajian');
                $this->db->where('kajian.id_jurusan',$id_jurusan);
        $query = $this->db->get();
        return $query;
    }

    public function tampil3()
    {
        $this->db->select('*');
                $this->db->from('kajian_cpl');
                // $this->db->where('profil_lulusan.id_jurusan',$id_jurusan);
        $query = $this->db->get();
        return $query;
    }

    public function tampil4($id_jurusan)
    {
        $this->db->select('*');
                $this->db->from('kajian_cpl');
                $this->db->where('kajian_cpl.id_jurusan',$id_jurusan);
        $query = $this->db->get();
        return $query;
    }

    function insert_data($data)
    {
        $session = $_SESSION;
        $data= [
            'id_user'           => $this->session->userdata('id_user'),
            'nama_kajian'  =>$data['nama_kajian'],
            'deskripsi'  =>$data['deskripsi'],
            'id_jurusan'  =>$data['id_jurusan']
        ];
        
        $this->db->insert('kajian', $data);
         
    }

    public function updateFile($id_kajian, $data){
        $this->db->where('id_kajian', $id_kajian);
        return $this->db->update('kajian', $data);
    }
}