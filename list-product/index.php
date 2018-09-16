<!DOCTYPE html>
<html>
<head>
	<title>List Product</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/nav.css">
</head>
<body>
	<?php include '../nav.php'; ?>
	<div class="row" id="product-item" style="margin: 0px 50px;">
		<?php 
		include 'yamaha.php';
		include 'honda.php';
		include 'kawasaki.php';
		?>
		</div>
	</div>
</body>
</html>