
<?php  
class M_evaluasi extends CI_Model{

	public function tampil($id_matkul)
	{
		$this->db->select('*');
        $this->db->from('evaluasi');
        $this->db->join('detail_rps','evaluasi.id_detailrps = detail_rps.id_detailrps', 'LEFT');
        $this->db->join('subcpmk','detail_rps.id_subcpmk = subcpmk.id_subcpmk', 'LEFT');
        $this->db->where('evaluasi.id_matkul', $id_matkul);
        $query = $this->db->get();
        return $query;
	}

	function insert($data)
    {
        $data= [
            'id_detailrps'  =>$data['id_detailrps'],
            'asesmen'  =>$data['asesmen'],
            'id_matkul'  =>$this->input->post('id_matkul')
        ];
        
        $this->db->insert('evaluasi', $data);
         
    }

    public function updateFile($id_evaluasi, $data){
        $this->db->where('id_evaluasi', $id_evaluasi);
        return $this->db->update('evaluasi', $data);
    }

    public function get_spesific($id_user, $id_matkul)
    {
        //$data = array('evaluasi_mhs.id_user' => $id_user, 'evaluasi_mhs.id_matkul' => $id_matkul);
        $this->db->select('*');
        $this->db->from('evaluasi_mhs');
        $this->db->join('evaluasi','evaluasi_mhs.id_evaluasi2 = evaluasi.id_evaluasi', 'LEFT');
        $this->db->join('detail_rps','evaluasi.id_detailrps = detail_rps.id_detailrps', 'LEFT');
        $this->db->join('subcpmk','detail_rps.id_subcpmk = subcpmk.id_subcpmk', 'LEFT');
        $this->db->join('cpl_mk','subcpmk.id_cplmk = cpl_mk.id_cplmk', 'LEFT');
        $this->db->join('cpl','cpl_mk.id_cpl = cpl.id_cpl', 'LEFT');
        $this->db->where('evaluasi_mhs.id_user', $id_user);
        $this->db->where('evaluasi_mhs.id_matkul', $id_matkul);
        $query = $this->db->get();
        return $query;
    }

    public function ambil_data($id_user)
    {
        $this->db->select('*');
        $this->db->from('evaluasi_mhs');
        $this->db->join('evaluasi','evaluasi_mhs.id_evaluasi2 = evaluasi.id_evaluasi', 'LEFT');
        $this->db->join('detail_rps','evaluasi.id_detailrps = detail_rps.id_detailrps', 'LEFT');
        $this->db->join('subcpmk','detail_rps.id_subcpmk = subcpmk.id_subcpmk', 'LEFT');
        $this->db->join('cpl_mk','subcpmk.id_cplmk = cpl_mk.id_cplmk', 'LEFT');
        $this->db->join('cpl','cpl_mk.id_cpl = cpl.id_cpl', 'LEFT');
        //$this->db->join('nilai_cpl','evaluasi_mhs.id_user = nilai_cpl.id_user', 'LEFT');
        $this->db->where('evaluasi_mhs.id_user', $id_user);
        $query = $this->db->get();
        return $query;
    }

    public function get_spesific2($id_user, $id_matkul)
    {
        $this->db->select('*');
        $this->db->from('evaluasi_mhs');
        $this->db->join('evaluasi','evaluasi_mhs.id_evaluasi2 = evaluasi.id_evaluasi', 'LEFT');
        $this->db->join('detail_rps','evaluasi.id_detailrps = detail_rps.id_detailrps', 'LEFT');
        $this->db->join('subcpmk','detail_rps.id_subcpmk = subcpmk.id_subcpmk', 'LEFT');
        $this->db->join('cpl_mk','subcpmk.id_cplmk = cpl_mk.id_cplmk', 'LEFT');
        $this->db->join('cpl','cpl_mk.id_cpl = cpl.id_cpl', 'LEFT');
        $this->db->where('evaluasi_mhs.id_user', $id_user);
        $this->db->where('evaluasi_mhs.id_matkul', $id_matkul);
        $query = $this->db->get();
        return $query;
    }

