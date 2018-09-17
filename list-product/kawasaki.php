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
			<div class="col-md-2 sport kawasaki">
				<div class="card">
					<?php
					echo "<img src='".$result_image->item($i)->nodeValue."' class='img-thumbnail'>"."<br/>";
					?> <span class="product-name"> <?php echo $result->nodeValue."<br/>";?> </span> <?php
					$url_spesifikasi = "../spesifikasi/spesifikasi-kawasaki.php";
					$merk1 = "kawasaki";
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