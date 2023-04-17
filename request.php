<!DOCTYPE html>
<html>
<body>

<?php
  // Memeriksa apakah variabel 'nama' telah dikirim melalui metode GET
  if (isset($_REQUEST["nama"])) {
    // Mengambil nilai variabel 'nama'
    $nama = $_REQUEST["nama"];
    // Menampilkan nilai variabel 'nama'
    echo "Halo, " . $nama . "!";
  }
?>

</body>
</html>