<?php
class Matakuliah extends CI_Controller{
    // Membuat method index
    public function index(){
        $this->load->model('matakuliah_model','mtk1');

        // buat object model 1 dan nilai nya
        $this->mtk1->id=1;
        $this->mtk1->nama='Pemweb';
        $this->mtk1->sks=3;
        $this->mtk1->kode='PW2';

        // Simpan object
        $list_mtk = [$this->mtk1];
        // Siapkan data
        $data['list_mtk'] = $list_mtk;
        // render data kirimkan kedalam view
        $this->load->view('layouts/header');
        $this->load->view('matakuliah/index', $data);
        $this->load->view('layouts/footer');
    }
}
?>