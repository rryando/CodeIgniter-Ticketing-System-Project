<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Booking extends CI_Controller{

public function __construct(){

		parent::__construct();
		$this->load->helper('url');
		$this->load->library('input');
		$this->load->view('template/index');
		$this->load->model('customer_model');
	}

public function insert_booking(){
	$data['nama']= $this->input->post('name');
	$data['hp']=$this->input->post('phone');
	//echo $data['nama'];
	//echo $data['hp'];
	$data['email']=$this->input->post('email');
	$data['jumlah']=$this->input->post('jumlah');
	echo $data['jumlah'];
	$this->customer_model->insert_booking($data);
	redirect(site_url('index.php'));
}





	}

?>