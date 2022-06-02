<?php
defined('BASEPATH')or exit('No direct script access allowed');
class Kuis extends CI_Controller
{

    public function __construct(){
        parent::__construct();
        cek_admin();
        $this->load->model('admin/M_kuis','kuis');
    }

    public function index(){
        $data['admin'] = $this->db->get_where('tbl_admin',['email' => $this->session->userdata('email')])->row();
        $data['title'] = "Kuis";
        $data['kuis'] = $this->kuis->get_all_kuis();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/kuis/index');
        $this->load->view('templates/footer');
    }

    public function add(){
        $data['admin'] = $this->db->get_where('tbl_admin',['email' => $this->session->userdata('email')])->row();
        $data['title'] = "Tambah Kuis";

        $this->form_validation->set_rules('soal','soal','required|trim',[
            'required' => 'Kolom soal & jawaban harap di isi'
        ]);
        $this->form_validation->set_rules('A','A','required|trim',[
            'required' => 'Opsi harap di isi'
        ]);
        $this->form_validation->set_rules('B','B','required|trim',[
            'required' => 'Opsi harap di isi'
        ]);
        $this->form_validation->set_rules('C','C','required|trim',[
            'required' => 'Opsi harap di isi'
        ]);
        $this->form_validation->set_rules('D','D','required|trim',[
            'required' => 'Opsi harap di isi'
        ]);
        $this->form_validation->set_rules('E','E','required|trim',[
            'required' => 'Opsi harap di isi'
        ]);
        $this->form_validation->set_rules('penjelasan','penjelasan','required|trim',[
            'required' => 'Penjelasan jawaban harap di isi'
        ]);
        if($this->form_validation->run() == false){
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/kuis/add');
        $this->load->view('templates/footer');
        } else {
            $this->kuis->add_kuis();
        }
    }

    public function detail($id = null){
        cek_id_kuis($id);
        $data['admin'] = $this->db->get_where('tbl_admin',['email' => $this->session->userdata('email')])->row();
        $data['title'] = "Kuis";
        $data['kuis'] = $this->kuis->get_kuis_id($id);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/kuis/detail');
        $this->load->view('templates/footer');
    }
    
    public function edit($id = null){
        cek_id_kuis($id);
        $data['admin'] = $this->db->get_where('tbl_admin',['email' => $this->session->userdata('email')])->row();
        $data['title'] = "Edit Kuis";
        $data['kuis'] = $this->kuis->get_kuis_id($id);

        $this->form_validation->set_rules('soal','soal','required|trim',[
            'required' => 'Kolom soal & jawaban harap di isi'
        ]);
        $this->form_validation->set_rules('A','A','required|trim',[
            'required' => 'Opsi harap di isi'
        ]);
        $this->form_validation->set_rules('B','B','required|trim',[
            'required' => 'Opsi harap di isi'
        ]);
        $this->form_validation->set_rules('C','C','required|trim',[
            'required' => 'Opsi harap di isi'
        ]);
        $this->form_validation->set_rules('D','D','required|trim',[
            'required' => 'Opsi harap di isi'
        ]);
        $this->form_validation->set_rules('E','E','required|trim',[
            'required' => 'Opsi harap di isi'
        ]);
        $this->form_validation->set_rules('penjelasan','penjelasan','required|trim',[
            'required' => 'Penjelasan jawaban harap di isi'
        ]);
        if($this->form_validation->run() == false){

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/kuis/edit');
        $this->load->view('templates/footer');
        } else {
            $this->kuis->edit($id);
        }
    }

    public function delete($id){
        return $this->kuis->delete($id);
    }



}
