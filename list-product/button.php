				<form action=<?php echo "'".$url_spesifikasi."'"; ?> method="post" enctype="multipart/form-data">
					<input type="hidden" name="url_detail" value=<?php echo '"'.$result_url->item($i)->nodeValue.'"' ?>>
					<input type="submit" name="submit" value="Detail">
				</form>

				<form action="../bandingkan/bandingkan.php" method="post" enctype="multipart/form-data">
					<input type="hidden" name="merk1" value=<?php echo '"'.$merk1.'"' ?>>
					<input type="hidden" name="url1" value=<?php echo '"'.$result_url->item($i)->nodeValue.'"' ?>>
					<input type="submit" name="submit" value="Bandingkan">
				</form>