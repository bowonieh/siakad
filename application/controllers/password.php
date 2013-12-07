<?php if (!defined('BASEPATH')) exit ('No Direct Script Access Allowed');

class Password extends CI_Controller {
	
	function __construct()
	{
            parent::__construct();
            $this->load->library('form_validation');
            $this->load->helper(array('url','form','text'));
            $this->load->model('mpassword');
        }
        function index(){
            $username = $this->session->userdata('username');
            $rules = array(
                    array(
                      'field'=>'passlama',  
                      'label'=>'PASSWORD LAMA',
                      'rules'=>'required|xss_clean'
                    ),
                    array(
                      'field'=>'passbaru',
                      'label'=>'PASSWORD BARU',
                      'rules'=>'required|xss_clean'
                    ),
                    array(
                        'field'=>'passconfirm',
                        'label'=>'PASSWORD KONFIRMASI',
                        'rules'=>'required|xss_clean'
                    )
                );
            if ($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE)&& $this->session->userdata('level')==1){
                //ADMINISTRATOR
                
                
                $this->form_validation->set_error_delimiters('<div class="alert alertbox">', '</div>');
                $this->form_validation->set_rules($rules);
                
                if ($this->form_validation->run() == FALSE)
                {
                $this->load->view('utama/header');
                //$this->load->view('menu/menuadmin');
                $this->load->view('user/password');
                $this->load->view('utama/footer');
                }else{
                    $this->mpassword->gantipassword($username);
                    redirect('user','refresh');
                }
                
                
            }elseif ($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE)&& $this->session->userdata('level')==2){
                //GURU
                $this->form_validation->set_error_delimiters('<div class="alert alertbox">', '</div>');
                $this->form_validation->set_rules($rules);
                
                if ($this->form_validation->run() == FALSE)
                {
                $this->load->view('utama/header');
                //$this->load->view('menu/menuadmin');
                $this->load->view('user/password');
                $this->load->view('utama/footer');
                }else{
                    $this->mpassword->gantipassword($username);
                    redirect('user','refresh');
                }
            }elseif ($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE)&& $this->session->userdata('level')==7){
                //SISWA
                $this->form_validation->set_error_delimiters('<div class="alert alertbox">', '</div>');
                $this->form_validation->set_rules($rules);
                
                if ($this->form_validation->run() == FALSE)
                {
                $this->load->view('utama/header');
                //$this->load->view('menu/menuadmin');
                $this->load->view('user/password');
                $this->load->view('utama/footer');
                }else{
                    $this->mpassword->gantipassword($username);
                    redirect('user','refresh');
                }
            }
            
            else{
                redirect('login','refresh');
            }
            
        }
        
        
        
 }