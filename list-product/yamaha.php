
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
			echo $result_url->item($i)->nodeValue."<br/>";
			echo $result_price->item($i)->nodeValue."<br/>";
			echo $result->nodeValue."<br/>"."<br/>";

	?>	<!--URL untuk select motornya-->
		<form action="../spesifikasi/spesifikasi-yamaha.php" method="post" enctype="multipart/form-data">
			<input type="hidden" name="url_detail" value=<?php echo '"'.$result_url->item($i)->nodeValue.'"' ?>>
			<input type="submit" name="submit" value="Detail">
		</form>

		<form action="../bandingkan/bandingkan.php" method="post" enctype="multipart/form-data">
			<input type="hidden" name="merk" value="yamaha">
			<input type="hidden" name="url1" value=<?php echo '"'.$result_url->item($i)->nodeValue.'"' ?>>
			<input type="submit" name="submit" value="Bandingkan">
		</form>
	<?php
			$i++;
		}	

		//===================maxi===================
		include '../get-data/get-data-yamaha-maxi.php';

		//loop result
		$i=0;
		foreach ($results as $result) {
			echo "<img src='".$result_image->item($i)->nodeValue."'>"."<br/>";
			echo $result_url->item($i)->nodeValue."<br/>";
			echo $result_price->item($i)->nodeValue."<br/>";
			echo $result->nodeValue."<br/>"."<br/>";
	?>	<!--URL untuk select motornya-->
		<form action="../spesifikasi/spesifikasi-yamaha.php" method="post" enctype="multipart/form-data">
			<input type="hidden" name="url_detail" value=<?php echo '"'.$result_url->item($i)->nodeValue.'"' ?>>
			<input type="submit" name="submit" value="Detail">
		</form>

		<form action="../bandingkan/bandingkan.php" method="post" enctype="multipart/form-data">
			<input type="hidden" name="merk" value="yamaha">
			<input type="hidden" name="url1" value=<?php echo '"'.$result_url->item($i)->nodeValue.'"' ?>>
			<input type="submit" name="submit" value="Bandingkan">
		</form>
	<?php
			$i++;
		}	

		//===================naked bike===================
		include '../get-data/get-data-yamaha-naked.php';

		//loop result
		$i=0;
		foreach ($results as $result) {
			echo "<img src='".$result_image->item($i)->nodeValue."'>"."<br/>";
			echo $result_url->item($i)->nodeValue."<br/>";
			echo $result_price->item($i)->nodeValue."<br/>";
			echo $result->nodeValue."<br/>"."<br/>";
	?>	<!--URL untuk select motornya-->
		<form action="../spesifikasi/spesifikasi-yamaha.php" method="post" enctype="multipart/form-data">
			<input type="hidden" name="merk" value="yamaha">
			<input type="hidden" name="url_detail" value=<?php echo '"'.$result_url->item($i)->nodeValue.'"' ?>>
			<input type="submit" name="submit" value="Detail">
		</form>

		<form action="../bandingkan/bandingkan.php" method="post" enctype="multipart/form-data">
			<input type="hidden" name="url1" value=<?php echo '"'.$result_url->item($i)->nodeValue.'"' ?>>
			<input type="submit" name="submit" value="Bandingkan">
		</form>
	<?php
			$i++;
		}	

		//===================sport===================
		include '../get-data/get-data-yamaha-sport.php';

		//loop result
		$i=0;
		foreach ($results as $result) {
			echo "<img src='".$result_image->item($i)->nodeValue."'>"."<br/>";
			echo $result_url->item($i)->nodeValue."<br/>";
			echo $result_price->item($i)->nodeValue."<br/>";
			echo $result->nodeValue."<br/>"."<br/>";
	?>	<!--URL untuk select motornya-->
		<form action="../spesifikasi/spesifikasi-yamaha.php" method="post" enctype="multipart/form-data">
			<input type="hidden" name="url_detail" value=<?php echo '"'.$result_url->item($i)->nodeValue.'"' ?>>
			<input type="submit" name="submit" value="Detail">
		</form>

		<form action="../bandingkan/bandingkan.php" method="post" enctype="multipart/form-data">
			<input type="hidden" name="merk" value="yamaha">
			<input type="hidden" name="url1" value=<?php echo '"'.$result_url->item($i)->nodeValue.'"' ?>>
			<input type="submit" name="submit" value="Bandingkan">
		</form>
	<?php
			$i++;
		}	

		//===================moviestar===================
		include '../get-data/get-data-yamaha-moviestar.php';

		//loop result
		$i=0;
		foreach ($results as $result) {
			echo "<img src='".$result_image->item($i)->nodeValue."'>"."<br/>";
			echo $result_url->item($i)->nodeValue."<br/>";
			echo $result_price->item($i)->nodeValue."<br/>";
			echo $result->nodeValue."<br/>"."<br/>";
	?>	<!--URL untuk select motornya-->
		<form action="../spesifikasi/spesifikasi-yamaha.php" method="post" enctype="multipart/form-data">
			<input type="hidden" name="url_detail" value=<?php echo '"'.$result_url->item($i)->nodeValue.'"' ?>>
			<input type="submit" name="submit" value="Detail">
		</form>

		<form action="../bandingkan/bandingkan.php" method="post" enctype="multipart/form-data">
			<input type="hidden" name="merk" value="yamaha">
			<input type="hidden" name="url1" value=<?php echo '"'.$result_url->item($i)->nodeValue.'"' ?>>
			<input type="submit" name="submit" value="Bandingkan">
		</form>
	<?php
			$i++;
		}	

		//===================cbu===================
		include '../get-data/get-data-yamaha-cbu.php';

		//loop result
		$i=0;
		foreach ($results as $result) {
			echo "<img src='".$result_image->item($i)->nodeValue."'>"."<br/>";
			echo $result_url->item($i)->nodeValue."<br/>";
			echo $result_price->item($i)->nodeValue."<br/>";
			echo $result->nodeValue."<br/>"."<br/>";
	?>	<!--URL untuk select motornya-->
		<form action="../spesifikasi/spesifikasi-yamaha.php" method="post" enctype="multipart/form-data">
			<input type="hidden" name="url_detail" value=<?php echo '"'.$result_url->item($i)->nodeValue.'"' ?>>
			<input type="submit" name="submit" value="Detail">
		</form>

		<form action="../bandingkan/bandingkan.php" method="post" enctype="multipart/form-data">
			<input type="hidden" name="merk" value="yamaha">
			<input type="hidden" name="url1" value=<?php echo '"'.$result_url->item($i)->nodeValue.'"' ?>>
			<input type="submit" name="submit" value="Bandingkan">
		</form>
	<?php
			$i++;
		}

		//===================atv===================
		include '../get-data/get-data-yamaha-atv.php';

		//loop result
		$i=0;
		foreach ($results as $result) {
			echo "<img src='".$result_image->item($i)->nodeValue."'>"."<br/>";
			echo $result_url->item($i)->nodeValue."<br/>";
			echo $result_price->item($i)->nodeValue."<br/>";
			echo $result->nodeValue."<br/>"."<br/>";
	?>	<!--URL untuk select motornya-->
		<form action="../spesifikasi/spesifikasi-yamaha.php" method="post" enctype="multipart/form-data">
			<input type="hidden" name="url_detail" value=<?php echo '"'.$result_url->item($i)->nodeValue.'"' ?>>
			<input type="submit" name="submit" value="Detail">
		</form>

		<form action="../bandingkan/bandingkan.php" method="post" enctype="multipart/form-data">
			<input type="hidden" name="merk" value="yamaha">
			<input type="hidden" name="url1" value=<?php echo '"'.$result_url->item($i)->nodeValue.'"' ?>>
			<input type="submit" name="submit" value="Bandingkan">
		</form>
	<?php
			$i++;
		}		
	?>
