<?php
defined('BASEPATH')or exit('No direct script access allowed');
class Kuis extends CI_Controller
{

    public function __construct(){
        parent::__construct();
        $this->load->model('M_home','home');
    }

    public function index(){
        if($this->session->userdata('name')){
            redirect('kuis/skor');
        }
        $this->load->view('kuis/index');
    }

    public function sub_kuis(){

        if(!$this->session->userdata('name')){
            redirect('kuis');
        }

        $config['base_url'] = 'http://localhost/e-book/kuis/sub_kuis';
        $config['total_rows'] = $this->home->count_kuis();
        $config['per_page'] = 1;
        $data['start'] = $this->uri->segment('3');

        $this->pagination->initialize($config);

        $data['kuis'] = $this->home->get_kuis($config['per_page'], $data['start']);
        $data['soal_terakhir'] = $this->home->get_kuis_terakhir();
        $this->load->view('kuis/kuis', $data);
    }

    public function save_jawaban(){

        foreach ($this->cart->contents() as $c) {
            $id = $c['id'];
            $rowid = $c['rowid'];
            echo $c['id'];

        }

        if($id == $_POST['id_soal']){
            $data = [
                'rowid' => $rowid,
                'id' => $_POST['id_soal'],
                'name' => $_POST['jawaban'],
                'qty' => 1,
                'price' => $_POST['skor'],
            ];
            $this->cart->update($data);
        } else {
            $data = [
                'id' => $_POST['id_soal'],
                'name' => $_POST['jawaban'],
                'qty' => 1,
                'price' => $_POST['skor'],
            ];
            $this->cart->insert($data);
        }
    }

    public function skor(){

        $jawaban = $this->db->get_where('simpan_jwb',['time' => $this->session->userdata('time')])->result();

        if(!$this->session->userdata('name')){
            redirect('kuis');
        
        } else if(!$jawaban){
            redirect('kuis/sub_kuis');
        }
        $time = $this->session->userdata('time');
        $q = "SELECT SUM(skor) AS skor_akhir FROM simpan_jwb where time = $time";
        $data['skor'] = $this->db->query($q)->row();
        $data['kunci'] = $this->db->get('tbl_kuis')->result();

        $this->input_skor($data['skor']);

        $this->load->view('kuis/skor', $data);
    }


    private function input_skor(){
        $time = $this->session->userdata('time');
        $q = "SELECT SUM(skor) AS skor_akhir FROM simpan_jwb where time = $time";
        $skor = $this->db->query($q)->row();
        $data = [
            'nama_siswa' => $this->session->userdata('name'),
            'skor' => $skor->skor_akhir,
            'time' => time()
        ];
        $this->db->insert('hasil_skor', $data);

    }

    public function to_kuis(){
        $data = [
            'name' => $this->input->post('name'),
            'time' => time()
        ];
        $this->session->set_userdata($data);
        redirect('kuis/sub_kuis');
    }

    public function back(){
        $this->db->delete('simpan_jwb',['time' => $this->session->userdata('time')]);
        $this->session->sess_destroy();
        redirect('kuis');
    }

    public function coba_kembali(){
        $this->db->delete('simpan_jwb',['time' => $this->session->userdata('time')]);
        redirect('kuis/sub_kuis');
    }

    public function coba_kuis(){
        $this->load->view('kuis/kuis');
    }

    public function show_jawaban(){
        $this->load->view('show_jawaban');
    }

    public function input_jawaban(){
        $id_soal = $_POST['id_soal'];
        $jawaban = $this->db->get_where('simpan_jwb',['time' => $this->session->userdata('time')])->result();
        $ada = $this->db->get_where('simpan_jwb',['time' => $this->session->userdata('time'), 'id_soal' => $id_soal])->row();

        if($jawaban){
            if($ada){
                $data = [
                    'skor' => $_POST['skor']
                ];
                $this->db->where(['time' => $this->session->userdata('time') , 'id_soal' => $id_soal])->update('simpan_jwb', $data);
                echo"ok update";
            } else {
                $data = [
                    'time' => $this->session->userdata('time'),
                    'id_soal' => $_POST['id_soal'],
                    'skor' => $_POST['skor']
                ];
                $this->db->insert('simpan_jwb', $data);
                echo"ok add";
            }

        } else {
            $data = [
                'time' => $this->session->userdata('time'),
                'id_soal' => $_POST['id_soal'],
                'skor' => $_POST['skor']
            ];
            $this->db->insert('simpan_jwb', $data);
            echo"ok add  new";
        }

        
    }


}
