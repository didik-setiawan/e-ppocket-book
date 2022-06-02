<?php
defined('BASEPATH')or exit('No direct script access allowed');
class M_settings extends CI_Model
{
    public function email(){
        $data = [
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email')
        ];
        $this->db->where('email', $this->session->userdata('email'));
        $this->db->update('tbl_admin', $data);
        $email = $this->input->post('email');
        $this->session->unset_userdata('email');
        $this->session->set_userdata('email', $email);
        $this->session->set_flashdata('msg','Nama & email berhasil di update');
        redirect('admin/settings_account');
    }

    public function update_foto(){
        $img = $_FILES['foto'];
        if($img){
            $config['upload_path'] = './assets/img/user/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->load->library('upload', $config);

            if($this->upload->do_upload('foto')){
                $old_img = $this->db->get_where('tbl_admin',['email' => $this->session->userdata('email')])->row()->img;
                unlink(FCPATH.'assets/img/user/'. $old_img);
                $new_img = $this->upload->data('file_name');

                $this->db->set('img', $new_img);
                $this->db->where('email', $this->session->userdata('email'));
                $this->db->update('tbl_admin');
                $this->session->set_flashdata('msg','Foto profil berhasil di update');
                redirect('admin/settings_account');

            } else {
                $this->session->set_flashdata('err_msg','Kesalahan saat upload foto, harap coba kembali');
                redirect('admin/settings_account');
            }

        }
    }

    public function update_password(){
        $old_pass = $this->input->post('old_pass');
        $new_pass = $this->input->post('new_pass1');
        $admin_pass = $this->db->get_where('tbl_admin',['email' => $this->session->userdata('email')])->row()->password;

        if($old_pass != $new_pass){
            if($admin_pass == md5($old_pass)){
                $this->db->set('password', md5($new_pass));
                $this->db->where('email', $this->session->userdata('email'));
                $this->db->update('tbl_admin');
                $this->session->set_flashdata('msg','Password berhasil di update');
                redirect('admin/settings_account');
            } else {
                $this->session->set_flashdata('err_msg','Password lama salah');
            redirect('admin/settings_account');
            }
        } else {
            $this->session->set_flashdata('err_msg','Password baru tidak boleh sama dengan password lama');
            redirect('admin/settings_account');
        }
    }


}
