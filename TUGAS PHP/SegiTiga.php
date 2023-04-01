<?php
require_once 'abstrakTugas.php';
class SegiTiga extends Bentuk2D {
    public $alas;
    public $tinggi;
    public $sisi3;
    public function __construct($alas, $tinggi, $sisi3){
        $this->alas = $alas;
        $this->tinggi = $tinggi;
        $this->sisi3 = $sisi3;
    }
    public function namaBidang(){
        echo "Segitiga";
    }
    public function luasBidang(){
        $luas = 0.5 * $this->alas * $this->tinggi;
        return $luas;
    }
    public function kelilingBidang(){
        $keliling = $this->sisi3 + $this->alas + $this->tinggi;
        return $keliling;
    }
}

?>