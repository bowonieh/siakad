<?php if (!defined('BASEPATH')) exit ('No Direct Script Access Allowed');

class Keluarga extends CI_Controller {
	
	function __construct()
	{
            parent::__construct();
            $this->load->library('form_validation');
            $this->load->helper(array('url','form','text'));
            $this->load->model(array('mkeluarga','mguru','msiswa'));
            
        }
        function index(){
            if ($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata['level']=='2'){
            $username = $this->session->userdata('username');
            $data['isi']= $this->mkeluarga->getKeluargaGuru_($username);
            $this->load->view('utama/header');
            $this->load->view('keluarga/datakeluarga',$data);
            $this->load->view('utama/footer');
            }else{
                redirect('user','refresh');
            }
            
        }
        function tambah(){
            $rulestambah = array(
              array(
                  'field'=>'nama_lengkap',
                  'label'=> 'NAMA LENGKAP',
                  'rules'=>'required|xss_clean'
              ),
              array(
                  'field'=>'hubungan_keluarga',
                  'label'=>'Hubungan Keluarga',
                  'rules'=>'required'
              )
            );
            if ($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata['level']=='2'){
                //AMBIL DARI SINI
                $username = $this->session->userdata('username');
                $rw = $this->mkeluarga->getidGuru($username);
                $data['dd'] = $rw->row();
                $this->form_validation->set_error_delimiters('<div class="alert alertbox">', '</div>');
                $this->form_validation->set_rules($rulestambah);
                if ($this->form_validation->run() == FALSE)
                {
                    $this->load->view('utama/header');
                    $this->load->view('keluarga/tambahkeluarga',$data);
                    $this->load->view('utama/footer');
            
                
                }else{
                    //bila berhasill
                    $berhasil = "berhasil";
                    $data['sukses'] = $berhasil;
                    $this->mkeluarga->addkeluargaguru();
                    $this->load->view('utama/header');
                    $this->load->view('keluarga/tambahkeluarga',$data);
                    $this->load->view('utama/footer');
            
                }
                
            }elseif ($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata['level']=='7'){
                
            }
            else{
                redirect('user','refresh');
            }
        }
        
        function hapuskeluarga(){
            if ($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE)){
                $id_keluarga = $this->uri->segment(3);
                $this->mkeluarga->deletekeluarga($id_keluarga);
                redirect('keluarga','refresh');
            }else{
                redirect('user','refresh');
            }
        }
        function update(){
             $id = $this->uri->segment(3);
             $username = $this->session->userdata('username');
             if($this->session->userdata('username',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata('level',TRUE) && $this->session->userdata('level')=='2'){
                if(!$this->mkeluarga->cek($id,$username)){
                    redirect('keluarga','refresh');
                }else{
                    //jika berhasil
                    $data['isi'] = $this->mkeluarga->detilKeluarga($id);
                    $rules = array(
                                array(
                                     'field'=>'nama_lengkap',
                                     'label'=> 'NAMA LENGKAP',
                                        'rules'=>'required|xss_clean'
                                ),
                                array(
                                    'field'=>'hubungan_keluarga',
                                    'label'=>'Hubungan Keluarga',
                                    'rules'=>'required'
                                    )
                         );
                            $this->form_validation->set_error_delimiters('<div class="alert alertbox" data-toggle="modal">', '</div>');
                            $this->form_validation->set_rules($rules);
                            if ($this->form_validation->run() == FALSE)
                         {
                
                        $this->load->view('utama/header');
                        $this->load->view('keluarga/editkeluarga',$data);
                        $this->load->view('utama/footer');
                    }else{
                    //$this->mpendidikan->tambah();
                    $this->mkeluarga->update();
                    redirect('keluarga','refresh');
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

        
        }
