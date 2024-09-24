<?php

$hbd = "Selamat Ulang Tahun yang ke-17-++";
preg_match_all('/[^ a-z A-Z 0-9]/', $hbd, $simK); //adalah fungsi untuk mencocokan pola regex dengan nilai dari hbd
if ($simK[0]) {  //untuk mengecek apakah file sim k tidak kosong
    $simbolArray = $simK[0]; //jika benar akan menympan nilai simk kedalam var simbol array  $simbolArray akan berisi array dari semua simbol atau karakter yang ditemukan oleh pregmatchall sesuai dengan pola regex
    echo "Teks: $hbd"; //menampilkan teks nilai hbd
    echo "<br>"; 
    echo "Simbol yang ditemukan: ";
    foreach ($simbolArray as $simbol) {
        echo "$simbol";
    }

} else {
    echo "Teks: $hbd";
    echo "<br>";
    echo "Tidak terdapat simbol pada kalimat";
}

?>
