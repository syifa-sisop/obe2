<?php  
class M_lulusan extends CI_Model{

    public function insert_data($id_lulusan,$id_jurusan,$id_cpl)
    {

            $this->db->insert('profil_cpl',array('id_lulusan'=>$id_lulusan,'id_jurusan'=>$id_jurusan,'id_cpl'=>$id_cpl));

    }


    public function insert_kajian($id_kajian,$id_jurusan,$category)
    {
      
     
        $this->db->insert('kajian_skl',array('id_kajian'=>$id_kajian,'id_jurusan'=>$id_jurusan,'id_skl'=>$category));
     

    }


    public function insert_kajianmk($id_matkul,$id_jurusan,$category)
    {
      
     
        $this->db->insert('kajian_matkul',array('id_matkul'=>$id_matkul,'id_jurusan'=>$id_jurusan,'id_kajian'=>$category));
     

    }

    public function insert($data, $id_cpl)
    {
        $id_lulusan = $this->input->post('id_lulusan');
        $id_jurusan = $this->input->post('id_jurusan');
        $sql = $this->db->query("SELECT id_lulusan FROM profil_cpl where id_lulusan='$id_lulusan'");
        $cek_user = $sql->num_rows();
        
        if($cek_user > 0)
        {
            $datas=array(
            'id_lulusan'           => $data['id_lulusan'],
            'id_jurusan'  =>$data['id_jurusan'],
            'id_cpl'  =>$id_cpl         
            );

            $this->db->where('id_lulusan', $id_lulusan);
            return $this->db->update('profil_cpl', $datas);
        }
        else
        {
            
            $data= [
            'id_lulusan'           => $data['id_lulusan'],
            'id_jurusan'  =>$data['id_jurusan'],
            'id_cpl'  =>$id_cpl
        ];
        
            $this->db->insert('profil_cpl', $data);
        }
        
         return ($this->db->affected_rows()!=1)?false:true;
    }

    public function tampil()
    {
        $this->db->select('*');
                $this->db->from('profil_cpl');
                $this->db->join('jurusan','profil_cpl.id_jurusan = jurusan.id_jurusan', 'LEFT');
                $this->db->join('cpl','profil_cpl.id_cpl = cpl.id_cpl', 'LEFT');
                $this->db->join('profil_lulusan','profil_cpl.id_lulusan = profil_lulusan.id_lulusan', 'LEFT');

        $query = $this->db->get();
        return $query;
    }
    public function tampil_cpl()
    {
        $session = $_SESSION;
        $jurusan = $this->session->userdata('id_jurusan');
        $this->db->select('*');
                $this->db->from('cpl');
                //$this->db->join('profil_cpl','cpl.id_cpl = profil_cpl.id_cpl', 'LEFT');
                $this->db->order_by("cpl.id_cpl", "asc");
                $this->db->where('cpl.id_jurusan', $jurusan);
        $query = $this->db->get();
        return $query;
    }

    public function tampil_skl()
    {
        $session = $_SESSION;
        $jurusan = $this->session->userdata('id_jurusan');
        $this->db->select('*');
                $this->db->from('skl');
                //$this->db->join('profil_cpl','skl.id_cpl = profil_cpl.id_cpl', 'LEFT');
                $this->db->order_by("skl.id_skl", "asc");
                $this->db->where('skl.id_jurusan', $jurusan);
        $query = $this->db->get();
        return $query;
    }

    public function tampil_cpl3()
    {
        $session = $_SESSION;
        $jurusan = $this->session->userdata('id_jurusan');
        $this->db->select('*');
                $this->db->from('cpl');
                // $this->db->join('profil_cpl','cpl.id_cpl = profil_cpl.id_cpl', 'LEFT');
                // $this->db->order_by("cpl.id_cpl", "asc");
                $this->db->where('cpl.id_jurusan', $jurusan);
        $query = $this->db->get();
        return $query;
    }

    public function tampil_cpl_baru()
    {

    }
    public function tampil_cpl2($id_jurusan)
    {
        $this->db->select('*');
                $this->db->from('cpl');
                $this->db->join('profil_cpl','cpl.id_cpl = profil_cpl.id_cpl', 'LEFT');
                $this->db->order_by("cpl.id_cpl", "asc");
                $this->db->where('cpl.id_jurusan', $id_jurusan);
        $query = $this->db->get();
        return $query;
    }

    public function tampil_matkul()
    {
        $session = $_SESSION;
        $jurusan = $this->session->userdata('id_jurusan');
        $this->db->select('*');
                $this->db->from('cpl');
                //$this->db->join('cpl_mk','cpl.id_cpl = cpl_mk.id_cpl', 'LEFT');
                $this->db->order_by("cpl.id_cpl", "asc");
                $this->db->where('cpl.id_jurusan', $jurusan);
        $query = $this->db->get();
        return $query;
    }

