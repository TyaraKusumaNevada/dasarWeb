<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil Tambah: " . $hasilTambah . "<br>";
echo "Hasil Kurang: " . $hasilKurang . "<br>";
echo "Hasil Kali: " . $hasilKali . "<br>";
echo "Hasil Bagi: " . $hasilBagi . "<br>";
echo "Sisa Bagi: " . $sisaBagi . "<br>";
echo "Pangkat: " . $pangkat . "<br>";


$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Hasil Sama: " . ($hasilSama ? "true" : "false") . "<br>";
echo "Hasil Tidak Sama: " . ($hasilTidakSama ? "true" : "false") . "<br>";
echo "Hasil Lebih Kecil: " . ($hasilLebihKecil ? "true" : "false") . "<br>";
echo "Hasil Lebih Besar: " . ($hasilLebihBesar ? "true" : "false") . "<br>";
echo "Hasil Lebih Kecil Sama: " . ($hasilLebihKecilSama ? "true" : "false") . "<br>";
echo "Hasil Lebih Besar Sama: " . ($hasilLebihBesarSama ? "true" : "false") . "<br>";


$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Hasil AND: " . ($hasilAnd ? "true" : "false") . "<br>";
echo "Hasil OR: " . ($hasilOr ? "true" : "false") . "<br>";
echo "Hasil NOT A: " . ($hasilNotA ? "true" : "false") . "<br>";
echo "Hasil NOT B: " . ($hasilNotB ? "true" : "false") . "<br>";



$a += $b;
echo "Hasil A += B: " . $a . "<br>";

$a -= $b;
$a -= $b;
echo "Hasil A -= B: " . $a . "<br>";

$a *= $b;
echo "Hasil A *= B: " . $a . "<br>";

$a /= $b;
echo "Hasil A /= B: " . $a . "<br>";

$a %= $b;
echo "Hasil A %= B: " . $a . "<br>";


$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Hasil A dan B (Identik): " . ($hasilIdentik ? "true" : "false") . "<br>";
echo "Hasil A dan B (Tidak Identik): " . ($hasilTidakIdentik ? "true" : "false") . "<br>";

?>
