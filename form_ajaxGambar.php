<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unggah File Gambar</title>
</head>
<body>
    <form id="upload-form" action="upload_ajax2.php" method="post" enctype="multipart/form-data">
        <input type="file" name="files[]" id="files" accept="image/*" multiple>
        <input type="submit" name="submit" value="Unggah">
    </form>
    <div id="status"></div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="upload.js"></script>
</body>
</html>

