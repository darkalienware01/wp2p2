<?php


class matkul extends CI_Controller {
	
	public function index(){
		
		$this->load->view("view_form_matkul");
	}
	public function cetak(){
		$con = array(
			array(
					'field' => 'kode',
					'label' => 'Kode Matakuliah',
					'rules' => 'required|min_length[3]',
					'errors' => array(
                        'required' => 'Kode Matakuliah wajib diisi.',
                        'min_length' => 'Kode terlalu pendek, minimal 3 digit.'
						),
				),
			array(
					'field' => 'nama',
					'label' => 'Nama Matakuliah',
					'rules' => 'required|min_length[3]',
					'errors' => array(
                        'required' => 'Nama Matakuliah wajib diisi.',
                        'min_length' => 'Nama terlalu pendek, minimal 3 digit.'
						),
				),
			array(
					'field' => 'sks',
					'label' => 'Pilih SKS',
					'rules' => 'required',
					'errors' => array(
                        'required' => 'SKS wajib dipilih.'
						),
				),
			);
		$this->form_validation->set_rules($con);
		if ($this->form_validation->run() != true) {
			$this->load->view('view_form_matkul');
		} else {
		 $data = [
			'kode' => $this->input->post('kode',TRUE),
			'nama' => $this->input->post('nama',TRUE),
			'sks' =>  $this->input->post('sks',TRUE)
			];
		$this->load->view("view_data_matkul",$data);
	}}
	
}
