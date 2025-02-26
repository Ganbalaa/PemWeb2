<?php
$rokok = ["Samsu", "Esse", "Kretek", "Marlong", "Garpit"];

//Menghapus elemen pertama
$awal = array_shift($rokok);
//hasil
echo "rokok yang dihapus :  $awal";
echo "array setelah shift <br>";
foreach ($rokok as $r){
    echo"$r <br>";
}
?>