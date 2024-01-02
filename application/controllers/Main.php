<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model("Contact");
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view("index");	
	}

	public function contact() {
		$this->load->view("contact");
	}

	public function contact_kaydet() {
		$array = array(
			"isim" => $this->input->post("isim"),
			"email" => $this->input->post("email"),
			"konu" => $this->input->post("konu"),
			"aciklama" => $this->input->post("aciklama"),
		);

		$islem = $this->Contact->iletisimKaydet($array);

		if ($islem) {
			redirect('http://localhost/proje/');
		} else {
			redirect('http://localhost/proje/main/contact');
		}
	}
}
