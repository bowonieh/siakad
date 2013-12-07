<?php if (!defined('BASEPATH')) exit ('No Direct Script Access Allowed');

class Login extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','form'));
	}

	function index()
	{
            if($this->session->userdata('username',true) && $this->session->userdata('password',true) && $this->session->userdata('level',true)){
                redirect('user','refresh');
            }else{
	$data['username'] =  $this->input->post('username',true);
	$data['password'] =  $this->input->post('password',true);
		
	$this->load->view('login2',$data);
            }
	}
	function logout()
	{
	$this->session->sess_destroy();
	redirect('login', 'refresh');
	}
	//
	function proseslogin() {
		$username = $this->input->post('username'); //read the username that filled by the user
		$password = $this->input->post('password'); //read the password that filled by the user
		$passwordx = md5($password); //this is for change $password into MD5 form
		//the query is to matching the username+password user with username+password from database
		$q = $this->db->query("SELECT * FROM user WHERE username='$username' AND password='$passwordx'");
		if ($q->num_rows() == 1) {
		// if the query is TRUE, then save the username into session and load the welcome view
		$nama = $q->row()->username;
		$password = $q->row()->password;
		$level = $q->row()->level;
		$remote_ip = $_SERVER['REMOTE_ADDR'];
		$this->session->set_userdata('username',$nama);
		$this->session->set_userdata('password',$password);
		$this->session->set_userdata('level',$level);
		$this->session->set_userdata('remote_ip',$remote_ip);
		$data['welcome'] = "Welcome $nama";
		//$this->load->view('welcome_view', $data);
		redirect('user','refresh');
		}
		else {
// query error
		//$data['error']='!! Wrong Username or Password !!';
		//$this->load->view('login/login_view');
                redirect('login','refresh');
		
		}
	}


//	


}
// application/controllers/login.php
