<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Helloworld extends CI_Controller {

/* 	public function index()
 	{
 		$data=array(
 			'nama'=>"John Terry",
 			'alamat'=>"Tlogomulyo",
			'kampus'=>"Havard"
 		);
 		$this->load->view('hello_CI',$data);
 		//echo"Hello";
 	}
 	public function fungsi(){
		echo "Fungsi Dari Controler";
 	}
 	public function parameter ($nama){
 		echo"Selamat datang ".$nama;
 	}
	
 }*/


public function index(){
	$data=$this->load->model('mymodel');
	$data=$this->mymodel->GetMahasiswa('mahasiswa');
	/*foreach ($data as $mahasiswa) {
		echo "Nama 	 :".$mahasiswa['nama']."<br/>";
		echo "Alamat :".$mahasiswa['alamat']."<hr/>";
	}*/
	$data=array('data'=>$data);
	//$this->load->view('terserah',$data);
	$this->load->view('data_mahasiswa',$data);
}

public function add_data(){
	$this->load->view('add_data');
}

public function insert(){
	$data=$this->load->model('mymodel');

	$data=array(
		'no_induk'=>$this->input->post('ni'),
		'nama'=>$this->input->post('nama'),
		'alamat'=>$this->input->post('alamat')
	);

	$data=$this->mymodel->Insert('mahasiswa',$data);
	redirect(base_url(),'refresh');
}

}
