<?php
$mahasiswa = [
	["nama"     => "Tauhid Izzan", 
	"nim"       => "21.51.0017", 
	"Jurusan"   => "Sistem Informasi", 
	"email"     => "tauhid_21510017@stimata.ac.id",
	"gambar"    => "gambar1.jpg"],
	
    ["nama"     =>  "Abdullah", 
	"nim"       =>  "12345678", 
	"Jurusan"   =>  "Teknologi Informasi", 
	"email"     => "tes@email.com",
	"gambar"    => "gambar2.jpg"]
];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Data Mahasiswa</title>
</head>
<body>
	<h1>Data Mahasiswa</h1>
	<?php foreach ($mahasiswa as $mhs): ?>
	<ul>
		<li>
			<img src="gambar/<?= $mhs["gambar"]; ?> ">
		</li>
		<li>Nama	: <?= $mhs["nama"]; ?></li>
		<li>NIM		: <?= $mhs["nim"]; ?></li>
		<li>Jurusan	: <?= $mhs["Jurusan"]; ?></li>
		<li>Email	: <?= $mhs["email"]; ?></li>
	</ul>
	<?php endforeach; ?>	
</body>
</html>