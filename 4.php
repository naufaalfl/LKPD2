<?php 
for ($baris = 1; $baris <= 4; $baris++) { //for yang mengatur baris dari 1 hingga 4. Variabel $baris digunakan untuk menghitung jumlah baris yang akan dicetak.
    for ($kolom = 1; $kolom <= 8; $kolom++) { //for yang mengatur kolom dari 1 hingga 8. Variabel $kolom digunakan untuk menghitung jumlah kolom dalam setiap baris.
        echo "*";//Di dalam loop kolom, karakter * dicetak untuk setiap iterasi. Ini akan mencetak 8 karakter * pada setiap baris.
    }
    echo "<br>";
}

echo "<br>";

for ($baris = 1; $baris <= 4; $baris++) {
    for ($kolom = 1; $kolom <= 8; $kolom++) {
        echo "*";
    }
    echo "<br>";
}
echo "<hr>"
?>