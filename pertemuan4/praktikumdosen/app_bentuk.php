<?php
    require_once 'lingkaran.php';

    $lingkaran1 = new Lingkaran(8.4);
    $lingkaran2 = new Lingkaran(14);

    echo 'Nilai PHI adalah '. Lingkaran::PHI;
    echo '<br> Jari-jari lingkaran 1 adalah '. $lingkaran1->jari;
    echo '<br> Luas lingkaran 1 adalah '.$lingkaran1->getLuas();
    echo '<br> Keliling lingkaran 1 adalah '.$lingkaran1->getKeliling();
    echo '<hr>';
    $lingkaran1->cetak();
    echo '<br>';

?>