    public function tampil_matkul2($id_jurusan)
    {
        $this->db->select('*');
                $this->db->from('cpl');
                $this->db->join('cpl_mk','cpl.id_cpl = cpl_mk.id_cpl', 'LEFT');
                $this->db->order_by("cpl.id_cpl", "asc");
                $this->db->where('cpl.id_jurusan', $id_jurusan);
        $query = $this->db->get();
        return $query;
    }

    public function tampil_matkul3()
    {
        $this->db->select('*');
                $this->db->from('cpl_mk');
        $query = $this->db->get();
        return $query;
    }

    public function tampil_matkul4($id_jurusan)
    {
        $this->db->select('*');
                $this->db->from('cpl_mk');
                $this->db->join('cpl','cpl_mk.id_cpl = cpl.id_cpl', 'LEFT');
                 $this->db->where('cpl.id_jurusan',$id_jurusan);
        $query = $this->db->get();
        return $query;
    }

    public function tampil_kajian_mk()
    {
        $session = $_SESSION;
        $jurusan = $this->session->userdata('id_jurusan');
        $this->db->select('*');
                $this->db->from('matkul');
                //$this->db->join('kajian_matkul','matkul.id_matkul = kajian_matkul.id_matkul', 'LEFT');
                $this->db->join('tahun_ajaran','matkul.id_tahun = tahun_ajaran.id_tahun', 'LEFT');
                //$this->db->join('pengampu_mk','matkul.id_matkul = pengampu_mk.id_matkul', 'LEFT');
                $this->db->where('matkul.id_jurusan',$jurusan);
                $this->db->where('tahun_ajaran.status_ajaran = "Aktif"');
        $query = $this->db->get();
        return $query;
    }

    public function tampil_kajian_mk3()
    {
        $this->db->select('*');
                $this->db->from('kajian_matkul');
        $query = $this->db->get();
        return $query;
    }

    public function tampil_kajian_mk4($id_jurusan)
    {
        $this->db->select('*');
                $this->db->from('kajian_matkul');
                $this->db->where('kajian_matkul.id_jurusan',$id_jurusan);
        $query = $this->db->get();
        return $query;
    }

    public function tampil_kajian_mk5($id_matkul)
    {
        $this->db->select('*');
                $this->db->from('kajian_matkul');
                $this->db->join('matkul','kajian_matkul.id_matkul = matkul.id_matkul', 'LEFT');
                $this->db->join('kajian','kajian_matkul.id_kajian = kajian.id_kajian', 'LEFT');
                $this->db->where('kajian_matkul.id_matkul',$id_matkul);
        $query = $this->db->get();
        return $query;
    }

    public function tampil_kajian_mk2($id_jurusan)
    {
        $this->db->select('*');
                $this->db->from('matkul');
                $this->db->join('kajian_matkul','matkul.id_matkul = kajian_matkul.id_matkul', 'LEFT');
                $this->db->join('tahun_ajaran','matkul.id_tahun = tahun_ajaran.id_tahun', 'LEFT');
                $this->db->join('pengampu_mk','matkul.id_matkul = pengampu_mk.id_matkul', 'LEFT');
                $this->db->where('matkul.id_jurusan',$id_jurusan);
                $this->db->where('tahun_ajaran.status_ajaran = "Aktif"');
        $query = $this->db->get();
        return $query;
    }

    public function tampil_kajian()
    {
        $session = $_SESSION;
        $jurusan = $this->session->userdata('id_jurusan');
        $this->db->select('*');
                $this->db->from('skl');
                // $this->db->join('profil_cpl','cpl.id_cpl = profil_cpl.id_cpl', 'LEFT');
                // $this->db->order_by("cpl.id_cpl", "asc");
                $this->db->where('skl.id_jurusan', $jurusan);
        $query = $this->db->get();
        return $query;
    }

    public function tampil_kajian3()
    {
        $session = $_SESSION;
        $jurusan = $this->session->userdata('id_jurusan');
        $this->db->select('*');
                $this->db->from('skl');
                // $this->db->join('profil_cpl','cpl.id_cpl = profil_cpl.id_cpl', 'LEFT');
                // $this->db->order_by("cpl.id_cpl", "asc");
                $this->db->where('skl.id_jurusan', $jurusan);
        $query = $this->db->get();
        return $query;
    }

    public function tampil_kajian33($id_jurusan)
    {
 
        $this->db->select('*');
                $this->db->from('skl');
                // $this->db->join('profil_cpl','cpl.id_cpl = profil_cpl.id_cpl', 'LEFT');
                // $this->db->order_by("cpl.id_cpl", "asc");
                $this->db->where('skl.id_jurusan', $id_jurusan);
        $query = $this->db->get();
        return $query;
    }

    public function tampil_kajian2($id_jurusan)
    {
        $this->db->select('*');
                $this->db->from('cpl');
                $this->db->join('kajian_cpl','cpl.id_cpl = kajian_cpl.id_cpl', 'LEFT');
                $this->db->order_by("cpl.id_cpl", "asc");
                $this->db->where('cpl.id_jurusan', $id_jurusan);
        $query = $this->db->get();
        return $query;
    }

