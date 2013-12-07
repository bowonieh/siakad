<?php
class Mguru extends CI_Model
{
    function getdata(){
        $this->db->order_by("id_guru", "asc");
        $ambil = $this->db->get('guru');
         if($ambil->num_rows() > 0)
        {
        foreach($ambil->result() as $baris)
        {
    
            $hasil[] = $baris;
	
	}
	
            return $hasil;
	
        }
    }
    function get($id_guru){
        $query  = $this->db->get_where('guru',array('id_guru' => $id_guru));
        return $query;
  }
  function pendidikan($id_guru){
      $this->db->where(array('guru.id_guru'=>$id_guru));
      $this->db->join('user', 'guru.username=user.username','inner');
      $this->db->join('rpendidikan','user.id_user=rpendidikan.id_user');
      $ambil=$this->db->get('guru');
      if($ambil->num_rows() > 0)
        {
        foreach($ambil->result() as $baris)
        {
    
            $hasil[] = $baris;
	
	}
	
            return $hasil;
	
        }
  }
   public function ambil_guru($limit, $start) {
        $this->db->limit($limit, $start);
        $this->db->order_by("id_guru","asc");
        $query = $this->db->get("guru");
 
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   } 
   public function record_count() {
        return $this->db->count_all("guru");
    }
   function _option_kelas() {
        $result = $this->db->get("kelas");
        $kelas = array();
        foreach($result->result_array() as $row) {
        $kelas[$row["id_kelas"]] = $row["nama_kelas"];
        }
            return $kelas;
        }
   function _option_tahun() {
       //$this->db->order_by("id_tahun","ASC");
        $result = $this->db->get("tahun");
       
        $tahun = array();
        foreach($result->result_array() as $row) {
         
        $tahun[$row["id_tahun"]] = $row['tahun'];
        //$tahun[$row["id_tahun"]] = $row['semester'];
        
        }
            return $tahun;
        }
   function _option_jenismapel() {
       //$this->db->order_by("id_tahun","ASC");
        $result = $this->db->get("jenismapel");
       
        $mapel = array();
        foreach($result->result_array() as $row) {
         
        $mapel[$row["id_jenismapel"]] = $row['jenismapel'];
        //$tahun[$row["id_tahun"]] = $row['semester'];
        
        }
            return $mapel;
        }
   function addsiswa(){
       
                    //$fotoup = $this->upload->data();
                    
                    //$foto = array('upload_data' => $this->upload->data());
                    $nis = $this->input->post('nis');
                    $nama = $this->input->post('nama');
                    $id_kelas = $this->input->post('id_kelas');
                    $jenkel = $this->input->post('jenkel');
                    $alamat = $this->input->post('alamat');
                    $tgl_lahir = $this->input->post('tgl_lahir');
                    $tempat_lahir = $this->input->post('tempat_lahir');
                    //$foto = $fotoup['full_path'];
                    
                    
        //if(empty($foto)){
	$this->db->query("INSERT INTO siswa (nis,nama,id_kelas,jenkel,alamat,tgl_lahir,tempat_lahir)VALUES('$nis','$nama','$id_kelas','$jenkel','$alamat','$tgl_lahir','$tempat_lahir')");  
        $this->db->query("INSERT INTO user (username,password,level)VALUES('$nis',md5('$nis'),'7')");
        //}else{
        //$this->db->query("INSERT INTO siswa (nis,nama,id_kelas,jenkel,alamat,tgl_lahir,tempat_lahir,foto)VALUES('$nis','$nama','$id_kelas','$jenkel','$alamat','$tgl_lahir','$tempat_lahir','$foto')");      
        //}
                     //$this->db->insert('siswa',$data);
  
   }
   function addmapel(){
       $id_tahun    = $this->input->post('id_tahun');
       $kode_mapel  = $this->input->post('kode_mapel');
       $mapel       = $this->input->post('mapel');
       $kkm         = $this->input->post('kkm');
       $id_guru     = $this->input->post('id_guru');
       $id_jenismapel= $this->input->post('id_jenismapel');
       $deskripsi   = $this->input->post('deskripsi');
       
       $this->db->query("INSERT INTO mapel ( id_tahun,id_guru,id_jenismapel,mapel,kode_mapel,kkm,deskripsi) VALUES ('$id_tahun','$id_guru','$id_jenismapel','$mapel','$kode_mapel','$kkm','$deskripsi')");
       
   }
   function hapus($id_guru){
       $this->db->where(array('id_guru'=>$id_guru));
       $this->db->delete('guru');
   }
   function hapusmapel($id){
    $this->load->database();
    $this->db->delete('mapel', array('id_mapel' => $id));
    //$this->db->delete('user', array('username' => $nis));
    
  }
  function getmapel($user){
      $this->db->where(array('guru.username'=>$user));
      
      $this->db->join('mapel',"guru.id_guru=mapel.id_guru","inner");
      $this->db->join('tahun',"tahun.id_tahun=mapel.id_tahun","inner");
      $this->db->join('jenismapel',"mapel.id_jenismapel=jenismapel.id_jenismapel","inner");
      $ambil = $this->db->get('guru');
      if ($ambil->num_rows() > 0 ){
          foreach($ambil->result() as $baris){
              $hasil[] = $baris;
          }
          return $hasil;
      }else{
          
      }
  }
  function editmapel($id,$data){
      $this->db->where('id_mapel', $id);
		
		$result = $this->db->update('mapel', $data); 

		return $result;
  }
  function tambahmapel(){
      
  }
  
  function getidguru($id){
      $this->db->join('user','user.username = guru.username','inner');
      $query  = $this->db->get_where('guru',array('guru.username' => $id));
      return $query;
  
  }
  
  function getmapelbyid($id){
  //$this->db->select()->from('jurusan');
  $query  = $this->db->get_where('mapel',array('id_mapel' => $id));
  return $query;
  
  
  
   }
   function checkmapel($user){
       $this->db->where(array('username'=>$user));
       $this->db->join('guru','mapel.id_guru=guru.id_guru','inner');
       $this->db->join('mapel_ambil','mapel.id_mapel=mapel_ambil.id_mapel','inner');
       $ambil = $this->db->get('mapel');
       return $ambil->result();
   }
   function siswamapel($id_mapel){
       $this->db->where(array('id_mapel'=>$id_mapel));
       $this->db->order_by('siswa.nis','asc');
       $this->db->join('siswa','siswa.nis=mapel_ambil.nis','inner');
       $this->db->join('kelas','siswa.id_kelas=kelas.id_kelas','inner');
       $ambil = $this->db->get('mapel_ambil');
       return $ambil->result();
   }
   function upnilai($table, $where, $data) {
    foreach ($where as $key => $value) {
        $this->db->where($key, $value);
    }
    $this->db->update($table, $data);
}
function addguru(){
    $username = $this->input->post('username');
    $nama_guru = $this->input->post('nama_guru');
    $this->db->query("INSERT INTO guru (nama_guru,username) VALUES ('$nama_guru','$username')");
    $this->db->query("INSERT INTO user (username,password,level) VALUES('$username',md5('$username'),'2')");
}
}