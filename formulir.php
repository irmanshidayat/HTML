<!DOCTYPE html>
<html>
<head>
	<title>Formulir Pada HTML</title>
</head>
<body>

	<form method="get">
		<fieldset>
			<legend align="center">Formulir Pendaftaran</legend>
		<!-- atribute for dan id value/nilai nya harus sama -->
		<label for="nama">Nama</label> <br><br>
		<input type="text" name="nama" id="nama"> <br><br>

		<label for="alamat">Alamat</label> <br><br>
		<input type="text" name="alamat" id="alamat"> <br><br> 

		<label for="tgl_lahir">Tanggal Lahir</label> <br><br>
		<input type="date" name="tgl_lahir" id="tgl_lahir"> <br><br>

		<!-- kalau atribut radio untuk memilih salah satu saja -->
		<label for="jenis_kelamin">Jenis Kelamin</label> <br><br>
		<input type="radio" name="jenis_kelamin"> laki-laki
		<input type="radio" name="jenis_kelamin"> perempuan <br><br>

		<!-- kalau atribut checkbox bisa memilih lebih dari satu -->
		<label for="hobi">Hobi</label> <br><br>
		<input type="checkbox" name="hobi" id="hobi"> Fotografi
		<input type="checkbox" name="hobi" id="hobi">  Membaca
		<input type="checkbox" name="hobi" id="hobi"> Bersepeda <br><br>

		<label for="email">Email</label> <br><br>
		<input type="email" name="email" id="email"> <br><br>

		<label for="sandi">Password</label> <br><br>
		<input type="password" name="sandi" id="sandi"> <br><br>

		<!-- untuk membuat pilihan dropdown saat di klik -->
		<label>Kejuruan</label>
			<select id="kejuruan">
				<optgroup label="TIK">
					<option>Pemrograman</option>
					<option>Desain Grafis</option>
					<option>Jaringan</option>
				</optgroup>

				<optgroup label="Elektronika">
					<option>Audio Video</option>
					<option>Teknisi HP</option>
					<option>Teknisi V-Sat</option>
				</optgroup>

				<optgroup label="Perhotelan">
					<option>Barista</option>
					<option>House Keeping</option>
					<option>Customer Service</option>
				</optgroup>

				<optgroup label="Refrigertion">
					<option>AC Split</option>
					<option>AC Komersil</option>
				</optgroup>
			</select> <br><br>

			<label>Pesan</label>
			<textarea cols="50px" rows="10px" >Tulis Pesan Anda di Sini</textarea> <br><br>

			
		<input type="submit" name="" value="kirim"> 
		<input type="reset" name="" value="hapus"> <br><br>
		<button type="submit">Submit</button>
		<button type="reset">Reset</button>

		</fieldset>
	</form>

</body>
</html>