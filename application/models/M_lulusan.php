<?php  
class M_lulusan extends CI_Model{

    public function insert_data($id_lulusan,$id_jurusan,$id_user,$id_cpl)
    {

            $this->db->insert('profil_cpl',array('id_lulusan'=>$id_lulusan,'id_jurusan'=>$id_jurusan,'id_user'=>$id_user,'id_cpl'=>$id_cpl));

    }

    public function insert_kajian($id_kajian,$id_jurusan,$id_user,$category)
    {
      
     
        $this->db->insert('kajian_cpl',array('id_kajian'=>$id_kajian,'id_jurusan'=>$id_jurusan,'id_user'=>$id_user,'id_cpl'=>$category));
     

    }

    public function insert_kajianmk($id_kajian,$id_jurusan,$id_user,$category)
    {
      
     
        $this->db->insert('kajian_matkul',array('id_kajian'=>$id_kajian,'id_jurusan'=>$id_jurusan,'id_user'=>$id_user,'id_matkul'=>$category));
     

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
        $session = $_SESSION;
        $jurusan = $this->session->userdata('id_jurusan');
        //$this->db->select('cpl.id_cpl, cpl.kode_cpl, profil_cpl.id_lulusan, count(profil_lulusan.id_lulusan) as jumlah_profil' );
        //      $this->db->from('cpl');
          //      $this->db->join('profil_cpl','cpl.id_cpl = profil_cpl.id_cpl', 'LEFT');
            //    $this->db->join('profil_lulusan','profil_cpl.id_lulusan = profil_lulusan.id_lulusan', 'LEFT');
              //  $this->db->order_by("cpl.id_cpl", "asc");
                //$this->db->where('cpl.id_jurusan', $jurusan);
       // $query = $this->db->get();
        //return $query;

        $sql = $this->db->query("SELECT `cpl`.`id_cpl`, `cpl`.`kode_cpl`, `profil_cpl`.`id_lulusan`,COUNT(`cpl`.`id_cpl`) as `res`,(select sum(res) as sum from (
            select `profil_lulusan`.`id_lulusan`, count(`profil_lulusan`.`id_lulusan`) as res  from `profil_lulusan`
            GROUP BY `profil_lulusan`.`id_lulusan`) `profil_lulusan`) as Sum_RES  

        FROM `cpl`, `profil_cpl`, `profil_lulusan`
        WHERE `cpl`.`id_cpl` = `profil_cpl`.`id_cpl` AND `profil_cpl`.`id_lulusan` = `profil_lulusan`.`id_lulusan` AND `cpl`.`id_jurusan` = $jurusan
        GROUP BY `profil_cpl`.`id_profil_cpl`;");

        return $sql;
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
                $this->db->join('cpl_mk','cpl.id_cpl = cpl_mk.id_cpl', 'LEFT');
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

    public function tampil_kajian_mk()
    {
        $session = $_SESSION;
        $jurusan = $this->session->userdata('id_jurusan');
        $this->db->select('*');
                $this->db->from('matkul');
                $this->db->join('kajian_matkul','matkul.id_matkul = kajian_matkul.id_matkul', 'LEFT');
                $this->db->join('tahun_ajaran','matkul.id_tahun = tahun_ajaran.id_tahun', 'LEFT');
                //$this->db->join('pengampu_mk','matkul.id_matkul = pengampu_mk.id_matkul', 'LEFT');
                $this->db->where('matkul.id_jurusan',$jurusan);
                $this->db->where('tahun_ajaran.status_ajaran = "Aktif"');
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
                $this->db->from('cpl');
                $this->db->join('kajian_cpl','cpl.id_cpl = kajian_cpl.id_cpl', 'LEFT');
                $this->db->order_by("cpl.id_cpl", "asc");
                $this->db->where('cpl.id_jurusan', $jurusan);
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

    public function hapus_data()
    {
        $this->db->query("DELETE FROM profil_cpl");
    }

    public function hapus_data2()
    {
        $this->db->query("DELETE FROM kajian_cpl");
    }

    public function hapus_data3()
    {
        $this->db->query("DELETE FROM kajian_matkul");
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
                $this->db->join('profil_cpl','cpl.id_cpl = profil_cpl.id_cpl', 'LEFT');
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
                $this->db->join('kajian_cpl','cpl.id_cpl = kajian_cpl.id_cpl', 'LEFT');
                $this->db->order_by("cpl.id_cpl", "asc");
                $this->db->where('cpl.id_jurusan', $id_jurusan);
        $query = $this->db->get();
        return $query;
    }

    public function get_cpl_matkul($id_jurusan)
    {
        $this->db->select('*');
                $this->db->from('cpl');
                $this->db->join('cpl_mk','cpl.id_cpl = cpl_mk.id_cpl', 'LEFT');
                $this->db->order_by("cpl.id_cpl", "asc");
                $this->db->where('cpl.id_jurusan', $id_jurusan);
        $query = $this->db->get();
        return $query;
    }

     public function get_kajian_mk($id_jurusan)
    {
        $this->db->select('*');
                $this->db->from('matkul');
                $this->db->join('kajian_matkul','matkul.id_matkul = kajian_matkul.id_matkul', 'LEFT');
                $this->db->join('tahun_ajaran','matkul.id_tahun = tahun_ajaran.id_tahun', 'LEFT');
                $this->db->join('pengampu_mk','matkul.id_matkul = pengampu_mk.id_matkul', 'LEFT');
                $this->db->where('matkul.id_jurusan',$id_jurusan);
                $this->db->where('tahun_ajaran.status_ajaran = "Aktif"');
                $this->db->where('matkul.id_jurusan', $id_jurusan);
        $query = $this->db->get();
        return $query;
    }
 }