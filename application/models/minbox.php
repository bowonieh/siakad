<?php
class Minbox extends CI_Model
 {
  function getmail($user)
  {
      $this->db->where(array('penerima'=>$user));
      $this->db->order_by('waktu','desc');
      $this->db->join('view_user','mailbox.pengirim=view_user.username','inner');
      $ambil = $this->db->get('mailbox');
      
          if($ambil->num_rows())
        {
            foreach($ambil->result() as $baris)
           {
            $hasil[] = $baris;
            }
    
            return $hasil;
        }
      
      
        
        
    }
    function terkirim($user){
        $this->db->where(array('pengirim'=>$user));
        $this->db->order_by('waktu','desc');
        
    }
 }