    public function get_hasil($id_user)
    {
        
        $this->db->select('(SELECT SUM(evaluasi_mhs.bobot_mhs) FROM evaluasi_mhs WHERE evaluasi_mhs.id_user="$id_user") AS total', FALSE);
        $query = $this->db->get();
        return $query;
    }

    function insert_nilai($data)
    {

        $data= [
            'id_user'           => $data['id_user'],
            'id_evaluasi2'  =>$data['id_evaluasi'],
            'id_matkul'  =>$data['id_matkul'],
            'nilai_mhs'  =>$data['nilai_mhs']
        ];
        
        $this->db->insert('evaluasi_mhs', $data);
         
    }

    function insert_cpl($data)
    {
        $id_user = $this->input->post('id_user');
        $id_cplmk = $this->input->post('id_cplmk');
        $id_pengampu = $this->input->post('id_pengampu');
        $sql = $this->db->query("SELECT id_user FROM nilai_cpl where id_user='$id_user' AND id_cplmk = '$id_cplmk'");
        $cek_user = $sql->num_rows();
        
        if($cek_user > 0)
        {
            $datas=array(
            'id_user'           => $data['id_user'],
            'id_matkul'  =>$data['id_matkul'],
            'id_cplmk'  =>$data['id_cplmk'],
            'id_pengampu'  =>$data['id_pengampu'],
            'nilai_cpl'  =>$data['nilai_cpl'],
            'total_bobot'  =>$data['total_bobot'],
            'hasil_cpl'  =>$data['hasil_cpl'],
            'ket_cpl'  =>$data['ket_cpl']            
            );

            $this->db->where('id_user', $id_user);
            $this->db->where('id_cplmk', $id_cplmk);
            return $this->db->update('nilai_cpl', $datas);
        }
        else
        {
            
            $data= [
            'id_user'           => $data['id_user'],
            'id_matkul'  =>$data['id_matkul'],
            'id_cplmk'  =>$data['id_cplmk'],
            'id_pengampu'  =>$data['id_pengampu'],
            'nilai_cpl'  =>$data['nilai_cpl'],
            'total_bobot'  =>$data['total_bobot'],
            'hasil_cpl'  =>$data['hasil_cpl'],
            'ket_cpl'  =>$data['ket_cpl']
        ];
        
            $this->db->insert('nilai_cpl', $data);
        }
        
         return ($this->db->affected_rows()!=1)?false:true;
         
    }

    public function updatenilai($id_evaluasimhs, $data){
        $this->db->where('id_evaluasimhs', $id_evaluasimhs);
        return $this->db->update('evaluasi_mhs', $data);
    }

    public function tampil_evaluasi_mhs($id_matkul, $id_pengampu)
    {
         $this->db->select('*');
                $this->db->from('matkul_mhs');
                $this->db->join('pengampu_mk','matkul_mhs.id_pengampu = pengampu_mk.id_pengampu', 'LEFT');
                $this->db->join('matkul','pengampu_mk.id_matkul = matkul.id_matkul', 'LEFT');
                $this->db->join('user','matkul_mhs.id_user = user.id_user', 'LEFT');
                $this->db->join('mahasiswa','user.id_user = mahasiswa.id_user', 'LEFT');
                $this->db->where('pengampu_mk.id_matkul',$id_matkul);
                $this->db->where('pengampu_mk.id_pengampu',$id_pengampu);
        $query = $this->db->get();
        return $query;
    }

    public function tampil_nilai($id_user, $id_matkul)
    {
         $this->db->select('*');
                $this->db->from('nilai_cpl');
                $this->db->join('cpl_mk','nilai_cpl.id_cplmk = cpl_mk.id_cplmk', 'LEFT');
                $this->db->join('cpl','cpl_mk.id_cpl = cpl.id_cpl', 'LEFT');
                $this->db->join('user','nilai_cpl.id_user = user.id_user', 'LEFT');
                $this->db->where('nilai_cpl.id_user',$id_user);
                $this->db->where('nilai_cpl.id_matkul',$id_matkul);
        $query = $this->db->get();
        return $query;
    }

