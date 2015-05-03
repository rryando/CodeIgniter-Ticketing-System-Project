<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller
{
    
    public function index()
    {  
        if (!$this->is_logged_in()) {
            $this->load->view('adminLogin');
        }
    }
    
    public function loginCheck()
    {

        $is_user = $this->user_model->is($this->input->post('username'),$this->input->post('password'));

        if($is_user)
        {
            $username = $this->input->post('username');
            $userid = $this->user_model->get_id($username);
            $privileges = $this->user_model->isAdmin($username);        

            $data = array(
                'username' => $username,
                'userid' => $userid,
                'is_logged_in' => TRUE,
                'privileges' => $privileges
            );

            $this->session->set_userdata($data);
            if($privileges == 'admin')
            {
                redirect('admin1');
            }
            if($privileges == 'admin2')
            {
                redirect('admin2');
            }
            else
            {
                redirect('booking');
            }
        } else 
        {
            redirect('login/error');
        }
        
    }
    
    public function error()
    {
        $this->load->view('adminLogin',array('error' => TRUE));
    }
    
    public function logout()
    {
        if (!$this->is_logged_in()) 
        {
            redirect('login');
        } else 
        {
            $this->session->set_userdata(array('is_logged_in' => FALSE));
            $this->session->sess_destroy();
            $this->load->view('adminLogin');
        }
    }
    
    private function is_logged_in()
    {
        return $this->session->userdata('is_logged_in');
    }
}
