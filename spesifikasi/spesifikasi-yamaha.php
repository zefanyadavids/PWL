<?php 
	ini_set('display_errors', 'Off');
	$url = "https://www.yamaha-motor.co.id/product/xride";
	include '../curl.php';
	include '../dom.php';

	$dimensi = $xpath->query('//*[@id="specification"]/section/div[1]/div/section[1]/div[2]/table/tr[1]/td[2]');
	echo "Dimensi : ".$dimensi->item(0)->nodeValue."<br/>";

	$tipe_mesin = $xpath->query('//*[@id="specification"]/section/div[1]/section/div[2]/table/tr[1]/td[2]');
	echo "Tipe Mesin : ".$tipe_mesin->item(0)->nodeValue."<br/>";

	$volume_silinder = $xpath->query('//*[@id="specification"]/section/div[1]/section/div[2]/table/tr[5]/td[2]');
	echo "Volume Silinder : ".$volume_silinder->item(0)->nodeValue."<br/>";

	$sistem_bahan_bakar = $xpath->query('//*[@id="specification"]/section/div[1]/section/div[2]/table/tr[11]/td[2]');
	echo "Sistem Bahan Bakar : ".$sistem_bahan_bakar->item(0)->nodeValue."<br/>";

	$kapasitas_tangki = $xpath->query('//*[@id="specification"]/section/div[1]/div/section[1]/div[2]/table/tr[6]/td[2]');
	echo "Kapasitas Tangki : ".$kapasitas_tangki->item(0)->nodeValue."<br/>";
?>