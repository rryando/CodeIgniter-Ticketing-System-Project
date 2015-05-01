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
		  	$this->load->library('upload');
		   	$this->db->where('id_customer');
		  	$this->db->update('customer',$data);

		}

		 function select_by_id ($id){
		   // return $this->db->select('*')->from('customer')->where('id_customer',$id)->limit(1)->result();
				



		    $user = $this->db->get_where('customer',array('id_customer' => $id ))->result_array();

		    return $user;

 			//return $this->db->select()->get_where('customer',array('id_customer')=>$id)->limit(1)->result();


		    	//$this->db->select()->get('customer',1)->where(array('id_customer=>$id')->result_array();
		   }

	}

?>