    public function tampil_evaluasi($id_user, $id_matkul)
    {
         $this->db->select('*');
                $this->db->from('matkul_mhs');
                $this->db->join('pengampu_mk','matkul_mhs.id_pengampu = pengampu_mk.id_pengampu', 'LEFT');
                $this->db->join('matkul','pengampu_mk.id_matkul = matkul.id_matkul', 'LEFT');
                $this->db->join('evaluasi','pengampu_mk.id_matkul = evaluasi.id_matkul', 'LEFT');
                $this->db->join('detail_rps','evaluasi.id_detailrps = detail_rps.id_detailrps', 'LEFT');
                $this->db->join('subcpmk','detail_rps.id_subcpmk = subcpmk.id_subcpmk', 'LEFT');
                $this->db->join('cpl_mk','subcpmk.id_cplmk = cpl_mk.id_cplmk', 'LEFT');
                $this->db->join('mahasiswa','matkul_mhs.id_user = mahasiswa.id_user', 'LEFT');
                $this->db->where('matkul_mhs.id_user',$id_user);
                $this->db->where('pengampu_mk.id_matkul',$id_matkul);
                $this->db->limit(1);
                
        $query = $this->db->get();
        return $query;
    }

    public function get_evaluasi($id_user)
    {
        $this->db->select('*');
        $this->db->from('evaluasi');
        $this->db->join('evaluasi_mhs','evaluasi.id_evaluasi = evaluasi_mhs.id_evaluasi2', 'LEFT');
        $this->db->join('detail_rps','evaluasi.id_detailrps = detail_rps.id_detailrps', 'LEFT');
        $this->db->join('subcpmk','detail_rps.id_subcpmk = subcpmk.id_subcpmk', 'LEFT');
        $this->db->where('evaluasi_mhs.id_user', $id_user);
        $query = $this->db->get();
        return $query;
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function cpl2($id_matkul){
        $this->db->from('cpl_mk');
        $this->db->join('aspek','cpl_mk.id_aspek = aspek.id_aspek', 'LEFT');
        $this->db->join('cpl','cpl_mk.id_cpl = cpl.id_cpl', 'LEFT');
        $this->db->where('cpl_mk.id_matkul', $id_matkul);
        $query = $this->db->get();
        return $query;
    }

    public function ambil_nilai($id_cplmk, $id_user)
    {
        $this->db->select('*');
        $this->db->from('evaluasi');
        $this->db->join('evaluasi_mhs','evaluasi.id_evaluasi = evaluasi_mhs.id_evaluasi2', 'LEFT');
        $this->db->join('detail_rps','evaluasi.id_detailrps = detail_rps.id_detailrps', 'LEFT');
        $this->db->join('subcpmk','detail_rps.id_subcpmk = subcpmk.id_subcpmk', 'LEFT');
        $this->db->join('cpl_mk','subcpmk.id_cplmk = cpl_mk.id_cplmk', 'LEFT');
        $this->db->join('cpl','cpl_mk.id_cpl = cpl.id_cpl', 'LEFT');

        $array = array('evaluasi_mhs.id_user' => $id_user, 'subcpmk.id_cplmk' => $id_cplmk);
        $this->db->where($array);

        $query = $this->db->get();
        return $query;
    }

    public function ambil_nilai2($id_cplmk, $id_user)
    {
        $this->db->select('*');
        $this->db->from('evaluasi');
        $this->db->join('evaluasi_mhs','evaluasi.id_evaluasi = evaluasi_mhs.id_evaluasi2', 'LEFT');
        $this->db->join('detail_rps','evaluasi.id_detailrps = detail_rps.id_detailrps', 'LEFT');
        $this->db->join('subcpmk','detail_rps.id_subcpmk = subcpmk.id_subcpmk', 'LEFT');
        $this->db->join('cpl_mk','subcpmk.id_cplmk = cpl_mk.id_cplmk', 'LEFT');
        $this->db->join('cpl','cpl_mk.id_cpl = cpl.id_cpl', 'LEFT');

        $array = array('evaluasi_mhs.id_user' => $id_user, 'subcpmk.id_cplmk' => $id_cplmk);
        $this->db->where($array);
        $this->db->limit(1);
        $query = $this->db->get();
        return $query;
    }


}