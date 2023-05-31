<?php

$anggotaKelompok = [
    ["nama" => "Rasyid", "nim" => "505791"],
    ["nama" => "Yodhim", "nim" => "50982"],
    ["nama" => "Aziz", "nim" => "49821"],
    ["nama" => "Nopal", "nim" => "57892"],
    ["nama" => "Bima", "nim" => "47888"],
];

function tentukanPeran($nim)
{
    $angkaTerakhirNIM = intval(substr($nim, -1));

    if ($angkaTerakhirNIM % 2 == 0) {
        return "Back-end Developer";
    } else {
        return "Front-end Developer";
    }
}

echo "Tugas Kerja Kelompok: <br>";
foreach ($anggotaKelompok as $anggota) {
    $nama = $anggota["nama"];
    $nim = $anggota["nim"];

    if($nim == 505791){
        echo "- Nama: $nama | NIM: $nim | Peran: Project Manager <br>";
    }else{
        $peran = tentukanPeran($nim);
        echo "- Nama: $nama | NIM: $nim | Peran: $peran <br>";
    }
    
    
}
?>
