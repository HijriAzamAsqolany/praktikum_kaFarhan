<?php
class Matakuliah_model extends CI_Model{
    public $nama, $sks, $kode;
}
public function getAll(){
    // Menampilkan data menggunakan query builder
    $query = $this->db->get('mahasiswa');
    return $query->result();
}

?>