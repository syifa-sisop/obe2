<?php  

class M_jurusan extends CI_Model{

	public function tampil()
    {
        $this->db->select('*');
        $this->db->from('jurusan');
        $query = $this->db->get();
        return $query;
    }

    public function tampil_data()
    {
        $session = $_SESSION;
        $jurusan = $this->session->userdata('id_jurusan');

        $this->db->select('*');
                $this->db->from('jurusan');
                $this->db->join('fakultas','jurusan.id_fakultas = fakultas.id_fakultas', 'LEFT');
                $this->db->where('jurusan.id_jurusan',$jurusan);
        $query = $this->db->get();
        return $query;
    }
}