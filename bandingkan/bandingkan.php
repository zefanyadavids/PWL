<?php  
	$url1 = $_POST['url1'];
	$merk1 = $_POST['merk'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Compare</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<style type="text/css">
		img {
			height: 100px;
		}
	</style>
</head>
<body>
	<div class="row">
	<?php  
		include 'yamaha.php';
		include 'honda.php';  
		include 'kawasaki.php';
	?>
	</div>
</body>
</html>