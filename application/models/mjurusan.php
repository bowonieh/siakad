<?php
class Mjurusan extends CI_Model
 {
  function getdata()
  {
  $ambil = $this->db->get('jurusan');
  if($ambil->num_rows() > 0)
   {
   foreach($ambil->result() as $baris)
    {
    
	 $hasil[] = $baris;
	
	}
	
    return $hasil;
	
   }
   return false;
  }
  function addJurusan(){
	$nama_jurusan = mysql_real_escape_string($_POST['nama_jurusan']);

	$this->db->query("INSERT INTO jurusan (nama_jurusan) VALUES('$nama_jurusan')");  
	  
  }
  function hapus($id_jurusan){
	 $this->load->database();
    $this->db->delete('jurusan', array('id_jurusan' => $id_jurusan)); 
    
  }
  function getjurusan($id_jurusan){
	  $this->load->database();
	$d = $this->db->get_where('jurusan',array('id_jurusan'=>$id_jurusan));
		if ($d){
			
		return true;	
			
		}else{
			
			return false;
			
		}
	
  }
  
  function get($id){
  //$this->db->select()->from('jurusan');
  $query  = $this->db->get_where('jurusan',array('id_jurusan' => $id));
  return $query;
  
  }
 function edit($id,$data){
	 $this->db->where('id_jurusan', $id);
		
		$result = $this->db->update('jurusan', $data); 

		return $result;
	 
 }
  public function ambil_jurusan($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("jurusan");
 
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }
public function record_count() {
        return $this->db->count_all("jurusan");
    }
  function _option_jurusan() {
$result = $this->db->get("jurusan");
$options = array();
foreach($result->result_array() as $row) {
$options[$row["id_jurusan"]] = $row["nama_jurusan"];
}
return $options;
}
 }
 
 