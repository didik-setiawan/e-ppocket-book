<?php
defined('BASEPATH')or exit('No direct script access allowed');
class M_home extends CI_Model
{

    public function app(){
        return $this->db->get('tbl_app')->row();
    }

    public function get_kompetensi(){
        return $this->db->get('tbl_kompetensi')->row();
    }

    public function get_materi_all(){
        $this->db->order_by('judul_materi','ASC');
        return $this->db->get('tbl_materi')->result();
    }

    public function get_materi_id($id){
        return $this->db->get_where('tbl_materi',['md5(id_materi)' => $id])->row();
    }

    public function get_bantuan(){
        return $this->db->get('tbl_bantuan')->row();
    }

    public function get_tentang(){
        return $this->db->get('tbl_tentang')->row();
    }

    public function get_kuis($limit, $start){
        return $this->db->get('tbl_kuis', $limit, $start)->result();
    }

    public function count_kuis(){
        return $this->db->get('tbl_kuis')->num_rows();
    }

    public function get_kuis_terakhir(){
        $query = "SELECT * FROM tbl_kuis WHERE id_soal IN(SELECT MAX(id_soal) FROM tbl_kuis)";
        return $this->db->query($query)->row();
    }


}
