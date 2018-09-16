<?php 
	ini_set('display_errors', 'Off');
	$url = $_POST['url_detail'];
	include '../curl.php';
	include '../dom.php';
	
	$dimensi = $xpath->query('//*[@id="tabs-3"]/table/tr[1]/td[2]');

	$tipe_mesin = $xpath->query('//*[@id="tabs-1"]/table/tr[1]/td[2]');

	$kapasitas_mesin = $xpath->query('//*[@id="tabs-1"]/table/tr[2]/td[2]');

	$sistem_bahan_bakar = $xpath->query('//*[@id="tabs-1"]/table/tr[3]/td[2]');

	$kapasitas_tangki = $xpath->query('//*[@id="tabs-4"]/table/tr[1]/td[2]');

	$tipe_tranmisi = $xpath->query('//div[@id="tabs-1"]/table/tr[5]/td[2]');

?>

<!DOCTYPE html>
<html>
<head>
	<title>Speseifikasi Honda</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/nav.css">
</head>
<body>
	<?php include '../nav.php'; ?>
	<div style="text-align: center;">
		<!-- Image -->
		<?php 
			$detail_image = $xpath->query('div[@class="productImage"]/img/@src'); 
			echo "<img src='".$detail_image->item(0)->nodeValue."' class='img-thumbnail'>";
		?>
		<!-- Name -->
		<h2>Honda <?php echo $_POST['product_name']."<br/>"; ?></h2>
	</div>
	<table class="table table-light table-striped" align="center" style="width: 70%;">
		<tbody>
			<tr>
				<td>Harga</td>
				<td></td>
			</tr>
			<tr>
				<td>Dimensi</td>
				<td><?php echo $dimensi->item(0)->nodeValue; ?></td>
			</tr>
			<tr>
				<td>Tipe Mesin</td>
				<td><?php echo $tipe_mesin->item(0)->nodeValue; ?></td>
			</tr>
			<tr>
				<td>Volume Silinder</td>
				<td><?php echo $kapasitas_mesin->item(0)->nodeValue; ?></td>
			</tr>
			<tr>
				<td>Sistem Bahan Bakar</td>
				<td><?php echo $sistem_bahan_bakar->item(0)->nodeValue; ?></td>
			</tr>
			<tr>
				<td>Kapasitas Tangki</td>
				<td><?php echo $kapasitas_tangki->item(0)->nodeValue; ?></td>
			</tr>
			<tr>
				<td>Tipe Transmisi</td>
				<td><?php echo $tipe_tranmisi->item(0)->nodeValue; ?></td>
			</tr>
		</tbody>
	</table>
</body>
</html>