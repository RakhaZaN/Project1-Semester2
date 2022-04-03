<?php

class BMI {
    public $berat, $tinggi;

    public function __construct($berat, $tinggi)
    {
        $this->berat = $berat;
        $this->tinggi = $tinggi;
    }

    public function nilai()
    {
        return $this->berat / ($this->tinggi^2);
    }

    public function status()
    {
        $nilai = $this->nilai();
        if ($nilai < 18.5) return "Kekurangan berat badan";
        elseif ($nilai <= 24.9) return "Normal ( Ideal )";
        elseif ($nilai <= 29.9) return "Kelebihan berat badan";
        else return "Kegemukan ( Obesitas )";
    }
}