<?php  
class M_setting extends CI_Model{

	public function tampil()
    {
        $session = $_SESSION;
        $jurusan = $this->session->userdata('id_jurusan');
        $id_user = $this->session->userdata('id_user');

        $this->db->select('*');
                $this->db->from('setting');
                $this->db->join('jurusan','setting.id_jurusan = jurusan.id_jurusan', 'LEFT');
                $this->db->where('setting.id_jurusan',$jurusan);
        $query = $this->db->get();
        return $query->result();
    }

    public function tampil2($id_jurusan)
    {

        $this->db->select('*');
                $this->db->from('setting');
                $this->db->join('jurusan','setting.id_jurusan = jurusan.id_jurusan', 'LEFT');
                $this->db->where('setting.id_jurusan',$id_jurusan);
        $query = $this->db->get();
        return $query->result();
    }

    public function tampil_matkul()
    {
        $session = $_SESSION;
        $jurusan = $this->session->userdata('id_jurusan');

        $this->db->select('*');
                $this->db->from('setting_dosen');
                $this->db->join('jurusan','setting_dosen.id_jurusan = jurusan.id_jurusan', 'LEFT');
                $this->db->join('matkul','setting_dosen.id_matkul = matkul.id_matkul', 'LEFT');
                $this->db->where('setting_dosen.id_jurusan',$jurusan);
        $query = $this->db->get();
        return $query->result();
    }

    public function tampil_aspek()
    {
        return $this->db
                    ->get('aspek')->result_array();
    }

    public function tampil_aspek2()
    {
        return $this->db
                    ->get('aspek')->result();
    }

    public function tampil_profil()
    {
        $session = $_SESSION;
        $jurusan = $this->session->userdata('id_jurusan');

        $this->db->select('*');
                $this->db->from('profil_lulusan');
                $this->db->where('profil_lulusan.id_jurusan',$jurusan);
        $query = $this->db->get();
        return $query;
    }

    public function tampil_profil2()
    {

        $this->db->select('*');
                $this->db->from('profil_cpl');
                // $this->db->where('profil_lulusan.id_jurusan',$id_jurusan);
        $query = $this->db->get();
        return $query;
    }

    public function tampil_cpl()
    {
        $session = $_SESSION;
        $jurusan = $this->session->userdata('id_jurusan');
        $this->db->select('*');
                $this->db->from('cpl');
                $this->db->join('aspek','cpl.id_aspek = aspek.id_aspek', 'LEFT');
                $this->db->where('cpl.id_jurusan',$jurusan);
        $query = $this->db->get();
        return $query;
    }

    public function tampil_cpl3()
    {
        $session = $_SESSION;
        $jurusan = $this->session->userdata('id_jurusan');
        $this->db->select('*');
                $this->db->from('cpl');
                $this->db->where('cpl.id_jurusan',$jurusan);
        $query = $this->db->get();
        return $query;
    }

    public function tampil_cpl2($id_jurusan)
    {
        $this->db->select('*');
                $this->db->from('cpl');
                $this->db->join('aspek','cpl.id_aspek = aspek.id_aspek', 'LEFT');
                $this->db->where('cpl.id_jurusan',$id_jurusan);
        $query = $this->db->get();
        return $query;
    }

    function insert_data($data)
    {
        $session = $_SESSION;
        $data= [
            'id_user'           => $this->session->userdata('id_user'),
            'kode_lulusan'  =>$data['kode_lulusan'],
            'profil'  =>$data['profil'],
            'deskripsi'  =>$data['deskripsi'],
            'id_jurusan'  =>$data['id_jurusan']
        ];
        
        $this->db->insert('profil_lulusan', $data);
         
    }

    function insert_cpl($data)
    {
        $session = $_SESSION;
        $data= [
            'id_user'           => $this->session->userdata('id_user'),
            'kode_cpl'  =>$data['kode_cpl'],
            'cpl'  =>$data['cpl'],
            'sumber'  =>$data['sumber'],
            'id_aspek'  =>$data['id_aspek'],
            'id_jurusan'  =>$data['id_jurusan']
        ];
        
        $this->db->insert('cpl', $data);
         
    }

    public function updateFile($id_lulusan, $data){
        $this->db->where('id_lulusan', $id_lulusan);
        return $this->db->update('profil_lulusan', $data);
    }

    public function updateCpl($id_cpl, $data){
        $this->db->where('id_cpl', $id_cpl);
        return $this->db->update('cpl', $data);
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}