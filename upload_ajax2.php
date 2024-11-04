<?php
if (isset($_FILES['files'])) {
    $errors = array();
    $extensions = array("jpeg", "jpg", "png", "gif");

    foreach ($_FILES['files']['tmp_name'] as $key => $tmp_name) {
        $file_name = $_FILES['files']['name'][$key];
        $file_size = $_FILES['files']['size'][$key];
        $file_tmp = $_FILES['files']['tmp_name'][$key];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        // Cek ekstensi file
        if (in_array($file_ext, $extensions) === false) {
            $errors[] = "Ekstensi file $file_name tidak diizinkan. Hanya JPG, JPEG, PNG, dan GIF yang diperbolehkan.";
        }

        // Cek ukuran file
        if ($file_size > 2097152) {
            $errors[] = "Ukuran file $file_name tidak boleh lebih dari 2 MB.";
        }

        // Jika tidak ada kesalahan, lakukan upload
        if (empty($errors)) {
            if (!move_uploaded_file($file_tmp, "images/" . $file_name)) {
                $errors[] = "Gagal mengunggah file $file_name.";
            }
        }
    }

    // Tampilkan pesan kesalahan jika ada
    if (!empty($errors)) {
        echo implode("<br>", $errors);
    } else {
        echo "Semua file berhasil diunggah.";
    }
} else {
    echo "Tidak ada file yang diunggah.";
}
?>
