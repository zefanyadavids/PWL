				<form action=<?php echo '"'.$url_spesifikasi.'"'; ?> method="post" enctype="multipart/form-data" style="margin-bottom: 5px;">
					<input type="hidden" name="url_detail" value=<?php echo '"'.$result_url->item($i)->nodeValue.'"' ?>>
					<input type="hidden" name="product_name" value=<?php echo '"'.$result->nodeValue.'"' ?>>
					<input type="submit" name="submit" value="Detail" class="btn btn-info">
				</form>
				

				<form action="../bandingkan/index.php" method="post" enctype="multipart/form-data">
					<input type="hidden" name="merk1" value=<?php echo '"'.$merk1.'"'; ?>>
					<input type="hidden" name="url1" value=<?php echo '"'.$result_url->item($i)->nodeValue.'"' ?>>
					<input type="submit" name="submit" value="Bandingkan" class="btn btn-dark">
				</form>