<?php

class Pasien {
    public $id, $kode, $nama, $tmp_lahir, $tgl_lahir, $email, $gender;

    public function __construct($id, $kode, $nama, $gender, $tmp_lahir, $tgl_lahir)
    {
        $this->id = $id;
        $this->kode = $kode;
        $this->nama = $nama;
        $this->gender = $gender;
        $this->tmp_lahir = $tmp_lahir;
        $this->tgl_lahir = $tgl_lahir;
    }
}