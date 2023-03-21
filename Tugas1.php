<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BANGUN DATAR JAJAR GENJANG</title>
</head>
<body>
    <br><br>
    <form method = 'POST'>
        <table align='center' border=1 width=32.7% bgcolor='dodger'>
            <tr>
                <td align='center'><h3>Bangun Datar Jajar Genjang</h3></td>
            </tr>
        <table align='center' cellpadding=10% border=1>
            <tr>
                <td>alas</td>
                <td><input type='number' name='alas' require></td>
                <td>tinggi</td>
                <td><input type='number' name='tinggi' require></td>
            </tr>
            <tr>
                <td>sisi miring</td>
                <td><input type='number' name='sisimiring' require></td>
            </tr>
            <table align='center' border=1 cellpadding=7% width=32.7% bgcolor='dodger'>
            <tr>
                <td align='center'>
                    <input type='submit' name='luas' value='Luas'>
                    <input type='submit' name='kel' value='Keliling'>
                </td>
            </tr>
            </table>
            </table>
        </table>
        <h5 align='center'>* LUAS = alas x tinggi
            <br>*KELILING = 2 (alas + sisi miring)</h5>

    </form>

    <br>
    <fieldset>
        <center>
            <?php
                if(isset($_POST['luas'])){
                    $alas = $_POST['alas'];
                    $tinggi = $_POST['tinggi'];

                    $luas_jajar_genjang = $alas * $tinggi;
                    echo 'Hasil Perhitungan Luas Jajar Genjang ';
                    echo '<br>Diketahui : ';
                    echo '<br>Alas : '.$alas.' cm';
                    echo '<br>Tinggi : '.$tinggi.' cm';
                    echo '<br>Luas Jajar Genjang adalah : '.$luas_jajar_genjang.' cm';

                }

                if(isset($_POST['kel'])){
                    $alas = $_POST['alas'];
                    $sisimiring = $_POST['sisimiring'];

                    $kel_jajar_genjang = 2 * ($alas + $sisimiring);
                    echo 'Hasil Perhitungan Luas Jajar Genjang';
                    echo '<br>Diketahui : ';
                    echo '<br>Alas : '.$alas.' cm';
                    echo '<br>Tinggi : '.$sisimiring.' cm';
                    echo '<br>Keliling Jajar Genjang adalah : '.$kel_jajar_genjang.' cm';

                }
            ?>
    </center>
    </fieldset>
</body>
</html>