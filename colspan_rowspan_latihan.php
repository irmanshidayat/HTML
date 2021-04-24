<!DOCTYPE html>
<html>
<head>
	<title>Latihan Colspan & Rowspan</title>
</head>
<body>

	<table border="1px" width="50%" height="500px">
		<tr align="center">
			<td colspan="4">1</td>
		</tr>

		<!-- bagian yang ingin dihilangkan digabungkan dengan kolom/baris yang tidak ingin dihilangkan -->
		<tr align="center">
			<td>5</td>
			<td colspan="2" rowspan="2">6</td>
			<td rowspan="3">8</td>
		</tr>

		<tr align="center">
			<td>9</td>
		</tr>

		<!-- bagian yang ingin dihilangkan digabungkan dengan kolom/baris yang tidak ingin dihilangkan -->
		<tr align="center">
			<td>13</td>
			<td colspan="2">14</td>
		</tr>


	</table>

</body>
</html>