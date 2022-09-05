<?php  

class M_mbkm extends CI_Model{

    public function tampil_data()
    {
        $session = $_SESSION;
        $jurusan = $this->session->userdata('id_jurusan');
        $this->db->select('*');
                $this->db->from('mbkm');
                $this->db->where('mbkm.id_jurusan',$jurusan);
                $this->db->join('jurusan','mbkm.id_jurusan = jurusan.id_jurusan', 'LEFT');
                $this->db->join('fakultas','jurusan.id_fakultas = fakultas.id_fakultas', 'LEFT');
                $this->db->where('mbkm.jenis_mbkm = "Dalam"');
        $query = $this->db->get();
        return $query;
    }

    public function tampil_data2()
    {
        $session = $_SESSION;
        $jurusan = $this->session->userdata('id_jurusan');
        $this->db->select('*');
                $this->db->from('mbkm');
                $this->db->where('mbkm.id_jurusan',$jurusan);
                $this->db->join('jurusan','mbkm.id_jurusan = jurusan.id_jurusan', 'LEFT');
                $this->db->join('fakultas','jurusan.id_fakultas = fakultas.id_fakultas', 'LEFT');
                //$this->db->where('mbkm.jenis_mbkm = "Dalam"');
        $query = $this->db->get();
        return $query;
    }

    public function tampil_data3($id_jurusan)
    {
        $this->db->select('*');
                $this->db->from('mbkm');
                $this->db->where('mbkm.id_jurusan',$id_jurusan);
                $this->db->join('jurusan','mbkm.id_jurusan = jurusan.id_jurusan', 'LEFT');
                $this->db->join('fakultas','jurusan.id_fakultas = fakultas.id_fakultas', 'LEFT');
                $this->db->where('mbkm.jenis_mbkm = "Dalam"');
        $query = $this->db->get();
        return $query;
    }

    public function tampil_luar()
    {
        $session = $_SESSION;
        $jurusan = $this->session->userdata('id_jurusan');
        $this->db->select('*');
                $this->db->from('mbkm');
                $this->db->where('mbkm.id_jurusan',$jurusan);
                $this->db->join('jurusan','mbkm.id_jurusan = jurusan.id_jurusan', 'LEFT');
                $this->db->join('fakultas','jurusan.id_fakultas = fakultas.id_fakultas', 'LEFT');
                $this->db->where('mbkm.jenis_mbkm = "Luar"');
        $query = $this->db->get();
        return $query;
    }

    public function tampil_luar2($id_jurusan)
    {
        $this->db->select('*');
                $this->db->from('mbkm');
                $this->db->where('mbkm.id_jurusan',$id_jurusan);
                $this->db->join('jurusan','mbkm.id_jurusan = jurusan.id_jurusan', 'LEFT');
                $this->db->join('fakultas','jurusan.id_fakultas = fakultas.id_fakultas', 'LEFT');
                $this->db->where('mbkm.jenis_mbkm = "Luar"');
        $query = $this->db->get();
        return $query;
    }

    public function tampil_non()
    {
        $session = $_SESSION;
        $jurusan = $this->session->userdata('id_jurusan');
        $this->db->select('*');
                $this->db->from('mbkm');
                $this->db->where('mbkm.id_jurusan',$jurusan);
                $this->db->join('jurusan','mbkm.id_jurusan = jurusan.id_jurusan', 'LEFT');
                $this->db->join('fakultas','jurusan.id_fakultas = fakultas.id_fakultas', 'LEFT');
                $this->db->where('mbkm.jenis_mbkm = "Non"');
        $query = $this->db->get();
        return $query;
    }

    public function tampil_non2($id_jurusan)
    {
        $this->db->select('*');
                $this->db->from('mbkm');
                $this->db->where('mbkm.id_jurusan',$id_jurusan);
                $this->db->join('jurusan','mbkm.id_jurusan = jurusan.id_jurusan', 'LEFT');
                $this->db->join('fakultas','jurusan.id_fakultas = fakultas.id_fakultas', 'LEFT');
                $this->db->where('mbkm.jenis_mbkm = "Non"');
        $query = $this->db->get();
        return $query;
    }

    function insert_data($data)
    {
        $data= [
            'kode_mbkm'  =>$data['kode_mbkm'],
            'nama_mbkm'  =>$data['nama_mbkm'],
            'sks_mbkm'  =>$data['sks_mbkm'],
            'jenis_mbkm'  =>$data['jenis_mbkm'],
            'semester_mbkm'  =>$data['semester_mbkm'],
            'id_jurusan'  =>$data['id_jurusan']
        ];
        
        $this->db->insert('mbkm', $data);
         
    }

