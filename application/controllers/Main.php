<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model("Contact");
		$this->load->helper('url');
		$this->load->library("session");
	}

	public function index()
	{
		$signed_in = false;
		if ($this->session->userdata("logged_in") != "") {
			$signed_in = true;
		}
		$this->load->view("index",array("signed_in" => $signed_in));
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
