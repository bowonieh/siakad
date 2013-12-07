<?php
class Mberita extends CI_Model
 {
    function getberita($id){
            
  $this->db->where(array('id_berita'=>$id));
  //$this->db->order_by("tanggal", "desc");
  $this->db->join('r_kategori','r_kategori.id=berita.id_kategori','inner');
  $ambil = $this->db->get('berita');
  if($ambil->num_rows() > 0)
   {
   foreach($ambil->result() as $baris)
    {
    
	 $hasil[] = $baris;
	
	}
	
    return $hasil;
	
   }
    }
    
    function getkomentar($id){
        $this->db->where(array('berita.id_berita'=>$id));
        $this->db->order_by('komentar.tanggal','desc');
        $this->db->join('berita','berita.id_berita = komentar.id_berita','inner');
        $this->db->join('view_user','komentar.username=view_user.username','inner');
        $ambil = $this->db->get('komentar');
  if($ambil->num_rows() > 0)
   {
   foreach($ambil->result() as $baris)
    {
    
	 $hasil[] = $baris;
	
	}
	
    return $hasil;
	
   }
    }
}
