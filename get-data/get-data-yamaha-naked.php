<?php
	//ambil gambar detail motor dari web yamaha
	$result_image = $xpath->query('//*[@id="part-3"]/div/div/div/div[1]/a/img/@src');
	//result berdasarkan url detail motor
	$results_url = $xpath->query('//*[@id="part-3"]/div/div/div/div[2]/a/@href');
	//ambil harga motor dari web yamaha
	$result_price = $xpath->query('//*[@id="part-3"]/div/div/div/div[2]/div/div/div[1]');
	//ambil nama motor dari web yamaha
	$results = $xpath->query('//*[@id="part-3"]/div/div/div/div[1]/h3');
?>