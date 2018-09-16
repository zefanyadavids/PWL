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
			<div class="col-md-2 product-item honda cub">
				<div class="card">
					<?php
					echo "<img src='".$result_image->item($i)->nodeValue."' class='img-thumbnail'>"."<br/>";
					?> <span class="product-name"> <?php echo $result->nodeValue."<br/>";?> </span> <?php
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
			<div class="col-md-2 product-item honda matic">
				<div class="card">
					<?php
					echo "<img src='".$result_image->item($i)->nodeValue."' class='img-thumbnail'>"."<br/>";
					?> <span class="product-name"> <?php echo $result->nodeValue."<br/>";?> </span> <?php
					$url_spesifikasi = "../spesifikasi/spesifikasi-honda-matic.php";
					$merk1 = "honda_matic";
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
			<div class="col-md-2 product-item honda sport">
				<div class="card">
					<div class="card-content">	
						<?php
						echo "<img src='".$result_image->item($i)->nodeValue."' class='img-thumbnail'>"."<br/>";
						?> <span class="product-name"> <?php echo $result->nodeValue."<br/>";?> </span> <?php
						$url_spesifikasi = "../spesifikasi/spesifikasi-honda-sport-cub.php";
						$merk1 = "honda";
						?>	
						<!--URL untuk select motornya-->
						<?php  
						include 'button.php';
						?>
					</div>
				</div>
			</div>
			<?php
			$i++;
		}
		//=============sport end=================
	?>