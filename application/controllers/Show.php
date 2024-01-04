<?php
	class Show extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->library("session");
			$this->load->model("Show_Model");
			$user_session_id = $this->session->userdata('logged_in');

			if ($user_session_id == '') {
				redirect(base_url(""));
			}
		}
		public function users() {
			$value = $this->Show_Model->allUsers();

			$array = array(
				"values" => $value
			);

			$this->load->view("show/users",$array);
		}

		public function appointments() {
			$value = $this->Show_Model->allAppointments();

			$array = array(
				"values" => $value
			);

			$this->load->view("show/appointments",$array);
		}
	}
?>