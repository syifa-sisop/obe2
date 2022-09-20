<?php  

class M_profil extends CI_Model{

	public function tampil()
    {
        $this->db->select('*');
                $this->db->from('admin');
                $this->db->join('user','admin.id_user = user.id_user', 'LEFT');
        $query = $this->db->get();
        return $query;
    }

    public function tampil_profil()
    {
        $session = $_SESSION;
        $jurusan = $this->session->userdata('id_jurusan');
        $id_user = $this->session->userdata('id_user');

        $this->db->select('*');
                $this->db->from('profil');
                $this->db->where('profil.id_user',$id_user);
                $this->db->join('jurusan','profil.id_jurusan = jurusan.id_jurusan', 'LEFT');
                $this->db->join('dosen','profil.id_dosen = dosen.id_dosen', 'LEFT');
                $this->db->join('user','profil.id_user = user.id_user', 'LEFT');
        $query = $this->db->get();
        return $query;
    }

    public function tampil_profil2()
    {
        $session = $_SESSION;
        $jurusan = $this->session->userdata('id_jurusan');
        $id_user = $this->session->userdata('id_user');

        $this->db->select('*');
                $this->db->from('dosen');
                $this->db->where('dosen.id_user',$id_user);
                $this->db->join('jurusan','dosen.id_jurusan = jurusan.id_jurusan', 'LEFT');
                $this->db->join('user','dosen.id_user = user.id_user', 'LEFT');
        $query = $this->db->get();
        return $query;
    }

    public function tampil_profil3()
    {
        $session = $_SESSION;
        $jurusan = $this->session->userdata('id_jurusan');
        $id_user = $this->session->userdata('id_user');

        $this->db->select('*');
                $this->db->from('user');
                $this->db->where('user.id_user',$id_user);
        $query = $this->db->get();
        return $query;
    }


    public function tampil_mhs()
    {
        $session = $_SESSION;
        $jurusan = $this->session->userdata('id_jurusan');
        $id_user = $this->session->userdata('id_user');

        $this->db->select('*');
                $this->db->from('mahasiswa');
                $this->db->where('mahasiswa.id_user',$id_user);
                $this->db->join('jurusan','mahasiswa.id_jurusan = jurusan.id_jurusan', 'LEFT');
                $this->db->join('user','mahasiswa.id_user = user.id_user', 'LEFT');
        $query = $this->db->get();
        return $query;
    }

    public function tampil_dosen()
    {
        $session = $_SESSION;
        $jurusan = $this->session->userdata('id_jurusan');
        $id_user = $this->session->userdata('id_user');

        $this->db->select('*');
                $this->db->from('dosen');
                $this->db->where('dosen.id_user',$id_user);
                $this->db->join('jurusan','dosen.id_jurusan = jurusan.id_jurusan', 'LEFT');
                $this->db->join('user','dosen.id_user = user.id_user', 'LEFT');
        $query = $this->db->get();
        return $query;
    }

    public function getDataByID($id_admin){
        return $this->db->get_where('admin', array('id_admin'=>$id_admin));
    }

    public function getDataByID2($id_dosen){
        return $this->db->get_where('dosen', array('id_dosen'=>$id_dosen));
    }

    public function updateFile($id_admin, $data){
        $this->db->where('id_admin', $id_admin);
        return $this->db->update('admin', $data);
    }

    public function updateFile2($id_dosen, $data){
        $this->db->where('id_dosen', $id_dosen);
        return $this->db->update('dosen', $data);
    }

    public function updateuser($id_user, $data){
        $this->db->where('id_user', $id_user);
        return $this->db->update('user', $data);
    }
}