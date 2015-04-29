<?php
	class Customer_model extends CI_Model{
		function __construct()
	{
		parent::__construct();
	}
		function insert_booking($data){
			$this->db->insert('customer', $data);
		}

		  function update_booking($id, $data){
		   	$this->db->where('id_customer');
		  	$this->db->update('customer',$data);
		  }

		  function select_by_id ($id){
		    	 $this->db->select('*');
		    	  $this->db->from('customer');
		    	  $this->db->where('id_customer',$id);
		
		    	  return $this->db->get();
		   // $user = $this->db->get_where('customer',array('id_customer' => $id ))->get();

		   // return $user;

 

		   }

	}

?>

