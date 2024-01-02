<?php
    class Contact extends CI_Model {
        public function __construct() {
            parent::__construct();
        }
        public function iletisimKaydet($veriler = array()) {
            return $this->db->insert("iletisim",$veriler);
        }
    }
?>