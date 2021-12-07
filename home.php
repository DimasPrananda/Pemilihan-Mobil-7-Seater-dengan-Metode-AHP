
<?php
include('config.php');
include('fungsi.php');

// header
include('header.php');
?>

	<div class="container">
			<h2>Contoh Permasalahan</h2>

			<p>Customer akan membeli mobil untuk berpergian bersama keluargnya sebanyak 7 anggota keluarga. 
			   Beberapa pilihan brand mobil diantaranya adalah : <b> Toyota Avanza, Mitsubishi Xpander, Suzuki Ertiga, Nissan Grand Livina.</b></p>
			
			<p>Untuk kriteria penilaian yang dipertimbangkan adalah: <b>Fitur, Mesin, Harga, Konsumsi Bahan Bakar, Transmisi</b> 
			Bagaimana solusi terbaik mengenai Mobil mana yang 
			layak digunakan untuk Anggota keluarga tersebut ?</p>

			<div class="well">
				<h2>Toyota Avanza</h2>
				<b><img src="img/avanza.png" alt="Cinque Terre" width="300" height="250"></center></b><br>
				<b>Fitur :</b> 2 Airbag, Soket USB, Jam Digital, Cup Holder, Power Window, Sensor Parkir, Radio Am/Fm<br>
				<b>Mesin :</b> 1.5<br>
				<b>Harga :</b> Rp 230.000.000<br>
				<b>Konsumsi Bahan Bakar :</b> 13 Km/Liter<br>
				<b>Transmisi :</b> Manual-Matic<br>
				
			</div>

			<div class="well">
				<h2>Mitsubishi Xpander</h2>
				<b><img src="img/expander.png" alt="Cinque Terre" width="300" height="200"></center></b><br>
				<b></b><br>
				<b>Fitur :</b> Legrest tengah, Android dan Apple Car play, Audio, Power Outlet, Pemanas Jok, Bluetooth<br>
				<b>Mesin :</b> 1.5<br>
				<b>Harga :</b> Rp 273.000.000<br>
				<b>Konsumsi Bahan Bakar :</b> 11 Km/Liter<br>
				<b>Transmisi :</b> Manual-Matic<br>
			</div>
			<div class="well">
				<h2>Suzuki Ertiga</h2>
				<b><img src="img/ertiga.png" alt="Cinque Terre" width="300" height="250"></center></b><br>
				<b></b><br>
				<b>Fitur :</b> Ac Dual Zone, Audio, Sensor Parkir, Kamera Mundur, Audio, Android dan Apple Car play<br>
				<b>Mesin :</b> 1.5<br>
				<b>Harga :</b> Rp 245.000.000<br>
				<b>Konsumsi Bahan Bakar :</b> 14 Km/Liter<br>
				<b>Transmisi :</b> Manual-Matic<br>
			</div>
			<div class="well">
				<h2>Nissan Grand Livina</h2>
				<b><img src="img/grand.png" alt="Cinque Terre" width="300" height="250"></center></b><br>
				<b></b><br>
				<b>Fitur :</b> Legrest jok tengah, Auto Wiper, Ac Dual Zone, Abs, Sensor parker, spion lipat otomatis<br>
				<b>Mesin :</b> 1.5<br>
				<b>Harga :</b> Rp 237.000.000<br>
				<b>Konsumsi Bahan Bakar :</b> 11 Km/Liter<br>
				<b>Transmisi :</b> Manual-Matic<br>
			</div>
	</div>
			 <ul class="pager">
			  <li class="previous"><a href="#">Kembali</a></li>
			  <li class="next"><a href="kriteria.php">Lanjut</a></li>
			</ul> 

<?php include('footer.php'); ?>