    public function getDataByID($id_lulusan){
        $this->db->from('profil_cpl');
        $this->db->join('profil_lulusan','profil_cpl.id_lulusan = profil_lulusan.id_lulusan', 'LEFT');
        $this->db->join('cpl','profil_cpl.id_cpl = cpl.id_cpl', 'LEFT');
        $this->db->where('profil_cpl.id_lulusan', $id_lulusan);
        $query = $this->db->get();
        return $query;
    }

    public function getId($id_lulusan)
    {
        $this->db->from('profil_lulusan');
        $this->db->where('profil_lulusan.id_lulusan', $id_lulusan);
        $query = $this->db->get();
        return $query;
    }

    public function hapus_data($id_lulusan)
    {
        $this->db->query("DELETE FROM profil_cpl WHERE id_lulusan ='$id_lulusan'");
    }

    public function hapus_data2($id_kajian)
    {
        $this->db->query("DELETE FROM kajian_skl WHERE id_kajian ='$id_kajian'");
    }

    public function hapus_data3($id_matkul)
    {
        $this->db->query("DELETE FROM kajian_matkul WHERE id_matkul ='$id_matkul'");
    }

    public function profil(){
        $session = $_SESSION;
        $jurusan = $this->session->userdata('id_jurusan');
        $id_user = $this->session->userdata('id_user');

        $this->db->select('*');
                $this->db->from('profil');
                $this->db->where('profil.id_user',$id_user);
                $this->db->join('jurusan','profil.id_jurusan = jurusan.id_jurusan', 'LEFT');
                $this->db->join('fakultas','jurusan.id_fakultas = fakultas.id_fakultas', 'LEFT');
        $query = $this->db->get();
        return $query;
    }

    public function profil_dosen(){
        $session = $_SESSION;
        $jurusan = $this->session->userdata('id_jurusan');
        $id_user = $this->session->userdata('id_user');

        $this->db->select('*');
                $this->db->from('dosen');
                $this->db->where('dosen.id_user',$id_user);
                $this->db->join('jurusan','dosen.id_jurusan = jurusan.id_jurusan', 'LEFT');
                $this->db->join('fakultas','jurusan.id_fakultas = fakultas.id_fakultas', 'LEFT');
        $query = $this->db->get();
        return $query;
    }

    public function get_profil($id_jurusan)
    {
        $this->db->from('profil_lulusan');
        $this->db->where('profil_lulusan.id_jurusan', $id_jurusan);
        $query = $this->db->get();
        return $query;
    }

    public function get_cpl($id_jurusan)
    {
        $this->db->select('*');
                $this->db->from('cpl');
                //$this->db->join('profil_cpl','cpl.id_cpl = profil_cpl.id_cpl', 'LEFT');
                $this->db->order_by("cpl.id_cpl", "asc");
                $this->db->where('cpl.id_jurusan', $id_jurusan);
        $query = $this->db->get();
        return $query;
    }

    public function get_kajian($id_jurusan)
    {
        $this->db->from('kajian');
        $this->db->where('kajian.id_jurusan', $id_jurusan);
        $query = $this->db->get();
        return $query;
    }

    public function get_kajian2($id_jurusan)
    {
        $this->db->select('*');
                $this->db->from('cpl');
               // $this->db->join('kajian_cpl','cpl.id_cpl = kajian_cpl.id_cpl', 'LEFT');
                $this->db->order_by("cpl.id_cpl", "asc");
                $this->db->where('cpl.id_jurusan', $id_jurusan);
        $query = $this->db->get();
        return $query;
    }

    public function get_cpl_matkul($id_jurusan)
    {
        $this->db->select('*');
                $this->db->from('cpl');
                //$this->db->join('cpl_mk','cpl.id_cpl = cpl_mk.id_cpl', 'LEFT');
                $this->db->order_by("cpl.id_cpl", "asc");
                $this->db->where('cpl.id_jurusan', $id_jurusan);
        $query = $this->db->get();
        return $query;
    }

     public function get_kajian_mk($id_jurusan)
    {
        $this->db->select('*');
                $this->db->from('matkul');
               // $this->db->join('kajian_matkul','matkul.id_matkul = kajian_matkul.id_matkul', 'LEFT');
                $this->db->join('tahun_ajaran','matkul.id_tahun = tahun_ajaran.id_tahun', 'LEFT');
                $this->db->join('pengampu_mk','matkul.id_matkul = pengampu_mk.id_matkul', 'LEFT');
                $this->db->where('matkul.id_jurusan',$id_jurusan);
                $this->db->where('tahun_ajaran.status_ajaran = "Aktif"');
                $this->db->where('matkul.id_jurusan', $id_jurusan);
        $query = $this->db->get();
        return $query;
    }
 }