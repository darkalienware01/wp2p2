<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class matkul extends CI_Controller {
	
	public function index(){
		
		$this->load->view("view_form_matkul");
	}
	public function cetak(){
		 $data = [
			'kode' => $this->input->post('kode',TRUE),
			'nama' => $this->input->post('nama',TRUE),
			'sks' =>  $this->input->post('sks',TRUE)
			];
		$this->load->view("view_data_matkul",$data);
	}
	
}
