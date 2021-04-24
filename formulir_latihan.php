<!DOCTYPE html>
<html>
<head>
	<title>Latihan Formulir</title>
</head>
<body>

	<form method="get">
		<h1>Formulir</h1>
		<fieldset>

			<!-- Data Pribadi -->
			<legend>Data Pribadi</legend>

			<label for="nama">Nama</label> <br><br>
			<input type="text" name="nama" id="nama"> <br><br>

			<label for="jenis_kelamin">Jenis Kelamin</label> <br><br>
			<input type="radio" name="jenis_kelamin"> laki-laki
			<input type="radio" name="jenis_kelamin"> perempuan <br><br>

			<label>Agama</label>
			<select id="agama">
				<option>Islam</option>
				<option>Kristen</option>
				<option>Budha</option>
			</select> <br><br> 

			<label for="tanggal_lahir">Tanggal Lahir</label>
			<input type="date" name="tanggal_lahir" id="tanggal_lahir"> <br><br>

			<p>Alamat</p>
			<textarea cols="50px" rows="10px"></textarea>	
		</fieldset>


		<!-- pendidikan -->
		<fieldset>
			<legend>Pendidikan</legend>

			<label for="sd">SD</label>
			<input type="text" name="sd" id="sd" > 
			<label for="masuk">Masuk</label>
			<input type="month" name="masuk" id="masuk">
			<label for="lulus">Lulus</label>
			<input type="month" name="lulus" id="lulus"> <br><br>

			<label for="smp">SMP</label>
			<input type="text" name="smp" id="smp"> 
			<label for="masuk">Masuk</label>
			<input type="month" name="masuk" id="masuk">
			<label for="lulus">Lulus</label>
			<input type="month" name="lulus" id="lulus"> <br><br>

			<label for="sma">SMA</label>
			<input type="text" name="sma" id="sma">
			<label for="masuk">Masuk</label>
			<input type="month" name="masuk" id="masuk">
			<label for="lulus">Lulus</label>
			<input type="month" name="lulus" id="lulus"> <br><br>
		</fieldset>

		<!-- Pelatihan -->
		<fieldset>
			<legend>Pelatihan</legend>

			<label for="minat">Minat</label> <br><br>
			<input type="checkbox" name="minat" id="minat"> HTML
			<input type="checkbox" name="minat" id="minat"> CSS
			<input type="checkbox" name="minat" id="minat"> JavaScript <br><br>

			<label for="kompetensi">Kompetensi</label> <br><br>
			<input type="checkbox" name="kompetensi" id="kompetensi"> HTML
			<input type="checkbox" name="kompetensi" id="kompetensi"> CSS
			<input type="checkbox" name="kompetensi" id="kompetensi"> JavaScript 

		</fieldset> <br>

		<button type="submit">Submit</button>
		<button type="reset">Reset</button>
	</form>

</body>
</html>