<?php


class P7 extends CI_Controller {
	
	public function index(){
		
		$this->load->view("view_p7");
	}
	public function send(){
		$con = array(
			array(
					'field' => 'no',
					'label' => 'No HP',
					'rules' => 'required',
					'errors' => array(
                        'required' => 'No Handphone wajib diisi.'
						),
				),
			array(
					'field' => 'nama',
					'label' => 'Nama Pembeli',
					'rules' => 'required',
					'errors' => array(
                        'required' => 'Nama wajib diisi.'
						),
				),
			array(
					'field' => 'merk',
					'label' => 'Pilih Merk',
					'rules' => 'required',
					'errors' => array(
                        'required' => 'Merk wajib dipilih.'
						),
				),
			array(
					'field' => 'ukuran',
					'label' => 'Pilih Ukuran',
					'rules' => 'required',
					'errors' => array(
                        'required' => 'Ukuran wajib dipilih.'
						),
				),
			);
		$this->form_validation->set_rules($con);
		if ($this->form_validation->run() != true) {
			$this->load->view('view_form_matkul');
		} else {
			  $m = $this->input->post('merk');
					switch($m) {
						case 'Nike':
							$h = "375000";
							break;
							
						case 'Adidas':
							$h = "300000";
							break;
							
						case 'Kickers':
							$h = "250000";
							break;
							
						case 'Eiger':
							$h = "275000";
							break;
							
						case 'Buccheri':
							$h = "400000";
							break;
					}
				$data = [
				'a' => $this->input->post('no',TRUE),
				'b' => $this->input->post('nama',TRUE),
				'c' =>  $this->input->post('merk',TRUE),
				'd' =>  $this->input->post('ukuran',TRUE),
				'e' =>  $h
				
				];
					$this->load->view("view_p7_2",$data);
	}}
	
}
