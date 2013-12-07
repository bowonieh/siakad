<?php if (!defined('BASEPATH')) exit ('No Direct Script Access Allowed');

class Guru extends CI_Controller {
	
	function __construct()
	{
            parent::__construct();
            $this->load->library('form_validation');
            $this->load->helper(array('url','form','text'));
            $this->load->database();
            $this->load->model('msiswa');
            $this->load->model('mguru');
            $this->load->library('pagination');
            
        }
        function index(){
        redirect('guru/daftarguru','refresh');
	}
        function detilguru(){
            $id_guru = $this->uri->segment(3);
            
                
            
            $row = $this->mguru->get($id_guru);
            $data['isi']=$row->row();
            $data['pdk']= $this->mguru->pendidikan($id_guru);
            $this->load->view('remote/detilguru',$data);
            
        }
        function listing2(){
            if($this->mguru->getdata()>0){
        $config = array();
        $config["base_url"] = base_url() . "index.php/guru/listing2";
        $config["total_rows"] = $this->mguru->record_count();
        $config["per_page"] = 12;
        $config['full_tag_open'] = '<div class="pagination pagination-centered" ><ul>';
        $config['full_tag_close'] = '</ul></div>';
        $config['prev_link'] = '&laquo;';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo;';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['first_link'] = FALSE;
        $config['last_link'] = FALSE;

        //$config['use_page_numbers'] = TRUE;
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        //$no = $config["total_rows"] - $config["per_page"];
        $config["num_links"] = round($choice);
        $this->pagination->initialize($config);
        //$data['no1'] = $no;
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["isi"] = $this->mguru->ambil_guru($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
       // $data['number'] = $this->pagination->create_number();
            $this->load->view('remote/guru2',$data);
            }
        }
        function listing(){
         $data['isi'] = $this->mguru->getdata();
         $this->load->view('remote/guru',$data);
        
        }
       
        function tambahguru(){
           if ($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata['level']=='1'){
            $rules = array(
                array(
                    'field'=>'nama_guru',
                    'label'=> 'NAMA GURU',
                    'rules'=> 'required'
                ),
                array(
                    'field'=>'username',
                    'label'=>'USERNAME',
                    'rules'=>'required|min_length[5]|max_length[12]'
                )
            );
                $this->form_validation->set_error_delimiters('<div class="alert alertbox" data-toggle="modal">', '</div>');
                $this->form_validation->set_rules($rules);
                if ($this->form_validation->run() == FALSE)
                {
                //$data['isi'] = $this->msiswa->_option_kelas();
                $this->load->view('utama/header');
		//$this->load->view('menu/menuadmin');
		$this->load->view('guru/tambahguru');
		$this->load->view('utama/footer');
                //echo json_encode(array('st'=>0, 'msg' => validation_errors()));
                
                }
                else
                {
                    
                    //echo 'Data berhasil dimasukkan';
                    //kode insert ke database di model--> contoh: $this->registrasi_model->insert();
                    
                    //$this->upload->do_upload('foto');
                    $this->mguru->addguru();
                    redirect('guru/daftarguru','refresh');
                    
                }
            }//Buat tampilan selain admin disini
            else{
                redirect('guru/listguru','refresh');
            }
           } 
        
        function tambahsiswa(){
            if ($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata['level']=='1'){
                //$config = array();
                //$config['upload_path'] = './assets/uploads/foto/siswa';
                //$config['allowed_types'] = 'gif|jpg|png|bmp';
                //$config['max_size'] = '20048';
                //$config['max_width']  = '10624';
                //$config['max_height']  = '10268';
                //$config['file_name']  = date("Y_m_d H:i:s");
                //$config['file_name']    = rand('10','100000000');
                //$config['remove_spaces'] = TRUE;
                //$config['overwrite'] = TRUE;
                //$this->load->library('upload', $config);
                //$fieldname = 'foto';            
                //foto Upload
                //$this->load->model('mjurusan');
                //$this->load->model('mkelas');
                //$data['isi'] = $this->mjurusan->_option_jurusan();
                //$this->load->library('upload',$config);
                $rules = array(
                    array(
                        'field' => 'id_kelas',
                        'label' => 'Nama Kelas',
                        'rules' => 'required' 
                        ),
                    array(
                        'field'=> 'nis',
                        'label'=> 'NIS',
                        'rules'=> 'required'
                    ),
                    array(
                        'field'=>'nama',
                        'label'=>'Nama Lengkap',
                        'rules'=>'required'
                    ),
                    array(
                        'field'=>'alamat',
                        'label'=>'Alamat',
                        'rules'=>'required'
                    ),
                    array(
                        'field'=>'tempat_lahir',
                        'label'=>'Tempat Lahir',
                        'rules'=>'required'
                    ),
                    array(
                        'field'=>'tgl_lahir',
                        'label'=>'Tanggal Lahir',
                        'rules'=>'required'
                    )
                );
                //$data['isi'] = $this->mjurusan->getdata();
                //$this->load->view('header');
		//$this->load->view('menu/menuadmin');
		//$this->load->view('kelas/vkelasadd',$data);
		//$this->load->view('footer');
                $this->form_validation->set_error_delimiters('<div class="alert alertbox">', '</div>');
                $this->form_validation->set_rules($rules);
                if ($this->form_validation->run() == FALSE)
                {
                $data['isi'] = $this->msiswa->_option_kelas();
                $this->load->view('header');
		$this->load->view('menu/menuadmin');
		$this->load->view('siswa/tambahsiswa',$data);
		$this->load->view('footer');
                }
                else
                {
                    
                    //echo 'Data berhasil dimasukkan';
                    //kode insert ke database di model--> contoh: $this->registrasi_model->insert();
                    
                    //$this->upload->do_upload('foto');
                    $this->msiswa->addsiswa();
                    redirect('siswa/listsiswa','refresh');
                    
                }
            }//Buat tampilan selain admin disini
            else{
                redirect('siswa/listsiswa','refresh');
            }
        }
        function daftarguru(){
            if ($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata['level']=='1'){
                
                $data['isi'] = $this->mguru->getdata();
                $this->load->view('utama/header');
                //$this->load->view('menu/menuadmin');
                $this->load->view('guru/daftarguru',$data);
                $this->load->view('utama/footer');
            }else{
                redirect('user','refresh');
            }
        }
   function listguru(){
        if ($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata['level']=='1'){
            if($this->mguru->getdata()>0){
        $config = array();
        $config["base_url"] = base_url() . "index.php/guru/listguru";
        $config["total_rows"] = $this->mguru->record_count();
        $config["per_page"] = 30;
        $config['full_tag_open'] = '<div class="pagination pagination-small pagination-centered" id="pagination-siakad"><ul>';
        $config['full_tag_close'] = '</ul></div>';
        $config['prev_link'] = '&lt; Prev';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = 'Next &gt;';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['first_link'] = FALSE;
        $config['last_link'] = FALSE;

        //$config['use_page_numbers'] = TRUE;
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        //$no = $config["total_rows"] - $config["per_page"];
        $config["num_links"] = round($choice);
        $this->pagination->initialize($config);
        //$data['no1'] = $no;
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["isi"] = $this->mguru->ambil_guru($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
       // $data['number'] = $this->pagination->create_number();
        $this->load->view('header');
	$this->load->view('menu/menuadmin');
	$this->load->view('guru/dataguruadmin',$data);
	$this->load->view('footer');
                }else{
                   
                   $this->load->view('header');
                   $this->load->view('menu/menuadmin');
                   $this->load->view('guru/datagurukosong');
                   $this->load->view('footer');
                    }
               }elseif($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata['level']=='2'){
                  $config = array();
        $config["base_url"] = base_url() . "index.php/guru/listguru";
        $config["total_rows"] = $this->mguru->record_count();
        $config["per_page"] = 30;
        $config['full_tag_open'] = '<div class="pagination pagination-small pagination-centered" id="pagination-siakad"><ul>';
        $config['full_tag_close'] = '</ul></div>';
        $config['prev_link'] = '&lt; Prev';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = 'Next &gt;';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['first_link'] = FALSE;
        $config['last_link'] = FALSE;

        //$config['use_page_numbers'] = TRUE;
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        //$no = $config["total_rows"] - $config["per_page"];
        $config["num_links"] = round($choice);
        $this->pagination->initialize($config);
        //$data['no1'] = $no;
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["isi"] = $this->mguru->ambil_guru($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
       // $data['number'] = $this->pagination->create_number();
        $this->load->view('header');
	$this->load->view('menu/menuguru');
	$this->load->view('guru/datagurustd',$data);
        $this->load->view('footer');
               
               }
	}
        function hapusguru(){
            if ($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata['level']=='1'){
                $this->load->library('uri');
		$this->load->model('mguru');
                $data['isi'] = $this->mguru->getdata();
                $id_guru = $this->uri->segment(3);
                if($id_guru > 0){
                $this->mguru->hapus($id_guru);
                //redirect('guru/listguru','refresh');
                $sukses = '1';
                $data['sukseshapus'] = $sukses;
                //$this->load->view('utama/header');
                //$this->load->view('guru/daftarguru',$data);
                //$this->load->view('utama/footer');
                redirect('guru/daftarguru',$data);
            }
            
                }else{
                    
                    redirect('user','refresh');
                    
                }
   }
    
    
}