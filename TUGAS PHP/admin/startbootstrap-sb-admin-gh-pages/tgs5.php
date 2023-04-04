<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS 5 PHP</title>
</head>
<body>
<?php
$_prodi = ['SI' => 'Sistem Informasi', 'TI' => 'Teknik Informatika', 'ILKOM' => 'Ilmu Komputer', 'TE' => 'Teknik Elektro'];
$_skill = ['HTML & CSS' => 10, 'Javascript' => 20, 'RWD Bootsap' => 20, 'PHP' => 20, 'MY SQL' => 20, 'Laravel' => 30, 'Python' => 30];
$_domisili = ['Jakarta', 'Bogor', 'Bandung', 'Bali', 'Bekasi'];

?>

<fieldset style="background-color:silver;">
    <h2 align="center"> Form Daftar Registrasi Kelompok Belajar</h2>
<table>
    <thead>
        <tr>
            <th>Form Registrasi</th>
        </tr>
    </thead>
    <tbody>
        <form method="POST">
            <tr>
                <td>NIM</td>

                <td> 
                    <input type="number" name="nim" >
                </td>
            </tr>
            <tr>
                <td>Nama  </td>
                <td> 
                    <input type="text" name="nama" >
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin  </td>
                <td> 
                    <input type="radio" name="jk" value="L" >Laki-Laki &nbsp;
                    <input type="radio" name="jk" value="P" >Perempuan 
                </td>
            </tr>
            <tr>
                <td>Program Studi </td>
                <td> 
                    <select name="prodi">
                        <?php 

                        foreach($_prodi as $prodi => $p){
                            ?>
                            <option value="<?= $prodi ?>"><?= $p ?></option>
                       <?php } ?>
                        </select>
                </td>
            </tr>
            <tr>
                <td>Skill Programming  </td>
                <td> 
                    <?php 
                    foreach ($_skill as $skill => $s){
                        ?>
                    <input type="checkbox" name="skill[]" value="<?= $skill ?>" ><?= $skill ?>
                        
                    <?php } ?>
                </td>
            </tr>
            <tr>
                <td>Domisili  </td>
                <td> 
                    <select name="domisili">
                        <?php 

                        foreach($_domisili as $d){
                            ?>
                            <option value="<?= $d ?>"><?= $d ?></option>
                       <?php } ?>
                        </select>
                </td>
            </tr>
            <tr>
                <td>Email  </td>
                <td> 
                    <input type="email" name="email" >
                </td>
            </tr>
            <tfoot>
                <tr>
                    <th colspan="2">
                        <button name="proses">Submit</button>
                    </th>
                </tr>
            </tfoot>
    </table>
            

</fieldset>
<?php 
error_reporting(0);
if(isset($_POST['proses'])){
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $prodi = $_POST['prodi'];
    $skill = $_POST['skill'];
    $domisili = $_POST['domisili'];
    $email = $_POST['email'];
}

$score = 0;
foreach($skill as $jumlah_score){
    if (isset ($_skill[$jumlah_score])) {
        $score += $_skill[$jumlah_score];
    }
}


function kategori_skill ($score){
    if ($score > 100 && $score <=150){
        return "Sangat Baik";
    }
    elseif ($score >60 && $score <=100){
        return "Baik";
    }
    elseif ($score >40 && $score <=60){
        return "Cukup";
    }
    elseif ($score >0 && $score <=40){
        return "Kurang";
    }
    elseif ($score = 0){
        return "Tidak Memadai";
    }
    else{
        return "Tidak Ada Nilai";
    }
    
}
?>

<fieldset>
    <table>
        <tr>
            <td>NIM</td>
            <td>:</td>
            <td><?= $nim ?></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?= $nama ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><?= $jk ?></td>
        </tr>
        <tr>
            <td>Program Studi</td>
            <td>:</td>
            <td><?= $prodi ?></td>
        </tr>
        <tr>
            <td>Skill</td>
            <td>:</td>
            <td><?php 
foreach($skill as $s){ ?>
<?= $s ?> ,
<?php } ?></td>
        </tr>
        <tr>
            <td>Skor Skill</td>
            <td>:</td>
            <td><?= $score ?></td>
        </tr>
        <tr>
            <?php
            $k_skill = kategori_skill($score);
            ?>
            <td>Kategori Skill</td>
            <td>:</td>
            <td><?= $k_skill ?></td>
        </tr>
        <tr>
            <td>Domisili</td>
            <td>:</td>
            <td><?= $domisili ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><?= $email ?></td>
        </tr>
    </table>
</fieldset>
</body>
</html>