<?php
$m1 = ['nim' => '01111021', 'nama' => 'rosi', 'nilai' => 80];
$m2 = ['nim' => '01111021', 'nama' => 'Andi', 'nilai' => 70];
$m3 = ['nim' => '01111021', 'nama' => 'Ana', 'nilai' => 75];
$m4 = ['nim' => '01111021', 'nama' => 'Ani', 'nilai' => 60];
$m5 = ['nim' => '01111021', 'nama' => 'Ina', 'nilai' => 88];
$m6 = ['nim' => '01111021', 'nama' => 'Angga', 'nilai' => 50];
$m7 = ['nim' => '01111021', 'nama' => 'fikri', 'nilai' => 55];
$m8 = ['nim' => '01111021', 'nama' => 'Ama', 'nilai' => 95];


$ar_judul = ['No', 'NIM', 'Nama', 'Nilai', 'Keterangan', 'Grade', 'Predikat'];

$mahasiswa = [$m1, $m2, $m3, $m4, $m5, $m6, $m7, $m8,];

//agregate function in array
echo'<br>';
$jumlahsiswa = count($mahasiswa);
$jml_nilai = array_column($mahasiswa,'nilai');
$total_nilai = array_sum($jml_nilai);
$max = max($jml_nilai);
$min = min($jml_nilai);
$rata2 = $total_nilai / $jumlahsiswa;
//keterangna
$keterangan = [
    'jumlah siswa'=>$jumlahsiswa,
    'Total nilai'=>$total_nilai,
    'nilai terendah'=>$min,
    'nilai terbesar'=>$max,
    'Rata2'=>$rata2];

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <h3 align="center"><strong><u>Daftar Nilai Mahasiswa</u></strong></h3><br><br>
    <table class="table table-striped">
        <thead>
            <tr>
                <?php
                foreach ($ar_judul as $jdl) {
                ?>
                    <th><?= $jdl ?></th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($mahasiswa as $mhs) {

                $status = ($mhs['nilai'] >= 60) ? 'lulus' : ' tidak lulus';

                if ($mhs['nilai'] >= 80 && $mhs['nilai'] < 100) $grade = 'A';
                else if ($mhs['nilai'] >= 60) $grade = 'B';
                else if ($mhs['nilai'] >= 40) $grade = 'C';
                else if ($mhs['nilai'] >= 20) $grade = 'D';
                else if ($mhs['nilai'] >= 5) $grade = 'E';
                else $grade = '';

                switch ($grade) {
                    case "A":
                        $predikat = "Memuaskan";
                        break;
                    case "B":
                        $predikat = "Bagus";
                        break;
                    case "C":
                        $predikat = "cukup";
                        break;
                    case "D":
                        $predikat = "buruk";
                        break;
                    default:
                        $predikat = "jelek";
                        break;
                }
            ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $mhs['nim'] ?></td>
                    <td><?= $mhs['nama'] ?></td>
                    <td><?= $mhs['nilai'] ?></td>
                    <td><?= $status ?></td>
                    <td><?= $grade ?></td>
                    <td><?= $predikat ?></td>
                    

                </tr>
            <?php $no++; } ?>
        </tbody>
        <tfoot>
            <?php
            foreach ($keterangan as $ket => $hasil) {
            
            ?>
                <tr>
                    <th colspan="7"><?= $ket ?></th>
                    <th><?= $hasil ?></th>
                </tr>
            <?php } ?>
        </tfoot>
    </table>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>
