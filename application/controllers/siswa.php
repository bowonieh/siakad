<?php if (!defined('BASEPATH')) exit ('No Direct Script Access Allowed');

class Siswa extends CI_Controller {
	
	function __construct()
	{
            parent::__construct();
            $this->load->library(array('form_validation','table'));
            $this->load->helper(array('url','form','text'));
            $this->load->database();
            $this->load->model(array('msiswa','mjurusan','mkelas','mtahun'));
            $this->load->library('pagination');
            
        }
        function index(){
        redirect('siswa/allsiswa','refresh');
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
                
                $this->form_validation->set_message('required', 'harus di isi!');
                $this->form_validation->set_error_delimiters('<div class="alert alert-error">    <a href="#" class="close" data-dismiss="alert">&times;</a>', '</div>');
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
                    $pesan = array();
                    $pesan[] = "Berhasil";
                    $data['isi'] = $this->msiswa->_option_kelas();
                    $data['pesan'] = $pesan;
                    //$this->load->view('your view', $view_data);
                    //echo 'Data berhasil dimasukkan';
                    //kode insert ke database di model--> contoh: $this->registrasi_model->insert();
                    //$this->session->set_flashdata('sukses','Entry Data Sukses');
                    //$this->upload->do_upload('foto');
                    $this->msiswa->addsiswa();
                    $this->load->view('header');
		
                    $this->load->view('menu/menuadmin');
                    $this->load->view('siswa/tambahsiswa',$data);
                    $this->load->view('footer');
                    //redirect('siswa/allsiswa','refresh');
                    
                }
            }//Buat tampilan selain admin disini
            else{
                redirect('siswa/allsiswa','refresh');
            }
        }
   function listsiswa(){
        if ($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata['level']=='1'){
            if($this->msiswa->getdata()>0){
        $config = array();
        $config["base_url"] = base_url() . "index.php/siswa/listsiswa";
        $config["total_rows"] = $this->msiswa->record_count();
        $config["per_page"] = 3;
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
        $data["isi"] = $this->msiswa->ambil_siswa($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
       // $data['number'] = $this->pagination->create_number();
        $this->load->view('header');
	$this->load->view('menu/menuadmin');
	$this->load->view('siswa/datasiswaadmin',$data);
	$this->load->view('footer');
                }else{
                   
                   $this->load->view('header');
                   $this->load->view('menu/menuadmin');
                   $this->load->view('siswa/datasiswakosong');
                   $this->load->view('footer');
                    }
               }elseif($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata['level']=='2'){
                  $config = array();
        $config["base_url"] = base_url() . "index.php/siswa/listsiswa";
        $config["total_rows"] = $this->msiswa->record_count();
        $config["per_page"] = 20;
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
        $data["isi"] = $this->msiswa->ambil_siswa($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
       // $data['number'] = $this->pagination->create_number();
        $this->load->view('header');
	$this->load->view('menu/menuguru');
	$this->load->view('siswa/datasiswastd',$data);
        $this->load->view('footer');
               
               }
	}
        function hapussiswa(){
            if ($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata['level']=='1'){
                $this->load->library('uri');
		$this->load->model('msiswa');
                $nis = $this->uri->segment(3);
                if($nis > 0){
                $this->msiswa->hapus($nis);
                redirect('siswa/allsiswa','refresh');
            }
            
                }else{
                    
                    redirect('user','refresh');
                    
                }
   }
        function siswakelas(){
            if ($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata['level']=='1'){
                $this->load->library('uri');
                $this->load->model('msiswa');
                $this->load->model('mkelas');
                
                $id = $this->uri->segment(3);
                if($this->msiswa->getsiswabykelas($id)>0){
                    $data['isi'] = $this->msiswa->getsiswabykelas($id);
                    //$ss = $this->msiswa->jmlsiswakelas($id);
                    //$data['rw'] = $this->msiswa->jmlsiswakelas($id);
                    
                    //$data['jmlh'] = $ambil->num_rows;
                    $row = $this->mkelas->get($id);
                    $data['row'] = $row->row();
                    $this->load->view('header');
                    $this->load->view('menu/menuadmin');
                    $this->load->view('siswa/siswakelas',$data);
                    $this->load->view('footer');
        
                }else{
                    $data['isi'] = $this->msiswa->getsiswabykelas($id);
                    $this->load->view('header');
                    $this->load->view('menu/menuadmin');
                    $this->load->view('siswa/datasiswakosong');
                    $this->load->view('footer');
        
                }
            }elseif($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata['level']=='2'){
                $this->load->library('uri');
                $this->load->model('msiswa');
                $this->load->model('mkelas');
                
                $id = $this->uri->segment(3);
                if($this->msiswa->getsiswabykelas($id)>0){
                    $data['isi'] = $this->msiswa->getsiswabykelas($id);
                    //$ss = $this->msiswa->jmlsiswakelas($id);
                    //$data['rw'] = $this->msiswa->jmlsiswakelas($id);
                    
                    //$data['jmlh'] = $ambil->num_rows;
                    $row = $this->mkelas->get($id);
                    $data['row'] = $row->row();
                    $this->load->view('header');
                    $this->load->view('menu/menuguru');
                    $this->load->view('siswa/siswakelasguru',$data);
                    $this->load->view('footer');
        
                }else{
                    $data['isi'] = $this->msiswa->getsiswabykelas($id);
                    $this->load->view('header');
                    $this->load->view('menu/menuguru');
                    $this->load->view('siswa/datasiswakosong');
                    $this->load->view('footer');
        
                }
                
            }elseif($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata['level']=='7'){
                $this->load->library('uri');
                $this->load->model('msiswa');
                $this->load->model('mkelas');
                
                $id = $this->uri->segment(3);
                if($this->msiswa->getsiswabykelas($id)>0){
                    $data['isi'] = $this->msiswa->getsiswabykelas($id);
                    //$ss = $this->msiswa->jmlsiswakelas($id);
                    //$data['rw'] = $this->msiswa->jmlsiswakelas($id);
                    
                    //$data['jmlh'] = $ambil->num_rows;
                    $row = $this->mkelas->get($id);
                    $data['row'] = $row->row();
                    $this->load->view('header');
                    $this->load->view('menu/menusiswa');
                    $this->load->view('siswa/siswakelasguru',$data);
                    $this->load->view('footer');
        
                }else{
                    $data['isi'] = $this->msiswa->getsiswabykelas($id);
                    $this->load->view('header');
                    $this->load->view('menu/menusiswa');
                    $this->load->view('siswa/datasiswakosong');
                    $this->load->view('footer');
        
                }
                
            }
            
            else{
                redirect('siswa','refresh');
            }
        }
   function siswapdf(){
    $this->load->library('dompdf_lib');
    $id = $this->uri->segment(3);
    if($this->msiswa->getsiswabykelas($id) > 0){
    $data['isi'] = $this->msiswa->getsiswabykelas($id);
    $row = $this->mkelas->get($id);
    $data['row'] = $row->row();
    $html = $this->load->view('siswa/cetaksiswapdf',$data,true);
    
    $dompdf = new DOMPDF();
    $dompdf->add_info('Title', 'Rekapitulasi Data Siswa');
    $dompdf->load_html($html);
    $dompdf->set_paper("A4","potrait");
    $dompdf->render();
    $dompdf->stream("datasiswakelas.pdf", array("Attachment" => 1));                               
    
    }else{
         $data['isi'] = $this->msiswa->getsiswabykelas($id);
         $this->load->view('header');
         $this->load->view('menu/menuadmin');
         $this->load->view('siswa/datasiswakosong');
         $this->load->view('footer');
    }
    
}
   function allsiswa(){
          if ($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata['level']=='1'){
		$this->load->model('mjurusan');
		 $this->load->model('msiswa');
	  	$data['isi'] = $this->msiswa->getdata();
		if($this->msiswa->getdata()>0){
                //y6$this->load->view('vsiswa',$data);		
		$this->load->view('header');
		$this->load->view('menu/menuadmin');
		$this->load->view('siswa/allsiswa',$data);
		$this->load->view('footer');    
                }else{
                    $this->load->view('header');
                   $this->load->view('menu/menuadmin');
                   $this->load->view('siswa/datasiswakosong');
                   $this->load->view('footer');
                }
  		
		
        }else{
                redirect('user','refresh');	
                }   
                
}
function cetakpdf(){
    $this->load->library('pdf');
    $data['isi'] = $this->msiswa->getdata();
    $this->load->view('siswa/cetaksiswapdf',$data);
}
function rencanabelajar(){
    
    //$data['thn']=$this->mtahun->tahunaktif();
    //$data['thn']= $row->row();
    if($this->msiswa->mapelaktif()>0){
    $row = $this->mtahun->tahunaktif();
    $data['isi']=$this->msiswa->mapelaktif();
    $data['thn']= $row->row();
    $this->load->view('utama/header');
    //$this->load->view('menu/menusiswa');
    $this->load->view('siswa/mapelaktif',$data);
    $this->load->view('utama/footer');  
    }else{
    $row = $this->mtahun->tahunaktif();
    $data['isi']=NULL;
    $data['thn']= $row->row();
    $this->load->view('utama/header');
    //$this->load->view('menu/menusiswa');
    $this->load->view('siswa/mapelaktif',$data);
    $this->load->view('utama/footer');
    }
    
 }
function daftar(){
    if ($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata['level']=='7'){
        $id = $this->uri->segment(3);
    $nis = $this->session->userdata('username');
    $q = $this->db->query("SELECT * FROM mapel_ambil WHERE id_mapel='$id' AND nis='$nis'");
    $chk = $this->db->query("SELECT * FROM mapel_ambil WHERE id_mapel = '$id'");
    if($q->num_rows()>0){
        //redirect('siswa/rencanabelajar');
        $row = $this->mtahun->tahunaktif();
        $data['isi']=$this->msiswa->mapelaktif();
        $data['thn']= $row->row();
        $pesan = array();
        $pesan[] = "Berhasil";
        $data['pesan'] = $pesan;
        $this->load->view('utama/header');
        //$this->load->view('menu/menusiswa');
        $this->load->view('siswa/mapelaktif',$data);
        $this->load->view('utama/footer');
    }else{
        $this->msiswa->daftarmapel($id);
        $row = $this->mtahun->tahunaktif();
        $data['isi']=$this->msiswa->mapelaktif();
        $data['thn']= $row->row();
        $sukses = array();
        $sukses[] = "Berhasil";
        $data['sukses'] = $sukses;
        $this->load->view('utama/header');
        //$this->load->view('menu/menusiswa');
        $this->load->view('siswa/mapelaktif',$data);
        $this->load->view('utama/footer');
    
        }    
    
    
        
    
    }else{
        redirect('user');
    }
    
}
function mapelsaya(){
    $nis = $this->session->userdata('username');
    if($this->msiswa->mapelsaya($nis)>0){
    $row = $this->mtahun->tahunaktif();
    $data['isi']=$this->msiswa->mapelsaya($nis);
    $data['thn']= $row->row();
    $pesan = array();
    $pesan[] = "Berhasil";
    $data['pesan'] = $pesan;
    $this->load->view('utama/header');
    //$this->load->view('menu/menusiswa');
    $this->load->view('siswa/mapelsaya',$data);
    $this->load->view('utama/footer');  
    }else{
        
    $row = $this->mtahun->tahunaktif();
    $data['isi']=NULL;
    $data['thn']= $row->row();
    $this->load->view('utama/header');
    //$this->load->view('menu/menusiswa');
    $this->load->view('siswa/mapelsaya',$data);
    $this->load->view('utama/footer');
    }
}
function keluar(){
    if ($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata['level']=='7'){
    $id = $this->uri->segment(3);
    $user = $this->session->userdata('username');
    $this->db->where(array('nis'=>$user));
    $this->db->where(array('id'=>$id));
    $this->db->delete('mapel_ambil');
    $this->db->query("DELETE FROM mapel_ambil where id = '$id'");
    redirect('siswa/mapelsaya','refresh');
    }
    
}

function hasilbelajar(){
    if ($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata['level']=='7'){
     $this->load->model('mguru');
    $this->load->model('msiswa');
    $data['isi'] = $this->mguru->_option_tahun();
    $this->load->view('utama/header');
    //$this->load->view('menu/menusiswa');
    $this->load->view('siswa/hasilbelajar',$data);
    $this->load->view('utama/footer');
        }else{
            redirect('user','refresh');
        }   
            
    }
    function getsiswaabsen(){
        $nis = $this->uri->segment(3);
        $data = $this->msiswa->getdetilsiswa($nis);
        //======================
        
        $no = 1;
                if(!empty($data)){
                        //echo '<legend>Detil Siswa  </legend></p><table class="table table-striped" id="t11">
                        //<tr><th>NO</th><th>Mata Pelajaran</th><th>Nilai UTS</th><th>NILAI RAPORT</th></tr>';
                    //foreach ($data as $dt){
                      //  echo '<tr><td>'.$no++.'</td><td>'.$dt['nama'].'</td><td>'.$dt['nis'].'</td><td>'.$dt['alamat'].'</td></tr>';
                        //}
                        //echo '</table>';
                    echo '<table class="table table-striped" id="t11">';
                       foreach ($data as $dt){
                       echo '<tr><td colspan="6"><strong>DATA PRIBADI</strong></td></tr>';    
                       echo '<tr><td colspan="2">NOMOR INDUK SISWA</td><td>:</td><td colspan="3">'.$dt['nis'].'</td></tr>';    
                       echo '<tr><td colspan="2">NAMA LENGKAP</td><td>:</td><td colspan="3">'.$dt['nama'].'</td></tr>';
                       echo '<tr><td colspan="2">AGAMA</td><td>:</td><td colspan="3">'.$dt['agama'].'</td></tr>';
                       echo '<tr><td colspan="2">JENIS KELAMIN</td><td>:</td><td colspan="3">';
                               
                               if($dt['jenkel']=='P'){
                                   echo "PEREMPUAN";
                               }elseif($dt['jenkel']=='L'){
                                   echo "LAKI-LAKI";
                               }else{
                                   echo "Data Kosong";
                               }
                               
                               
                               
                               echo '</td></tr>';
                       echo '<tr><td colspan="2">ALAMAT</td><td>:</td><td colspan="3">'.$dt['alamat'].'</td></tr>';
                       echo '<tr><td colspan="6"><STRONG>AKADEMIK</STRONG></td></tr>';
                       echo '<tr><td colspan="2">KELAS</td><td>:</td><td colspan="3">'.$dt['nama_kelas'].'</td></tr>';
                       echo '<tr><td colspan="2">NO IJAZAH UN SMP</td><td>:</td><td colspan="3">'.$dt['no_un_smp'].'</td></tr>';
                       }
                       echo '</table>';
                }else{
                    echo '<div class="alert">Data Kosong</div>';
                }
        
        //========================
        
        
        
    }
    
function gethasilbelajar(){
 
    $id_tahun = $this->uri->segment(3);
    //$data['isi'] = $this -> msiswa -> ambilhasil($id_tahun);
    //$this->load->view('siswa/hasilbelajar2',$data);
    //header('Content-Type: application/x-json; charset=utf-8');
 //echo(json_encode($this->msiswa->ambilhasil($id_tahun)));
    $data = $this->msiswa->ambilhasil($id_tahun);
    
    $no = 1;
    if(!empty($data)){
        echo '<span class="span12"><legend>Arsip Nilai Siswa  </legend></p><table class="table table-striped table-bordered" id="t11">
            <tr><th>NO</th><th>Mata Pelajaran</th><th>Nilai UTS</th><th>Terbilang</th><th>NILAI RAPORT</th><th>Terbilang</th></tr>';
        foreach ($data as $dt){
            echo '<tr><td>'.$no++.'</td><td>'.$dt['mapel'].'</td><td>'.$dt['nilai_uts'].'</td><td>'.terbilang($dt['nilai_uts']).'</td><td>'.$dt['nilai_raport'].'</td></td><td>'.terbilang($dt['nilai_raport']).'</td></tr>';
        }
        echo '</table></span>';
       
    }else{
        echo '<span class="span8"><div class="alert">Data Kosong</div></span>';
    }
    
    //echo $ss2;
    //echo $ss3;
    
    
    
    }
    
    //=====================================
    function getabsensiharian(){
 
        
        $tanggal = $this->uri->segment(3);
        $data = $this->msiswa->getabsensi($tanggal);
        //======================
        
    $no = 1;
    if(!empty($data)){
        if ($this->session->userdata('level')==='1' || $this->session->userdata('level')==='10'){
            echo '</p><table class="table table-striped table-bordered" id="t11">
            <tr><th>NO</th><th>NAMA SISWA</th><th>NIS</th><th>ALASAN</th><th>TANGGAL</th><th>AKSI</th></tr>';
        foreach ($data as $dt){
            echo '<tr><td>'.$no++.'</td><td>'.$dt['nama'].'</td><td>'.$dt['nis'].'</td><td>'.$dt['alasan'].'</td><td>'.$dt['tanggal'].'</td>
                
            <td>
            <a href="'.base_url().'index.php/user/hapusabsensi/'.$dt['id_absensi'].'" data-confirm="HAPUS DATA?" ><button class="btn btn-danger"  ><i class="icon-trash icon-white"></i></button></a>
            </td></tr>';
        
            //echo 'test';
        } 
        echo '</table>';
        }else{
            echo '</p><table class="table table-striped table-bordered" id="t11">
            <tr><th>NO</th><th>NAMA SISWA</th><th>NIS</th><th>ALASAN</th><th>TANGGAL</th><th>AKSI</th></tr>';
        foreach ($data as $dt){
            echo '<tr><td>'.$no++.'</td><td>'.$dt['nama'].'</td><td>'.$dt['nis'].'</td><td>'.$dt['alasan'].'</td><td>'.$dt['tanggal'].'</td>
                
            <td>
            <a href="'.base_url().'index.php/user/hapusabsensi/'.$dt['id_absensi'].'" data-confirm="HAPUS DATA?"><button class="btn btn-danger"  ><i class="icon-trash icon-white"></i></button></a>
            </td></tr>';
        
            //echo 'test';
        } 
        echo '</table>';
        }
        
       
    }else{
        echo '<div class="alert">Data Kosong</div>';
    }
    
    //echo $ss2;
    //echo $ss3;
    
    
    }
   
}