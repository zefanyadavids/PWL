<?php
	ini_set('display_errors', 'Off');
	include '../curl.php';
	include '../dom.php';

	echo "Hasil Perbandingan : <br/>";

	echo $_POST['merk1']."<br/>";
	echo $_POST['url1']."<br/>";


	echo $_POST['merk2']."<br/>";
	echo $_POST['url2']."<br/>";

?>

	<table>
		<tr>
			<td></td>
			<td>Motor 1</td>
			<td>Motor 2</td>
		</tr>
		<tr>
			<td>Dimensi</td>
			<td></td>
			<td>1</td>
		</tr>
		<tr>
			<td>Tipe Mesin</td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>Kapasitas Mesin</td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>Sistem Bahan Bakar</td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>Kapasitas Tangki</td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>Tipe Tranmisi</td>
			<td></td>
			<td></td>
		</tr>
	</table>