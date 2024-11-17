<?php
$nilai = 85;
$gelar = "Tidak Ada Gelar";

if ($nilai >= 80) {
    $gelar = "Gelar Cum Laude";
} elseif ($nilai >= 70) {
    $gelar = "Gelar Lulus";
} else {
    $gelar = "Gagal Mendapatkan Gelar";
}

echo "Nilai: $nilai<br>";
echo "Status: $gelar";
?>