	<?php 
		ini_set('display_errors', 'Off');

		//=============street=================
		$url = "http://product.kawasaki-motor.co.id/street.html";
		include '../curl.php';
		include '../dom.php';
		include '../get-data/get-data-kawasaki.php';

		//loop result
		$i=0;
		foreach ($results as $result) {
			?>
			<div class="col-md-2">
				<div class="card" style="text-align: center;">
					<?php
					echo "<img src='".$result_image->item($i)->nodeValue."' class='img-thumbnail'>"."<br/>";
					echo $result->nodeValue."<br/>"."<br/>";
					$url_spesifikasi = "../spesifikasi/spesifikasi-kawasaki.php";
					$merk2 = "kawasaki";
					?>	
					<!--URL untuk select motornya-->
					<?php  
					include 'button.php';
					?>
				</div>
			</div>
			<?php
			$i++;
		}
		//=============street end=================
	?>