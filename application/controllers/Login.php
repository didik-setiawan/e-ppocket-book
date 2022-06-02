<?php
defined('BASEPATH')or exit('No direct script access allowed');
class Login extends CI_Controller
{
    public function index(){
        login();
        $this->form_validation->set_rules('email','email','required|trim',['required' => 'Kolom email harap di isi']);
        $this->form_validation->set_rules('password','password','required|trim',['required' => 'Koolom password hara di isi']);
        if($this->form_validation->run() == false){
            $this->load->view('login');
        } else {
            $this->pv_login();
        }
    }

    private function pv_login(){
        $email = $this->input->post('email');
        $password = md5($this->input->post('password'));
        $admin = $this->db->get_where('tbl_admin',['email' => $email])->row();

        if($admin){
            if($admin->password == $password){
                $data = [
                    'email' => $email
                ];
                $this->session->set_userdata($data);
                redirect('admin/dashboard');
            } else {
                $this->session->set_flashdata('err_msg','Wrong Password');
            redirect('login');
            }
        } else {
            $this->session->set_flashdata('err_msg','Invalid email');
            redirect('login');
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('login');
    }

}
