<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menghitung rumus dari bangun datar jajar genjang </title>
</head>
<body>
    <fieldset>
        <legend>form dari jajar genjang</legend>
    <form method="post">
        <table>
            <tr>
                <td>sisi alas</td>
                <td>
                    <input type="text" name="alas" require>
                </td>
            </tr>
            <tr>
                <td>sisi miring</td>
                <td>
                    <input type="text" name="miring" require>
                </td>
            </tr>
            <tr>
                <td>tinggi</td>
                <td>
                    <input type="text" name="tinggi" require>
                </td>
            
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit" value="hitung">
                </td>
            </tr>
        </table>
    </form>
    </fieldset>

    
        <?php 
        $alas = $_POST['alas'];
        $miring = $_POST['miring'];
        $tinggi = $_POST['tinggi'];
        $luas = $alas * $tinggi;
        $keliling = 2 * ($alas * $miring);
        $sisi = ($keliling / 2) - $alas;
        ?>
    <fieldset>
    <table>
        <legend>hasil dari bagun datar genjang</legend>
        <table>
        <tr>
            <th>luas JG</th>
            <th>keliling JG</th>
            <th>sisi miring</th>
        </tr>
        <tr>
            <td><?php echo "$alas * $tinggi = $luas"; ?></td>
            <td><?php echo "2 * ($alas * $miring = $keliling"; ?></td>
            <td><?php echo "($keliling /2) - $alas = $sisi"; ?></td>
        </tr>
        </table>
    </table>
    </fieldset>
</body>
</html>