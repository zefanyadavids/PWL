<?php 
	ini_set('display_errors', 'Off');
	$url = $_POST['url_detail'];
	include '../curl.php';
	include '../dom.php';

	$dimensi = $xpath->query('//*[@id="specification"]/section/div[1]/div/section[1]/div[2]/table/tr[1]/td[2]');

	$tipe_mesin = $xpath->query('//*[@id="specification"]/section/div[1]/section/div[2]/table/tr[1]/td[2]');

	$volume_silinder = $xpath->query('//*[@id="specification"]/section/div[1]/section/div[2]/table/tr[5]/td[2]');

	$sistem_bahan_bakar = $xpath->query('//*[@id="specification"]/section/div[1]/section/div[2]/table/tr[11]/td[2]');

	$kapasitas_tangki = $xpath->query('//*[@id="specification"]/section/div[1]/div/section[1]/div[2]/table/tr[6]/td[2]');

	$tipe_tranmisi = $xpath->query('//*[@id="specification"]/section/div[1]/section/div[2]/table/tr[13]/td[2]');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Detail Yamaha</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="margin: 0px 50px;">
	<div style="text-align: center;">
		<!-- Image -->
		<?php 
			$detail_image = $xpath->query('//*[@id="sync1"]/div/div/div[1]/div/img/@src'); 

			//echo "<img src='".$detail_image->item(0)->nodeValue."' class='img-thumbnail'>";
		?>
		<img src=<?php echo "'".$detail_image->item(0)->nodeValue."'"; ?> class='img-thumbnail'>
		<!-- Name -->
		<h2>Yamaha <?php echo $_POST['product_name']."<br/>"; ?></h2>
		<!-- Price -->
		<?php $harga = $xpath->query('//*[@id="target-scroll"]/div/div/div[2]/div/ul[1]/li[1]/p'); ?>
		<h3><?php echo $harga->item(0)->nodeValue."<br/>"; ?></h3>
	</div>
	
	<table class="table table-light table-striped" align="center" style="width: 70%">
		<tbody>
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
				<td><?php echo $volume_silinder->item(0)->nodeValue; ?></td>
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