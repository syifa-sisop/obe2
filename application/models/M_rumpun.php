
<?php  
class M_rumpun extends CI_Model{

	function insert_data($data)
    {
        $data= [
            'rumpun_mk'  =>$data['rumpun_mk'],
            'deskripsi_mk'  =>$data['deskripsi_mk'],
            'id_matkul'  =>$this->input->post('id_matkul')
        ];
        
        $this->db->insert('deskripsi_mk', $data);
         
    }

    function insert_kajian($data)
    {
        $data= [
            'id_kajian'  =>$data['id_kajian'],
            'id_matkul'  =>$this->input->post('id_matkul')
        ];
        
        $this->db->insert('bahan_kajian2', $data);
         
    }

    function insert_utama($data)
    {
        $data= [
            'pustaka_utama'  =>$data['pustaka_utama'],
            'id_matkul'  =>$this->input->post('id_matkul')
        ];
        
        $this->db->insert('pustaka_utama', $data);
         
    }

    function insert_pendukung($data)
    {
        $data= [
            'pustaka_pendukung'  =>$data['pustaka_pendukung'],
            'id_matkul'  =>$this->input->post('id_matkul')
        ];
        
        $this->db->insert('pustaka_pendukung', $data);
         
    }

    function insert_syarat($data)
    {
        $data= [
            'syarat'  =>$data['syarat'],
            'id_matkul'  =>$this->input->post('id_matkul')
        ];
        
        $this->db->insert('syarat', $data);
         
    }

    function insert_media($data)
    {
        $data= [
            'media'  =>$data['media'],
            'jenis_media'  =>$data['jenis_media'],
            'id_matkul'  =>$this->input->post('id_matkul')
        ];
        
        $this->db->insert('media', $data);
         
    }

    function insert_detail($data)
    {
        $data= [
            'minggu'  =>$data['minggu'],
            'id_subcpmk'  =>$data['id_subcpmk'],
            'indikator'  =>$data['indikator'],
            'kriteria'  =>$data['kriteria'],
            'luring'  =>$data['luring'],
            'daring'  =>$data['daring'],
            'materi'  =>$data['materi'],
            'bobot'  =>$data['bobot'],
            'id_matkul'  =>$this->input->post('id_matkul')
        ];
        
        $this->db->insert('detail_rps', $data);
         
    }

    public function updateFile($id_deskripsimk, $data){
        $this->db->where('id_deskripsimk', $id_deskripsimk);
        return $this->db->update('deskripsi_mk', $data);
    }

    public function updateFile2($id_bahan2, $data){
        $this->db->where('id_bahan2', $id_bahan2);
        return $this->db->update('bahan_kajian2', $data);
    }

    public function updateFile3($id_utama, $data){
        $this->db->where('id_utama', $id_utama);
        return $this->db->update('pustaka_utama', $data);
    }

    public function updateFile4($id_pendukung, $data){
        $this->db->where('id_pendukung', $id_pendukung);
        return $this->db->update('pustaka_pendukung', $data);
    }


    public function updateFile5($id_syarat, $data){
        $this->db->where('id_syarat', $id_syarat);
        return $this->db->update('syarat', $data);
    }

    public function updateFile6($id_detailrps, $data){
        $this->db->where('id_detailrps', $id_detailrps);
        return $this->db->update('detail_rps', $data);
    }

    public function updateFile7($id_media, $data){
        $this->db->where('id_media', $id_media);
        return $this->db->update('media', $data);
    }


    function aspek(){

    //$this->db->order_by('nama_aspek','ASC');
    $aspek= $this->db->get('aspek');

    return $aspek->result_array();
    }

    function cplmk($id_matkul){

        $this->db->select('*');
        $this->db->from('cpl_mk');
        $this->db->join('cpl','cpl_mk.id_cpl = cpl.id_cpl', 'LEFT');
        $this->db->where('cpl_mk.id_matkul', $id_matkul);
        $query = $this->db->get();
        return $query->result_array();
    }

    function cpmk2(){
        $this->db->select('*');
        $this->db->from('cpmk');
        $query = $this->db->get();
        return $query->result_array();
    }

 
    function cpl($id_aspek){
        $session = $_SESSION;
        $jurusan = $this->session->userdata('id_jurusan');

        $cpl="<option value='0'>--pilih--</pilih>";

        $this->db->order_by('kode_cpl','ASC');
        $dos= $this->db->get_where('cpl',array('id_aspek'=>$id_aspek, 'id_jurusan'=>$jurusan));

        foreach ($dos->result_array() as $data ){
        $cpl.= "<option value='$data[id_cpl]'>$data[kode_cpl] $data[cpl]</option>";
        }

        return $cpl;

    }

    public function insert_cpl($data)
    {        
        $item = [
                'id_aspek'    => $this->input->post('aspek'),
                'id_cpl'    => $this->input->post('cpl'),
                'id_matkul'    => $this->input->post('id_matkul')
        ];
        $this->db->insert('cpl_mk', $item);
         
    }

    public function insert_cpmk($data)
    {        
        $item = [
                'kode_cpmk'    => $data['kode_cpmk'],
                'cpmk'    => $data['cpmk'],
                'id_matkul'    => $data['id_matkul'],
                'id_cpl'    => $data['id_cpl']
        ];
        $this->db->insert('cpmk', $item);
         
    }

