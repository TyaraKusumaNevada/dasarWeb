<?php
function perkenalan(){
    echo "Assalamualaikum, ";
    echo "Perkenalkan, nama saya Elok<br/>"; // Tulis sesuai nama kalian 
    echo "Senang berkenalan dengan anda<br/>";
}

//memanggil fungsi yang sudah dibuat
perkenalan("Hamdana","Halo");

echo "<hr>";

$saya = "Elok";
$ucapanSalam = "Selamat pagi";

//memanggil lagi tanpa engisi parameter salam
perkenalan($saya);    


?>

<?php
//pembuat fungsi
function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang -$thn_lahir;
    return $umur;
}

echo "Umur saya adalah  " . hitungUmur(2006, 2023) . " tahun";
//isi sesuaai dengan th lahir kalian
?>


<?php
//membuat fungsi
function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

function perkenalan ($nama, $salam="Assalamualaikum") {
    echo $salam.",";
    echo "Perkenalkan, nama saya ".$nama."<br/>";

    //memanggil fungsi lain
    echo "Saya berusia ". hitungUmur (1988, 2023)." tahun<br/>"; 
    echo "Senang berkenalan dengan anda<br/>";
}

//memanggil fungsi perkenalan
    perkenalan ("Elok");
?>