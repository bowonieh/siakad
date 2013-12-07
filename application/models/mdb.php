<?php

class Mdb extends CI_Model{
    
    function getall($table){
        
        $this->db->get($table);
        
    }
    
    
    
}