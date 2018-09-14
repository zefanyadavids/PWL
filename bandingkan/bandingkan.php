<?php  
	$url1 = $_POST['url1'];
	$merk1 = $_POST['merk'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>List Product</title>
	<style type="text/css">
		img {
			height: 100px;
		}
	</style>
</head>
<body>
	<div id="yamaha">
	<?php  
		//=============yamaha=============
		include 'yamaha.php';
	?>
	</div>
	<div id="honda">
	<?php
		//=============honda=============
		include 'honda.php';  
	?>
	</div>
	<div id="kawasaki">
	<?php  
		//=============kawasaki=============
		include 'kawasaki.php';
	?>
	</div>
</body>
</html>