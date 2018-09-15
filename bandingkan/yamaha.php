
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
			?>
			<div class="col-md-2" class="product-item">
				<div class="card" style="text-align: center;">
					<?php
					echo "<img src='".$result_image->item($i)->nodeValue."' class='img-thumbnail'>"."<br/>";
					?> <span class="product-name"> <?php echo $result->nodeValue."<br/>";?> </span> <?php
					$url_spesifikasi = "../spesifikasi/spesifikasi-yamaha.php";
					$merk2 = "yamaha";
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
		//===================matic end===================	

		//===================maxi===================
		include '../get-data/get-data-yamaha-maxi.php';

		//loop result
		$i=0;
		foreach ($results as $result) {
			?>
			<div class="col-md-2" class="product-item">
				<div class="card" style="text-align: center;">
					<?php
					echo "<img src='".$result_image->item($i)->nodeValue."' class='img-thumbnail'>"."<br/>";
					?> <span class="product-name"> <?php echo $result->nodeValue."<br/>";?> </span> <?php
					$url_spesifikasi = "../spesifikasi/spesifikasi-yamaha.php";
					$merk2 = "yamaha";
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

		//===================naked bike===================
		include '../get-data/get-data-yamaha-naked.php';

		//loop result
		$i=0;
		foreach ($results as $result) {
			?>
			<div class="col-md-2" class="product-item">
				<div class="card" style="text-align: center;">
					<?php
					echo "<img src='".$result_image->item($i)->nodeValue."' class='img-thumbnail'>"."<br/>";
					?> <span class="product-name"> <?php echo $result->nodeValue."<br/>";?> </span> <?php
					$url_spesifikasi = "../spesifikasi/spesifikasi-yamaha.php";
					$merk2 = "yamaha";
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

		//===================sport===================
		include '../get-data/get-data-yamaha-sport.php';

		//loop result
		$i=0;
		foreach ($results as $result) {
			?>
			<div class="col-md-2" class="product-item">
				<div class="card" style="text-align: center;">
					<?php
					echo "<img src='".$result_image->item($i)->nodeValue."' class='img-thumbnail'>"."<br/>";
					?> <span class="product-name"> <?php echo $result->nodeValue."<br/>";?> </span> <?php
					$url_spesifikasi = "../spesifikasi/spesifikasi-yamaha.php";
					$merk2 = "yamaha";
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

		//===================moviestar===================
		include '../get-data/get-data-yamaha-moviestar.php';

		//loop result
		$i=0;
		foreach ($results as $result) {
			?>
			<div class="col-md-2" class="product-item">
				<div class="card" style="text-align: center;">
					<?php
					echo "<img src='".$result_image->item($i)->nodeValue."' class='img-thumbnail'>"."<br/>";
					?> <span class="product-name"> <?php echo $result->nodeValue."<br/>";?> </span> <?php
					$url_spesifikasi = "../spesifikasi/spesifikasi-yamaha.php";
					$merk2 = "yamaha";
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

		//===================cbu===================
		include '../get-data/get-data-yamaha-cbu.php';

		//loop result
		$i=0;
		foreach ($results as $result) {
			?>
			<div class="col-md-2" class="product-item">
				<div class="card" style="text-align: center;">
					<?php
					echo "<img src='".$result_image->item($i)->nodeValue."' class='img-thumbnail'>"."<br/>";
					?> <span class="product-name"> <?php echo $result->nodeValue."<br/>";?> </span> <?php
					$url_spesifikasi = "../spesifikasi/spesifikasi-yamaha.php";
					$merk2 = "yamaha";
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

		//===================atv===================
		include '../get-data/get-data-yamaha-atv.php';

		//loop result
		$i=0;
		foreach ($results as $result) {
			?>
			<div class="col-md-2" class="product-item">
				<div class="card" style="text-align: center;">
					<?php
					echo "<img src='".$result_image->item($i)->nodeValue."' class='img-thumbnail'>"."<br/>";
					?> <span class="product-name"> <?php echo $result->nodeValue."<br/>";?> </span> <?php
					$url_spesifikasi = "../spesifikasi/spesifikasi-yamaha.php";
					$merk2 = "yamaha";
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
	?>