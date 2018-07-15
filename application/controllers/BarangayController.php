<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BarangayController extends CI_Controller {

	public function __construct() {
		parent:: __construct();
		$this->load->model('barangay');
	}

	public function get($id) {
		$return = $this->barangay->get($id);
		echo json_encode($return);
	}
}