<?php
	//ambil gambar detail motor web kawasaki
	$result_image = $xpath->query('//ul[@class="clearfix"]/li/a/img/@src');
	//ambil url detail motor web kawasaki
	$result_url = $xpath->query('//*[@class="clearfix"]/li/a/@href');
	//result diambil berdasarkan nama motor
	$results = $xpath->query('//ul[@class="clearfix"]/li');
?>