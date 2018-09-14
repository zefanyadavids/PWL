	<?php 
		ini_set('display_errors', 'Off');

		//=============cub=================
		$url = "http://www.astra-honda.com/product-list/cub";
		include '../curl.php';
		include '../dom.php';
		include '../get-data/get-data-honda.php';

		//loop result
		$i=0;
		foreach ($results as $result) {
			//print gambar setiap motor
			echo "<img src='".$result_image->item($i)->nodeValue."'>"."<br/>";
			//url setiap detail motor
			echo $result_url->item($i)->nodeValue."<br/>";
			//print setiap nama motor honda
			echo $result->nodeValue."<br/>"."<br/>";
			$i++;	
		}

		//=============matic=================
		$url = "http://www.astra-honda.com/product-list/matic";
		include '../curl.php';
		include '../dom.php';
		include '../get-data/get-data-honda.php';

		//loop result
		$i=0;
		foreach ($results as $result) {
			//print gambar setiap motor
			echo "<img src='".$result_image->item($i)->nodeValue."'>"."<br/>";
			//url setiap detail motor
			echo $result_url->item($i)->nodeValue."<br/>";
			//print setiap nama motor honda
			echo $result->nodeValue."<br/>"."<br/>";
			$i++;	
		}

		//=============sport=================
		$url = "http://www.astra-honda.com/product-list/sport";
		include '../curl.php';
		include '../dom.php';
		include '../get-data/get-data-honda.php';

		//loop result
		$i=0;
		foreach ($results as $result) {
			//print gambar setiap motor
			echo "<img src='".$result_image->item($i)->nodeValue."'>"."<br/>";
			//url setiap detail motor
			echo $result_url->item($i)->nodeValue."<br/>";
			//print setiap nama motor honda
			echo $result->nodeValue."<br/>"."<br/>";
			$i++;	
		}
	?>