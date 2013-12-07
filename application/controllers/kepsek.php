<?php if (!defined('BASEPATH')) exit ('No Direct Script Access Allowed');

class Kepsek extends CI_Controller {
    
    function __construct() {
        parent::__construct();
    }
    
    function index(){
        $this->load->view('template');
    }
}
	