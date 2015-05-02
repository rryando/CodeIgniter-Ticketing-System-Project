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
	$data['no_identitas']=$this->input->post('ktp');
	$data['alamat']=$this->input->post('alamat');
	$data['hp']=$this->input->post('phone');
	//echo $data['nama'];
	//echo $data['hp'];
	$data['email']=$this->input->post('email');
	$data['jumlah']=$this->input->post('jumlah');
	$data['date_in']=$this->input->post('datein');
	$data['date_out']=$this->input->post('dateout');
	//echo $data['nama'] ;
	
	$data['biaya']=$this->hitung();
	$this->customer_model->insert_booking($data);
	redirect(site_url('login'));
	//echo "<div class='alert alert-info'> Successfully Booked </div>";
	//redirect(site_url('login/index'));

}

public function cekOpen(){
	$this->load->view('template/CekBooking');
	$this->load->model('customer_model');
}


public function cek_booking(){

	$data=$this->input->post('kode');
	// echo $data;
	// echo "tes booking";
	$this->load->model('customer_model');
	$booking=$this->customer_model->select_by_id($data);


	// echo $booking['nama'];
	// echo $booking['hp'];
	// echo "tes output ";
	// echo "";


	// 	foreach ($booking as $key) {
	// 	echo $key['nama']. " nama ";
	// 	echo $key['hp']. " hp";
	// 	echo $key['no_identitas']. " identitas ";
	// }

	$this->load->view('template/CekBooking',array('Booking' =>$booking ));

	// redirect(site_url('template/CekBooking'));


}

public function hitung(){
	$jum=$this->input->post('jumlah');
	// if (($data == 1 ) or ($data == 2) or( $data == 3) )  {
	// 	return $hasil = $data * 75000;
	// }

	return $jum * 75000 ;

}


public function do_upload(){
// 	echo " tes Upload ";

// 	$type = explode('.', $_FILES["gambar"]["name"]);
// 	$type = strtolower($type[count($type)-1]);
// 	$url = "./file/".uniqid(rand()).'.'.$type;
// 	if(in_array($type, array("jpg", "jpeg", "gif", "png")))
// 			if(is_uploaded_file($_FILES["pic"]["tmp_name"]))
// 				if(move_uploaded_file($_FILES["gambar"]["tmp_name"],$url))
// 					return $url;
// 		return "";
// }

	   $config['upload_path']   =   "imgUpload/";
 
       $config['allowed_types'] =   "gif|jpg|jpeg|png"; 
 
       $config['max_size']      =   "5000";
 
       $config['max_width']     =   "1907";
 
       $config['max_height']    =   "1280";
 
       $this->load->library('upload',$config);

       if(!$this->upload->do_upload())

       {

           echo $this->upload->display_errors();

       }
       else

       {

           $finfo=$this->upload->data();

           $this->_createThumbnail($finfo['file_name']);

           $data['uploadInfo'] = $finfo;

           $data['thumbnail_name'] = $finfo['raw_name']. '_thumb' .$finfo['file_ext']; 

           $this->load->view('upload_success',$data);

           // You can view content of the $finfo with the code block below

           /*echo '<pre>';

           print_r($finfo);

           echo '</pre>';*/

       }

	}




public function save(){
	$url = $this->upload;
}



	}

?>