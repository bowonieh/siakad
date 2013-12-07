<?php
class Mtahun extends CI_Model
{
    function getdata(){
        $this->db->order_by("id_tahun", "asc");
        
        $ambil = $this->db->get('tahun');
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
        $query  = $this->db->get_where('tahun',array('id_tahun' => $id));
        return $query;
  }
    function tahunaktif(){
        // $query  = $this->db->get_where('tahun',array('status' => 1));
        $this->db->where(array('status'=>'1'));
        
        $ambil = $this->db->get('tahun');
        return $ambil;
        
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
                    //$foto = $fotoup['full_path'];
                    
                    
        //if(empty($foto)){
	$this->db->query("INSERT INTO siswa (nis,nama,id_kelas,jenkel,alamat,tgl_lahir,tempat_lahir)VALUES('$nis','$nama','$id_kelas','$jenkel','$alamat','$tgl_lahir','$tempat_lahir')");  
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
  
}