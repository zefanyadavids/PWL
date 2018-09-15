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
			?>
			<div class="col-md-2">
				<div class="card" style="text-align: center;">
					<?php
					echo "<img src='".$result_image->item($i)->nodeValue."' class='img-thumbnail'>"."<br/>";
					echo $result->nodeValue."<br/>"."<br/>";
					$url_spesifikasi = "../spesifikasi/spesifikasi-honda-sport-cub.php";
					$merk1 = "honda";
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
		//=============cub end=================

		//=============matic=================
		$url = "http://www.astra-honda.com/product-list/matic";
		include '../curl.php';
		include '../dom.php';
		include '../get-data/get-data-honda.php';

		//loop result
		$i=0;
		foreach ($results as $result) {
			?>
			<div class="col-md-2">
				<div class="card" style="text-align: center;">
					<?php
					echo "<img src='".$result_image->item($i)->nodeValue."' class='img-thumbnail'>"."<br/>";
					echo $result->nodeValue."<br/>"."<br/>";
					$url_spesifikasi = "../spesifikasi/spesifikasi-honda-matic.php";
					$merk1 = "honda";
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
		//=============matic end=================

		//=============sport=================
		$url = "http://www.astra-honda.com/product-list/sport";
		include '../curl.php';
		include '../dom.php';
		include '../get-data/get-data-honda.php';

		//loop result
		$i=0;
		foreach ($results as $result) {
			?>
			<div class="col-md-2">
				<div class="card" style="text-align: center;">
					<?php
					echo "<img src='".$result_image->item($i)->nodeValue."' class='img-thumbnail'>"."<br/>";
					echo $result->nodeValue."<br/>"."<br/>";
					$url_spesifikasi = "../spesifikasi/spesifikasi-honda-sport-cub.php";
					$merk1 = "honda";
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
		//=============sport end=================
	?>