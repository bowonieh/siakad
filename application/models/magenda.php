<?php
class Magenda extends CI_Model
 {
  function getdata()
  {
  $this->db->order_by("tanggal", "desc");
  //$this->db->limit(3);
  $ambil = $this->db->get('agenda');
  if($ambil->num_rows() > 0)
   {
   foreach($ambil->result() as $baris)
    {
    
	 $hasil[] = $baris;
	
	}
	
    return $hasil;
	
   }
   }
   function getlimit(){
       
  
  $this->db->order_by("tanggal", "desc");
  $this->db->limit(2);
  $ambil = $this->db->get('agenda');
  if($ambil->num_rows() > 0)
   {
   foreach($ambil->result() as $baris)
    {
    
	 $hasil[] = $baris;
	
	}
	
    return $hasil;
	
   }
   }
   
  function get($id){
  $query  = $this->db->get_where('agenda',array('id' => $id));
  return $query;
  }
  function addagenda(){
	$isi = mysql_real_escape_string($_POST['isi']);
        $judul = mysql_real_escape_string($_POST['judul']);
        $tanggal = mysql_real_escape_string($_POST['tanggal']);

	$this->db->query("INSERT INTO agenda (judul,isi,tanggal) VALUES('$judul','$isi','$tanggal')");  
	  
  }
  function editagenda($id,$data){
	$this->db->where('id', $id);
		
		$result = $this->db->update('agenda', $data); 

		return $result;
	  
  }
   function hapus($id){
	 $this->load->database();
    $this->db->delete('agenda', array('id' => $id)); 
    
  }
  
  function beritaLatest(){
    $this->db->order_by("tanggal", "desc");
    $this->db->join('r_kategori','r_kategori.id = berita.id_kategori','inner');
    $this->db->limit(1);
  //$this->db->limit(3);
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
  function beritaakademik(){
      $this->db->where(array('id_kategori'=>4));
      //$this->db->order_by(rand());
      $this->db->join('r_kategori','r_kategori.id = berita.id_kategori','inner');
    $this->db->limit(6);
  //$this->db->limit(3);
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
 }