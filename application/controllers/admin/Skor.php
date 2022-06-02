<?php
defined('BASEPATH')or exit('No direct script access allowed');
class Skor extends CI_Controller {

    public function __construct(){
        parent::__construct();
        cek_admin();
    }

    public function index(){
        $data['admin'] = $this->db->get_where('tbl_admin',['email' => $this->session->userdata('email')])->row();
        $data['title'] = "Skor";
        $data['skor'] = $this->db->order_by('time','DESC')->get('hasil_skor')->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/skor/index');
        $this->load->view('templates/footer');
    }


    public function del_skor($id){
        if($this->db->delete('hasil_skor',['id_hasil' => $id])){
            $this->session->set_flashdata('scs','Data skor berhasil di hapus');
            redirect('admin/skor');
        } else {
            $this->session->set_flashdata('err','Data skor gagal di hapus');
            redirect('admin/skor');
        }
    }

}