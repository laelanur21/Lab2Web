<!DOCTYPE html>
<html>
<head>
	<title>Program PHP Sederhana</title>
</head>
<body>
	<h1>Form Input Data</h1>
	<form method="POST">
		<label>Nama:</label>
		<input type="text" name="nama"><br><br>
		<label>Tanggal Lahir:</label>
		<input type="date" name="tgl_lahir"><br><br>
		<label>Pekerjaan:</label>
		<select name="pekerjaan">
			<option value="Guru">Guru</option>
			<option value="Programer">Programer</option>
			<option value="Nakhoda">Nakhoda</option>
		</select><br><br>
		<input type="submit" name="submit" value="Submit">
	</form>

	<?php
		if(isset($_POST['submit'])){
			$nama = $_POST['nama'];
			$tgl_lahir = $_POST['tgl_lahir'];
			$pekerjaan = $_POST['pekerjaan'];

			// Menghitung umur berdasarkan tanggal lahir
			$umur = date_diff(date_create($tgl_lahir), date_create('now'))->y;

			// Menampilkan output
			echo "<h2>Hasil Data</h2>";
			echo "Nama: ".$nama."<br>";
			echo "Umur: ".$umur." tahun<br>";
			echo "Pekerjaan: ".$pekerjaan."<br>";
			if($pekerjaan == "Guru"){
				echo "Gaji: Rp.4.000.000 per bulan";
			} elseif($pekerjaan == "Programer"){
				echo "Gaji: Rp.30.000.000 per bulan";
			} elseif($pekerjaan == "Nakhoda"){
				echo "Gaji: Rp.40.000.000 per bulan";
			}
		}
	?>
</body>
</html>
