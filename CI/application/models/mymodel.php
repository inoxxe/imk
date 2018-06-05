<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class mymodel extends CI_Model
{
	
	public function GetMahasiswa($table)
	{
		$res=$this->db->get($table);//memilih tabel
		return $res->result_array();//mengembalikan hasil
	}

	public function Insert ($table,$data){
		$res=$this->db->insert($table,$data);
		return $res;
	}

	public function update ($table,$data,$where){
		$res=$this->db->update($table,$data,$where);
		return $res;
	}

	public function Delete ($table,$where){
		$res=$this->db->delete($table,$where);
		return $res;
	}
}
?>