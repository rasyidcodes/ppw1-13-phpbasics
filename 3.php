<?php

$namaDepan = "Rasyid";

$listKota = [
    "Lampung",
    "Riau",
    "Jambi",
    "Bengkulu",
    "Makassar",
    "Kendari",
    "Gorontalo",
    "Samarinda",
    "Papua",
    "Nusa Tenggara Barat"
];

$namaArray = str_split($namaDepan);


$penempatanKKN = "Jawa Timur"; 

foreach ($namaArray as $huruf) {
    foreach ($listKota as $kota) {
        if (strtoupper($huruf) === strtoupper(substr($kota, 0, 1))) {
            $penempatanKKN = $kota;
            break 2; 
        }
    }
}

echo "Penempatan KKN: $penempatanKKN";
?>
