<?php
class Mkelas extends CI_Model
 {
  function getdata()
  {
  $this->db->order_by('nama_jurusan','desc');
  $this->db->join("jurusan","kelas.id_jurusan=jurusan.id_jurusan","inner");
  $ambil = $this->db->get('kelas');
  
  if($ambil->num_rows())
   {
   foreach($ambil->result() as $baris)
    {
     $hasil[] = $baris;
    }
    //echo "kosong";
	return $hasil;
   }
  }
  //menampilkan list siswa untuk daftar mata pelajaran
  function getmapel($user){
      $this->db->where(array('siswa.nis'=>$user));
      
      $this->db->join('mapel_ambil',"mapel.id_mapel=mapel_ambil.id_mapel","inner");
      $this->db->join('tahun',"tahun.id_tahun=mapel.id_tahun","inner");
      $this->db->join('jenismapel',"mapel.id_jenismapel=jenismapel.id_jenismapel","inner");
      $ambil = $this->db->get('mapel');
      if ($ambil->num_rows() > 0 ){
          foreach($ambil->result() as $baris){
              $hasil[] = $baris;
          }
          return $hasil;
      }else{
          
      }
  }
  //=============================
  function addkelas(){
	$id_jurusan = $this->input->post('id_jurusan');
        $nama_kelas = $this->input->post('nama_kelas');

	$this->db->query("INSERT INTO kelas (id_jurusan,nama_kelas) VALUES('$id_jurusan','$nama_kelas')");  
	  
  }
  function editkelas($id,$data){
	 $this->db->where('id_kelas', $id);
		
		$result = $this->db->update('kelas', $data); 

		return $result;
	 
 }
   function get($id){
  //$this->db->select()->from('jurusan');
  $query  = $this->db->get_where('kelas',array('id_kelas' => $id));
  return $query;
  
  }
 }
 
 