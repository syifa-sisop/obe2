<?php  
class M_matkul extends CI_Model{

	public function tampil($id_jurusan,$id_tahun)
    {
        $this->db->select('*');
                $this->db->from('matkul');
                $this->db->join('tahun_ajaran','matkul.id_tahun = tahun_ajaran.id_tahun', 'LEFT');
                $this->db->join('jurusan','matkul.id_jurusan = jurusan.id_jurusan', 'LEFT');
                $this->db->where('matkul.id_jurusan', $id_jurusan);
                $this->db->where('matkul.id_tahun', $id_tahun);
        $query = $this->db->get();
        return $query->result();
    }
    

    public function tampil2()
    {
        $session = $_SESSION;
        $jurusan = $this->session->userdata('id_jurusan');
        $this->db->select('*');
                $this->db->from('matkul');
                $this->db->join('tahun_ajaran','matkul.id_tahun = tahun_ajaran.id_tahun', 'LEFT');
                $this->db->join('pengampu_mk','matkul.id_matkul = pengampu_mk.id_matkul', 'LEFT');
                $this->db->where('matkul.id_jurusan',$jurusan);
                $this->db->where('tahun_ajaran.status_ajaran = "Aktif"');
        $query = $this->db->get();
        return $query;
    }

    public function tampil_matkul()
    {
        $session = $_SESSION;
        $jurusan = $this->session->userdata('id_jurusan');
        $this->db->select('*');
                $this->db->from('matkul');
                $this->db->join('tahun_ajaran','matkul.id_tahun = tahun_ajaran.id_tahun', 'LEFT');
                $this->db->join('pengampu_mk','matkul.id_matkul = pengampu_mk.id_matkul', 'LEFT');
                $this->db->where('matkul.id_jurusan',$jurusan);
                $this->db->where('tahun_ajaran.status_ajaran = "Aktif"');
        $query = $this->db->get();
        return $query;
    }

    public function tampil_matkul_baru()
    {
        $session = $_SESSION;
        $jurusan = $this->session->userdata('id_jurusan');
        $this->db->select('*');
                $this->db->from('matkul');
                $this->db->join('tahun_ajaran','matkul.id_tahun = tahun_ajaran.id_tahun', 'LEFT');
                //$this->db->join('pengampu_mk','matkul.id_matkul = pengampu_mk.id_matkul', 'LEFT');
                $this->db->where('matkul.id_jurusan',$jurusan);
                $this->db->where('tahun_ajaran.status_ajaran = "Aktif"');
        $query = $this->db->get();
        return $query;
    }

    public function tampil_matkul_thn($id_tahun)
    {
        $session = $_SESSION;
        $jurusan = $this->session->userdata('id_jurusan');
        $this->db->select('*');
                $this->db->from('matkul');
                $this->db->join('tahun_ajaran','matkul.id_tahun = tahun_ajaran.id_tahun', 'LEFT');
                //$this->db->join('pengampu_mk','matkul.id_matkul = pengampu_mk.id_matkul', 'LEFT');
                $this->db->where('matkul.id_jurusan',$jurusan);
                $this->db->where('tahun_ajaran.id_tahun', $id_tahun);
                //$this->db->limit(1);
        $query = $this->db->get();
        return $query;
    }

    public function tampil22($id_jurusan)
    {
        $this->db->select('*');
                $this->db->from('matkul');
                $this->db->join('tahun_ajaran','matkul.id_tahun = tahun_ajaran.id_tahun', 'LEFT');
                $this->db->join('pengampu_mk','matkul.id_matkul = pengampu_mk.id_matkul', 'LEFT');
                $this->db->where('matkul.id_jurusan',$id_jurusan);
                $this->db->where('tahun_ajaran.status_ajaran = "Aktif"');
        $query = $this->db->get();
        return $query;
    }

