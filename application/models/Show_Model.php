<?php
	class Show_Model extends CI_Model {
		public function __construct() {
			parent::__construct();
		}

		public function allUsers() {
			return $this->db->query("select * from users");
		}

		public function allAppointments() {
			return $this->db->query("select * from appointments");
		}

		public function selectUserWithId($id) {
			return $this->db->query("select * from users where id='$id'");
		}
	}
?>