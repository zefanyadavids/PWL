<?php 
	//result berdasarkan nama motor honda
	$results = $xpath->query('//*[@class="productPanel"]');
	//ambil gambar detail motor dari web honda
	$result_image = $xpath->query('//*[@class="productPanel"]/div/a/img/@src');
	//ambil url detail motor dari web honda
	$result_url = $xpath->query('//*[@class="productPanel"]/div[@class="name"]/a/@href');
?>