<center>
<table border=1>
    <thead></thead>
    <tbody>
    <?php
        require_once 'Lingkaran.php';
        require_once 'persegiPanjang.php';
        require_once 'segitiga.php';

        $l1 = new Lingkaran(78);
        $p1 = new persegiPanjang (14,34);
        $s1 = new Segitiga(3,4,5);

        $ar_data = [$l1, $p1, $s1];

        foreach ($ar_data as $data){
           ?> <tr>
                <td colspan=2 width=30% align='center'> <?= $data->namaBidang(). '<br>'?></td>
              </tr>
              <tr align='center'>
                <td>Luas</td>
                <td><?= $data->LuasBidang() ?> </td>
              </tr>
              <tr align='center'>
                <td>Keliling</td>
                <td><?= $data->kelilingBidang() ?> </td>
              </tr>
        <?php
        } ?>

    </tbody>
</table>
</center>