    public function insert_subcpmk($data)
    {        
        $data= [
            'kode_subcpmk'             => $this->input->post('kode_subcpmk'),
            'subcpmk'          => $this->input->post('subcpmk'),
            'kode_baru'          => $this->input->post('kode_baru'),
            'id_cplmk'          => $this->input->post('id_cplmk'),
            'id_matkul'          => $this->input->post('id_matkul')
        ];

        $this->db->insert('subcpmk', $data);                
    }

    public function cpl2($id_matkul){
        $this->db->from('cpl_mk');
        $this->db->join('aspek','cpl_mk.id_aspek = aspek.id_aspek', 'LEFT');
        $this->db->join('cpl','cpl_mk.id_cpl = cpl.id_cpl', 'LEFT');
        $this->db->where('cpl_mk.id_matkul', $id_matkul);
        $query = $this->db->get();
        return $query;
    }

    public function cpmk($id_matkul){

        $this->db->order_by('kode_cpmk','ASC');
        $this->db->from('cpmk');
        $this->db->join('cpl_mk','cpmk.id_cpl = cpl_mk.id_cpl', 'LEFT');
        $this->db->join('cpl','cpl_mk.id_cpl = cpl.id_cpl', 'LEFT');
        $this->db->where('cpmk.id_matkul', $id_matkul);
        $this->db->where('cpl_mk.id_matkul', $id_matkul);

        $query = $this->db->get();
        return $query;
    }

    public function subcpmk($id_matkul){
        $this->db->from('subcpmk');
        $this->db->join('cpl_mk','subcpmk.id_cplmk = cpl_mk.id_cplmk', 'LEFT');
        $this->db->join('cpl','cpl_mk.id_cpl = cpl.id_cpl', 'LEFT');
        $this->db->where('subcpmk.id_matkul', $id_matkul);
        $query = $this->db->get();
        return $query;
    }

    public function kajian($id_matkul){
        $this->db->from('bahan_kajian2');
        $this->db->join('kajian','bahan_kajian2.id_kajian = kajian.id_kajian', 'LEFT');
        $this->db->join('matkul','bahan_kajian2.id_matkul = matkul.id_matkul', 'LEFT');
        $this->db->where('bahan_kajian2.id_matkul', $id_matkul);
        $query = $this->db->get();
        return $query;
    }

    public function utama($id_matkul){
        $this->db->from('pustaka_utama');
        $this->db->where('pustaka_utama.id_matkul', $id_matkul);
        $query = $this->db->get();
        return $query;
    }

    public function pendukung($id_matkul){
        $this->db->from('pustaka_pendukung');
        $this->db->where('pustaka_pendukung.id_matkul', $id_matkul);
        $query = $this->db->get();
        return $query;
    }

    public function syarat($id_matkul){
        $this->db->from('syarat');
        $this->db->where('syarat.id_matkul', $id_matkul);
        $query = $this->db->get();
        return $query;
    }

    public function media($id_matkul){
        $this->db->from('media');
        $this->db->where('media.id_matkul', $id_matkul);
        $query = $this->db->get();
        return $query;
    }

    public function detail($id_matkul){
        $this->db->from('detail_rps');
        $this->db->join('subcpmk','detail_rps.id_subcpmk = subcpmk.id_subcpmk', 'LEFT');
        $this->db->where('detail_rps.id_matkul', $id_matkul);
        $query = $this->db->get();
        return $query;
    }

    public function get_spesific($id_cplmk)
    {
        return $this->db
                    ->where('id_cplmk',$id_cplmk)
                    ->join('aspek','cpl_mk.id_aspek = aspek.id_aspek', 'LEFT')
                    ->join('cpl','cpl_mk.id_cpl = cpl.id_cpl', 'LEFT')
                    ->get('cpl_mk')
                    ->result();
    }

    public function get_spesific2($id_cpmk)
    {
        return $this->db
                    ->where('id_cpmk',$id_cpmk)
                    ->join('cpl','cpmk.id_cpl = cpl.id_cpl', 'LEFT')
                    ->get('cpmk')
                    ->result();
    }

    public function get_subcpmk($id_subcpmk)
    {
        return $this->db
                    ->where('id_subcpmk',$id_subcpmk)
                    ->join('cpl_mk','subcpmk.id_cplmk = cpl_mk.id_cpl', 'LEFT')
                    ->join('cpl','cpl_mk.id_cpl = cpl.id_cpl', 'LEFT')
                    ->get('subcpmk')
                    ->result();
    }

    function update_data($data)
    {
        $sql = "update cpl_mk set id_aspek =?, id_cpl=? where id_cplmk =?";
        $this->db->query($sql, array($data['aspek'],$data['cpl'],$data['id_cplmk']));
         
    }

    function update_cpmk($data)
    {
        $sql = "update cpmk set kode_cpmk =?, cpmk =?, id_cpl=? where id_cpmk =?";
        $this->db->query($sql, array($data['kode_cpmk'],$data['cpmk'],$data['id_cpl'],$data['id_cpmk']));
         
    }

    function update_subcpmk($data)
    {
        $sql = "update subcpmk set kode_subcpmk =?, subcpmk =?, kode_baru=?, id_cplmk=? where id_subcpmk =?";
        $this->db->query($sql, array($data['kode_subcpmk'],$data['subcpmk'],$data['kode_baru'],$data['id_cplmk'],$data['id_subcpmk']));
         
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

}