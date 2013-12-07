<?php 
class Mkomentar extends CI_Model
    {
         
        public function inserttodb()
        {
            if(!empty($_POST))
            {
                $komentar = $this->input->post('komentar');
                $id_berita = $this->input->post('id_berita');
                $username = $this->input->post('username');
                $tanggal = date('Y-m-d');
                
                $commentArray = array(
                  'komentar' =>   $komentar,
                  'id_berita'    =>   $id_berita,
                  'username'  =>   $username,
                    'tanggal' => $tanggal
                     
                );
    $this->db->insert('komentar',$commentArray);
    return $this->returnMarkup($komentar,$username,$tanggal);
             }
             
        }
    private function returnMarkup($komentar,$username,$tanggal)
         {   
            
             return '<div>
                        <p><i class="icon-user"></i>  '.$username. ' <i class="icon-calendar"></i> '.$tanggal.' </p>
                        <p>'.$komentar.'</p><hr>
                    </div>';
         }
         
         private  function getUserkomen($username){
             $this->db->where(array('komentar.username'=>$username));
              $this->db->join('berita','berita.id_berita = komentar.id_berita','inner');
               $this->db->join('view_user','komentar.username=view_user.username','inner');
               $ambil = $this->db->get('komentar');
         }
    }