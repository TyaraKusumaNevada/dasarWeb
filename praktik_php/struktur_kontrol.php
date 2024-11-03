<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A<br>";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}


$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer." . '<br>';



$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

echo "Jumlah buah yang akan dipanen adalah: " . $jumlahBuah;

echo "<br>";
$skorUjian = [85, 92, 78, 96, 88]; 
$totalSkor = 0;
foreach ($skorUjian as $skor) {
    $totalSkor += $skor; 
}

echo "Total skor ujian adalah: " . $totalSkor . "<br>";

$nilaiSiswa = [85,92,58, 64,90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai){
    if ($nilai < 60){
        echo "Nilai : $nilai (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai : $nilai (Lulus) <br>";
}

echo "Ada seorang guru ingin menghitung total nilai dari 10 siswa dalam ujian matematika. Guru ini ingin mengabaikan dua nilai tertinggi dan dua nilai terendah.
      Bantu guru ini menghitung total nilai yang akan digunakan untuk menentukan nilai rata-rata setelah mengabaikan nilai tertinggi dan terendah. 
      Berikut daftar nilai dari 10 siswa (85, 92, 78, 64, 90, 75, 88, 79, 70, 96)<br>"; 

$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

sort($nilaiSiswa); // Mengurutkan dari yang terkecil ke yang terbesar

echo "Nilai siswa setelah diurutkan: <br>"; // nilai setelah diurutkan
foreach ($nilaiSiswa as $nilai) {
    echo $nilai . " ";
}
echo "<br>";

for ($i = 0; $i < 2; $i++) {
    array_shift($nilaiSiswa); // 2 nilai terendah di hapus
}

echo "Nilai siswa setelah menghapus dua terendah: <br>"; // Menampilkan nilai setelah menghapus dua nilai terendah
foreach ($nilaiSiswa as $nilai) {
    echo $nilai . " ";
}
echo "<br>";

for ($i = 0; $i < 2; $i++) {
    array_pop($nilaiSiswa); // 2 nilai tertinggi di hapus
}

echo "Nilai siswa setelah menghapus dua tertinggi: <br>"; // Menampilkan nilai setelah menghapus dua nilai tertinggi
foreach ($nilaiSiswa as $nilai) {
    echo $nilai . " ";
}
echo "<br>";

$totalNilai = array_sum($nilaiSiswa); //total nilai setelah 2 nilai tertinggi dan terendah di abaikan
$jumlahNilai = count($nilaiSiswa); // jumlah sisa nilai
$rataRataNilai = $totalNilai / $jumlahNilai; // rata- rata

echo "Rata-rata nilai setelah mengabaikan dua nilai tertinggi dan dua nilai terendah adalah: $rataRataNilai<br>"; // Menampilkan rata-rata nilai
echo "<br>";


echo "Seorang pelanggan ingin membeli sebuah produk dengan harga Rp 120.000. 
      Toko tersebut menawarkan diskon sebesar 20% untuk pembelian di atas Rp 100.000. 
      Bantu pelanggan ini untuk menghitung harga yang harus dibayar setelah mendapatkan diskon.<br>";
    
$hargaProduk = 120000;
$diskonPersen = 20; 

if ($hargaProduk > 100000) { // apakah harga produk di atas Rp 100.000
    $jumlahDiskon = ($diskonPersen / 100) * $hargaProduk;
    $hargaSetelahDiskon = $hargaProduk - $jumlahDiskon;
} else {
    $hargaSetelahDiskon = $hargaProduk; // Jika barang tidak mendapatkan diskon, harga tetap
}

echo "Harga produk sebelum diskon: Rp " . $hargaProduk . "<br>";
echo "Harga yang harus dibayar setelah diskon: Rp " . $hargaSetelahDiskon . "<br>";
echo "<br>";

echo "Seorang pemain game ingin menghitung total skor mereka dalam permainan. 
      Mereka mendapatkan skor berdasarkan poin yang mereka kumpulkan. 
      Jika mereka memiliki lebih dari 500 poin, maka mereka akan mendapatkan hadiah tambahan. 
      Buat tampilan baris pertama “Total skor pemain adalah: (poin)”. 
      Dan baris kedua “Apakah pemain mendapatkan hadiah tambahan? (YA/TIDAK)”<br>";
echo "------------------------------------------------------<br>";

$totalPoin = 650; // Total poin yang dikumpulkan pemain

echo "Total skor pemain adalah: $totalPoin<br>";

// Mengecek apakah pemain mendapatkan hadiah tambahan
if ($totalPoin > 500) {
    $hadiah = "YA"; 
} else {
    $hadiah = "TIDAK"; 
}

echo "Apakah pemain mendapatkan hadiah tambahan? $hadiah<br>";

?>
?>



