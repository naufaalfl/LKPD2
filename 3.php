<?php
$angka1 = [90];
$angka2 = [1, 2, 3, 5, 6, 9, 10, 15, 18,];

foreach ($angka2 as $a2) { // me loop array dalam angka2   a2 akan menampung nilai setiap elemen angka 2
    foreach ($angka1 as $a1) {
        $hasil = $a1 / $a2;
        echo "$a1 : $a2 = $hasil";
       

    }
    echo "<br>";
}
?>