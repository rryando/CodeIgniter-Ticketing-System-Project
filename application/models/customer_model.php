<?php
	class Customer_model extends CI_Model{
		function __construct()
	{
		parent::__construct();
	}
		function insert_booking($data){
			$this->db->insert('customer', $data);
		}

	}

?>

