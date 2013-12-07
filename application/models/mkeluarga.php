<?php
class Mkeluarga extends CI_Model
{

    function getKeluargaGuru_($username){
        $this->db->where(array('user.username'=>$username));
        $this->db->order_by('hubungan_keluarga','ASC');
        $this->db->join('user','keluarga.id_user = user.id_user','inner');
        $this->db->join('guru','guru.username=user.username','inner');
        $ambil = $this->db->get('keluarga');
        
        if ($ambil->num_rows()>0){
            foreach($ambil->result() as $baris){
                $hasil[] = $baris;
            }
            return $hasil;
        }
        //$this->db->select(array('keluarga.nama_lengkap','keluarga.hubungan_keluarga'));
    }
    function getidGuru($username){
        $this->db->where(array('user.username'=>$username));
        $this->db->join('guru','guru.username=user.username','inner');
        $this->db->select('user.id_user');
        $ambil = $this->db->get('user');
        return $ambil;
        
        
    }
    function addkeluargaguru(){
        $id_user = $this->input->post('id_user');
        $nama_lengkap = $this->input->post('nama_lengkap');
        $hubungan_keluarga = $this->input->post('hubungan_keluarga');
        $this->db->query("INSERT INTO keluarga (id_user,nama_lengkap,hubungan_keluarga) VALUES ('$id_user','$nama_lengkap','$hubungan_keluarga')");
    }
    function deletekeluarga($id_keluarga){
        $this->db->where(array('id_keluarga'=>$id_keluarga));
        $this->db->delete('keluarga');
        
    }
    function cek($id,$username){
        $this->db->where(array('id_keluarga'=>$id,'user.username'=>$username));
        $this->db->join('user','user.id_user = keluarga.id_user','inner');
        $this->db->join('guru','guru.username = user.username','inner');
        $ambil = $this->db->get('keluarga');
        
        return $ambil->num_rows();
        
    }
    function detilKeluarga($id){
        $this->db->where(array('id_keluarga'=>$id));
        $ambil = $this->db->get('keluarga');
        return $ambil->row();
    }
    function update(){
        $id_keluarga = $this->input->post('id_keluarga');
        $nama_lengkap = $this->input->post('nama_lengkap');
        $hubungan_keluarga = $this->input->post('hubungan_keluarga');
        $this->db->query("UPDATE keluarga set nama_lengkap = '$nama_lengkap', hubungan_keluarga = '$hubungan_keluarga' WHERE id_keluarga = '$id_keluarga'");
    }
}