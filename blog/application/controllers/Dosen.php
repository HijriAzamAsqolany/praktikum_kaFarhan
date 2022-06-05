<?php
class Dosen extends CI_Controller{
    // membuat method index
    public function index(){
        //akses model dosen
        $this->load->model('dosen_model');
        $dosen = $this->mahasiswa_model->getAll();
        $data['dosen'] = $dosen; 

        // $this->load->model('dosen_model','dsn1');

        // // buat object model 1 dan nilai nya
        // $this->dsn1->id=1;
        // $this->dsn1->nidn='0111';
        // $this->dsn1->pendidikan='S1';

        // $this->load->model('dosen_model','dsn2');

        // // buat object model 2 dan nilai nya
        // $this->dsn2->id=2;
        // $this->dsn2->nidn='0112';
        // $this->dsn2->pendidikan='S2';
        
        // $this->load->model('dosen_model','dsn3');

        // // buat object model 1 dan nilai nya
        // $this->dsn3->id=3;
        // $this->dsn3->nidn='0113';
        // $this->dsn3->pendidikan='S3';

        // // Simpan object kedalam array
        // $list_dsn = [$this->dsn1, $this->dsn2, $this->dsn3];
        // // Siapkan data
        // $data['list_dsn'] = $list_dsn;

        // render data dan kirim kedalam view
        $this->load->view('layouts/header');
        $this->load->view('dosen/index', $data);
        $this->load->view('layouts/footer');
    }
    public function detail($id){
        // akses model dosen
        $this->load->model('dosen_model');
        $pengajar = $this->dosen_model->getById($id);
        $data['pengajar'] = $pengajar;
        $this->load->view('layouts/header');
        $this->load->view('dosen/detail', $data);
        $this->load->view('layouts/footer');
    }
}
?>