<?php if (!defined('BASEPATH')) exit ('No Direct Script Access Allowed');

class Pesan extends CI_Controller {
	
	function __construct()
	{
            parent::__construct();
            $this->load->model('minbox');
            $this->load->helper('text');
        }
        function index(){
           if ($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE)){
                if ($this->session->userdata['level']=='1'){
                 $user = $this->session->userdata['username'];
                    
                    if($this->minbox->getmail($user)>0){
                        $data['isi'] = $this->minbox->getmail($user);
                        $this->load->view('header');
                        $this->load->view('menu/menuadmin');
                        $this->load->view('mail/mailadmin',$data);
                        $this->load->view('footer');
                    }else{
                        
                    }
                }elseif($this->session->userdata['level']=='2'){
                    $user = $this->session->userdata['username'];
                    
                    if($this->minbox->getmail($user)>0){
                        $data['isi'] = $this->minbox->getmail($user);
                        $this->load->view('header');
                        $this->load->view('menu/menuguru');
                        $this->load->view('mail/mailadmin',$data);
                        $this->load->view('footer');
                    }else{
                        
                    }
                }elseif($this->session->userdata['level']=='7'){
                    
                }elseif($this->session->userdata['level']=='10'){
                    
                }
            }else{
                redirect('login','refresh');
            }
        }
}