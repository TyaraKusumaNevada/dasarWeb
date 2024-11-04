<?php
// Lokasi penyimpanan file yang diunggah
$targetDirectory = "images/";

// Periksa apakah direktori penyimpanan ada, jika tidak maka buat
if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

// Periksa apakah ada file yang diunggah
if (isset($_FILES['images']['name'][0]) && $_FILES['images']['name'][0] != "") {
    $totalFiles = count($_FILES['images']['name']);
   
    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = basename($_FILES['images']['name'][$i]); 
        $targetFile = $targetDirectory . $fileName;
        $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

      
        $allowedTypes = array('jpg', 'jpeg', 'png', 'gif');
        if (in_array($fileType, $allowedTypes)) {
            
            if (move_uploaded_file($_FILES['images']['tmp_name'][$i], $targetFile)) {
                echo "Gambar $fileName berhasil diunggah.<br>";
            } else {
                echo "Gagal mengunggah gambar $fileName.<br>";
            }
        } else {
            echo "Format file $fileName tidak diizinkan.<br>";
        }
    }
} else {
    echo "Tidak ada gambar yang diunggah.";
}
?>
