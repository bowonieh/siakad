<?php
class Msiswa extends CI_Model
{
    function getdata(){
        $this->db->order_by("nis", "asc");
        
        $ambil = $this->db->get('siswa');
         if($ambil->num_rows() > 0)
        {
        foreach($ambil->result() as $baris)
        {
    
            $hasil[] = $baris;
	
	}
	
            return $hasil;
	
        }
    }
    function get($nis){
        $this ->db->where(array('nis'=>$nis));
        $this->db->join('kelas','kelas.id_kelas=siswa.id_kelas','inner');
        //$query = $this->db->get('siswa');
        $query  = $this->db->get_where('siswa',array('nis' => $nis));
        return $query;
  }
  function getsiswabykelas($id){
      $this->db->order_by("siswa.nis","ASC");
      //$ambil = $this->db->get_where('siswa,kelas',array('id_kelas'=>$id,'siswa.id_kelas' == 'kelas.id_kelas' ));
      //$this->db->from("siswa");
      $this->db->where(array('siswa.id_kelas'=>$id));
      $this->db->join("kelas","kelas.id_kelas = siswa.id_kelas",'left');
        //return query;
      $ambil=$this->db->get('siswa');
      if($ambil->num_rows() > 0){
          foreach($ambil->result() as $baris)
          {
              $hasil[] = $baris;
          }
          
          return $hasil;
      }else{
          
      }
  }
   public function ambil_siswa($limit, $start) {
        $this->db->limit($limit, $start);
        $this->db->order_by("nis","asc");
        $query = $this->db->get("siswa");
 
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   } 
   public function record_count() {
        return $this->db->count_all("siswa");
    }
   function _option_kelas() {
        $result = $this->db->get("kelas");
        $kelas = array();
        foreach($result->result_array() as $row) {
        $kelas[$row["id_kelas"]] = $row["nama_kelas"];
        }
            return $kelas;
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
                    $agama = $this->input->post('agama');
                    //$foto = $fotoup['full_path'];
                    
                    
        //if(empty($foto)){
	$this->db->query("INSERT INTO siswa (nis,nama,id_kelas,jenkel,alamat,tgl_lahir,tempat_lahir,agama)VALUES('$nis','$nama','$id_kelas','$jenkel','$alamat','$tgl_lahir','$tempat_lahir','$agama')");  
        $this->db->query("INSERT INTO user (username,password,level)VALUES('$nis',md5('$nis'),'7')");
        //}else{
        //$this->db->query("INSERT INTO siswa (nis,nama,id_kelas,jenkel,alamat,tgl_lahir,tempat_lahir,foto)VALUES('$nis','$nama','$id_kelas','$jenkel','$alamat','$tgl_lahir','$tempat_lahir','$foto')");      
        //}
                     //$this->db->insert('siswa',$data);
  
   }
   function hapus($nis){
    $this->load->database();
    $this->db->delete('siswa', array('nis' => $nis));
    $this->db->delete('user', array('username' => $nis));
    
  }
  function jmlsiswakelas($id){
      $this->db->where(array('id_kelas'=>$id));
      $ambil = $this->db->get('siswa');
      $query = $ambil->num_rows();
      return $query;
      
  }
  function mapelaktif(){
      $this->db->where(array('tahun.status'=>1));
      $this->db->join('tahun', 'tahun.id_tahun=mapel.id_tahun','inner');
      $this->db->join('guru','guru.id_guru=mapel.id_guru','inner');
      //$this->db->where('mapel_ambil.nis!=siswa.nis');
      //$this->db->join('mapel_ambil','mapel.id_mapel=mapel_ambil.id_mapel','left');
      //$this->db->join('siswa','mapel_ambil.nis!=siswa.nis','right');
      //$this->db->get('mapel');
      //$this->db->join('siswa','siswa.nis=mapel_ambil.nis','left');
      $ambil = $this->db->get(array('mapel'));
     
      if ($ambil->num_rows() > 0 ){
          foreach($ambil->result() as $baris){
              $hasil[] = $baris;
          }
          return $hasil;
      }else{
          
      }
      
  }
  function mapelsaya($nis){
      $this->db->where(array('mapel_ambil.nis'=>$nis));
      $this->db->join('guru','mapel.id_guru=guru.id_guru','inner');
      $this->db->join('mapel_ambil','mapel.id_mapel=mapel_ambil.id_mapel','inner');
      $ambil = $this->db->get('mapel');
     
      if ($ambil->num_rows() > 0 ){
          foreach($ambil->result() as $baris){
              $hasil[] = $baris;
          }
          return $hasil;
      }else{
          
      }
  }
  function daftarmapel($id){
      $id_mapel = $id;
      
      $nis = $this->session->userdata('username');
      
      $query = $this->db->insert("mapel_ambil",array('id_mapel'=>$id_mapel,'nis'=>$nis));
      return $query;
  }
  function ambilhasil($id_tahun){
      $user = $this->session->userdata('username');
      $this->db->where(array('tahun.id_tahun'=>$id_tahun,'mapel_ambil.nis'=>$user));
      $this->db->join('mapel','mapel.id_mapel = mapel_ambil.id_mapel','inner');
      $this->db->join('tahun','mapel.id_tahun = tahun.id_tahun','inner');
      $ambil = $this->db->get('mapel_ambil');
      //$ambil = $this->db->get('tahun');
      return $ambil->result_array();
      
  }
  function getdetilsiswa($nis){
      $this->db->where(array('nis'=>$nis));
      $this->db->join('kelas', 'kelas.id_kelas = siswa.id_kelas');
      $ambil = $this->db->get('siswa');
      return  $ambil->result_array();
  }

  function tambahabsensi(){
      $nis = $this->input->post('nis');
      $tanggal = $this->input->post('tanggal');
      $alasan = $this->input->post('alasan');
      $id_tahun = $this->input->post('id_tahun');
      //$chk = $this->db->query("SELECT * FROM absensi WHERE tanggal = '$tanggal' AND nis = '$nis' "); 
      
          $query = $this->db->query("INSERT INTO absensi (nis,tanggal,alasan,id_tahun) VALUES ('$nis','$tanggal','$alasan','$id_tahun')");
          return $query;
      
          
      
      
  }
  function chkabsn(){
        // $query  = $this->db->get_where('tahun',array('status' => 1));
        //$this->db->where(array('status'=>'1'));
        $nis = $this->input->post('nis');
        $tanggal = $this->input->post('tanggal');
        $this->db->where(array('nis'=>$nis));
        $this->db->where(array('tanggal'=>$tanggal));
        //$ambil = $this->db->get('tahun');
        $ambil = $this->db->get('absensi');
        return $ambil->num_rows();
        
    }
    function getabsensi($tanggal){
        //$this->db->where(array('tanggal'=>date('Y-m-d')));
        $this->db->where(array('tanggal'=>$tanggal));
        $this->db->join('siswa','siswa.nis=absensi.nis','inner');
        $ambil = $this->db->get('absensi');
        return  $ambil->result_array();
    }
    function rekapabsensi($status){
        $this->db->where(array('alasan'=>$status,'tanggal'=>date('Y-m-d')));
        //$this->db->select('count(*)');
        $ambil = $this->db->get('absensi');
        return $ambil;
    }
  }