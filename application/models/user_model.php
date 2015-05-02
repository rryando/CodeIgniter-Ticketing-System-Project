<?php

class User_model extends CI_Model {
    function __construct()
    {
        parent::__construct();
    }

    public function get_all($id)
    {
        $users = $this->db
            ->get_where('user', array('id' => $id))
            ->result_array();

        return $users;
    }

    public function get_id($username)
    {
        $row = $this->db->get_where('user', array('username' => $username))->row();
        return $row->id;
    }
 
  
    public function get_privileges($username)
    {
        $privileges = $this->db->select('privileges')
            ->get_where('user', array('username'=>$username))
            ->row();
        
        return $privileges->privileges;
    }
    
    public function get_usernames()
    {
        $users = $this->db->select('username')
            ->order_by('username')
            ->get('user')
            ->result_array();

        return $users;
    }
    
    public function isAdmin($username)
    {
        $privileges = $this->db->select('privileges')
            ->get_where('user', array('username'=>$username))->row('privileges');
        
        return $privileges;
    }

    public function check_password($username, $password)
    {
        $check = $this->db->get_where('user', array('username' => $username, 'password' => $password));
        
        return ($check->num_rows == 1) ? TRUE : FALSE;
    }

    public function is($username, $password)
    {
        $query = $this->db->get_where('user', array('username' => $username, 'password' => $password));
        
        return ($query->num_rows == 1) ? TRUE : FALSE;
    }
}
