<?php 
	ini_set('display_errors', 'Off');
	$url = $_POST['url_detail'];
	include '../curl.php';
	include '../dom.php';

	$dimensi = $xpath->query('//*[@id="tabs-3"]/table/tr[1]/td[2]');
	echo "Dimensi : ".$dimensi->item(0)->nodeValue."<br/>";

	$tipe_mesin = $xpath->query('//*[@id="tabs-1"]/table/tr[1]/td[2]');
	echo "Tipe Mesin : ".$tipe_mesin->item(0)->nodeValue."<br/>";

	$kapasitas_mesin = $xpath->query('//*[@id="tabs-1"]/table/tr[2]/td[2]');
	echo "Volume Silinder : ".$kapasitas_mesin->item(0)->nodeValue."<br/>";

	$sistem_bahan_bakar = $xpath->query('//*[@id="tabs-1"]/table/tr[3]/td[2]');
	echo "Sistem Bahan Bakar : ".$sistem_bahan_bakar->item(0)->nodeValue."<br/>";

	$kapasitas_tangki = $xpath->query('//*[@id="tabs-4"]/table/tr[1]/td[2]');
	echo "Kapasitas Tangki : ".$kapasitas_tangki->item(0)->nodeValue."<br/>";

	$tipe_tranmisi = $xpath->query('//div[@id="tabs-1"]/table/tr[5]/td[2]');
	echo "Tipe Tranmisi : Matic <br/>";
?>