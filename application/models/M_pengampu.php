<?php  

class M_pengampu extends CI_Model{
	public function tampil($id_jurusan, $id_tahun)
    {
        $this->db->select('*');
                $this->db->from('pengampu_mk');
                $this->db->join('dosen','pengampu_mk.id_dosen = dosen.id_dosen', 'LEFT');
              //  $this->db->join('dosen','pengampu_mk.nama_dosen2 = dosen.id_dosen', 'LEFT');
               // $this->db->join('dosen','pengampu_mk.nama_dosen3 = dosen.id_dosen', 'LEFT');
               // $this->db->join('dosen','pengampu_mk.koordinator = dosen.id_dosen', 'LEFT');
                $this->db->join('matkul','pengampu_mk.id_matkul = matkul.id_matkul', 'LEFT');
                $this->db->join('tahun_ajaran','matkul.id_tahun = tahun_ajaran.id_tahun', 'LEFT');
                $this->db->join('jurusan','matkul.id_jurusan = jurusan.id_jurusan', 'LEFT');
                $this->db->where('jurusan.id_jurusan', $id_jurusan);
                $this->db->where('matkul.id_tahun', $id_tahun);
        $query = $this->db->get();
        return $query;
    }
    

    public function tampil_data()
    {
        $session = $_SESSION;
        $jurusan = $this->session->userdata('id_jurusan');
        $this->db->select('*');
                $this->db->from('pengampu_mk');
                $this->db->join('dosen','pengampu_mk.id_dosen = dosen.id_dosen', 'LEFT');
                //$this->db->join('dosen','pengampu_mk.nama_dosen2 = dosen.id_dosen', 'LEFT');
                //$this->db->join('dosen','pengampu_mk.nama_dosen3 = dosen.id_dosen', 'LEFT');
               // $this->db->join('dosen','pengampu_mk.koordinator = dosen.id_dosen', 'LEFT');
                $this->db->join('matkul','pengampu_mk.id_matkul = matkul.id_matkul', 'LEFT');
                $this->db->join('tahun_ajaran','matkul.id_tahun = tahun_ajaran.id_tahun', 'LEFT');
                $this->db->join('jurusan','matkul.id_jurusan = jurusan.id_jurusan', 'LEFT');
                $this->db->where('jurusan.id_jurusan',$jurusan);
                $this->db->where('tahun_ajaran.status_ajaran = "Aktif"');
        $query = $this->db->get();
        return $query;
    }

    public function tampil_data2($id_jurusan)
    {
        $this->db->select('*');
                $this->db->from('pengampu_mk');
                $this->db->join('dosen','pengampu_mk.id_dosen = dosen.id_dosen', 'LEFT');
               // $this->db->join('dosen','pengampu_mk.nama_dosen2 = dosen.id_dosen', 'LEFT');
               // $this->db->join('dosen','pengampu_mk.nama_dosen3 = dosen.id_dosen', 'LEFT');
               // $this->db->join('dosen','pengampu_mk.koordinator = dosen.id_dosen', 'LEFT');
                $this->db->join('matkul','pengampu_mk.id_matkul = matkul.id_matkul', 'LEFT');
                $this->db->join('tahun_ajaran','matkul.id_tahun = tahun_ajaran.id_tahun', 'LEFT');
                $this->db->join('jurusan','matkul.id_jurusan = jurusan.id_jurusan', 'LEFT');
                $this->db->where('jurusan.id_jurusan',$id_jurusan);
                $this->db->where('tahun_ajaran.status_ajaran = "Aktif"');
        $query = $this->db->get();
        return $query;
    }

