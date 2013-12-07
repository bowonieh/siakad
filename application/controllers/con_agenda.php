<?php if (!defined('BASEPATH')) exit ('No Direct Script Access Allowed');

class Con_agenda extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->database();
                $this->load->helper('url');
		//$this->load->library('grocery_crud');
		$this->load->model(array('magenda','mtahun'));
                $this->load->helper('text');
                $this->load->library('form_validation');
	}
	function index()
	{
            if ($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata['level']=='1'){
		
	  	$data['isi'] = $this->magenda->getdata();
                
               if($this->magenda->getdata()> 0){
  		//y6$this->load->view('vsiswa',$data);		
		$this->load->view('header');
		$this->load->view('menu/menuadmin');
		$this->load->view('agenda/vagenda',$data);
		$this->load->view('footer');
               }else{
                   echo " error";
               }
		}elseif($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata['level']=='2'){
                $data['isi'] = $this->magenda->getdata();
		
  		//y6$this->load->view('vsiswa',$data);		
		$this->load->view('header');
		$this->load->view('menu/menuguru');
		$this->load->view('agenda/vagendastd',$data);
		$this->load->view('footer');    
                }elseif($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata['level']=='7'){
                $data['isi'] = $this->magenda->getdata();
                $row = $this->mtahun->tahunaktif();
                $data['row'] = $row->row();
		//y6$this->load->view('vsiswa',$data);		
		$this->load->view('header');
		$this->load->view('menu/menusiswa');
		$this->load->view('agenda/vagendastd',$data);
		$this->load->view('footersiswa');   
                }
                else{
                    redirect('user','refresh');
                }
        }
        function detilagenda(){
              if ($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata['level']=='1'){

            //$id = $this->uri->segment(3);
                $data_tpl = array();
		$this->load->model('magenda');
		$asc_arr = $this->uri->segment(3);
		//$id = (isset($asc_arr['edit'])) ? $asc_arr['edit'] : '';
		$id = intval($asc_arr);
		$row = $this->magenda->get($id);
                 if($row->num_rows() > 0){

		
		
		$data_tpl['row'] = $row->row();
		$this->load->view('header');
		$this->load->view('menu/menuadmin');
		$this->load->view('agenda/vdetilagenda', $data_tpl);
		$this->load->view('footer');
              }else {
                    
                
                    //echo "error";
                    redirect('con_agenda','refresh');
                    
                }
              }elseif($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata['level']=='7'){
              {
                $data_tpl = array();
		$this->load->model('magenda');
		$asc_arr = $this->uri->segment(3);
		//$id = (isset($asc_arr['edit'])) ? $asc_arr['edit'] : '';
		$id = intval($asc_arr);
		$row = $this->magenda->get($id);
                if($row->num_rows() > 0){

		
		
		$data_tpl['row'] = $row->row();
		$this->load->view('header');
		$this->load->view('menu/menusiswa');
		$this->load->view('agenda/vdetilagenda', $data_tpl);
		$this->load->view('footer');
                }  else {
                    
                
                    redirect('con_agenda','refresh');
                    
                }
              }
              }elseif($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata['level']=='2'){
              {
                $data_tpl = array();
		$this->load->model('magenda');
		$asc_arr = $this->uri->segment(3);
		//$id = (isset($asc_arr['edit'])) ? $asc_arr['edit'] : '';
		$id = intval($asc_arr);
		$row = $this->magenda->get($id);
                if($row->num_rows() > 0){

		
		
		$data_tpl['row'] = $row->row();
		$this->load->view('header');
		$this->load->view('menu/menuguru');
		$this->load->view('agenda/vdetilagenda', $data_tpl);
		$this->load->view('footer');
                }  else {
                    
                
                    redirect('con_agenda','refresh');
                    
                }
              }
              }
            
        }
        //function agendaadd(){
          //  if ($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata['level']=='1'){
            //    $this->load->view('header');
		//$this->load->view('menu/menuadmin');
		//$this->load->view('agenda/tambahagenda');
		//$this->load->view('footer');
                
                
            //}else{
                //tampilkan error, hanya untuk admin
              ///  redirect('con_agenda','refresh');
                
                
                 //   }
            
            
            
        //}
 function agendaadd(){
     if ($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata['level']=='1'){
                $this->load->model('magenda');
                //$this->load->model('mkelas');
                //$data['isi'] = $this->mjurusan->_option_jurusan();
                $rules = array(
                    array(
                'field' => 'judul',
                'label' => 'Judul',
                'rules' => 'required' 
                        ),
                    array(
                        'field' => 'isi',
                        'label' => 'ISI',
                        'rules' => 'required'
                        
                    ),
                    array(
                        'field' => 'tanggal',
                        'label' => 'Tanggal',
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
                //$data['isi'] = $this->mjurusan->_option_jurusan();
                         
                $this->load->helper('url');
                $this->load->view('header');
		$this->load->view('menu/menuadmin');
		$this->load->view('agenda/tambahagenda');
		$this->load->view('footer');
                }
                else
                {
                    //echo 'Data berhasil dimasukkan';
                    //kode insert ke database di model--> contoh: $this->registrasi_model->insert();
                    $this->magenda->addagenda();
                    redirect('con_agenda','refresh');
                }
            }
            else{
                redirect('con_agenda','refresh');
            }
            
 }       
 function editagenda(){
		
                $data_tpl = array();
		$this->load->model('magenda');
		$asc_arr = $this->uri->segment(3);
		//$id = (isset($asc_arr['edit'])) ? $asc_arr['edit'] : '';
		$id = intval($asc_arr);
		
                $row = $this->magenda->get($id);

		
		
		$data_tpl['row'] = $row->row();
		$this->load->view('header');
		$this->load->view('menu/menuadmin');
		$this->load->view('agenda/vagendaedit', $data_tpl);
		$this->load->view('footer');

	
	}
  function aksieditagenda(){
		$data = array(
				'judul'=>$this->input->post('judul'),
				'isi'=>$this->input->post('isi'),
                                'tanggal'=>$this->input->post('tanggal'));
		$id = $this->input->post('id');
		$dd = $this->magenda->editagenda($id,$data);
		if($dd){
			
		redirect('con_agenda','refresh');
		}else{
			
			
		}
		
	}
   function hapusagenda(){
       if ($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata['level']=='1'){
	$this->load->library('uri');
	$this->load->model('mjurusan');
	$id = $this->uri->segment(3);
	if((int)$id > 0){
  	  $this->magenda->hapus($id);
	  redirect('con_agenda','refresh');
            }
		
	
   }
   else{
   redirect('user','refresh');
   }
    }
}