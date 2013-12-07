<?php
class Kelas_model extends CI_Model{
    function __construct(){
        parent::__construct();

    }
	function getAllKelas(){
        return $this->db->query("select * from kelas")->result();
    }
	function getAllJurusan(){
        return $this->db->query("select * from jurusan")->result();
    }
}
