<?php
defined('BASEPATH')or exit('No direct script access allowed');
class M_kuis extends CI_Model
{

    public function get_all_kuis(){
        return $this->db->get('tbl_kuis')->result();
    }

    public function get_kuis_id($id){
        return $this->db->get_where('tbl_kuis',['id_soal' => $id])->row();
    }

    public function add_kuis(){
        $data = [
            'soal' => $this->input->post('soal'),
            'kunci_jawaban' => $this->input->post('jawaban'),
            'skor_soal' => $this->input->post('skor'),
            'opsi_a' => $this->input->post('A'),
            'opsi_b' => $this->input->post('B'),
            'opsi_c' => $this->input->post('C'),
            'opsi_d' => $this->input->post('D'),
            'opsi_e' => $this->input->post('E'),
            'penjelasan' => $this->input->post('penjelasan')
        ];

        $this->db->insert('tbl_kuis', $data);
        $this->session->set_flashdata('msg','Kuis baru berhasil di tambahkan');
        redirect('admin/kuis');
    }

    public function edit($id){
        $data = [
            'soal' => $this->input->post('soal'),
            'kunci_jawaban' => $this->input->post('jawaban'),
            'skor_soal' => $this->input->post('skor'),
            'opsi_a' => $this->input->post('A'),
            'opsi_b' => $this->input->post('B'),
            'opsi_c' => $this->input->post('C'),
            'opsi_d' => $this->input->post('D'),
            'opsi_e' => $this->input->post('E'),
            'penjelasan' => $this->input->post('penjelasan')
        ];
        $this->db->where('id_soal', $id);
        $this->db->update('tbl_kuis', $data);
        $this->session->set_flashdata('msg','Soal kuis berhasil di update');
        redirect('admin/kuis');
    }

    public function delete($id){
        $this->db->delete('tbl_kuis',['id_soal'=> $id]);
        $this->session->set_flashdata('msg','Soal kuis berhasil di hapus');
        redirect('admin/kuis');
    }


}
