<?php
	ini_set('display_errors', 'Off');
	include '../curl.php';
	include '../dom.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Hasil Banding</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/nav.css">
</head>
<body>
	<?php include '../nav.php'; ?>
	<div style="text-align: center;">
		<h2>Hasil Perbandingan<br/></h2>
	</div>
</body>
</html>

<?php
	echo "<table class='table table-light table-striped' align='center' style='width: 70%'>
	<tbody>
		<tr>
			<td>Merk</td>
			<td>".$_POST['merk1']."</td>
			<td>".$_POST['merk2']."</td>
		</tr>
		<tr>
			<td>Motor</td>
			<td>".$_POST['product_name1']."</td>
			<td>".$_POST['product_name2']."</td>
		</tr>"; 

		//=========== DATA MOTOR MERK 1 ================
		$url = $_POST['url1'];
		include '../curl.php';
		include '../dom.php';

		//== JIKA MERK YAMAHA Struktur detail WEB YAMAHA
		//=========== YAMAHA Spesifikasi ===============
		if($_POST['merk1']=="yamaha"){
			$dimensi1 = $xpath->query('//*[@id="specification"]/section/div[1]/div/section[1]/div[2]/table/tr[1]/td[2]');
		$tipe_mesin1 = $xpath->query('//*[@id="specification"]/section/div[1]/section/div[2]/table/tr[1]/td[2]');

		$volume_silinder1 = $xpath->query('//*[@id="specification"]/section/div[1]/section/div[2]/table/tr[5]/td[2]');

		$sistem_bahan_bakar1 = $xpath->query('//*[@id="specification"]/section/div[1]/section/div[2]/table/tr[11]/td[2]');

		$kapasitas_tangki1 = $xpath->query('//*[@id="specification"]/section/div[1]/div/section[1]/div[2]/table/tr[6]/td[2]');

		$tipe_tranmisi1 = $xpath->query('//*[@id="specification"]/section/div[1]/section/div[2]/table/tr[13]/td[2]');

		$harga1 = $xpath->query('//*[@id="target-scroll"]/div/div/div[2]/div/ul[1]/li[1]/p');
		 }
		 //=========== END YAMAHA Spesifikasi ===============
		 

		//=========== HONDA Spesifikasi matic ===============
		else if($_POST['merk1']=="honda_matic"){
			$dimensi1 = $xpath->query('//*[@id="tabs-3"]/table/tr[1]/td[2]');
		
			$tipe_mesin1 = $xpath->query('//*[@id="tabs-1"]/table/tr[1]/td[2]');
			
			$volume_silinder1 = $xpath->query('//*[@id="tabs-1"]/table/tr[2]/td[2]');
			
			$sistem_bahan_bakar1 = $xpath->query('//*[@id="tabs-1"]/table/tr[3]/td[2]');
			
			$kapasitas_tangki1 = $xpath->query('//*[@id="tabs-4"]/table/tr[1]/td[2]');
			
			//MASIH ADA BUG DISINI
			$tipe_tranmisi1 = $xpath->query('Automatic');
			// MATIC ECHO BERBEDA LANGSUNG STRING MATIC
		 }
		 //=========== END HONDA Spesifikasi matic =================

		 //=========== HONDA Spesifikasi SPORT & CUB ===============
		else if($_POST['merk1']=="honda"){
			$dimensi1 = $xpath->query('//*[@id="tabs-3"]/table/tr[1]/td[2]');

			$tipe_mesin1 = $xpath->query('//*[@id="tabs-1"]/table/tr[1]/td[2]');
		
			$volume_silinder1 = $xpath->query('//*[@id="tabs-1"]/table/tr[2]/td[2]');
			
			$sistem_bahan_bakar1 = $xpath->query('//*[@id="tabs-1"]/table/tr[3]/td[2]');

			$kapasitas_tangki1 = $xpath->query('//*[@id="tabs-4"]/table/tr[1]/td[2]');
			
			$tipe_tranmisi1 = $xpath->query('//div[@id="tabs-1"]/table/tr[5]/td[2]');
		 }
		 //=========== END HONDA Spesifikasi SPORT & CUB ===============

		 //=========== KAWASAKI Spesifikasi ===============
		 else if($_POST['merk1']=="kawasaki"){
			$url = "http://product.kawasaki-motor.co.id/".$_POST['url1'];
			include '../curl.php';
			include '../dom.php';

			$row = $xpath->query('/html/body/div[1]/div/div/div[4]/div[4]/div[4]/table/tr/td[1]');
			$i=0;
			foreach ($row as $result) {
				if($row->item($i)->nodeValue=="Panjang x Lebar x Tinggi") {
					$i++;
					$dimensi1 = $xpath->query('/html/body/div[1]/div/div/div[4]/div[4]/div[4]/table/tr['.$i.']/td[2]');
				}
				$i++;
			}

			$i=0;
			foreach ($row as $result) {
				if($row->item($i)->nodeValue=="Tipe") {
					$i++;
					$tipe_mesin1 = $xpath->query('/html/body/div[1]/div/div/div[4]/div[4]/div[4]/table/tr['.$i.']/td[2]');
				}
				$i++;
			}

			$i=0;
			foreach ($row as $result) {
				if($row->item($i)->nodeValue=="Volume Silinder") {
					$i++;
					$volume_silinder1 = $xpath->query('/html/body/div[1]/div/div/div[4]/div[4]/div[4]/table/tr['.$i.']/td[2]');
				}
				$i++;
			}

			$i=0;
			foreach ($row as $result) {
				if($row->item($i)->nodeValue=="Sistem Bahan Bakar") {
					$i++;
					$sistem_bahan_bakar1 = $xpath->query('/html/body/div[1]/div/div/div[4]/div[4]/div[4]/table/tr['.$i.']/td[2]');
				}
				$i++;
			}

			$i=0;
			foreach ($row as $result) {
				if($row->item($i)->nodeValue=="Kapasitas Bensin") {
					$i++;
					$kapasitas_tangki1 = $xpath->query('/html/body/div[1]/div/div/div[4]/div[4]/div[4]/table/tr['.$i.']/td[2]');
				}
				$i++;
			}

			$i=0;
			foreach ($row as $result) {
				if($row->item($i)->nodeValue=="Jumlah Transmisi") {
					$i++;
					$tipe_tranmisi1 = $xpath->query('/html/body/div[1]/div/div/div[4]/div[4]/div[4]/table/tr['.$i.']/td[2]');
				}
				$i++;
			}
			$harga1 = $xpath->query('/html/body/div[1]/div/div/div[4]/div[4]/div[2]/strong');
		 }
		 //=========== END KAWASAKI Spesifikasi ===============
		 //=========== END DATA MOTOR MERK 1 ================

		 //------------------------------------------------------------------------------------------

		 //=========== DATA MOTOR MERK 2 ================
		$url = $_POST['url2'];
		include '../curl.php';
		include '../dom.php';

		//== JIKA MERK YAMAHA Struktur detail WEB YAMAHA
		//=========== YAMAHA Spesifikasi ===============
		if($_POST['merk2']=="yamaha"){
			$dimensi2 = $xpath->query('//*[@id="specification"]/section/div[1]/div/section[1]/div[2]/table/tr[1]/td[2]');
			$tipe_mesin2 = $xpath->query('//*[@id="specification"]/section/div[1]/section/div[2]/table/tr[1]/td[2]');

			$volume_silinder2 = $xpath->query('//*[@id="specification"]/section/div[1]/section/div[2]/table/tr[5]/td[2]');

			$sistem_bahan_bakar2 = $xpath->query('//*[@id="specification"]/section/div[1]/section/div[2]/table/tr[11]/td[2]');

			$kapasitas_tangki2 = $xpath->query('//*[@id="specification"]/section/div[1]/div/section[1]/div[2]/table/tr[6]/td[2]');

			$tipe_tranmisi2 = $xpath->query('//*[@id="specification"]/section/div[1]/section/div[2]/table/tr[13]/td[2]');

			$harga2 = $xpath->query('//*[@id="target-scroll"]/div/div/div[2]/div/ul[1]/li[1]/p');
		 }
		 //=========== END YAMAHA Spesifikasi ===============
		 

		//=========== HONDA Spesifikasi matic ===============
		else if($_POST['merk2']=="honda_matic"){
			$dimensi2 = $xpath->query('//*[@id="tabs-3"]/table/tr[1]/td[2]');
		
			$tipe_mesin2 = $xpath->query('//*[@id="tabs-1"]/table/tr[1]/td[2]');
			
			$volume_silinder2 = $xpath->query('//*[@id="tabs-1"]/table/tr[2]/td[2]');
			
			$sistem_bahan_bakar2 = $xpath->query('//*[@id="tabs-1"]/table/tr[3]/td[2]');
			
			$kapasitas_tangki2 = $xpath->query('//*[@id="tabs-4"]/table/tr[1]/td[2]');
			
			//MASIH ADA BUG DISINI
			$tipe_tranmisi2 = $xpath->query('Automatic');
			// MATIC ECHO BERBEDA LANGSUNG STRING MATIC
		 }
		 //=========== END HONDA Spesifikasi matic =================

		 //=========== HONDA Spesifikasi SPORT & CUB ===============
		else if($_POST['merk2']=="honda"){
			$dimensi2 = $xpath->query('//*[@id="tabs-3"]/table/tr[1]/td[2]');

			$tipe_mesin2 = $xpath->query('//*[@id="tabs-1"]/table/tr[1]/td[2]');
		
			$volume_silinder2 = $xpath->query('//*[@id="tabs-1"]/table/tr[2]/td[2]');
			
			$sistem_bahan_bakar2 = $xpath->query('//*[@id="tabs-1"]/table/tr[3]/td[2]');

			$kapasitas_tangki2 = $xpath->query('//*[@id="tabs-4"]/table/tr[1]/td[2]');
			
			$tipe_tranmisi2 = $xpath->query('//div[@id="tabs-1"]/table/tr[5]/td[2]');
		 }
		 //=========== END HONDA Spesifikasi SPORT & CUB ===============

		 //=========== KAWASAKI Spesifikasi ===============
		 else if($_POST['merk2']=="kawasaki"){
			$url = "http://product.kawasaki-motor.co.id/".$_POST['url2'];
			include '../curl.php';
			include '../dom.php';

			$row = $xpath->query('/html/body/div[1]/div/div/div[4]/div[4]/div[4]/table/tr/td[1]');
			$i=0;
			foreach ($row as $result) {
				if($row->item($i)->nodeValue=="Panjang x Lebar x Tinggi") {
					$i++;
					$dimensi2 = $xpath->query('/html/body/div[1]/div/div/div[4]/div[4]/div[4]/table/tr['.$i.']/td[2]');
				}
				$i++;
			}

			$i=0;
			foreach ($row as $result) {
				if($row->item($i)->nodeValue=="Tipe") {
					$i++;
					$tipe_mesin2 = $xpath->query('/html/body/div[1]/div/div/div[4]/div[4]/div[4]/table/tr['.$i.']/td[2]');
				}
				$i++;
			}

			$i=0;
			foreach ($row as $result) {
				if($row->item($i)->nodeValue=="Volume Silinder") {
					$i++;
					$volume_silinder2 = $xpath->query('/html/body/div[1]/div/div/div[4]/div[4]/div[4]/table/tr['.$i.']/td[2]');
				}
				$i++;
			}

			$i=0;
			foreach ($row as $result) {
				if($row->item($i)->nodeValue=="Sistem Bahan Bakar") {
					$i++;
					$sistem_bahan_bakar2 = $xpath->query('/html/body/div[1]/div/div/div[4]/div[4]/div[4]/table/tr['.$i.']/td[2]');
				}
				$i++;
			}

			$i=0;
			foreach ($row as $result) {
				if($row->item($i)->nodeValue=="Kapasitas Bensin") {
					$i++;
					$kapasitas_tangki2 = $xpath->query('/html/body/div[1]/div/div/div[4]/div[4]/div[4]/table/tr['.$i.']/td[2]');
				}
				$i++;
			}

			$i=0;
			foreach ($row as $result) {
				if($row->item($i)->nodeValue=="Jumlah Transmisi") {
					$i++;
					$tipe_tranmisi2 = $xpath->query('/html/body/div[1]/div/div/div[4]/div[4]/div[4]/table/tr['.$i.']/td[2]');
				}
				$i++;
			}
			$harga2 = $xpath->query('/html/body/div[1]/div/div/div[4]/div[4]/div[2]/strong');
		 }
		 //=========== END KAWASAKI Spesifikasi ===============
		 //=========== END DATA MOTOR MERK 2 ================


		 //==== MENAMPILKAN HASIL =======
	echo "
		<tr>
			<td>Harga</td>
			<td>".$harga1->item(0)->nodeValue."</td>
			<td>".$harga2->item(0)->nodeValue."</td>
		</tr>
		<tr>
			<td>Dimensi</td>
			<td>".$dimensi1->item(0)->nodeValue."</td>
			<td>".$dimensi2->item(0)->nodeValue."</td>
		</tr>
		<tr>
			<td>Tipe Mesin</td>
			<td>".$tipe_mesin1->item(0)->nodeValue."</td>
			<td>".$tipe_mesin2->item(0)->nodeValue."</td>
		</tr>
		<tr>
			<td>Kapasitas Mesin</td>
			<td>".$volume_silinder1->item(0)->nodeValue."</td>
			<td>".$volume_silinder2->item(0)->nodeValue."</td>
		</tr>
		<tr>
			<td>Sistem Bahan Bakar</td>
			<td>".$sistem_bahan_bakar1->item(0)->nodeValue."</td>
			<td>".$sistem_bahan_bakar2->item(0)->nodeValue."</td>
		</tr>
		<tr>
			<td>Kapasitas Tangki</td>
			<td>".$kapasitas_tangki1->item(0)->nodeValue."</td>
			<td>".$kapasitas_tangki2->item(0)->nodeValue."</td>
		</tr>
		<tr>
			<td>Tipe Tranmisi</td>
			<td>".$tipe_tranmisi1->item(0)->nodeValue."</td>
			<td>".$tipe_tranmisi2->item(0)->nodeValue."</td>
		</tr>
		</tbody
	</table>";