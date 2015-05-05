<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Admin1 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //if (!$this->is_logged_in() || ( $this->is_admin() != 'admin')) 
        if (!$this->is_logged_in() || ( $this->is_admin() != 'admin') )
        {
            //echo $this->is_admin();
            $this->session->sess_destroy();
            redirect('login');
        }
        $this->load->model('kamar_model');
        $this->load->model('customer_model');

    }
    
    private function is_admin()
    {
        return $this->session->userdata('privileges');
    }
    
    public function index()
    {
        $kamar = $this->kamar_model->get_all();
        $customer = $this->customer_model->get_all();
        $this->load->view('admin', array(
            'kamar' => $kamar,
            'customer' => $customer
        ));
        //$this->load->view('admin');
    }
    /*
    private function is_admin()
    {
        return $this->session->userdata('username');
    }
    */
    
    public function getCustomerData(){

         echo json_encode(array('customer'=>$this->customer_model->get_all()));
    }
    
    public function get_email($kapasitas)
    {
        $email = $this->customer_model->get_email($kapasitas);
        $this->load->view('includes/getEmail',array('email'=>$email));
         
    }
    
    private function is_logged_in()
    {
        return $this->session->userdata('is_logged_in');
    }
    
    public function addKamar()
    {
        sleep(1);
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nomor', 'nomor', 'required|max_length[3]|numeric');
        $this->form_validation->set_rules('kapasitas', 'kapasitas', 'required|max_length[3]|numeric');
        $this->form_validation->set_rules('harga', 'harga', 'required|max_length[32]|numeric');
        
        $status = 'Kosong';
        
        if ($this->form_validation->run() == FALSE) 
        {
            $message = "<strong>Adding</strong> failed!";
            $this->json_response(FALSE, $message);
        } 
        else 
        {
            $is_added = $this->kamar_model->add(
                $this->input->post('nomor'), 
                $this->input->post('kapasitas'), 
                $this->input->post('harga'),
                $status
            );
            
            if ($is_added) 
            {
                $message = "Kamar Nomor : <strong> ".$this->input->post('Nomor')."</strong> berhasil ditambahkan !";
                $this->json_response(TRUE, $message);
            } 
            else 
            {
                $message = "Kamar Nomor : <strong> ".$this->input->post('Nomor')."</strong> sudah ada !";
                $this->json_response(FALSE, $message);
            }
        }
    }
    
    
    public function editKamar()
    {
        sleep(1);
        $this->load->library('form_validation');
        $this->form_validation->set_rules('id_kamar', 'id_kamar', 'max_length[255]');
        $this->form_validation->set_rules('nomor', 'nomor', 'max_length[255]');
        $this->form_validation->set_rules('kapasitas', 'kapasitas', 'max_length[255]');
        $this->form_validation->set_rules('harga', 'harga', 'max_length[255]');
        $this->form_validation->set_rules('email', 'email', 'max_length[255]');
        $this->form_validation->set_rules('status', 'status', 'max_length[255]');

        
        if ($this->form_validation->run() == FALSE) 
        {
            $message = "<strong>Editing</strong> gagal!";
            $this->json_response(FALSE, $message);
        } 
        else 
        {
            $is_updated = $this->kamar_model->update(
                $this->input->post('id_kamar'), 
                $this->input->post('nomor'), 
                $this->input->post('kapasitas'), 
                $this->input->post('harga'),
                $this->input->post('email'),
                $this->input->post('status')
                
            );
            
            if ($is_updated) 
            {
                $message = "Kamar Nomor : <strong> ".$this->input->post('nomor')."</strong> berhasil diubah !";
                $this->json_response(TRUE, $message);
            } 
            else 
            {
                $message = "Kamar Nomor : <strong> ".$this->input->post('nomor')."</strong> Edit Error, silahkan cek data anda !";
                $this->json_response(FALSE, $message);
            }
        }
    }
    
    public function editCustomer(){

        $this->load->library('form_validation');
        $this->form_validation->set_rules('id_customer', 'id_customer', 'max_length[255]');
        $this->form_validation->set_rules('harga', 'harga', 'max_length[255]');
        $this->form_validation->set_rules('status', 'status', 'max_length[255]');

        
        if ($this->form_validation->run() == FALSE) 
        {
            $message = "<strong>Editing</strong> gagal!";
            $this->json_response(FALSE, $message);
        } 
        else 
        {
            $is_updated = $this->customer_model->update(
                $this->input->post('id_customer'), 
                $this->input->post('harga'),
                $this->input->post('status')
                
            );
            
            if ($is_updated) 
            {
                $message = "Kamar Nomor : <strong> ".$this->input->post('nomor')."</strong> berhasil diubah !";
                $this->json_response(TRUE, $message);
            } 
            else 
            {
                $message = "Kamar Nomor : <strong> ".$this->input->post('nomor')."</strong> Edit Error, silahkan cek data anda !";
                $this->json_response(FALSE, $message);
            }
        }
    }
    

    
    public function deleteKamar($id_kamar)
    {

        $this->kamar_model->delete($id_kamar);
    }
    
    public function deleteCust($id_customer)
    {

        $this->customer_model->delete($id_customer);
    }
    
    public function getKamarData()
    {

        echo json_encode(array('kamar'=>$this->kamar_model->get_by_payment()));
    }
 
    private function json_response($successful, $message){
        echo json_encode(array(
            'isSuccessful' => $successful,
            'message' => $message
        )); 
    }

    
}