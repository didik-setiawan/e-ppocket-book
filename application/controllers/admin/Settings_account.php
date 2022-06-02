<?php
defined('BASEPATH')or exit('No direct script access allowed');
class Settings_account extends CI_Controller
{

    public function __construct(){
        parent::__construct();
        cek_admin();
        $this->load->model('admin/M_settings','settings');
    }

    public function index(){
        $data['admin'] = $this->db->get_where('tbl_admin',['email' => $this->session->userdata('email')])->row();
        $data['title'] = "Settings Account";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/settings/index');
        $this->load->view('templates/footer');
    }

    public function email(){
        $this->form_validation->set_rules('nama','nama','required|trim');
        $this->form_validation->set_rules('email','email','required|trim|valid_email');
        if($this->form_validation->run() == false){
            $this->session->set_flashdata('err_msg','Kesalahan penulisan harap coba kembali');
            redirect('admin/settings_account');
        } else {
            $this->settings->email();
        }
    }

    public function foto(){
        return $this->settings->update_foto();
    }

    public function password(){
        $this->form_validation->set_rules('old_pass','password lama','required|trim');
        $this->form_validation->set_rules('new_pass1','password baru','required|trim|min_length[5]|matches[new_pass2]',[
            'min_length' => 'Password baru min 5 karakter',
            'matches' => 'Password baru harus sama dengan konfirmasi password'
        ]);
        $this->form_validation->set_rules('new_pass2','konfirmasi password','required|trim|matches[new_pass1]');
        if($this->form_validation->run() == false){
            $this->session->set_flashdata('err_msg', form_error('new_pass1'));
            redirect('admin/settings_account');
        } else {
            $this->settings->update_password();
        }
    }



}
