<?php  

class M_prodi extends CI_Model{

	public function tampil()
    {
        return $this->db
                    ->get('fakultas');
    }

    public function tampil_fakultas()
    {
        return $this->db
                    ->get('fakultas');
    }

    public function tampil_jurusan()
    {
        $this->db->select('*');
        $this->db->from('jurusan');
        $query = $this->db->get();
        return $query;
    }

    public function get_prodi($id)
    {
        $this->db->from('jurusan');
        $this->db->where('jurusan.id_fakultas', $id);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_data($id_fakultas)
    {
        $this->db->from('jurusan');
        $this->db->where('jurusan.id_fakultas', $id_fakultas);
        $query = $this->db->get();
        return $query;
    }

    public function getProdi($id_jurusan)
    {
        $this->db->from('jurusan');
        $this->db->where('jurusan.id_jurusan', $id_jurusan);
        $query = $this->db->get();
        return $query;
    }

    public function getProdi2($id_jurusan)
    {
        $this->db->from('jurusan');
        $this->db->join('fakultas', 'jurusan.id_fakultas = fakultas.id_fakultas');
        $this->db->where('jurusan.id_jurusan', $id_jurusan);
        $query = $this->db->get();
        return $query;
    }


    public function tampil_prodi()
    {
        $this->db->select('*');
        $this->db->from('jurusan');
        $this->db->join('fakultas', 'jurusan.id_fakultas = fakultas.id_fakultas');
        $query = $this->db->get();
        return $query;
    }

    function insert_fakultas($data)
    {
        $data= [
            'nama_fakultas'  =>$data['nama_fakultas'],
            'kode'  =>$data['kode']
        ];
        
        $this->db->insert('fakultas', $data);
         
    }

    function insert_prodi($data)
    {
        $data= [
            'nama'       =>$data['nama'],
            'kode_jurusan'       =>$data['kode_jurusan'],
            'koordinator_jurusan'       =>$data['koordinator_jurusan'],
            'id_fakultas'       =>$data['id_fakultas']
           
        ];
        
        $this->db->insert('jurusan', $data);
         
    }

    function insert_setting($data)
    {
        
        $prodi = $this->input->post('prodi');
        $sql = $this->db->query("SELECT id_jurusan FROM setting where id_jurusan='$prodi'");
        $cek_user = $sql->num_rows();

        $check=$this->cek();
        $hasil = $this->db->where('id_jurusan',$prodi)->get('setting');
        
        if($cek_user > 0)
        {
            $datas=array(
            'id_jurusan'=>$this->input->post('id_jurusan')            
            );

            return $this->db->get_where('setting',$datas)->num_rows();
        }
        else
        {
            
            $data= [
                //'id_fakultas'  =>$data['fakultas'],
                'id_jurusan'  =>$data['prodi']
            ];

            $this->db->insert('setting', $data);
        }
        
         return ($this->db->affected_rows()!=1)?false:true;
    }

    public function cek()
    {
        $datas=array(
            'id_jurusan'=>$this->input->post('id_jurusan')            
        );

        return $this->db->get_where('setting',$datas)->num_rows();
    

    }

    public function updateFile($id_fakultas, $data){
        $this->db->where('id_fakultas', $id_fakultas);
        return $this->db->update('fakultas', $data);
    }

    public function updateProdi($id_jurusan, $data){
        $this->db->where('id_jurusan', $id_jurusan);
        return $this->db->update('jurusan', $data);
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}