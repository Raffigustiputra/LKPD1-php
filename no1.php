<?php

$teks ="Selamat ulang tahun ke - 17!";

// mencari semua simbol (karakter yang bukan huruf atau angka)
preg_match_all('/[^a-zA-Z0-9\s]/', $teks, $matches);

if (count($matches[0]) > 0) {
    
    // menghasilkan duplikasi simbol
    $uniqueSymbols = array_unique($matches[0]);
    echo "Karakter yang terdapat pada kalimat : " . implode(' , ', $uniqueSymbols);
} else {
    echo "Tidak terdapat simbol pada kalimat.";
}
?>