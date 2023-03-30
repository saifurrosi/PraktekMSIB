<?php 
require 'Pegawai.php';

$pegawai1 = new Pegawai('2021400148','Andi','Kepala Bagian','Islam','Menikah');
$pegawai2 = new Pegawai('2021400140', 'Ana', 'Staff', 'Islam', 'Menikah');
$pegawai3 = new Pegawai('2021400141', 'Ali', 'Aisten Manager', 'Islam', 'Menikah');
$pegawai4 = new Pegawai('2021400142', 'Abi', 'Kepala Bagian', 'Kristen Protestan', 'Belum Menikah');
$pegawai5 = new Pegawai('2021400143', 'Ama', 'Manager', 'Islam', 'Menikah');

$_pegawai = [$pegawai1,$pegawai2,$pegawai3,$pegawai4,$pegawai5];

foreach($_pegawai as $pegawai){
    $pegawai->cetak();
}


?>