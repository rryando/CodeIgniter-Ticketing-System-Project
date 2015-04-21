<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function index()
    {
        if (!$this->is_logged_in()){
            $this->load->view('login');
        }else{
            redirect('home');
        }
    }
    
    private function logged_in(){
        
    }
    
    private function is_logged_in(){
        return $this->session->userdata('is_logged_in');
    }
    
    private function login_check(){
        
    }
    
    private function logout(){
        $this->session->set_userdata(array(''))
    }
}