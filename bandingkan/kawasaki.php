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
	?>	<!--URL untuk select motornya-->
			<form action="compare-result.php" method="post" enctype="multipart/form-data">
				<input type="hidden" name="merk1" value=<?php echo '"'.$merk1.'"' ?>>
				<input type="hidden" name="merk2" value=<?php echo "kawasaki" ?>>
				<input type="hidden" name="url1" value=<?php echo '"'.$url1.'"' ?>>
				<input type="hidden" name="url2" value=<?php echo '"'.$result_url->item($i)->nodeValue.'"' ?>>
				<input type="submit" name="submit" value="Bandingkan">
			</form>
	<?php
			$i++;
		}
	?>