    public function tampil_matkul_mhs()
    {
        $session = $_SESSION;
        $jurusan = $this->session->userdata('id_jurusan');
        $id_user = $this->session->userdata('id_user');
        $this->db->select('*');
                $this->db->from('matkul_mhs');
                $this->db->join('pengampu_mk','matkul_mhs.id_pengampu = pengampu_mk.id_pengampu', 'LEFT');
                $this->db->join('matkul','pengampu_mk.id_matkul = matkul.id_matkul', 'LEFT');
                $this->db->join('dosen','pengampu_mk.id_dosen = dosen.id_dosen', 'LEFT');
               // $this->db->join('dosen','pengampu_mk.nama_dosen2 = dosen.id_dosen', 'LEFT');
               // $this->db->join('dosen','pengampu_mk.nama_dosen3 = dosen.id_dosen', 'LEFT');
               // $this->db->join('dosen','pengampu_mk.koordinator = dosen.id_dosen', 'LEFT');
                $this->db->join('jurusan','matkul.id_jurusan = jurusan.id_jurusan', 'LEFT');
                $this->db->join('user','matkul_mhs.id_user = user.id_user', 'LEFT');
                $this->db->join('mahasiswa','user.id_user = mahasiswa.id_user', 'LEFT');
                $this->db->where('matkul_mhs.id_user',$id_user);
        $query = $this->db->get();
        return $query;
    }

    public function tampil_matkul_pilih()
    {
        $session = $_SESSION;
        $jurusan = $this->session->userdata('id_jurusan');
        //$id_user = $this->session->userdata('id_user');
        $this->db->select('*');
                $this->db->from('pengampu_mk');
                $this->db->join('matkul','pengampu_mk.id_matkul = matkul.id_matkul', 'LEFT');
                $this->db->join('tahun_ajaran','matkul.id_tahun = tahun_ajaran.id_tahun', 'LEFT');
                $this->db->join('jurusan','matkul.id_jurusan = jurusan.id_jurusan', 'LEFT');
                $this->db->where('jurusan.id_jurusan',$jurusan);
                $this->db->where('tahun_ajaran.status_ajaran = "Aktif"');
        $query = $this->db->get();
        return $query;
    }

    function insert_data($data)
    {
        $data= [
            'id_dosen'  =>$data['id_dosen'],
            'nama_dosen2'  =>$data['nama_dosen2'],
            'nama_dosen3'  =>$data['nama_dosen3'],
            'id_matkul'  =>$data['id_matkul'],
            'kelas'  =>$data['kelas'],
            'koordinator'  =>$data['koordinator']
        ];
        
        $this->db->insert('pengampu_mk', $data);
         
    }

    function insert_matkul_mhs($data)
    {
        $session = $_SESSION;
        $data= [
            'id_user'           => $this->session->userdata('id_user'),
            'id_pengampu'  =>$data['id_pengampu']
        ];
        
        $this->db->insert('matkul_mhs', $data);
         
    }

    public function get_spesific($id_pengampu)
    {
        return $this->db
                    ->where('id_pengampu',$id_pengampu)
                    ->join('matkul','pengampu_mk.id_matkul = matkul.id_matkul', 'LEFT')
                    ->join('dosen','pengampu_mk.id_dosen = dosen.id_dosen', 'LEFT')
                    ->join('jurusan','matkul.id_jurusan = jurusan.id_jurusan', 'LEFT')
                    ->get('pengampu_mk')
                    ->result();
    }

    function update_data($data)
    {
        $sql = "update pengampu_mk set id_dosen =?, id_matkul=? ,koordinator=?, kelas=? where id_pengampu =?";
        $this->db->query($sql, array($data['dosen'],$data['matkul'],$data['koordinator'],$data['kelas'],$data['id_pengampu']));
         
    }

    public function updateFile($id_pengampu, $data){
        $this->db->where('id_pengampu', $id_pengampu);
        return $this->db->update('pengampu_mk', $data);
    }

    public function update_matkul_mhs($id_matkulmhs, $data){
        $this->db->where('id_matkulmhs', $id_matkulmhs);
        return $this->db->update('matkul_mhs', $data);
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function hapus_data2($table, $where)
    {
        $spn = $this->db->delete($table, $where);
        return $spn;

        
    }
}