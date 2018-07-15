<?php

class Customer extends CI_Model {
	public $name;
	public $account_number;
	public $brgy_id;	
	public $year;

	public function __construct() {
		parent::__construct();
		$this->name = 'name';
		$this->account_number = 'account_number';
		$this->brgy_id = 'brgy_id';
		$this->year = 'year_added';
	}

	public function get($brgy_id) {
		return $this->db->where('brgy_id', $brgy_id)->order_by('account_number', 'DESC')->limit(1)->get('customer')->result();
	}

	public function getAll($brgy_names) {
		$data = array();
		
		foreach ($brgy_names as $key) {
			$data[$key->name] = $this->db->join('customer', 'barangay.id = customer.brgy_id', 'inner')->where('barangay.name', $key->name)->get('barangay')->result();
		}
		return $data;
	}
	
	public function add() {
		$data = array (
			$this->name => $this->input->post('name'),
			$this->account_number => $this->input->post('account_number'),
			$this->brgy_id => $this->input->post('barangay'),
			$this->year => $this->input->post('year') 
		);
		return $this->db->insert('customer', $data);
	}
}

?>