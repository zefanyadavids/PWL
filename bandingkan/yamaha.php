
	<?php
	ini_set('display_errors', 'Off');
		$url = "https://www.yamaha-motor.co.id/products";
		include '../curl.php';
		include '../dom.php';

		//===================matic===================
		include '../get-data/get-data-yamaha-matic.php';

		//loop result
		$i=0;
		foreach ($results as $result) {
			echo "<img src='".$result_image->item($i)->nodeValue."'>"."<br/>";
			echo $results_url->item($i)->nodeValue."<br/>";
			echo $result_price->item($i)->nodeValue."<br/>";
			echo $result->nodeValue."<br/>"."<br/>";
			$i++;
		}	

		//===================maxi===================
		include '../get-data/get-data-yamaha-maxi.php';

		//loop result
		$i=0;
		foreach ($results as $result) {
			echo "<img src='".$result_image->item($i)->nodeValue."'>"."<br/>";
			echo $results_url->item($i)->nodeValue."<br/>";
			echo $result_price->item($i)->nodeValue."<br/>";
			echo $result->nodeValue."<br/>"."<br/>";
			$i++;
		}	

		//===================naked bike===================
		include '../get-data/get-data-yamaha-naked.php';

		//loop result
		$i=0;
		foreach ($results as $result) {
			echo "<img src='".$result_image->item($i)->nodeValue."'>"."<br/>";
			echo $results_url->item($i)->nodeValue."<br/>";
			echo $result_price->item($i)->nodeValue."<br/>";
			echo $result->nodeValue."<br/>"."<br/>";
			$i++;
		}	

		//===================sport===================
		include '../get-data/get-data-yamaha-sport.php';

		//loop result
		$i=0;
		foreach ($results as $result) {
			echo "<img src='".$result_image->item($i)->nodeValue."'>"."<br/>";
			echo $results_url->item($i)->nodeValue."<br/>";
			echo $result_price->item($i)->nodeValue."<br/>";
			echo $result->nodeValue."<br/>"."<br/>";
			$i++;
		}	

		//===================moviestar===================
		include '../get-data/get-data-yamaha-moviestar.php';

		//loop result
		$i=0;
		foreach ($results as $result) {
			echo "<img src='".$result_image->item($i)->nodeValue."'>"."<br/>";
			echo $results_url->item($i)->nodeValue."<br/>";
			echo $result_price->item($i)->nodeValue."<br/>";
			echo $result->nodeValue."<br/>"."<br/>";
			$i++;
		}	

		//===================cbu===================
		include '../get-data/get-data-yamaha-cbu.php';

		//loop result
		$i=0;
		foreach ($results as $result) {
			echo "<img src='".$result_image->item($i)->nodeValue."'>"."<br/>";
			echo $results_url->item($i)->nodeValue."<br/>";
			echo $result_price->item($i)->nodeValue."<br/>";
			echo $result->nodeValue."<br/>"."<br/>";
			$i++;
		}

		//===================atv===================
		include '../get-data/get-data-yamaha-atv.php';

		//loop result
		$i=0;
		foreach ($results as $result) {
			echo "<img src='".$result_image->item($i)->nodeValue."'>"."<br/>";
			echo $results_url->item($i)->nodeValue."<br/>";
			echo $result_price->item($i)->nodeValue."<br/>";
			echo $result->nodeValue."<br/>"."<br/>";
			$i++;
		}		
	?>