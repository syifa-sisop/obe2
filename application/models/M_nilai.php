<?php  

class M_nilai extends CI_Model{

    public function tampil_data()
    {
        $session = $_SESSION;
        $jurusan = $this->session->userdata('id_jurusan');
        $this->db->select('*');
                $this->db->from('nilai_matkul_cpl');
                $this->db->join('pengampu_mk','nilai_matkul_cpl.id_pengampu = pengampu_mk.id_pengampu', 'LEFT');
                $this->db->join('cpl_mk','nilai_matkul_cpl.id_cplmk = cpl_mk.id_cplmk', 'LEFT');
                $this->db->join('cpl','cpl_mk.id_cpl = cpl.id_cpl', 'LEFT');
                $this->db->join('matkul','pengampu_mk.id_matkul = matkul.id_matkul', 'LEFT');
                $this->db->join('jurusan','matkul.id_jurusan = jurusan.id_jurusan', 'LEFT');
                $this->db->order_by("matkul.nama_matkul", "asc");
                $this->db->where('nilai_matkul_cpl.id_jurusan',$jurusan);
        $query = $this->db->get();
        return $query;
    }

    public function tampil_data2($id_matkul, $id_pengampu)
    {
        $this->db->select('*');
                $this->db->from('nilai_matkul_cpl');
                $this->db->join('pengampu_mk','nilai_matkul_cpl.id_pengampu = pengampu_mk.id_pengampu', 'LEFT');
                $this->db->join('cpl_mk','nilai_matkul_cpl.id_cplmk = cpl_mk.id_cplmk', 'LEFT');
                $this->db->join('cpl','cpl_mk.id_cpl = cpl.id_cpl', 'LEFT');
                $this->db->join('matkul','nilai_matkul_cpl.id_matkul = matkul.id_matkul', 'LEFT');
                $this->db->join('jurusan','nilai_matkul_cpl.id_jurusan = jurusan.id_jurusan', 'LEFT');
                $this->db->where('nilai_matkul_cpl.id_matkul',$id_matkul);
                $this->db->where('nilai_matkul_cpl.id_pengampu',$id_pengampu);
        $query = $this->db->get();
        return $query;
    }

    public function tampil_data3($id_jurusan)
    {
        $this->db->select('*');
                $this->db->from('pengampu_mk');
                $this->db->join('nilai_matkul_cpl','pengampu_mk.id_pengampu = nilai_matkul_cpl.id_pengampu', 'LEFT');
                //$this->db->from('nilai_matkul_cpl');
                $this->db->join('cpl_mk','nilai_matkul_cpl.id_cplmk = cpl_mk.id_cplmk', 'LEFT');
                $this->db->join('cpl','cpl_mk.id_cpl = cpl.id_cpl', 'LEFT');
                $this->db->join('matkul','nilai_matkul_cpl.id_matkul = matkul.id_matkul', 'LEFT');
                $this->db->join('jurusan','nilai_matkul_cpl.id_jurusan = jurusan.id_jurusan', 'LEFT');
                $this->db->where('nilai_matkul_cpl.id_jurusan',$id_jurusan);
        $query = $this->db->get();
        return $query;
    }

    public function ambil_data($id_cpl)
    {
        $session = $_SESSION;
        $jurusan = $this->session->userdata('id_jurusan');
        $this->db->select('*');
                $this->db->from('nilai_matkul_cpl');
                $this->db->join('cpl_mk','nilai_matkul_cpl.id_cplmk = cpl_mk.id_cplmk', 'LEFT');
                $this->db->join('cpl','cpl_mk.id_cpl = cpl.id_cpl', 'LEFT');
                $this->db->join('matkul','nilai_matkul_cpl.id_matkul = matkul.id_matkul', 'LEFT');
                $this->db->join('jurusan','matkul.id_jurusan = jurusan.id_jurusan', 'LEFT');
                $this->db->where('nilai_matkul_cpl.id_jurusan',$jurusan);
                $this->db->where('cpl.id_cpl',$id_cpl);
        $query = $this->db->get();
        return $query;
    }

    public function tampil_cpl()
    {
        $session = $_SESSION;
        $jurusan = $this->session->userdata('id_jurusan');
        $this->db->select('*');
                $this->db->from('cpl');
                //$this->db->join('total','cpl.id_cpl = total.id_cpl', 'LEFT');
                $this->db->order_by("cpl.total_cpl", "desc");
                $this->db->where('cpl.id_jurusan', $jurusan);
        $query = $this->db->get();
        return $query;
    }

    public function tampil_cpl_baru()
    {
        $session = $_SESSION;
        $jurusan = $this->session->userdata('id_jurusan');
        $this->db->select('*');
                $this->db->from('cpl');
                //$this->db->join('total','cpl.id_cpl = total.id_cpl', 'LEFT');
                //$this->db->order_by("cpl.ko", "asc");
                $this->db->where('cpl.id_jurusan', $jurusan);
        $query = $this->db->get();
        return $query;
    }

    public function tampil_cpl2($id_jurusan)
    {
        $this->db->select('*');
                $this->db->from('cpl');
                //$this->db->join('total','cpl.id_cpl = total.id_cpl', 'LEFT');
                $this->db->order_by("cpl.total_cpl", "desc");
                $this->db->where('cpl.id_jurusan', $id_jurusan);
        $query = $this->db->get();
        return $query;
    }

