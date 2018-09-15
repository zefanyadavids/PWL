
<?php 
	ini_set('display_errors', 'Off');
	$url = "http://product.kawasaki-motor.co.id/".$_POST['url_detail'];
	include '../curl.php';
	include '../dom.php';

	$row = $xpath->query('/html/body/div[1]/div/div/div[4]/div[4]/div[4]/table/tr/td[1]');
	$i=0;
	foreach ($row as $result) {
		if($row->item($i)->nodeValue=="Panjang x Lebar x Tinggi") {
			$i++;
			$dimensi = $xpath->query('/html/body/div[1]/div/div/div[4]/div[4]/div[4]/table/tr['.$i.']/td[2]');
		}
		$i++;
	}

	$i=0;
	foreach ($row as $result) {
		if($row->item($i)->nodeValue=="Tipe") {
			$i++;
			$tipe_mesin = $xpath->query('/html/body/div[1]/div/div/div[4]/div[4]/div[4]/table/tr['.$i.']/td[2]');
		}
		$i++;
	}

	$i=0;
	foreach ($row as $result) {
		if($row->item($i)->nodeValue=="Volume Silinder") {
			$i++;
			$volume_silinder = $xpath->query('/html/body/div[1]/div/div/div[4]/div[4]/div[4]/table/tr['.$i.']/td[2]');
		}
		$i++;
	}

	$i=0;
	foreach ($row as $result) {
		if($row->item($i)->nodeValue=="Sistem Bahan Bakar") {
			$i++;
			$sistem_bahan_bakar = $xpath->query('/html/body/div[1]/div/div/div[4]/div[4]/div[4]/table/tr['.$i.']/td[2]');
		}
		$i++;
	}

	$i=0;
	foreach ($row as $result) {
		if($row->item($i)->nodeValue=="Kapasitas Bensin") {
			$i++;
			$kapasitas_tangki = $xpath->query('/html/body/div[1]/div/div/div[4]/div[4]/div[4]/table/tr['.$i.']/td[2]');
		}
		$i++;
	}

	$i=0;
	foreach ($row as $result) {
		if($row->item($i)->nodeValue=="Jumlah Transmisi") {
			$i++;
			$tipe_tranmisi = $xpath->query('/html/body/div[1]/div/div/div[4]/div[4]/div[4]/table/tr['.$i.']/td[2]');
		}
		$i++;
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Detail Kawasaki</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="margin: 0px 50px;">
	<div style="text-align: center;">
		<!-- Image -->
		<?php 
			$detail_image = $xpath->query('//*[@id="bigimg-0"]/div/img/@src'); 
			echo "<img src='".$detail_image->item(0)->nodeValue."' class='img-thumbnail'>";
		?>
		<!-- Name -->
		<h2>Kawasaki <?php echo $_POST['product_name']."<br/>"; ?></h2>
		<!-- Price -->
		<?php $harga = $xpath->query('/html/body/div[1]/div/div/div[4]/div[4]/div[2]/strong'); ?>
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