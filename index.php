<?php

$nilai = ["80", "78", "72", "84", "92", "88"];
$newnilai = [];
for ($i=0; $i < count($nilai); $i++){
    array_push($newnilai, $nilai[$i]);
}
echo 'NIlai Siswa =' . implode(", ",$nilai). "<br>";
echo 'Nilai tertinggi = ' . (max($nilai)). "<br>";
echo 'Nilai terendah = ' . (min($nilai)). "<br>";
asort ($newnilai). "<br>";
echo 'Urutan dari yang terkecil = ' .implode(",",$newnilai);
arsort ($newnilai). "<br>";
echo "<br>";
echo 'Urutan dari yang terbesar = '.implode(",",$newnilai). "<br>";

//rata rata
echo "Apabila dibulatkan, rata-rata menjadi = " .round(array_sum($nilai)/count($nilai)).
"<br>";
array_splice($nilai, 2, 1, 75);
echo "Setelah melakukan perbaikan, nilai 72 menjadi 75, jadi nilai sekarang = " . implode (",", $nilai)."<br>";
arsort ($nilai);
echo "Sehingga sekarang, jika di urutkan dari yang terbesar menjadi = ". implode(",", $nilai).
"<br/>"





?>