<?php if (!defined('BASEPATH')) exit ('No Direct Script Access Allowed');

class Galeri extends CI_Controller {
	
	function __construct()
	{
            parent::__construct();
            $this->load->helper('url');
            $this->load->database();
            
        }
        function index(){
            if ($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata['level']=='1'){	
            $this->load->view('header');
            $this->load->view('menu/menuadmin');
            $this->load->view('galeri/galeri');
            $this->load->view('footer');
            }else{
                redirect('user','refresh');
            }
            
        }
        function upload(){
             if(!empty($_FILES['file']['name']))
                {
        
                 $config['upload_path'] = './img';
                 $config['allowed_types'] = 'gif|jpg|png';
                 $this->load->library('upload', $config);
        
                 if($this->upload->do_upload('file'))
        
                     {
            
                     $image_data = $this->upload->data();
             
            // database
            
                     $this->db->insert('tbl_imagemanager',array(
                
                         'foto'=>$image_data['file_name']
                        ));
             
                    $json = array(
                    'filelink' => base_url("img/{$image_data['file_name']}")
            );
            echo stripslashes(json_encode($json));
                }
            }
        }
        function galeri()

                {
    
            $return=array();
            $all_data = $this->db->get('tbl_imagemanager');
            foreach($all_data->result_array() as $row)
            {
                $return[]=array(
                'thumb'=>base_url('img/'.$row['foto']),
                'image'=>base_url('img/'.$row['foto']),
                'title'=>$row['foto'],
                );
             }
    echo json_encode($return);
}
        
}