    public function tampil23($id_jurusan)
    {
        $this->db->select('*');
                $this->db->from('matkul');
                $this->db->join('tahun_ajaran','matkul.id_tahun = tahun_ajaran.id_tahun', 'LEFT');
                //$this->db->join('pengampu_mk','matkul.id_matkul = pengampu_mk.id_matkul', 'LEFT');
                $this->db->where('matkul.id_jurusan',$id_jurusan);
                $this->db->where('tahun_ajaran.status_ajaran = "Aktif"');
        $query = $this->db->get();
        return $query;
    }

    public function tampil3()
    {
        $session = $_SESSION;
        //$jurusan = $this->session->userdata('id_jurusan');
        $id_user = $this->session->userdata('id_user');

        $this->db->select('*');
                 $this->db->from('pengampu_mk');
                 $this->db->join('dosen','pengampu_mk.id_dosen = dosen.id_dosen', 'LEFT');
                 $this->db->where('dosen.id_user',$id_user);
                 $this->db->join('matkul','pengampu_mk.id_matkul = matkul.id_matkul', 'LEFT');
                 $this->db->join('tahun_ajaran','matkul.id_tahun = tahun_ajaran.id_tahun', 'LEFT');
                 $this->db->where('tahun_ajaran.status_ajaran = "Aktif"');
        $query = $this->db->get();
        return $query;
    }

    public function tampil3_data()
    {
        $session = $_SESSION;
        //$jurusan = $this->session->userdata('id_jurusan');
        $id_user = $this->session->userdata('id_user');

        $this->db->select('*');
                 $this->db->from('pengampu_mk');
                 $this->db->join('dosen','pengampu_mk.id_dosen = dosen.id_dosen', 'LEFT');
                 $this->db->join('matkul','pengampu_mk.id_matkul = matkul.id_matkul', 'LEFT');
                 $this->db->join('tahun_ajaran','matkul.id_tahun = tahun_ajaran.id_tahun', 'LEFT');
                 $this->db->where('dosen.id_user',$id_user);
                 $this->db->where('tahun_ajaran.status_ajaran = "Aktif"');
        $query = $this->db->get();
        return $query;
    }
    public function tampil4()
    {
        $session = $_SESSION;
        //$jurusan = $this->session->userdata('id_jurusan');
        $id_user = $this->session->userdata('id_user');

        $this->db->select('*');
                 $this->db->from('dosen');
                 $this->db->join('pengampu_mk','dosen.id_dosen = pengampu_mk.id_dosen', 'LEFT');
                 $this->db->join('matkul','pengampu_mk.id_matkul = matkul.id_matkul', 'LEFT');
                 $this->db->join('tahun_ajaran','matkul.id_tahun = tahun_ajaran.id_tahun', 'LEFT');
                 $this->db->order_by("tahun_ajaran.semester_ajaran", "asc");
                 $this->db->where('dosen.id_user',$id_user);
                 //$this->db->where('tahun_ajaran.status_ajaran = "Aktif"');
        $query = $this->db->get();
        return $query;
    }

