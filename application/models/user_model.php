<?php

class User_model extends CI_Model {

	var $table = 'user';

    function User_model(){
		parent::__construct();
	}

	function changepassword($data){
        return  $this->db->query("update ".$this->table." set password = '".$data->password."' where userid =".$data->userid);
    }
    
    function getAll(){
        return  $this->db->query("SELECT userid,username, password, name, level, storeid, isactive FROM user")->result_array();
    }
    
    function insert($data){
        return $this->db->insert($this->table, $data);
    }
    
    function delete($data){
        return $this->db->delete($this->table,array('userid'=>$data->userid));
    }
    
    function getBindData($username){
        return $this->db->select('storeid')
            ->from('user')
            ->where('username',$username)
            ->get()
            ->result();
    }
    
    function updateisactive($data){
        return  $this->db->query("update ".$this->table." set isactive = '".$data->isactive."' where userid =".$data->userid);
    }
    
    function getbyid($id){
        return $this->db->get_where($this->table , array('userid' => $id))->result_array();
    }
    
    function register($username,$password,$name,$storeid){
        $data = array('username'=>$username,
                      'password'=>$password,
                      'name'=>$name,
                      'storeid'=>$storeid);
        return $this->db->insert($this->table, $data);
    }
}
