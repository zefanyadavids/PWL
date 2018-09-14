
<?php 
	ini_set('display_errors', 'Off');
	$url = "http://product.kawasaki-motor.co.id/prdcdetail-69-z250sl.html";
	include '../curl.php';
	include '../dom.php';

	$row = $xpath->query('/html/body/div[1]/div/div/div[4]/div[4]/div[4]/table/tr/td[1]');
	echo "Dimensi : ";
	$i=0;
	foreach ($row as $result) {
		if($row->item($i)->nodeValue=="Panjang x Lebar x Tinggi") {
			$i++;
			$dimensi = $xpath->query('/html/body/div[1]/div/div/div[4]/div[4]/div[4]/table/tr['.$i.']/td[2]');
			echo $dimensi->item(0)->nodeValue."<br/>";
		}
		$i++;
	}

	$row = $xpath->query('/html/body/div[1]/div/div/div[4]/div[4]/div[4]/table/tr/td[1]');
	echo "Tipe Mesin : ";
	$i=0;
	foreach ($row as $result) {
		if($row->item($i)->nodeValue=="Tipe") {
			$i++;
			$tipe_mesin = $xpath->query('/html/body/div[1]/div/div/div[4]/div[4]/div[4]/table/tr['.$i.']/td[2]');
			echo $tipe_mesin->item(0)->nodeValue."<br/>";
		}
		$i++;
	}

	echo "Volume Silinder : ";
	$i=0;
	foreach ($row as $result) {
		if($row->item($i)->nodeValue=="Volume Silinder") {
			$i++;
			$volume_silinder = $xpath->query('/html/body/div[1]/div/div/div[4]/div[4]/div[4]/table/tr['.$i.']/td[2]');
			echo $volume_silinder->item(0)->nodeValue."<br/>";
		}
		$i++;
	}

	echo "Sistem Bahan Bakar : ";
	$i=0;
	foreach ($row as $result) {
		if($row->item($i)->nodeValue=="Sistem Bahan Bakar") {
			$i++;
			$sistem_bahan_bakar = $xpath->query('/html/body/div[1]/div/div/div[4]/div[4]/div[4]/table/tr['.$i.']/td[2]');
			echo $sistem_bahan_bakar->item(0)->nodeValue."<br/>";
		}
		$i++;
	}

	echo "Kapasitas Tangki : ";
	$i=0;
	foreach ($row as $result) {
		if($row->item($i)->nodeValue=="Kapasitas Bensin") {
			$i++;
			$kapasitas_tangki = $xpath->query('/html/body/div[1]/div/div/div[4]/div[4]/div[4]/table/tr['.$i.']/td[2]');
			echo $kapasitas_tangki->item(0)->nodeValue."<br/>";
		}
		$i++;
	}
?>