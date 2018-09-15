				<form action="compare-result.php" method="post" enctype="multipart/form-data">
					<input type="hidden" name="merk1" value=<?php echo '"'.$merk1.'"' ?>>
					<input type="hidden" name="url1" value=<?php echo '"'.$url1.'"' ?>>
					<input type="hidden" name="merk2" value=<?php echo '"'.$merk2.'"' ?>>
					<input type="hidden" name="url2" value=<?php echo '"'.$result_url->item($i)->nodeValue.'"' ?>>
					<input type="submit" name="submit" value="Bandingkan" class="btn btn-dark">
				</form>