	<?php 
		ini_set('display_errors', 'Off');
		$url = "http://product.kawasaki-motor.co.id/street.html";
		include '../curl.php';
		include '../dom.php';
		include '../get-data/get-data-kawasaki.php';

		//loop result
		$i=0;
		foreach ($results as $result) {
			echo "<img src='".$result_image->item($i)->nodeValue."'>"."<br/>";
			echo $result->nodeValue."<br/>"."<br/>";
			$i++;
		}
	?>