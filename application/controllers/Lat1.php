<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lat1 extends CI_Controller {

    public function index()
    {
        echo "<h1> Lat1 class </h1>";
    }
	//C
	  public function biodata1()
    {
		echo "<h1>Perkenalkan</h1>
			<p> Nama : Daffa Arya Dewanata </p>";
    }
	//VC
	 public function biodata2()
    {
		$this->load->view('view_biodata1');
    }
	//MC
	  public function biodata3()
    {
		$this->load->model("model_biodata");
		$bio = $this->model_biodata->index();
		echo "<h1>Perkenalkan</h1>
			 Nama :".$bio;
    }
	//MVC
	  public function biodata4()
    {
		$this->load->model("model_biodata");
		$data['bio']= $this->model_biodata->index();
		$data['title'] = "Form Biodata";
		$this->load->view("view_biodata2",$data);
    }
	
}
