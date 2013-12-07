<?php if (!defined('BASEPATH')) exit ('No Direct Script Access Allowed');

class User extends CI_Controller {
	
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
                $this->load->model(array('mtahun','magenda','mguru','msiswa'));
                $this->load->helper('text');
                

	}
	function index()
	{
	if ($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata['level']=='1'){	
	$data['isi'] = $this->magenda->getlimit();
        $data['berita'] = $this->magenda->beritaLatest();
        $data['akdm'] = $this->magenda->beritaakademik();
        $this->load->view('utama/header');
	//$this->load->view('menu/menuadmin');
	$this->load->view('home/home',$data);
	$this->load->view('utama/footer');
	}elseif($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata['level']=='2'){
	
        $data['isi'] = $this->magenda->getlimit();
        $data['berita'] = $this->magenda->beritaLatest();
        $data['akdm'] = $this->magenda->beritaakademik();
	$this->load->view('utama/header');
	$this->load->view('home/home',$data);
	
	$this->load->view('utama/footer');
	}elseif($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata['level']=='10'){
	
        $data['isi'] = $this->magenda->getlimit();
        $data['berita'] = $this->magenda->beritaLatest();
        $data['akdm'] = $this->magenda->beritaakademik();
	$this->load->view('utama/header');
	//$this->load->view('menu/menuabsen');
	$this->load->view('home/home',$data);
	$this->load->view('utama/footer');
	}
        elseif($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata['level']=='7'){
        //halaman siswa
            
        $this->load->model('mtahun');
        //$data['tahun'] = $this->mtahun->tahunaktif();
        $row = $this->mtahun->tahunaktif();
	$data['row'] = $row->row();
        $data['isi'] = $this->magenda->getlimit();
        $data['berita'] = $this->magenda->beritaLatest();
        $data['akdm'] = $this->magenda->beritaakademik();
        $this->load->view('utama/header');
        //$this->load->view('menu/menusiswa');
        $this->load->view('home/home',$data);
        $this->load->view('utama/footer');
        }
        else
	{
		redirect('login','refresh');
		}

	}
	function keluar(){
	$this->session->sess_destroy();
	redirect('login','refresh');

	}
	function listKelas(){
		
		
	}
	function gantiPassword(){
	

	}
	
	function jurusan(){
		if ($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata['level']=='1'){
		$this->load->model('mjurusan');
		
	  	$data['isi'] = $this->mjurusan->getdata();
		
  		//y6$this->load->view('vsiswa',$data);		
		$this->load->view('header');
		$this->load->view('menu/menuadmin');
		$this->load->view('jurusan/vjurusan2',$data);
		$this->load->view('footer');
		}
		else
		{
		redirect('user','refresh');	
		}
		
	}
        function jurusanpdf(){
        $this->load->library('dompdf_lib');
        $data['isi']= $this->mjurusan->getdata();
        $html = $this->load->view('jurusan/vjurusan2',$data,true);
        $dompdf = new DOMPDF();
        $dompdf->load_html($html);
        $dompdf->set_paper("A4","landscape");
        $dompdf->render();
        $dompdf->stream("my_pdf.pdf", array("Attachment" => 0));
        }
        //function kelas
	function kelas(){
		if ($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata['level']=='1'){
		$this->load->model('mkelas');
	  	$data['isi'] = $this->mkelas->getdata();
  		if($this->mkelas->getdata()>0){
                //y6$this->load->view('vsiswa',$data);		
		$this->load->view('utama/header');
		//$this->load->view('menu/menuadmin');
		$this->load->view('kelas/daftarkelas',$data);
		$this->load->view('utama/footer');
                }else{
                    
                    }
		}elseif ($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata['level']=='2'){
                $this->load->model('mkelas');
	  	$data['isi'] = $this->mkelas->getdata();
  		if($this->mkelas->getdata()>0){
                //y6$this->load->view('vsiswa',$data);		
		$this->load->view('utama/header');
		//$this->load->view('menu/menuguru');
		$this->load->view('kelas/daftarkelas',$data);
		$this->load->view('utama/footer');    
                }
		else
		{
		redirect('user','refresh');	
		}
		
	}elseif ($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata['level']=='7'){
                $this->load->model('mkelas');
	  	$data['isi'] = $this->mkelas->getdata();
  		if($this->mkelas->getdata()>0){
                //y6$this->load->view('vsiswa',$data);		
		$this->load->view('utama/header');
		//$this->load->view('menu/menuguru');
		$this->load->view('kelas/daftarkelas',$data);
		$this->load->view('utama/footer');    
                
                }
		else
		{
		redirect('user','refresh');	
		}
		
	}elseif ($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata['level']=='10'){
                $this->load->model('mkelas');
	  	$data['isi'] = $this->mkelas->getdata();
  		if($this->mkelas->getdata()>0){
                //y6$this->load->view('vsiswa',$data);		
		$this->load->view('utama/header');
		//$this->load->view('menu/menuguru');
		$this->load->view('kelas/daftarkelas',$data);
		$this->load->view('utama/footer');    
                
                }
		else
		{
		redirect('user','refresh');	
		}
	
        }else{
            redirect('user','refresh');
        }
        }
        function editkelas(){
            if ($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata['level']=='1'){
                $this->load->model('mkelas');
                $this->load->model('mjurusan');
		
                $rules = array(
                    array(
                'field' => 'nama_kelas',
                'label' => 'Nama Kelas',
                'rules' => 'required' 
                        )
                );
                $this->form_validation->set_error_delimiters('<div class="alert alertbox">', '</div>');
                $this->form_validation->set_rules($rules);
                if ($this->form_validation->run() == FALSE)
                {
		$data = array();
		$asc_arr = $this->uri->segment(3);
		//$id = (isset($asc_arr['edit'])) ? $asc_arr['edit'] : '';
		$id = intval($asc_arr);
		$row = $this->mkelas->get($id);

		
		$data['jur'] = $this->mjurusan->_option_jurusan();
		$data['row'] = $row->row();
		$this->load->view('header');
		$this->load->view('menu/menuadmin');
		$this->load->view('kelas/kelasubah', $data);
		$this->load->view('footer');
                }else{
                 $data = array(
				'nama_kelas'=>$this->input->post('nama_kelas'),
				'id_jurusan'=>$this->input->post('id_jurusan'));
		$id = $this->input->post('id_kelas');
		$dd = $this->mkelas->editkelas($id,$data);
		if($dd){
			
		redirect('user/kelas','refresh');
		}else{
			
			
                    }
                }
            }else{
                redirect('user','refresh');
            }
                
                
                
	
	}
        function kelasadd(){
            if ($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata['level']=='1'){
                $this->load->model('mjurusan');
                $this->load->model('mkelas');
                //$data['isi'] = $this->mjurusan->_option_jurusan();
                $rules = array(
                    array(
                'field' => 'nama_kelas',
                'label' => 'Nama Kelas',
                'rules' => 'required' 
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
                $data['isi'] = $this->mjurusan->_option_jurusan();
                         
            
                $this->load->view('header');
		$this->load->view('menu/menuadmin');
		$this->load->view('kelas/vkelasadd',$data);
		$this->load->view('footer');
                }
                else
                {
                    //echo 'Data berhasil dimasukkan';
                    //kode insert ke database di model--> contoh: $this->registrasi_model->insert();
                    $this->mkelas->addkelas();
                    redirect('user/kelas','refresh');
                }
            }
            else{
                redirect('user','refresh');
            }
            
        }
	function jurusanadd(){
		if ($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata['level']=='1'){
			$rules = array(
                          array(
                              'field'=> 'nama_jurusan',
                              'label'=> 'Nama Jurusan',
                              'rules'=> 'required'
                          )  
                        );
                $this->form_validation->set_error_delimiters('<div class="alert alertbox">', '</div>');
                $this->form_validation->set_rules($rules);
                if ($this->form_validation->run() == FALSE)
                {    
                        $this->load->view('header');
			$this->load->view('menu/menuadmin');
			$this->load->view('jurusan/vjurusanadd');
			$this->load->view('footer');
                }else{
                    $this->load->model('mjurusan');
                    $this->mjurusan->addjurusan();
                    redirect('user/jurusan1','refresh');
	  
                }
			
		}
		else
		{
		redirect('user','refresh');	
		}
		
	}
	//function aksitambahjurusan(){
            
	//$this->load->model('mjurusan');
	//$this->mjurusan->addjurusan();
	//redirect('user/jurusan1','refresh');
		
	//}
	function hapusjurusan(){
		$this->load->library('uri');
		$this->load->model('mjurusan');
	$id_jurusan = $this->uri->segment(3);
	if((int)$id_jurusan > 0){
  	  $this->mjurusan->hapus($id_jurusan);
	  redirect('user/jurusan1','refresh');
	}
		
	}
	function editjurusan(){
		$data_tpl = array();
		$this->load->model('mjurusan');
		$asc_arr = $this->uri->segment(3);
		//$id = (isset($asc_arr['edit'])) ? $asc_arr['edit'] : '';
		$id = intval($asc_arr);
		$row = $this->mjurusan->get($id);

		
		
		$data_tpl['row'] = $row->row();
		$this->load->view('header');
		$this->load->view('menu/menuadmin');
		$this->load->view('jurusan/vjurusanedit', $data_tpl);
		$this->load->view('footer');

	
	}
	function aksieditjurusan(){
		$data = array(
				'nama_jurusan'=>$this->input->post('nama_jurusan'),
				'id_jurusan'=>$this->input->post('id_jurusan'));
		$id = $this->input->post('id_jurusan');
		$dd = $this->mjurusan->edit($id,$data);
		if($dd){
			
		redirect('user/jurusan1','refresh');
		}else{
			
			
		}
		
	}
        //Test Pagination
        public function jurusan1() {
             if ($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata['level']=='1'){
        $config = array();
        $config["base_url"] = base_url() . "index.php/user/jurusan1";
        $config["total_rows"] = $this->mjurusan->record_count();
        $config["per_page"] = 5;
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
        $data["isi"] = $this->mjurusan->
            ambil_jurusan($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
       // $data['number'] = $this->pagination->create_number();
        $this->load->view('header');
	$this->load->view('menu/menuadmin');
	$this->load->view('jurusan/vjurusan',$data);
	$this->load->view('footer');
             }else{
                 redirect('user','refresh');
             }
    }

    //function siswa
    function absensisiswa(){
        $rules = array(
          array(
                'field'=>'nis',
                'label'=>'NOMOR INDUK',
                'rules'=>'required|xss_clean'
          )  
        );
             if ($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata['level']=='1'){
                 
                $this->form_validation->set_error_delimiters('<div class="alert alertbox">', '</div>');
                $this->form_validation->set_rules($rules);
                
                if ($this->form_validation->run() == FALSE)
                {
                    $row = $this->mtahun->tahunaktif();
                    $data['isi'] = $row->row();
                    $data['dd'] = $this->msiswa->rekapabsensi('Sakit');
                    $data['a'] = $this->msiswa->rekapabsensi('Tanpa Keterangan');
                    $data['ij'] = $this->msiswa->rekapabsensi('Ijin');
                    //$dd = $this->msiswa->chkabsn();
                    //$data['chk'] = $dd->row();
                    $this->load->view('utama/header');
                    //$this->load->view('menu/menuadmin');
                    $this->load->view('siswa/absensi',$data);
                    $this->load->view('utama/footer');
                }else{
                    if($this->msiswa->chkabsn() >0 ){
                         redirect('user/absensisiswa','refresh'); 
                    }else{
                       $this->msiswa->tambahabsensi();
                       redirect('user/absensisiswa','refresh');
                    
                        
                       
                    }
                    
                }
                 
                 
             }elseif ($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata['level']=='10'){
                 
                    $this->form_validation->set_error_delimiters('<div class="alert alertbox">', '</div>');
                $this->form_validation->set_rules($rules);
                
                if ($this->form_validation->run() == FALSE)
                {
                    $row = $this->mtahun->tahunaktif();
                    $data['isi'] = $row->row();
                    $r1 = $this->msiswa->rekapabsensi('Ijin');
                    $r2 = $this->msiswa->rekapabsensi('Sakit');
                    $r3 = $this->msiswa->rekapabsensi('Tanpa Keterangan');
                    $data['ij'] = count($r1->row());
                    $data['a'] = count($r3->row());
                    $data['s'] = count($r2->row());
                    
                    //$dd = $this->msiswa->chkabsn();
                    //$data['chk'] = $dd->row();
                    $this->load->view('utama/header');
                    //$this->load->view('menu/menuabsen');
                    $this->load->view('siswa/absensi',$data);
                    $this->load->view('utama/footer');
                }else{
                    if($this->msiswa->chkabsn() >0 ){
                         redirect('user/absensisiswa','refresh'); 
                    }else{
                       $this->msiswa->tambahabsensi();
                       redirect('user/absensisiswa','refresh');
                    
                        
                       
                    }
                    
                }
                 
             }elseif ($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata['level']=='2'){
                 
                 $this->form_validation->set_error_delimiters('<div class="alert alertbox">', '</div>');
                $this->form_validation->set_rules($rules);
                
                if ($this->form_validation->run() == FALSE)
                {
                    $row = $this->mtahun->tahunaktif();
                    $data['isi'] = $row->row();
                    //$dd = $this->msiswa->chkabsn();
                    //$data['chk'] = $dd->row();
                    $this->load->view('header');
                    $this->load->view('menu/menuguru');
                    $this->load->view('siswa/absensi',$data);
                    $this->load->view('footer');
                }else{
                    if($this->msiswa->chkabsn() >0 ){
                         redirect('user/absensisiswa','refresh'); 
                    }else{
                       $this->msiswa->tambahabsensi();
                       redirect('user/absensisiswa','refresh');
                    
                        
                       
                    }
                    
                }
                 
             }else{
                 redirect('user','refresh');
             }
    }
function listabsensi(){
    if ($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata['level']=='10'){
    $data['isi'] = $this->mguru->_option_tahun();
    $this->load->view('utama/header');
    //$this->load->view('menu/menuabsen');
    $this->load->view('siswa/listabsensi',$data);
    $this->load->view('utama/footer');
    }elseif ($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata['level']=='1'){
    $data['isi'] = $this->mguru->_option_tahun();
    $this->load->view('utama/header');
    //$this->load->view('menu/menuadmin');
    $this->load->view('siswa/listabsensi',$data);
    $this->load->view('utama/footer');    
    }else{
        redirect('user','refresh');
    }
    
}

function hapusabsensi(){
    if ($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata['level']=='10' || $this->session->userdata['level']=='1' ){
     $id_absensi = $this->uri->segment(3);
    $this->db->where(array('id_absensi'=>$id_absensi));
    $query = $this->db->delete('absensi');
    //return $query;
    if($query){
        redirect ('user/listabsensi','refresh');
        }   
    }else{
        redirect('user','refresh');
    }
    
    
}
}
