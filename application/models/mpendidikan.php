<?php if (!defined('BASEPATH')) exit ('No Direct Script Access Allowed');


class Mpendidikan extends CI_Model{
    
    function getPendidikan($username){
        $this->db->where(array('user.username'=>$username));
        $this->db->order_by('thn_masuk','ASC');
        $this->db->join('user','rpendidikan.id_user = user.id_user','inner');
        $this->db->join('guru','guru.username=user.username','inner');
        $ambil = $this->db->get('rpendidikan');
        
        if ($ambil->num_rows()>0){
            foreach($ambil->result() as $baris){
                $hasil[] = $baris;
            }
            return $hasil;
        }
    }
    function getdetilPendidikan($id){
        $this->db->where(array('id'=>$id));
        $ambil = $this->db->get('rpendidikan');
        return $ambil->row();
    }
    function getidGuru($username){
        $this->db->where(array('user.username'=>$username));
        $this->db->join('guru','guru.username=user.username','inner');
        $this->db->select('user.id_user');
        $ambil = $this->db->get('user');
        return $ambil;
        
        
    }
    function hapus($id){
        $this->db->where(array('id'=>$id));
        $this->db->delete('rpendidikan');
    }
    function tambah(){
        
        $data = array(
            'id_user'           =>  $this->input->post('id_user'),
            'nama_pendidikan'   =>  $this->input->post('nama_pendidikan'),
            'jenjang'           =>  $this->input->post('jenjang'),
            'thn_masuk'         =>  $this->input->post('thn_masuk'),
            'thn_lulus'         =>  $this->input->post('thn_lulus'),
            'no_izajah'         =>  $this->input->post('no_izajah')
        );
        $this->db->insert('rpendidikan',$data);
    }
    function cek($id,$username){
        $this->db->where(array('id'=>$id,'user.username'=>$username));
        $this->db->join('user','user.id_user = rpendidikan.id_user','inner');
        $this->db->join('guru','guru.username = user.username','inner');
        $ambil = $this->db->get('rpendidikan');
        
        return $ambil->num_rows();
        
    }
   function update(){
       
            $id                 = $this->input->post('id');
            $id_user            = $this->input->post('id_user');
            $nama_pendidikan    =  $this->input->post('nama_pendidikan');
            $jenjang            =  $this->input->post('jenjang');
            $thn_masuk          =  $this->input->post('thn_masuk');
            $thn_lulus          =  $this->input->post('thn_lulus');
            $no_izajah          =  $this->input->post('no_izajah');
       
       //$this->db->update_string('rpendidikan', $data, $where);
       $this->db->query("UPDATE rpendidikan SET nama_pendidikan = '$nama_pendidikan',jenjang = '$jenjang',thn_masuk = '$thn_masuk',thn_lulus = '$thn_lulus',no_izajah = '$no_izajah' WHERE id = $id");
   }
}