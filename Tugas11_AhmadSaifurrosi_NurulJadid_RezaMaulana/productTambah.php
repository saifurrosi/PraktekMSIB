<?php
$obj_produk = new Produk();
$data_produk = $obj_produk->dataProduk();

?>
<form class="mt-4" action="controller/productController.php" method="POST">
    <div class="form-group row">
        <label for="text1" class="col-4 col-form-label">Kode</label>
        <div class="col-8">
            <input id="kode" name="kode" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="text2" class="col-4 col-form-label">Nama</label>
        <div class="col-8">
            <input id="nama" name="nama" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="text" class="col-4 col-form-label">Harga Jual</label>
        <div class="col-8">
            <input id="harga_jual" name="harga_jual" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="text3" class="col-4 col-form-label">Harga Beli</label>
        <div class="col-8">
            <input id="harga_beli" name="harga_beli" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="text4" class="col-4 col-form-label">Stok</label>
        <div class="col-8">
            <input id="stok" name="stok" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="text5" class="col-4 col-form-label">Minimal Stok</label>
        <div class="col-8">
            <input id="min_stok" name="min_stok" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="text6" class="col-4 col-form-label">Jenis Produk</label>
        <div class="col-8">
            <input id="jenis_produk_id" name="jenis_produk_id" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <div class="offset-4 col-8">
            <button name="proses" type="submit" value="simpan" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>