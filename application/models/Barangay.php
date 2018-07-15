<?php

class Barangay extends CI_Model {
	public $id;
	public $name;	

	public function __construct() {
		parent::__construct();
	}

	public function getAll() {
		return $this->db->get('barangay')->result();
	}

	public function get($id) {
		return $this->db->where('id', $id)->get('barangay')->result();
	}

	// public function getAllName() {
	// 	return $this->db->select('name')->from('barangay')->get()->result();
	// }
}

?>