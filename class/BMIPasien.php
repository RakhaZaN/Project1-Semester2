<?php

class BMIPasien {
    public $id, $bmi, $tanggal, $pasien;

    public function __construct($id, $bmi, $tanggal, $pasien)
    {
        $this->id = $id;
        $this->bmi = $bmi;
        $this->tanggal = $tanggal;
        $this->pasien = $pasien;
    }

}