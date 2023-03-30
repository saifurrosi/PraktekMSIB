<?php
class Pegawai{
    protected $nip;
    public $nama;
    private $jabatan;
    private $agama;
    private $status;
    static $jml = 0;
    const PT = 'PT. HTP Indonesia';

    public function __construct($nip, $nama, $jabatan, $agama, $status){
        $this->nip = $nip;
        $this->nama = $nama;
        $this->jabatan = $jabatan;
        $this->agama = $agama;
        $this->status = $status;
        self::$jml++;
    }
    public function setGajiPokok(){
        $jabatan = ($this->jabatan);
        switch($jabatan){
            case 'Manager': $gapok = 15000000; break;
            case 'Asisten Manager': $gapok = 10000000; break;
            case 'Kepala Bagian': $gapok = 7000000; break;
            case 'Staff': $gapok = 5000000; break;
            default: $gapok = 0;
        }
        return $gapok;
    }

    public function TunjanganJabatan(){
        $tunjab = $this->setGajiPokok() * 0.2;
        return $tunjab;
    }

    public function TunjanganKeluarga(){
        $tunkel_m =($this->status == 'Menikah') ? $this->setGajiPokok() * 0.1 : 0;
        $tunkel_bm = ($this->status == 'Belum Menikah') ? $this->setGajiPokok() : 0;

        return $tunkel_m;
        return $tunkel_bm;
    }

    public function Zakat()
    {
        $zakat = ($this->agama == 'Islam' && $this->setGajiPokok() > 6000000 ) ? $this->setGajiPokok() * 0.25 : 0;
        return $zakat;
    }

    public function gajiBersih()
    {
        $gaji_bersih = $this->setGajiPokok() + $this->TunjanganJabatan() + $this->TunjanganKeluarga() - $this->Zakat();
        return $gaji_bersih;
    }
    public function cetak(){
        echo 'NIM Pegawai : '.$this->nip;
        echo '<br>Nama Pegawai : '.$this->nama;
        echo '<br>Jabatan : '. $this->jabatan;
        echo '<br>Agama : '.$this->agama;
        echo '<br>Status : '.$this->status;
        echo '<br>Gaji Pokok Rp. : '.number_format($this->setGajiPokok($this->jabatan),0,',','.');
        echo '<br>Tunjangan Jabatan Rp. : '.number_format($this->TunjanganJabatan(),0,',','.');
        echo '<br>Tunjangan Keluarga Rp. : '.number_format($this->TunjanganKeluarga(),0,',','.');
        echo '<br>Zakat Rp. : '.number_format($this->Zakat(),0,',','.');
        echo '<br>Gaji Bersih Rp. : '.number_format($this->gajiBersih(),0,',','.');
        echo '<hr>';

    }

}



?>