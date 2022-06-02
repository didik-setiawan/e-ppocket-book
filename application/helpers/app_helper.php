<?php
 function login(){
     $t = get_instance();
     if($t->session->userdata('email')){
         redirect('admin/dashboard');
     }
 }

 function cek_admin(){
     $t = get_instance();
     if(!$t->session->userdata('email')){
         redirect('login');
     }
 }

 function cek_id_kompt($id){
    $t = get_instance();
    $id_kompt = $t->db->get_where('tbl_kompetensi',['md5(id_kompetensi)' => $id])->row();
    if($id == null){
        redirect('admin/kompetensi');
    } else if($id != md5($id_kompt->id_kompetensi)){
        redirect('admin/kompetensi');
    }
 }

 function cek_id_materi($id){
     $t = get_instance();
     $materi = $t->db->get_where('tbl_materi',['id_materi' => $id])->row();

     if($id == null){
         redirect('admin/materi');
     } else if($id != $materi->id_materi){
         redirect('admin/materi');
     }

    }


 function cek_id_kuis($id){
        $t = get_instance();
        $kuis = $t->db->get_where('tbl_kuis',['id_soal' => $id])->row();

        if($id == null){
            redirect('admin/kuis');
        } else if($id != $kuis->id_soal) {
            redirect('admin/kuis');
        }
    }

    function cek_id_bantuan($id){
        $t = get_instance();
        $bantuan = $t->db->get_where('tbl_bantuan',['id_bantuan' => $id])->row();

        if($id == null){
            redirect('admin/bantuan');
        } else if($id != $bantuan->id_bantuan){
            redirect('admin/bantuan');
        }

    }

function cek_id_tentang($id){
    $t = get_instance();
    $tentang = $t->db->get_where('tbl_tentang',['md5(id_tentang)' => $id])->row();
    if($id == null){
        redirect('admin/tentang');
    } else if($id != md5($tentang->id_tentang)) {
        redirect('admin/tentang');
    }
}

function cek_id_materi_home($id){
    $t = get_instance();
    $materi = $t->db->get_where('tbl_materi',['md5(id_materi)' => $id])->row();

    if($id == null){
        redirect('materi');
    } else if ($id != md5($materi->id_materi)){
        redirect('materi');
    }

}
