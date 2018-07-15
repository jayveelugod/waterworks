<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 

class IndexController extends CI_Controller { 

	public function __construct() {
		parent:: __construct();
		$this->load->model('barangay');
		$this->load->model('customer');
	}

	public function index() { 
		$this->load->view('layout/index.php');
		// $this->load->view('layout/ui-buttons.html');
    }

    public function customers() {
    	$brgy_names = $this->barangay->getAll();
    	$data['customerList'] = $this->customer->getAll($brgy_names);
    	$data['barangayList'] = $brgy_names;
    	$this->load->view('pages/customermeterreading', $data);
	}

	public function modal($brgy_id, $brgy_name) {
		$data['brgy_id'] = $brgy_id;
		$data['brgy_name'] = $brgy_name;
		$data['latest_acct_number'] = $this->customer->get($brgy_id);
		$this->load->view('pages/addcustomer', $data);
	}

	public function billing() {
		$this->load->view('pages/addcustomer');
	}
}