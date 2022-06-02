<?php
defined('BASEPATH')or exit('No direct script access allowed');
class Dashboard extends CI_Controller
{
    public function index(){
        cek_admin();
        $data['admin'] = $this->db->get_where('tbl_admin',['email' => $this->session->userdata('email')])->row();
        $data['title'] = "Dashboard";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/dashboard/index');
        $this->load->view('templates/footer');
    }
}
