<?php if (!defined('BASEPATH')) exit ('No Direct Script Access Allowed');

class Mapel extends CI_Controller {
    function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->database();
                $this->load->helper('url');
		//$this->load->library('grocery_crud');
		$this->load->model(array('magenda','mtahun','mguru'));
                $this->load->helper('text');
                $this->load->library('form_validation');
                $user = $this->session->userdata('username');
	}
    function index(){
        if ($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata['level']=='2'){
        $user = $this->session->userdata('username');
        if ($this->mguru->getmapel($user) > 0){
            //jika sudah ada data
                    $user = $this->session->userdata('username');
                    $data['isi'] = $this->mguru->getmapel($user);
                    //$row = $this->mkelas->get($id);
                    //$data['row'] = $row->row();
                    $this->load->view('utama/header');
                    //$this->load->view('menu/menuguru');
                    $this->load->view('guru/mapelsaya',$data);
                    $this->load->view('utama/footer');
        }else{
            //Jika data masih kosong
                    $data['isi'] = $this->mguru->getmapel($user);
                    $this->load->view('utama/header');
                    //$this->load->view('menu/menuguru');
                    $this->load->view('guru/mapelsaya',$data);
                    $this->load->view('utama/footer');
            }
        
        }else{
            redirect('user','refresh');
        }
    }
    function tambahmapel(){
        if ($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata['level']=='2'){
            $rules = array(
              array(
                  'field'=>'kode_mapel',
                  'label'=> 'Kode Mata Pelajaran',
                  'rules'=>'required'
              ),
              array(
                  'field'=>'mapel',
                  'label'=>'Nama Mata Pelajaran',
                  'rules'=>'required'
              )
            );        
            
        //================================================            
             $this->form_validation->set_error_delimiters('<div class="alert alertbox">', '</div>');
                $this->form_validation->set_rules($rules);
                if ($this->form_validation->run() == FALSE)
                {
                //$user = $this->session->userdata('username');
                $data['isi'] = $this->mguru->_option_tahun();
                $data['jns'] = $this->mguru->_option_jenismapel();
                $asc_arr = $this->session->userdata('username');
		//$id = (isset($asc_arr['edit'])) ? $asc_arr['edit'] : '';
		$id = intval($asc_arr);
                $row = $this->mguru->getidguru($id);
                $data['row'] = $row->row();
                $this->load->view('utama/header');
		//$this->load->view('menu/menuguru');
		$this->load->view('guru/tambahmapel',$data);
		$this->load->view('utama/footer');
                }
                else
                {
                    //echo 'Data berhasil dimasukkan';
                    //kode insert ke database di model--> contoh: $this->registrasi_model->insert();
                    $this->mguru->addmapel();
                    redirect('mapel','refresh');
                }
            
        }else{
            redirect('user','refresh');
        }
    }
    function hapusmapel(){
        if ($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata['level']=='2'){
           //$this->load->helper('uri');
           $id = $this->uri->segment(3);
           if((int)$id > 0){
            $this->mguru->hapusmapel($id);
            redirect('mapel','refresh');
	}
        }else{
            
        }
    }
    function editmapel(){
        if ($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata['level']=='2'){
           //$this->load->helper('uri');
           //$id = $this->uri->segment(3);
        $rules = array(
              
              array(
                  'field'=>'mapel',
                  'label'=>'Nama Mata Pelajaran',
                  'rules'=>'required'
              )
            );        
            
        //================================================            
             $this->form_validation->set_error_delimiters('<div class="alert alertbox">', '</div>');
                $this->form_validation->set_rules($rules);
                if ($this->form_validation->run() == FALSE)
                {
                $data['isi'] = $this->mguru->_option_tahun();
                $data['jns'] = $this->mguru->_option_jenismapel();
                
                $asc_arr = $this->uri->segment(3);
	//$id = (isset($asc_arr['edit'])) ? $asc_arr['edit'] : '';
                $id = intval($asc_arr);
                $row = $this->mguru->getmapelbyid($id);
                $data['row'] = $row->row();
                $this->load->view('utama/header');
                //$this->load->view('menu/menuguru');
                $this->load->view('guru/mapelubah', $data);
                $this->load->view('utama/footer');
                }else{
                 $data = array(
				'kode_mapel'=>$this->input->post('kode_mapel'),
                                'mapel'=>$this->input->post('mapel'),
                                'kkm'=>$this->input->post('kkm'),
                                'id_tahun'=>$this->input->post('id_tahun'),
                                'deskripsi'=>$this->input->post('deskripsi'),
				'id_jenismapel'=>$this->input->post('id_jenismapel'));
		$id = $this->input->post('id_mapel');
		$dd = $this->mguru->editmapel($id,$data);
		if($dd){
			
		redirect('mapel','refresh');
		}else{
			
			
                    }    
                }
        }
    }
    
    //function siswamapel
    function siswamapel(){
        if ($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata['level']=='2'){
            $user = $this->session->userdata('username');
            if(!empty($user)){
                             
                    $id_mapel = $this->uri->segment(3);
                    $data['isi'] = $this->mguru->siswamapel($id_mapel);
                    $this->load->view('utama/header');
                    //$this->load->view('menu/menuguru');
                    $this->load->view('guru/siswamapel',$data);
                    $this->load->view('utama/footer');
               
                
                    
                    
                }
               
               
            }
    }
        
    function updatenilai(){
        if ($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata['level']=='2'){
            $user = $this->session->userdata('username');
            //if($this->mguru->checkmapel($user)===true){
                $jml = count($this->input->post('id'));
       //$id = $this->input->post('id');
       //$nilai_uts = $this->input->post('nilai_uts');
       //$nilai_raport = $this->input->post('nilai_raport');
          
            for($i=0;$i<$jml;$i++){
                
            $idc = $_POST['id'][$i];
            $nuts= $_POST['nilai_uts'][$i];
            $nrpt = $_POST['nilai_raport'][$i];
            $this->db->query("update mapel_ambil set nilai_uts = '$nuts', nilai_raport = '$nrpt' WHERE id = $idc");
                 
                }
                //redirect('mapel','refresh');
                
                
            //}
        }
       
    }
}