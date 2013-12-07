<?php
class Mpassword extends CI_Model
{
    function gantipassword($username){
        
        $passlama = $this->input->post('passlama');
        $passbaru = $this->input->post('passbaru');
        $passconfirm = $this->input->post('passconfirm');
        $this->db->where(array('username'=>$username));
        $this->db->where(array('password'=>md5($passlama)));
        $chk = $this->db->get('user');
        
        
        if(empty($chk)){
            redirect('password','refresh');
        }else{
         if ($passbaru != $passconfirm){
            
        }else{
            $data = array(
               'password'=>md5($passbaru)
            );

            $this->db->where('username', $username);
            $this->db->update('user', $data); 
            
            
            }
            
        }
    }
}