    public function tampil_matkul3($id_tahun)
    {
        $this->db->select('*');
                $this->db->from('matkul');
                $this->db->join('tahun_ajaran','matkul.id_tahun = tahun_ajaran.id_tahun', 'LEFT');
                $this->db->join('jurusan','matkul.id_jurusan = jurusan.id_jurusan', 'LEFT');
                $this->db->where('tahun_ajaran.semester_ajaran = "Genap"');
                $this->db->where('matkul.id_tahun',$id_tahun);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function tampil_aktif($id_jurusan, $id_tahun)
    {
        $this->db->select('*');
                $this->db->from('matkul');
                $this->db->join('tahun_ajaran','matkul.id_tahun = tahun_ajaran.id_tahun', 'LEFT');
                $this->db->join('jurusan','matkul.id_jurusan = jurusan.id_jurusan', 'LEFT');
                $this->db->where('matkul.id_tahun',$id_tahun);
                $this->db->where('matkul.id_jurusan',$id_jurusan);
        $query = $this->db->get();
        return $query;
    }

    public function tampil_ajaran()
    {
        $this->db->select('*');
                $this->db->from('tahun_ajaran');
        $query = $this->db->get();
        return $query->result();
    }

    public function tampil_ajaran2()
    {
        $this->db->select('*');
                $this->db->from('tahun_ajaran');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function tampil_ganjil($id_tahun)
    {
        $this->db->select('*');
                $this->db->from('tahun_ajaran');
                $this->db->where('semester_ajaran = "Ganjil"' );
                $this->db->where('tahun_ajaran.id_tahun',$id_tahun);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function tampil_genap($id_tahun)
    {
        $this->db->select('*');
                $this->db->from('tahun_ajaran');
                $this->db->where('semester_ajaran = "Genap"' );
                $this->db->where('tahun_ajaran.id_tahun',$id_tahun);
        $query = $this->db->get();
        return $query;
    }

    public function tampil_data($id_jurusan,$id_tahun)
    {
        $this->db->select('*');
                $this->db->from('matkul');
                $this->db->join('tahun_ajaran','matkul.id_tahun = tahun_ajaran.id_tahun', 'LEFT');
                $this->db->join('jurusan','matkul.id_jurusan = jurusan.id_jurusan', 'LEFT');
                $this->db->where('matkul.id_jurusan', $id_jurusan);
                $this->db->where('matkul.id_tahun', $id_tahun);
        $query = $this->db->get();
        return $query->result_array();
    }

    function insert_data($data)
    {
        $data= [
            'nama_matkul'  =>$data['nama_matkul'],
            'kode_matkul'  =>$data['kode_matkul'],
            //'kelas'  =>$data['kelas'],
            'sks_teori'  =>$data['sks_teori'],
            'sks_praktek'  =>$data['sks_praktek'],
            //'semester_ajaran'  =>"Ganjil",
            'semester'  =>$data['semester'],
            'id_jurusan'  =>$data['id_jurusan'],
            'id_tahun'  =>$data['id_tahun']
        ];
        
        $this->db->insert('matkul', $data);
         
    }

    function insert_matkulgenap($data)
    {
        $data= [
            'nama_matkul'  =>$data['nama_matkul'],
            'kode_matkul'  =>$data['kode_matkul'],
            //'kelas'  =>$data['kelas'],
            'sks_teori'  =>$data['sks_teori'],
            'sks_praktek'  =>$data['sks_praktek'],
            'semester_ajaran'  =>"Genap",
            'semester'  =>$data['semester'],
            'id_jurusan'  =>$data['id_jurusan'],
            'id_tahun'  =>$data['id_tahun']
        ];
        
        $this->db->insert('matkul', $data);
         
    }

    function insert_ajaran($data)
    {
        $data= [
            'tahun_ajaran'  =>$data['tahun_ajaran'],
            'semester_ajaran'  =>$data['semester_ajaran'],
            'status_ajaran'  =>$data['status_ajaran']
        ];
        
        $this->db->insert('tahun_ajaran', $data);
         
    }

    public function updateFile($id_matkul, $data){
        $this->db->where('id_matkul', $id_matkul);
        return $this->db->update('matkul', $data);
    }

    public function updateAjaran($id_tahun, $data){
        $this->db->where('id_tahun', $id_tahun);
        return $this->db->update('tahun_ajaran', $data);
    }

    public function updateGanjil($ganjil,$data){
        $this->db->where('semester_ajaran', $ganjil);
        return $this->db->update('matkul', $data);
    }

    public function updateGenap($genap,$data){
        $this->db->where('semester_ajaran', $genap);
        return $this->db->update('matkul', $data);
    }

    public function hapus_data($table, $where)
    {
        $spn = $this->db->delete($table, $where);
        return $spn;
    }

    function setting_dosen($data)
    {
        
        $matkul = $this->input->post('id_matkul');
        $sql = $this->db->query("SELECT id_matkul FROM setting_dosen where id_matkul='$matkul'");
        $cek_user = $sql->num_rows();

        $check=$this->cek();
        $hasil = $this->db->where('id_matkul',$matkul)->get('setting_dosen');
        
        if($cek_user > 0)
        {
            $datas=array(
            'id_matkul'  =>$data['id_matkul']            
            );

            $this->db->from('setting_dosen');
            //$this->db->where('id_matkul', $matkul);
            $this->db->join('matkul', 'setting_dosen.id_matkul = matkul.id_matkul', 'LEFT');
            $query = $this->db->get();
            return $query;
        }
        else
        {
            
            $data= [
                
                'id_matkul'  =>$data['id_matkul'],
                'id_jurusan'  =>$data['id_jurusan']
                //'status'  =>1
            ];

            $this->db->insert('setting_dosen', $data);
        }
        
         return ($this->db->affected_rows()!=1)?false:true;
    }

    public function cek()
    {
        $datas=array(
            'id_matkul'=>$this->input->post('id_matkul')            
        );

        return $this->db->get_where('setting_dosen',$datas)->num_rows();
    

    }

    public function getAjaran($id_tahun){
        $this->db->select('*');
                $this->db->from('tahun_ajaran');
                $this->db->where('tahun_ajaran.id_tahun', $id_tahun);
        $query = $this->db->get();
        return $query;
    }

    public function getDataByID($id_matkul){
        $this->db->from('pengampu_mk');
        $this->db->join('matkul','pengampu_mk.id_matkul = matkul.id_matkul', 'LEFT');
         $this->db->join('jurusan','matkul.id_jurusan = jurusan.id_jurusan', 'LEFT');
        $this->db->join('fakultas','jurusan.id_fakultas = fakultas.id_fakultas', 'LEFT');
        $this->db->join('deskripsi_mk','pengampu_mk.id_matkul = deskripsi_mk.id_matkul', 'LEFT');
        $this->db->join('dosen','pengampu_mk.id_dosen = dosen.id_dosen', 'LEFT');
        $this->db->where('pengampu_mk.id_matkul', $id_matkul);
        $query = $this->db->get();
        return $query;
    }

    public function getDataByID2($id_matkul){
        $this->db->from('deskripsi_mk');
        $this->db->join('matkul','deskripsi_mk.id_matkul = matkul.id_matkul', 'LEFT');
        //$this->db->join('fakultas','jurusan.id_fakultas = fakultas.id_fakultas', 'LEFT');
        //$this->db->join('pengampu_mk','matkul.id_matkul = pengampu_mk.id_matkul', 'LEFT');
        //$this->db->join('deskripsi_mk','matkul.id_matkul = deskripsi_mk.id_matkul', 'LEFT');
        //$this->db->join('dosen','pengampu_mk.id_dosen = dosen.id_dosen', 'LEFT');
        $this->db->where('deskripsi_mk.id_matkul', $id_matkul);
        $query = $this->db->get();
        return $query;
    }

    public function getDatarinci($id_matkul){
        $this->db->from('deskripsi_mk');
        $this->db->join('matkul','deskripsi_mk.id_matkul = matkul.id_matkul', 'LEFT');
        //$this->db->join('fakultas','jurusan.id_fakultas = fakultas.id_fakultas', 'LEFT');
        $this->db->join('pengampu_mk','matkul.id_matkul = pengampu_mk.id_matkul', 'LEFT');
        //$this->db->join('jurusan','matkul.id_jurusan = jurusan.id_jurusan', 'LEFT');
        $this->db->join('dosen','pengampu_mk.id_dosen = dosen.id_dosen', 'LEFT');
        $this->db->where('deskripsi_mk.id_matkul', $id_matkul);
        $query = $this->db->get();
        return $query;
    }

    public function get_spesific($id_matkul, $id_pengampu)
    {
        return $this->db
                    ->where('id_matkul',$id_matkul)
                    ->where('id_pengampu',$id_pengampu)
                    ->limit(1)
                    ->get('pengampu_mk');
    }

}