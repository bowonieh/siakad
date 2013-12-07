<?php

class Komentar extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('mkomentar');
    }

    function insert(){
        
       echo $this->mkomentar->inserttodb();
        
    }
    
    }