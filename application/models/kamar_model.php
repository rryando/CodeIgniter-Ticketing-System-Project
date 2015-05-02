<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kamar_model extends CI_Model 
{
    function __construct()
    {
        parent::__construct();
    }

    public function get_by_id($id_kamar)
    {
        $kamar = $this->db
            ->get_where('kamar', array('id_kamar' => $id_kamar))
            ->result_array();

        return $kamar;
    }
    
    public function get_all()
    {
        return $this->db->select('*')
            ->order_by('id_kamar')
            ->get('kamar')
            ->result_array();
    }

/*
    public function get_by_user($userid)
    {
        $ticket = $this->db->select('*')
            ->order_by('ticket')
            ->get_where('ticket', array('userid' => $userid))
            ->result_array();

        return $ticket;
    }
*/
    public function delete($id_kamar)
    {
        $this->db->where('id_kamar',$id_kamar);
        $this->db->delete('kamar');
    }

    public function update($id_kamar,$nomor,$kapasitas,$harga,$email)
    {
        $kamar = array(
            'nomor' => $nomor, 
            'kapasitas' => $kapasitas, 
            'harga' => $harga,
            'email' => $email
        );
        
        $this->db->where('id_kamar',$id_kamar)
                ->update('kamar', $kamar);
        
        return TRUE;
    }
    
    

    
}
