<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lat2 extends CI_Controller {
	
	public function index(){
		
		echo "Selamat datang, selamat belajar web programming";
	}
	//C
	public function penjumlahan1(){
		$n1 = "192";
		$n2 = "168";
		
		$h = $n1 + $n2;
		echo "Hasil penjumlahan ".$n1 ."+". $n2 ." = ". $h;
	}
	//MC
	public function penjumlahan2(){
		$this->load->model("Model_lat2");
		$h = $this->Model_lat2->jumlah1();
		echo "Hasil penjumlahan ".$h;
	}
	//MC + Param
	public function penjumlahan3($n1 = '0',$n2 = '0'){
		$this->load->model("Model_lat2");
		$h = $this->Model_lat2->jumlah2($n1,$n2);
		echo "Hasil penjumlahan ".$h;
	}
	//MVC + Param
	public function penjumlahan4($n1 = '0',$n2 = '0'){
		$this->load->model("Model_lat2");
		$h = $this->Model_lat2->jumlah2($n1,$n2);
		$d['h']= $h;
		$this->load->view("view_lat2",$d);
	}
}