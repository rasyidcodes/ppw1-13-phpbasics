<?php
$today = date("d");
$nama = "Rasyid Kusnady"; 
$jumlahHuruf = strlen($nama);

if ($jumlahHuruf == $today - 2) {
    echo "Berhasil";
} elseif ($jumlahHuruf < $today) {
    echo "Sedikit lagi";
} else {
    echo "Coba lagi";
}
?>