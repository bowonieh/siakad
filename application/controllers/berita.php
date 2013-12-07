<?php if (!defined('BASEPATH')) exit ('No Direct Script Access Allowed');

class Berita extends CI_Controller {
	
	function __construct()
	{
            parent::__construct();
            $this->load->helper(array('url','form'));
            $this->load->database();
            $this->load->model('mberita','mguru');
            
        }
        function index(){
            redirect('user','refresh');
        }
        function adminberita(){
            if ($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata['level']=='1'){	
                
                
            }
        }
        function kirimkomentar(){
            $komentar = $this->input->post('komentar');
            $id_berita = $this->input->post('id_berita');
            $username =  $this->input->post('username');
            if (!empty($komentar) AND !empty($id_berita) AND !empty($username)){
                $this->db->query("INSERT INTO komentar (komentar,id_berita,username)VALUE ('$komentar','$id_berita','$username')");
                $data = '
                    <div class="comment-item">
  <div class="comment-avatar">
    <img src="" alt="avatar">
  </div>
  <div class="comment-post">
    <h3>'.$username.' <span>said....</span></h3>
    <p>'.$komentar.'</p>
  </div>
</div>

                ';
                
                //echo $data;
            }
        }
        function getkomentar(){
            $id = $this->uri->segment(3);
            $ambil = $this->mberita->getkomentar($id);
             
            foreach($ambil as $dd){
            echo '
                <div class="span8">
                <div class=box>
                <div class=boxbody>
                <div class="row">
                    <div class="span2">'.$dd->komentar.'</div>
                </div>
                </div>
                </div>
                </div>
            ';
            }
            
        }
        
        function baca(){
            $id = $this->uri->segment(3);
            //$this->load->model('mberita');
            $data['isi'] = $this->mberita->getberita($id);
            $data['kmt'] = $this->mberita->getkomentar($id);
            if ($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata['level']=='1'){	
             
             $this->load->view('utama/header');
             //$this->load->view('menu/menuadmin');
             $this->load->view('berita/baca',$data);
             $this->load->view('utama/footer');
                
            }elseif ($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata['level']=='7'){	
             $this->load->view('utama/header');
             //$this->load->view('menu/menusiswa');
             $this->load->view('berita/baca',$data);
             $this->load->view('utama/footer');
                
            }elseif ($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata['level']=='2'){	
             $this->load->view('utama/header');
             //$this->load->view('menu/menusiswa');
             $this->load->view('berita/baca',$data);
             $this->load->view('utama/footer');
                   
            }elseif ($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata['level']=='10'){	
             $this->load->view('utama/header');
             //$this->load->view('menu/menusiswa');
             $this->load->view('berita/baca',$data);
             $this->load->view('utama/footer');
                   
            }else{
                redirect('user','refresh');   
            }
            
        }
        
}
