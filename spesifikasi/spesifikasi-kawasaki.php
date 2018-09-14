
<?php 
	ini_set('display_errors', 'Off');
	$url = "http://product.kawasaki-motor.co.id/prdcdetail-113-ninja-h2-carbon.html";
	include '../curl.php';
	include '../dom.php';

	$dimensi = $xpath->query('/html/body/div[1]/div/div/div[4]/div[4]/div[4]/table/tr[8]/td[2]');
	echo "dimensi : ".$dimensi->item(0)->nodeValue."<br/>";

	$tipe_mesin = $xpath->query('/html/body/div[1]/div/div/div[4]/div[4]/div[4]/table/tr[15]/td[2]');
	echo "tipe mesin : ".$tipe_mesin->item(0)->nodeValue."<br/>";

	$volume_silinder = $xpath->query('/html/body/div[1]/div/div/div[4]/div[4]/div[4]/table/tr[19]/td[2]');
	echo "volume silinder : ".$volume_silinder->item(0)->nodeValue."<br/>";

	$kapasitas_tangki = $xpath->query('/html/body/div[1]/div/div/div[4]/div[4]/div[4]/table/tr[12]/td[2]');
	echo "kapasitas tangki : ".$kapasitas_tangki->item(0)->nodeValue."<br/>";
?>