<?php if (!defined('BASEPATH')) exit ('No Direct Script Access Allowed');

class Excel extends CI_Controller {
	
	function __construct()
	{
            parent::__construct();
            $this->load->helper(array('url','form','php-excel'));
            $this->load->database();
            //$this->load->model('mberita','mguru');
            
        }
        function index(){
            
        }
        
        public function nilai(){
            $id = $this->uri->segment(3);
            $no = 1;
            $query = $this->mguru->siswamapel($id);
            $fields = (
                $field_array[] = array ("NO","NIS","KELAS", "NAMA LENGKAP", "NILAI UTS","NILAI RAPORT")
                   );
            foreach ($query as $row)
            {
                    $data_array[] = array( $no++,$row->nis,$row->nama_kelas, $row->nama, $row->nilai_uts,$row->nilai_raport );
            }
            $xls = new Excel_XML;
            $xls->addArray ($field_array);
            $xls->addArray ($data_array);
            $xls->generateXML ( "Nilai" );
        }
        
}