<!DOCTYPE html>
<html>
<head>
	<title>Bandingkan Motor</title>
</head>
<body>
	<h1>pilih motor pertama yang akan dibandingkan</h1>
	<?php  

		//=======================motor honda=======================
		ini_set('display_errors', 'Off');
		$url = "http://www.astra-honda.com/product-list/all";
		include 'curl.php';
		include 'dom.php';
		//result berdasarkan nama motor honda
		$results = $xpath->query('//*[@class="productPanel"]');
		//ambil gambar detail motor dari web honda
		$result_image = $xpath->query('//*[@class="productPanel"]/div/a/img/@src');
		//ambil url detail motor dari web honda
		$result_url = $xpath->query('//*[@class="productPanel"]/div[@class="name"]/a/@href');

		//loop result item
		$i=0;
		foreach ($results as $result) {
			echo "<img src='".$result_image->item($i)->nodeValue."'>"."<br/>";
			echo $result->nodeValue."<br/>"."<br/>";
			?> 
				<form action="bandingkan2.php" method="post" enctype="multipart/form-data">
					<input type="hidden" name="url1" value=<?php echo '"'.$result_url->item($i)->nodeValue.'"' ?>>
					<input type="hidden" name="merk" value="honda">
					<input type="submit" name="submit" value="select">
				</form>
			<?php
			$i++;
		}
		//=======================motor honda=======================

		//=====================motor kawasaki======================
		ini_set('display_errors', 'Off');
		$url = "http://product.kawasaki-motor.co.id/street.html";
		include 'curl.php';
		include 'dom.php';
		//result diambil berdasarkan nama motor
		$results = $xpath->query('//ul[@class="clearfix"]/li');
		//ambil gambar detail motor web kawasaki
		$result_image = $xpath->query('//ul[@class="clearfix"]/li/a/img/@src');
		//ambil url detail motor web kawasaki
		$result_url = $xpath->query('//*[@class="clearfix"]/li/a/@href');

		//loop result item
		$i=0;
		foreach ($results as $result) {
			echo "<img src='".$result_image->item($i)->nodeValue."'>"."<br/>";
			echo $result->nodeValue."<br/>"."<br/>";
			?> 
				<form action="bandingkan2.php" method="post" enctype="multipart/form-data">
					<input type="hidden" name="url1" value=<?php echo '"'.$result_url->item($i)->nodeValue.'"' ?>>
					<input type="hidden" name="merk" value="kawasaki">
					<input type="submit" name="submit" value="select">
				</form>
			<?php
			$i++;
		}
		//=====================motor kawasaki======================
	?>
</body>
</html>