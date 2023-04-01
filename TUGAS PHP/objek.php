<?php
require_once 'Lingkaran.php';
require_once 'PersegiPanjang.php';
require_once 'SegiTiga.php';

$bd_pertama = new Lingkaran(30);
$bd_kedua = new PersegiPanjang(10,5);
$bd_ketiga = new SegiTiga(9,6,5);
$bd_keempat = new Lingkaran(80);
$bd_kelima = new SegiTiga(9,5,10);
$bd_keenam = new SegiTiga(2,4,7);

$_bangunDatar = [$bd_pertama,$bd_kedua,$bd_ketiga,$bd_keempat,$bd_kelima,$bd_keenam];
$_judul = ['No', 'Namabangunan', 'Keliling','Luas'];
?>

<table border="1" bgcolor="blue" cellpadding="7px" width="100%">
    <thead>
        <tr>
            <?php 
            foreach ($_judul as $j){  
            ?>
            <th><?= $j ?></th>
            <?php } ?>
         </tr>
    </thead>
    <tbody bgcolor="white">
<?php
$no = 1;
foreach ($_bangunDatar as $bdtr){
?>
<tr>
<td><?= $no ?></td>
<td><?= $bdtr->namaBidang();?> </td>
<td><?= $bdtr->kelilingBidang();?> CM</td>
<td><?= $bdtr->luasBidang();?> CM<sup>2</sup></td>
</tr>
<?php
$no++;
}
?>
</tbody>
</table>