    public function tampil_total()
    {
        $session = $_SESSION;
        $jurusan = $this->session->userdata('id_jurusan');
        $this->db->select('*');
                $this->db->from('cpl');
                $this->db->join('total','cpl.id_cpl = total.id_cpl', 'LEFT');
                $this->db->where('cpl.id_jurusan', $jurusan);
        $query = $this->db->get();
        return $query;
    }

    public function tampil_total2($id_jurusan)
    {
        $this->db->select('*');
                $this->db->from('cpl');
                $this->db->join('total','cpl.id_cpl = total.id_cpl', 'LEFT');
                $this->db->where('cpl.id_jurusan', $id_jurusan);
        $query = $this->db->get();
        return $query;
    }

    public function tampil_nilai_cpl($id_cplmk, $id_matkul, $id_pengampu)
    {
        $this->db->select('*');
                $this->db->from('nilai_cpl');
                $this->db->join('cpl_mk','nilai_cpl.id_cplmk = cpl_mk.id_cplmk', 'LEFT');
                $this->db->join('cpl','cpl_mk.id_cpl = cpl.id_cpl', 'LEFT');
                $this->db->join('matkul','nilai_cpl.id_matkul = matkul.id_matkul', 'LEFT');
                $this->db->join('jurusan','matkul.id_jurusan = jurusan.id_jurusan', 'LEFT');
                $this->db->where('nilai_cpl.id_matkul', $id_matkul);
                $this->db->where('nilai_cpl.id_cplmk', $id_cplmk);
                $this->db->where('nilai_cpl.id_pengampu', $id_pengampu);
        $query = $this->db->get();
        return $query;
    }

    function insert_cpl($data)
    {
        $id_matkul = $this->input->post('id_matkul');
        $id_cplmk = $this->input->post('id_cplmk');
        $id_pengampu = $this->input->post('id_pengampu');
        $sql = $this->db->query("SELECT id_matkul FROM nilai_matkul_cpl where id_matkul='$id_matkul' AND id_cplmk = '$id_cplmk' AND id_pengampu = '$id_pengampu'");
        $cek_user = $sql->num_rows();
        
        if($cek_user > 0)
        {
            $datas=array(
            'id_jurusan'           => $data['id_jurusan'],
            'id_matkul'  =>$data['id_matkul'],
            'id_cplmk'  =>$data['id_cplmk'],
            'id_pengampu'  =>$data['id_pengampu'],
            'nilai_matkul_cpl'  =>$data['nilai_matkul_cpl']         
            );

            return $this->db->get_where('nilai_matkul_cpl',$datas)->num_rows();
        }
        else
        {
            
            $data= [
            'id_jurusan'           => $data['id_jurusan'],
            'id_matkul'  =>$data['id_matkul'],
            'id_cplmk'  =>$data['id_cplmk'],
            'id_pengampu'  =>$data['id_pengampu'],
            'nilai_matkul_cpl'  =>$data['nilai_matkul_cpl']   
        ];
        
            $this->db->insert('nilai_matkul_cpl', $data);
        }
        
         return ($this->db->affected_rows()!=1)?false:true;
         
    }

    function insert_total_cpl($data)
    {
        $id_cpl = $this->input->post('id_cpl');
        $id_jurusan = $this->input->post('id_jurusan');
        $sql = $this->db->query("SELECT id_cpl FROM total where id_cpl='$id_cpl' AND id_jurusan = '$id_jurusan'");
        $cek_user = $sql->num_rows();
        
        if($cek_user > 0)
        {
            $datas=array(
            'id_jurusan'           => $data['id_jurusan'],
            'id_cpl'  =>$data['id_cpl'],
            'total_cpl'  =>$data['total_cpl']         
            );

            return $this->db->get_where('total',$datas)->num_rows();
        }
        else
        {
            
            $data= [
            'id_jurusan'           => $data['id_jurusan'],
            'id_cpl'  =>$data['id_cpl'],
            'total_cpl'  =>$data['total_cpl']   
        ];
        
            $this->db->insert('total', $data);
        }
        
         return ($this->db->affected_rows()!=1)?false:true;
         
    }

    function insert_total_cpl2($data)
    {
        $id_cpl = $this->input->post('id_cpl');
        $id_jurusan = $this->input->post('id_jurusan');
        $sql = $this->db->query("SELECT total_cpl FROM cpl where id_cpl='$id_cpl' AND id_jurusan = '$id_jurusan'");
        //$cek_user = $sql->num_rows();
        
        if($sql == 0)
        {
            $datas=array(
            'total_cpl'  =>$data['total_cpl']         
            );

            $this->db->where('id_cpl', $id_cpl);
            $this->db->update('cpl', $data);
        }
        else
        {
            
            $data= [
            'total_cpl'  =>$data['total_cpl']   
        ];
            $this->db->where('id_cpl', $id_cpl);
            $this->db->update('cpl', $data);
        }
        
         return ($this->db->affected_rows()!=1)?false:true;
         
    }
    
}