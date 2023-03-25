<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <h3>form input gaji karyawan </h3>
        <label>jabatan</label>
        <select name="jabatan">
            <option>-----pilih jabatan anda-----</option>
            <option value="manager">manager</option>
            <option value="asisten">asisten</option>
            <option value="kabang">kabang</option>
        </select><br><br>
        <label>status</label>
        <select name="status">
                <option>------pilih status anda------</option>
                <option value="sudah menikah">sudah menikah</option>
                <option value="belum meikah">belum menikah</option>
            </option>
        </select><br><br>
        <label>Jumlah Anak</label>
        <input type="text" name="anak" placeholder="masukan jumlah anak anda"><br><br>
        <label>Agama</label>
        <select name="agama" >
        <option>------pilih Agama anda------</option>
                <option value="kristen">kristen</option>
                <option value="islam">islam</option>
        </select><br><br>
        <button name="proses" type="submit">Hitung</button>
    </form>
    <?php 
    error_reporting(0);
    $nama =$_POST['nama'];
    $jabatan =$_POST['jabatan'];
    $status =$_POST['status'];
    $agama =$_POST['agama'];
    $tombol =$_POST['proses'];

    switch($jabatan){
        case 'manager': $gapok =2000000 * 0.2;break;
        case 'asisten': $gapok =15000000 * 0.2;break;
        case 'kabak': $gapok =1000000 * 0.2;break;
        default:$gapok="";
    }
    switch($jabatan){
        case 'manager':
            $gaji = 2000000;
            break;
        case 'asisten':
            $gaji = 15000000;
            break;
        case 'staff';
        $gaji = 4000000;
        break;
        default:
        $gaji = 0;
    }
    $tunjab = $gaji * 0.2;
    if($status == 'menikah' && $anak <= 2){
        $tunkel = $gaji * 0.05;
    }
    else if($status == 'menikah' && $anak >=3 && $anak <=5){
        $tunkel = $gaji * 0.1;
    }
    else $tunkel= 0;

    $gator = $gaji + $tunkel;
    
    if(isset($tombol)){
    ?>
    nama karyawan : <?= $nama ?>
    <br>jabatan : <?= $jabatan ?>
    <br>status : <?= $status ?>
    <br>jumlah anak : <?= $anak ?>
    <br>agama : <?= $agama ?>
    <br>gaji pokok : <?= $gapok ?>
    <br>gaji kotor : <?= $gator ?>

    <?php } ?>
</body>
</html>