    public function updateFile($id_mbkm, $data){
        $this->db->where('id_mbkm', $id_mbkm);
        return $this->db->update('mbkm', $data);
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function tampil_cpl()
    {
        $session = $_SESSION;
        $jurusan = $this->session->userdata('id_jurusan');
        $this->db->select('*');
                $this->db->from('cpl');
                //$this->db->join('mbkm_cpl','cpl.id_cpl = mbkm_cpl.id_cpl', 'LEFT');
                $this->db->order_by("cpl.id_cpl", "asc");
                $this->db->where('cpl.id_jurusan', $jurusan);
        $query = $this->db->get();
        return $query;
    }

    public function tampil_dalam_cpl()
    {

        $this->db->select('*');
                $this->db->from('mbkm_cpl');
                // $this->db->where('profil_lulusan.id_jurusan',$id_jurusan);
        $query = $this->db->get();
        return $query;
    }

    public function tampil_dalam_cpl2($id_jurusan)
    {

        $this->db->select('*');
                $this->db->from('mbkm_cpl');
                $this->db->where('mbkm_cpl.id_jurusan',$id_jurusan);
        $query = $this->db->get();
        return $query;
    }

    public function tampil_luar_cpl()
    {

        $this->db->select('*');
                $this->db->from('luar_cpl');
                // $this->db->where('profil_lulusan.id_jurusan',$id_jurusan);
        $query = $this->db->get();
        return $query;
    }

    public function tampil_luar_cpl2($id_jurusan)
    {

        $this->db->select('*');
                $this->db->from('luar_cpl');
                $this->db->where('luar_cpl.id_jurusan',$id_jurusan);
        $query = $this->db->get();
        return $query;
    }

    public function tampil_non_cpl()
    {

        $this->db->select('*');
                $this->db->from('non_cpl');
                // $this->db->where('profil_lulusan.id_jurusan',$id_jurusan);
        $query = $this->db->get();
        return $query;
    }

    public function tampil_non_cpl2($id_jurusan)
    {

        $this->db->select('*');
                $this->db->from('non_cpl');
                $this->db->where('non_cpl.id_jurusan',$id_jurusan);
        $query = $this->db->get();
        return $query;
    }

    public function tampil_cpl_jurusan($id_jurusan)
    {
        $this->db->select('*');
                $this->db->from('cpl');
                //$this->db->join('mbkm_cpl','cpl.id_cpl = mbkm_cpl.id_cpl', 'LEFT');
                $this->db->order_by("cpl.id_cpl", "asc");
                $this->db->where('cpl.id_jurusan', $id_jurusan);
        $query = $this->db->get();
        return $query;
    }

    public function tampil_cpl2()
    {
        $session = $_SESSION;
        $jurusan = $this->session->userdata('id_jurusan');
        $this->db->select('*');
                $this->db->from('cpl');
                //$this->db->join('luar_cpl','cpl.id_cpl = luar_cpl.id_cpl', 'LEFT');
                $this->db->order_by("cpl.id_cpl", "asc");
                $this->db->where('cpl.id_jurusan', $jurusan);
        $query = $this->db->get();
        return $query;
    }

    public function tampil_cpl2_jurusan($id_jurusan)
    {
        $this->db->select('*');
                $this->db->from('cpl');
                //$this->db->join('luar_cpl','cpl.id_cpl = luar_cpl.id_cpl', 'LEFT');
                $this->db->order_by("cpl.id_cpl", "asc");
                $this->db->where('cpl.id_jurusan', $id_jurusan);
        $query = $this->db->get();
        return $query;
    }

    public function tampil_cpl3()
    {
        $session = $_SESSION;
        $jurusan = $this->session->userdata('id_jurusan');
        $this->db->select('*');
                $this->db->from('cpl');
                //$this->db->join('non_cpl','cpl.id_cpl = non_cpl.id_cpl', 'LEFT');
                $this->db->order_by("cpl.id_cpl", "asc");
                $this->db->where('cpl.id_jurusan', $jurusan);
        $query = $this->db->get();
        return $query;
    }

    public function tampil_cpl3_jurusan($id_jurusan)
    {
        $this->db->select('*');
                $this->db->from('cpl');
                //$this->db->join('non_cpl','cpl.id_cpl = non_cpl.id_cpl', 'LEFT');
                $this->db->order_by("cpl.id_cpl", "asc");
                $this->db->where('cpl.id_jurusan', $id_jurusan);
        $query = $this->db->get();
        return $query;
    }

    public function insert_cpl($id_mbkm,$id_jurusan,$id_user,$id_cpl)
    {

            $this->db->insert('mbkm_cpl',array('id_mbkm'=>$id_mbkm,'id_jurusan'=>$id_jurusan,'id_user'=>$id_user,'id_cpl'=>$id_cpl));

    }

    public function insert_cpl2($id_mbkm,$id_jurusan,$id_user,$id_cpl)
    {

            $this->db->insert('luar_cpl',array('id_mbkm'=>$id_mbkm,'id_jurusan'=>$id_jurusan,'id_user'=>$id_user,'id_cpl'=>$id_cpl));

    }

    public function insert_cpl3($id_mbkm,$id_jurusan,$id_user,$id_cpl)
    {

            $this->db->insert('non_cpl',array('id_mbkm'=>$id_mbkm,'id_jurusan'=>$id_jurusan,'id_user'=>$id_user,'id_cpl'=>$id_cpl));

    }

    public function hapus_cpl($id_mbkm)
    {
        $this->db->query("DELETE FROM mbkm_cpl WHERE mbkm_cpl.id_mbkm = '$id_mbkm'");

    }

    public function hapus_cpl2($id_mbkm)
    {
        $this->db->query("DELETE FROM luar_cpl WHERE luar_cpl.id_mbkm = '$id_mbkm'");

    }

    public function hapus_cpl3($id_mbkm)
    {
        $this->db->query("DELETE FROM non_cpl WHERE non_cpl.id_mbkm = '$id_mbkm'");

    }

}