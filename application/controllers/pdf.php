<?php if (!defined('BASEPATH')) exit ('No Direct Script Access Allowed');

class Pdf extends CI_Controller {
	
	function __construct()
	{
            parent::__construct();
            $this->load->library(array('form_validation','table'));
            $this->load->helper(array('url','form','text'));
            $this->load->database();
            $this->load->model(array('msiswa','mjurusan','mkelas','mtahun'));
            $this->load->library('pagination');
            $this->load->library('dompdf_lib');
            
        }
        function pdfnilai(){
            if($this->session->userdata('level')!='7'){
                redirect('user','refresh');
            }else{
            $id_tahun = $this->uri->segment(3);
            $nis = $this->session->userdata('username');
            
            if($this->msiswa->ambilhasil($id_tahun) > 0){
                $data['isi'] = $this->msiswa->ambilhasil($id_tahun);
                $row = $this->msiswa->detilsiswa($nis);
                $thn = $this->mtahun->get($id_tahun);
                $data['th'] = $thn->row();
                $data['row'] = $row->row();
                $html = $this->load->view('pdf/nilaisiswapdf',$data,true);
                $namafile = date('Y-m-d');
                $dompdf = new DOMPDF();
                $dompdf->add_info('Title', 'Nilai siswa');
                $dompdf->load_html($html);
                $dompdf->set_paper("A4","potrait");
                $dompdf->render();
                $dompdf->stream($namafile.".pdf", array("Attachment" => 1));                               
    
                }
            }
        }
}