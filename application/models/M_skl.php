<?php  

class M_skl extends CI_Model{

    public function tampil()
    {
        $session = $_SESSION;
        $jurusan = $this->session->userdata('id_jurusan');
        $this->db->select('*');
                $this->db->from('skl');
                $this->db->join('cpl','skl.id_cpl = cpl.id_cpl', 'LEFT');
                $this->db->where('skl.id_jurusan',$jurusan);
        $query = $this->db->get();
        return $query;
    }

    public function tampil2($id_jurusan)
    {
        $this->db->select('*');
                $this->db->from('skl');
                $this->db->join('cpl','skl.id_cpl = cpl.id_cpl', 'LEFT');
                $this->db->where('skl.id_jurusan',$id_jurusan);
        $query = $this->db->get();
        return $query;
    }

    function insert_data($data)
    {
        //$session = $_SESSION;
        $data= [
            //'id_user'           => $this->session->userdata('id_user'),
            'kode_skl'  =>$data['kode_skl'],
            'skl'  =>$data['skl'],
            'id_cpl'  =>$data['id_cpl'],
            'id_jurusan'  =>$data['id_jurusan']
        ];
        
        $this->db->insert('skl', $data);
         
    }

    public function updateskl($id_skl, $data){
        $this->db->where('id_skl', $id_skl);
        return $this->db->update('skl', $data);
    }

    public function hapus_data($table, $where)
    {
        $spn = $this->db->delete($table, $where);
        return $spn;
        
    }
}