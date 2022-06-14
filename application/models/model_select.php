<?php

Class Model_select extends CI_Model
{

function __construct(){

parent::__construct();

}


function prodi(){


$this->db->order_by('nama','ASC');
$jurusan= $this->db->get('jurusan');


return $jurusan->result_array();


}


function dosen($id_jurusan){

$dosen="<option value='0'>--pilih--</pilih>";

$this->db->order_by('nama_dosen','ASC');
$dos= $this->db->get_where('dosen',array('id_jurusan'=>$id_jurusan));

foreach ($dos->result_array() as $data ){
$dosen.= "<option value='$data[id_dosen]'>$data[nama_dosen]</option>";
}

return $dosen;

}

function matkul($id_jurusan){
$matkul="<option value='0'>--pilih--</pilih>";

$this->db->order_by('nama_matkul','ASC');
$mat= $this->db->get_where('matkul',array('id_jurusan'=>$id_jurusan));

foreach ($mat->result_array() as $data ){
$matkul.= "<option value='$data[id_matkul]'>$data[nama_matkul] $data[kelas]</option>";
}

return $matkul;
}

function koordinator($id_jurusan){

$koordinator="<option value='0'>--pilih--</pilih>";

$this->db->order_by('nama_dosen','ASC');
$dos= $this->db->get_where('dosen',array('id_jurusan'=>$id_jurusan));

foreach ($dos->result_array() as $data ){
$koordinator.= "<option value='$data[nama_dosen]'>$data[nama_dosen]</option>";
}

return $koordinator;

}

function email($id_dosen){
$email="<option value='0'>--Email--</pilih>";

$this->db->order_by('email','ASC');
$mail= $this->db->get_where('dosen',array('id_dosen'=>$id_dosen));

foreach ($mail->result_array() as $data ){
$email.= "<option value='$data[email]'>$data[email] </option>";
}

return $email;
}


}