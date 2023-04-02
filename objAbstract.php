<br><br>
<center>
<table border=1>
    <thead></thead>
    <tbody>
    <?php
        require_once 'Lingkaran.php';
        require_once 'persegiPanjang.php';
        require_once 'segitiga.php';

        $l1 = new Lingkaran(16);
        $p1 = new persegiPanjang (50,24);
        $s1 = new Segitiga(8,4,4);

        $ar_data = [$l1, $p1, $s1];

        foreach ($ar_data as $data){
           ?> <tr>
                <td colspan=2 width=25% align='center' bgcolor=159895> 
                    <?= $data->namaBidang(). '<br>'?>
                </td>
              </tr>
              <tr align='center' bgcolor=FEFAE0>
                <td>Luas</td>
                <td><?= $data->LuasBidang() ?> </td>
              </tr>
              <tr align='center' bgcolor=FEFAE0>
                <td>Keliling</td>
                <td><?= $data->kelilingBidang() ?> </td>
              </tr>
        <?php
        } ?>

    </tbody>
</table>
</center>