<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CustomerController extends CI_Controller {

	public function __construct() {
		parent:: __construct();
		$this->load->model('customer');
	}

	public function get($brgy_id) {
		echo json_encode($this->customer->get($brgy_id));
	}

	public function getAll() {
		echo json_encode($this->customer->getAll());
	}

	public function add() {
		echo json_encode($this->customer->add());
	}


}
