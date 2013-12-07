<?php if (!defined('BASEPATH')) exit ('No Direct Script Access Allowed');
//class rpendidikan author agus wibowo
class Rpendidikan extends CI_Controller {
	
	function __construct()
	{
            parent::__construct();
            $this->load->helper(array('url','form'));
            $this->load->database();
            $this->load->model(array('mberita','mguru','mpendidikan'));
            $this->load->library(array('form_validation'));
            
        }
        function index(){
            $username = $this->session->userdata('username');
            $data['isi']= $this->mpendidikan->getPendidikan($username);
            $this->load->view('utama/header');
            $this->load->view('pendidikan/rpendidikan',$data);
            $this->load->view('utama/footer');
            
            
        }
        function tambahpendidikan(){
            if($this->session->userdata('username',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata('level',TRUE) && $this->session->userdata('level')=='2'){
                $id = $this->session->userdata('username');
                $row = $this->mpendidikan->getidGuru($id);
                $data['isi'] = $row->row();
                $rules = array(
                array(
                    'field'=>'nama_pendidikan',
                    'label'=> 'NAMA SEKOLAH',
                    'rules'=> 'required'
                ),
                
                array(
                    'field'=>'thn_masuk',
                    'label'=>'Tahun Masuk',
                    'rules'=>'min_length[4]|max_length[4]'
                )
            );
                $this->form_validation->set_error_delimiters('<div class="alert alertbox" data-toggle="modal">', '</div>');
                $this->form_validation->set_rules($rules);
                if ($this->form_validation->run() == FALSE)
                {
                
                $this->load->view('utama/header');
                $this->load->view('pendidikan/tambahpendidikan',$data);
                $this->load->view('utama/footer');
                }else{
                    $this->mpendidikan->tambah();
                    $data['sukses'] = "Sukses";
                    $this->load->view('utama/header');
                    $this->load->view('pendidikan/tambahpendidikan',$data);
                    $this->load->view('utama/footer');
                
                }
            }else{
                redirect('user','refresh');
            }
        }
        
        //hapus pendidikan
        function hapus(){
            $id = $this->uri->segment(3);
            $username = $this->session->userdata('username');
            if($this->session->userdata('username',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata('level',TRUE) && $this->session->userdata('level')=='2'){
                if(!$this->mpendidikan->cek($id,$username)){
                    redirect('rpendidikan','refresh');
                }else{
                    //jika berhasil
                    $this->mpendidikan->hapus($id);
                    redirect('rpendidikan','refresh');
                    }
            }else{
                redirect('user','refresh');
            }
            }
         function update(){
             $id = $this->uri->segment(3);
             $username = $this->session->userdata('username');
             if($this->session->userdata('username',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata('level',TRUE) && $this->session->userdata('level')=='2'){
                if(!$this->mpendidikan->cek($id,$username)){
                    redirect('rpendidikan','refresh');
                }else{
                    //jika berhasil
                    $data['isi'] = $this->mpendidikan->getdetilPendidikan($id);
                    $rules = array(
                                array(
                                'field'=>'nama_pendidikan',
                                'label'=> 'NAMA SEKOLAH',
                                'rules'=> 'required'
                            ),
                
                            array(
                                'field'=>'thn_masuk',   
                                'label'=>'Tahun Masuk',
                                'rules'=>'min_length[4]|max_length[4]|numeric'
                            ),
                            array(
                                'field'=>'thn_lulus',   
                                'label'=>'Tahun LULUS',
                                'rules'=>'min_length[4]|max_length[4]|numeric'
                            )
                         );
                            $this->form_validation->set_error_delimiters('<div class="alert alertbox" data-toggle="modal">', '</div>');
                            $this->form_validation->set_rules($rules);
                            if ($this->form_validation->run() == FALSE)
                         {
                
                        $this->load->view('utama/header');
                        $this->load->view('pendidikan/editpendidikan',$data);
                        $this->load->view('utama/footer');
                    }else{
                    //$this->mpendidikan->tambah();
                    $this->mpendidikan->update();
                    redirect('rpendidikan','refresh');
                    //$data['sukses'] = "Sukses";
                    //$this->load->view('utama/header');
                    //$this->load->view('pendidikan/editpendidikan',$data);
                    //$this->load->view('utama/footer');
                
                    }
                    
                    }
            }else{
                redirect('user','refresh');
            }
         }
       
//end of controller        
}