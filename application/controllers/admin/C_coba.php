<?php

Class C_coba extends CI_Controller

{


function __construct(){

	parent::__construct();

	$this->load->database();

	$this->load->helper(array('url'));

	$this->load->model('model_select');


}


function index(){


	$data['prodi']=$this->model_select->prodi();
	//$this->load->view('templates_admin/header2');
	//$this->load->view('templates_admin/sidebar');
	$this->load->view('view_select',$data);
	//$this->load->view('templates_admin/footer2');



}

function ambil_data(){

	$modul=$this->input->post('modul');
	$id=$this->input->post('id');

	if($modul=="dosen"){
	echo $this->model_select->dosen($id);
	}
	else if($modul=="matkul"){
	echo $this->model_select->matkul($id);

	}
	else if($modul=="koordinator"){
	echo $this->model_select->koordinator($id);

	}

}

function ambil_data2(){

	$modul=$this->input->post('modul');
	$id=$this->input->post('id');

	if($modul=="dosen"){
	echo $this->model_select->dosen($id);
	}
	else if($modul=="email"){
	echo $this->model_select->email($id);

	}

}

}