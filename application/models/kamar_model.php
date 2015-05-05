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
    
    public function add($nomor,$kapasitas,$harga,$status)
    {        
        $this->db->insert('kamar', array(
                'nomor' => $nomor,
                'kapasitas'=>$kapasitas,
                'harga'=>$harga,
                'status'=>$status
            )
        ); 
        return TRUE;
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

    public function update($id_kamar,$nomor,$kapasitas,$harga,$email,$status)
    {
        $kamar = array(
            'nomor' => $nomor, 
            'kapasitas' => $kapasitas, 
            'harga' => $harga,
            'email' => $email,
            'status' => $status
        );
        
        $this->db->where('id_kamar',$id_kamar)
                ->update('kamar', $kamar);
        
        return TRUE;
    }
    
    public function get_by_payment()
    {
        return $this->db->select('kamar.id_kamar,kamar.nomor,kamar.kapasitas, kamar.harga,kamar.email,kamar.status,customer.status_kamar')
            ->from('kamar')
            ->join('customer','kamar.email=customer.email','left')
            ->get()
            ->result_array();
            
    }
    
    

    
}
