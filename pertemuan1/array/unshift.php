<?php
$laptop = ["Asus","Lenovo","Dell","Axioo"];

//Menambahkan elemen diawal
array_unshift($laptop, "HP", "Acer");

//hasil
foreach ($laptop as $p){
    echo "<br>" .$p;
}
?>