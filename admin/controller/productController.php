<?php
include_once '../koneksi.php';
include_once '../models/produk.php';
// include_once 'product_form.php';

// step pertama yaitu menangkap requeest form
$kode = $_POST['kode'];
$nama = $_POST['nama'];
$harga_beli = $_POST['harga_beli'];
$harga_jual = $_POST['harga_jual'];
$stok = $_POST['stok'];
$min_stok = $_POST['min_stok'];
$jenis_produk_id = $_POST['jenis_produk_id'];

// menangkap form diatas dijadikan array
$data = [
    $kode,
    $nama,
    $harga_beli,
    $harga_jual,
    $stok,
    $min_stok,
    $jenis_produk_id,
];
$model = new Produk();
$tombol = $_REQUEST['proses'];
switch ($tombol) {
    case 'simpan':
        $model->simpan($data);
        break;
    case 'ubah':
        $data[] = $_POST['idx'];
        $model->ubah($data);
        break;
    case 'hapus':
        unset($data);
        $id = $_POST['idx'];
        $model->delete($id);
        break;
    default:
        header('Location:../index.php?url=product');
        break;
}
header('Location:../index.php?url=product');
