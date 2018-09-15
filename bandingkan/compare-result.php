<?php
	ini_set('display_errors', 'Off');
	$url = $_POST['url1'];
	include '../curl.php';
	include '../dom.php';

	echo "Hasil Perbandingan : <br/>";

	echo $_POST['merk1']."<br/>";
	echo $_POST['url1']."<br/>";


	echo $_POST['merk2']."<br/>";
	echo $_POST['url2']."<br/>";

	echo "<table>
		<tr>
			<td>Merek</td>
			<td>".$_POST['merk1']."</td>
			<td>".$_POST['merk2']."</td>
		</tr>
		<tr>
			<td>URL</td>
			<td>".$_POST['url1']."</td>
			<td>".$_POST['url2']."</td>
		</tr>"; 
		$url = $_POST['url1'];
		include '../curl.php';
		include '../dom.php';

		//== JIKA MERK YAMAHA Struktur detail WEB YAMAHA
		if($_POST['merk1']=="yamaha"){
			$dimensi1 = $xpath->query('//*[@id="specification"]/section/div[1]/div/section[1]/div[2]/table/tr[1]/td[2]');
		$tipe_mesin1 = $xpath->query('//*[@id="specification"]/section/div[1]/section/div[2]/table/tr[1]/td[2]');

		$volume_silinder1 = $xpath->query('//*[@id="specification"]/section/div[1]/section/div[2]/table/tr[5]/td[2]');

		$sistem_bahan_bakar1 = $xpath->query('//*[@id="specification"]/section/div[1]/section/div[2]/table/tr[11]/td[2]');

		$kapasitas_tangki1 = $xpath->query('//*[@id="specification"]/section/div[1]/div/section[1]/div[2]/table/tr[6]/td[2]');

		 }

		//=========== HONDA spesifikasi matic ===============
		if($_POST['merk1']=="honda"){
			$dimensi1 = $xpath->query('//*[@id="tabs-3"]/table/tr[1]/td[2]');
		
			$tipe_mesin1 = $xpath->query('//*[@id="tabs-1"]/table/tr[1]/td[2]');
			
			$kapasitas_mesin1 = $xpath->query('//*[@id="tabs-1"]/table/tr[2]/td[2]');
			
			$sistem_bahan_bakar1 = $xpath->query('//*[@id="tabs-1"]/table/tr[3]/td[2]');
			
			$kapasitas_tangki1 = $xpath->query('//*[@id="tabs-4"]/table/tr[1]/td[2]');
			
			$tipe_tranmisi1 = $xpath->query('//div[@id="tabs-1"]/table/tr[5]/td[2]');
			// MATIC ECHO BERBEDA LANGSUNG STRING MATIC

		 }
		 
	echo "	
		<tr>
			<td>Dimensi</td>
			<td>".$dimensi1->item(0)->nodeValue."</td>
			<td>1</td>
		</tr>
		<tr>
			<td>Tipe Mesin</td>
			<td>".$tipe_mesin1->item(0)->nodeValue."</td>
			<td></td>
		</tr>
		<tr>
			<td>Kapasitas Mesin</td>
			<td>".$volume_silinder1->item(0)->nodeValue."</td>
			<td></td>
		</tr>
		<tr>
			<td>Sistem Bahan Bakar</td>
			<td>".$sistem_bahan_bakar1->item(0)->nodeValue."</td>
			<td></td>
		</tr>
		<tr>
			<td>Kapasitas Tangki</td>
			<td>".$kapasitas_tangki1->item(0)->nodeValue."</td>
			<td></td>
		</tr>
		<tr>
			<td>Tipe Tranmisi</td>
			<td></td>
			<td></td>
		</tr>
	</table>";
	?>