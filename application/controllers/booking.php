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
	$data['date']=$this->input->post('date');
	$this->customer_model->insert_booking($data);
	//echo "<div class='alert alert-info'> Successfully Booked </div>";
	redirect(site_url('login/index'));
	
}

public function cek_booking(){
	$this->load->model('customer_model');
	$data=$this->input->post('kode');
	echo $data;
	echo "tes booking";
	$this->customer_model->select_by_id($data)->row();
	//$this->load->view('template/index.php',$data);

}




	}

?>