<?php
// Periksa apakah data POST tersedia sebelum memprosesnya
if (isset($_POST['nama']) && isset($_POST['email']) && isset($_POST['password'])) {
    // Ambil data dari request POST
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Array untuk menyimpan pesan error
    $errors = [];

    // Validasi di server-side
    if (empty($nama)) {
        $errors[] = "Nama harus diisi.";
    }

    if (empty($email)) {
        $errors[] = "Email harus diisi.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format email tidak valid.";
    }

    if (strlen($password) < 8) {
        $errors[] = "Password harus minimal 8 karakter.";
    }

    // Jika ada error, kirim pesan error
    if (!empty($errors)) {
        echo implode(", ", $errors);
    } else {
        // Jika validasi berhasil
        echo "Validasi berhasil. Nama: $nama, Email: $email.";
    }
} else {
 
}
?>


<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input dengan Validasi dan AJAX</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>
    <h1>Form Input dengan Validasi dan AJAX</h1>
    <form id="myForm" method="post">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <span id="password-error" style="color: red;"></span><br>

        <input type="submit" value="Submit">
    </form>

    <script>
        $(document).ready(function() {
            $("#myForm").submit(function(event) {
                event.preventDefault(); // Mencegah pengiriman form normal

                var nama = $("#nama").val();
                var email = $("#email").val();
                var password = $("#password").val();
                var valid = true;

                // Validasi input nama
                if (nama === "") {
                    $("#nama-error").text("Nama harus diisi.");
                    valid = false;
                } else {
                    $("#nama-error").text("");
                }

                // Validasi input email
                if (email === "") {
                    $("#email-error").text("Email harus diisi.");
                    valid = false;
                } else {
                    $("#email-error").text("");
                }

                // Validasi password (minimal 8 karakter)
                if (password.length < 8) {
                    $("#password-error").text("Password harus minimal 8 karakter.");
                    valid = false;
                } else {
                    $("#password-error").text("");
                }

                // Jika validasi berhasil
                if (valid) {
                    $.ajax({
                        url: "proses_validasi.php",
                        type: "POST",
                        data: { 
                            nama: nama, 
                            email: email, 
                            password: password 
                        },
                        success: function(response) {
                            alert("Data berhasil dikirim: " + response);
                        },
                        error: function(xhr, status, error) {
                            var errorMessage = xhr.status + ': ' + xhr.statusText;
                            alert('Error - ' + errorMessage);
                        }
                    });

                    });
                }
            });
        });
    </script>
</body>
</html>

