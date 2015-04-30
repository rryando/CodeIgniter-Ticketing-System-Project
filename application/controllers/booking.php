<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Booking extends CI_Controller{

public function __construct(){

		parent::__construct();
		$this->load->helper('url');
		$this->load->library('input');
		//$this->load->view('template/index');
		//$this->load->model('customer_model');
	}

public function addBooking(){
	$this->load->model('customer_model');
	$data['nama']= $this->input->post('name');
	$data['hp']=$this->input->post('phone');
	//echo $data['nama'];
	//echo $data['hp'];
	$data['email']=$this->input->post('email');
	$data['jumlah']=$this->input->post('jumlah');
	$data['date']=$this->input->post('date');
	echo $data['nama'] ;
	$this->customer_model->insert_booking($data);
	redirect(site_url('login'));
	//echo "<div class='alert alert-info'> Successfully Booked </div>";
	//redirect(site_url('login/index'));

}

public function cek_booking(){
	$this->load->model('customer_model');
	$data=$this->input->post('kode');
	// echo $data;
	// echo "tes booking";
	$booking['data']=$this->customer_model->select_by_id($data)->row();
	redirect(site_url('login/index.php#CekBooking'));
	$this->load->view('template/index.php#CekBooking',$booking);


}


public function showBooking(){

}



	}

?>