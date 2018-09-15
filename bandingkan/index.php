<?php  
	$url1 = $_POST['url1'];
	$merk1 = $_POST['merk1'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Compare</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body style="margin: 0px 50px;">
	<div class="row" id="product-item">
	<?php
		include 'yamaha.php';
		include 'honda.php';  
		include 'kawasaki.php';
	?>
	</div>
</body>
</html>