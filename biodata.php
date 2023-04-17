<!DOCTYPE html>
<html>
<head>
	<title>Biodata Mahasiswa</title>
</head>
<body>
	<h1>Biodata Mahasiswa</h1>

	<?php
	// Deklarasi variabel dan isi dengan data mahasiswa
	$nama = "Imtihana Khofifah";
	$nim = "21082010018";
	$program_studi = "Sistem Imformasi";
	$semester = 4;
	$alamat = "Jl. Medokan Asri Barat ";
	$no_telp = "081234567890";
	$email = "khffhhana@gmail.com";

	// Tampilkan biodata mahasiswa
	echo "<p><b>Nama:</b> " . $nama . "</p>";
	echo "<p><b>NIM:</b> " . $nim . "</p>";
	echo "<p><b>Program Studi:</b> " . $program_studi . "</p>";
	echo "<p><b>Semester:</b> " . $semester . "</p>";
	echo "<p><b>Alamat:</b> " . $alamat . "</p>";
	echo "<p><b>No. Telp:</b> " . $no_telp . "</p>";
	echo "<p><b>Email:</b> " . $email . "</p>";
	?>
</body>
</html>