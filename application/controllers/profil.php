<?php if (!defined('BASEPATH')) exit ('No Direct Script Access Allowed');

class Profil extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->database();
                $this->load->library('pagination');
                $this->load->helper('url');
		//$this->load->library('grocery_crud');
		$this->load->model('mjurusan');
                $this->load->model('msiswa');
                $this->load->library(array('form_validation','curl'));
                $this->load->model(array('mtahun','magenda','mguru','msiswa','mupload','mkeluarga'));
                $this->load->helper('text');
                

	}
            function index(){
                $this->load->model('mguru');

                $this->load->model('msiswa');
		if ($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata['level']=='2'){
                    $id = $this->session->userdata('username');
                    $data['kel']= $this->mkeluarga->getKeluargaGuru_($id);
                    $row = $this->mguru->getidguru($id);
                    $data['isi'] = $row->row();
                    $this->load->view('utama/header');
                    $this->load->view('guru/profil',$data);
                    $this->load->view('utama/footer');
                }elseif($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata['level']=='7'){
                    //buat profil siswa
                    $nis = $this->session->userdata('username');
                    $row = $this->msiswa->get($nis);
                    $data['isi'] = $row->row();
                    $this->load->view('utama/header');
                    $this->load->view('siswa/profil',$data);
                    $this->load->view('utama/footer');
                }else{
                    redirect('login','refresh');
                }
		
		
            }
            function edit(){
                if ($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata['level']=='2'){
                    $id = $this->session->userdata('username');
                    $row = $this->mguru->getidguru($id);
                    $data['isi'] = $row->row();
                    $this->load->view('utama/header');
                    $this->load->view('guru/editprofil',$data);
                    $this->load->view('utama/footer');
                }elseif($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata['level']=='7'){
                    //buat profil siswa
                    $nis = $this->session->userdata('username');
                    $row = $this->msiswa->get($nis);
                    $data['isi'] = $row->row();
                    $this->load->view('utama/header');
                    $this->load->view('siswa/editprofil',$data);
                    $this->load->view('utama/footer');
                 
                }
		
            }
            function aksieditprofil(){
                if ($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata['level']=='2'){
                    $username = $this->session->userdata('username');
                    $nama_guru= $this->input->post('nama_guru');
                    $nip = $this->input->post('nip');
                    $nuptk = $this->input->post('nuptk');
                    $email = $this->input->post('email');
                    $tempat = $this->input->post('tempat');
                    $tgl_lahir = $this->input->post('tgl_lahir');
                    $alamat = $this->input->post('alamat');
                    $gol = $this->input->post('gol');
                    $tmt = $this->input->post('tmt');
                    $this->db->query("UPDATE guru SET nama_guru = '$nama_guru',nip = '$nip',nuptk = '$nuptk',email = '$email',tempat = '$tempat', tgl_lahir = '$tgl_lahir',alamat = '$alamat',gol = '$gol',tmt = '$tmt' WHERE username = '$username' ");
                }elseif ($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata['level']=='7'){
                    $nis = $this->session->userdata('username');
                    
                    $nisn = $this->input->post('nisn');
                    $nama = $this->input->post('nama');
                    $no_un_smp = $this->input->post('no_un_smp');
                    $tempat_lahir = $this->input->post('tempat_lahir');
                    $tgl_lahir = $this->input->post('tgl_lahir');
                    $alamat = $this->input->post('alamat');
                    $jenkel = $this->input->post('jenkel');
                    $agama = $this->input->post('agama');
                    //$this->db->update_string('siswa',$data,$nis);
                    $this->db->query("UPDATE siswa set nisn = '$nisn', nama = '$nama', no_un_smp = '$no_un_smp', tempat_lahir = '$tempat_lahir', tgl_lahir = '$tgl_lahir',alamat = '$alamat',jenkel = '$jenkel',agama = '$agama' WHERE nis = '$nis'");
                }
            }
            function uploadfoto(){
                    $config['upload_path'] = './img/upload/';
                    $config['allowed_types'] = 'gif|jpg|png|JPG|jpeg';
                    //$config['max_size'] = '1000';
                    //$config['max_width']  = '';
                    //$config['max_height']  = '';
                    $config['overwrite'] = TRUE;
                    $config['remove_spaces'] = TRUE;
                    
                    
                    if ($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata['level']=='2'){
                    $id = $this->session->userdata('username');
                    $row = $this->mguru->getidguru($id);
                    $data['isi'] = $row->row();
                    //upload
                    

                    $this->load->library('upload', $config);
                
                    if ( !$this->upload->do_upload())
                    {
                        
                    $error = array('error' => $this->upload->display_errors());
                    //$this->mupload->insert_fotoGuru($this->upload->data());
                    $this->load->view('utama/header');
                    $this->load->view('guru/upload_form', $error);
                    $this->load->view('utama/footer');
                     }
                    else
                        {
                    //resize
                        $image_data = $this->upload->data();
                        $config['image_library'] = 'gd2';
                        $config['source_image'] = $image_data['full_path'];
                        $config['create_thumb'] = FALSE;
                        $config['maintain_ratio'] = FALSE;
                        $config['width'] = 256;
                        $config['height'] = 256;

                        $this->load->library('image_lib', $config);

                        $this->image_lib->resize();
                        
                        //=
                    $this->mupload->insert_fotoGuru($id,$this->upload->data());
                    
                    $data = array('upload_data' => $this->upload->data());
                    redirect('profil','refresh');
                    
                    //================
                    //$data = array('upload_data' => $this->upload->data());
                    //$this->load->view('members/header');
                    //$this->load->view('members/upload_success', $data);
                    //$this->load->view('members/footer');
                    }
                
                
                    
                    
                }elseif ($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata['level']=='7'){
                    //untuk siswa
                    $id = $this->session->userdata('username');
                    $row = $this->mguru->getidguru($id);
                    $data['isi'] = $row->row();
                    //upload
                    

                    $this->load->library('upload', $config);
                
                    if ( !$this->upload->do_upload())
                    {
                        
                    $error = array('error' => $this->upload->display_errors());
                    //$this->mupload->insert_fotoGuru($this->upload->data());
                    $this->load->view('utama/header');
                    $this->load->view('guru/upload_form', $error);
                    $this->load->view('utama/footer');
                     }
                    else
                        {
                    //resize
                        $image_data = $this->upload->data();
                        $config['image_library'] = 'gd2';
                        $config['source_image'] = $image_data['full_path'];
                        $config['create_thumb'] = FALSE;
                        $config['maintain_ratio'] = TRUE;
                        $config['width'] = 400;
                        $config['height'] = 170;

                        $this->load->library('image_lib', $config);

                        $this->image_lib->resize();
                        
                        //=
                    $this->mupload->insert_fotoSiswa($id,$this->upload->data());
                    
                    $data = array('upload_data' => $this->upload->data());
                    redirect('profil','refresh');
                    
                    //================
                    //$data = array('upload_data' => $this->upload->data());
                    //$this->load->view('members/header');
                    //$this->load->view('members/upload_success', $data);
                    //$this->load->view('members/footer');
                    }
                }else{
                    redirect('user','refresh');
                }
            }
        
        }