<?php 
	ini_set('display_errors', 'Off');
	$url = "http://www.astra-honda.com/product/cbr150r";
	include 'curl.php';
	include 'dom.php';

	$dimensi = $xpath->query('//*[@id="tabs-3"]/table/tr[1]/td[2]');
	echo "dimensi : ".$dimensi->item(0)->nodeValue."<br/>";

	$tipe_mesin = $xpath->query('//*[@id="tabs-1"]/table/tr[1]/td[2]');
	echo "tipe mesin : ".$tipe_mesin->item(0)->nodeValue."<br/>";

	$kapasitas_mesin = $xpath->query('//*[@id="tabs-1"]/table/tr[2]/td[2]');
	echo "volume silinder : ".$kapasitas_mesin->item(0)->nodeValue."<br/>";

	$tipe_rangka = $xpath->query('//*[@id="tabs-2"]/table/tr[1]/td[2]');
	echo "tipe rangka : ".$tipe_rangka->item(0)->nodeValue."<br/>";

	$kapasitas_tangki = $xpath->query('//*[@id="tabs-4"]/table/tr[1]/td[2]');
	echo "kapasitas tangki : ".$kapasitas_tangki->item(0)->nodeValue."<br/>";
?>