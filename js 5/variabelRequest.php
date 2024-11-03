<html>
  <body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
      Name: <input type="text" name="fname">
      <input type="submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Mengambil nilai dari input form
      $name = $_REQUEST['fname'];
      
      // Memeriksa apakah input kosong
      if (empty($name)) {
        echo "Name is empty";
      } else {
        echo $name;
      }
    }
    ?>
  </body>
</html>
