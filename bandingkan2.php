<?php 
	$url1 = $_POST['url1'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Bandingkan Motor</title>
</head>
<body>
	<h1>pilih motor kedua yang akan dibandingkan</h1>
	<p>motor pertama : <?php echo $url1; ?></p>
	<?php  
		//=======================motor honda=======================
		ini_set('display_errors', 'Off');
		$url = "http://www.astra-honda.com/product-list/all";
		include 'curl.php';
		include 'dom.php';
		//result berdasarkan nama motor honda
		$results = $xpath->query('//*[@class="productPanel"]');

		//loop result
		$i=0;
		foreach ($results as $result) {
			//ambil gambar detail motor dari web honda
			$result_image = $xpath->query('//*[@class="productPanel"]/div/a/img/@src');
			echo "<img src='".$result_image->item($i)->nodeValue."'>"."<br/>";
			//print setiap nama motor honda
			echo $result->nodeValue."<br/>"."<br/>";
			//ambil url detail motor dari web honda
			$result_url = $xpath->query('//*[@class="productPanel"]/div[@class="name"]/a/@href');
			?> 
				<form action="perbandingan.php" method="post" enctype="multipart/form-data">
					<input type="hidden" name="url1" value=<?php echo '"'.$url1.'"' ?>>
					<input type="hidden" name="url2" value=<?php echo '"'.$result_url->item($i)->nodeValue.'"' ?>>
					<input type="hidden" name="merk" value="honda">
					<input type="submit" name="submit" value="select">
				</form>
			<?php
			$i++;
		}
		//=======================motor honda=======================

		//=====================motor kawasaki======================
		$url = "http://product.kawasaki-motor.co.id/street.html";
		include 'curl.php';
		include 'dom.php';
		//result diambil berdasarkan nama motor
		$results = $xpath->query('//ul[@class="clearfix"]/li');

		//loop result
		$i=0;
		foreach ($results as $result) {
			//ambil gambar detail motor web kawasaki
			$result_image = $xpath->query('//ul[@class="clearfix"]/li/a/img/@src');
			echo "<img src='".$result_image->item($i)->nodeValue."'>"."<br/>";
			//cetak setiap nama motor
			echo $result->nodeValue."<br/>"."<br/>";
			//ambil url detail motor web kawasaki
			$result_url = $xpath->query('//*[@class="clearfix"]/li/a/@href');
			?> 
				<form action="perbandingan.php" method="post" enctype="multipart/form-data">
					<input type="hidden" name="url1" value=<?php echo '"'.$url1.'"' ?>>
					<input type="hidden" name="url2" value=<?php echo '"'.$result_url->item($i)->nodeValue.'"' ?>>
					<input type="hidden" name="merk" value="honda">
					<input type="submit" name="submit" value="select">
				</form>
			<?php
			$i++;
		}
		//=====================motor kawasaki======================
	?>
</body>
</html>