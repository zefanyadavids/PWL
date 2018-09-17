<?php  
	$url1 = $_POST['url1'];
	$merk1 = $_POST['merk1'];
	$name1 = $_POST['product_name1'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>List Product</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/nav.css">
	<script src="../js/jquery.min.js"></script>
	<script src="../js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript">
		function yamaha () {
			$('.matic').show();
			$('.sport').show();
			$('.cub').show();
			$('.atv').show();
			$('.yamaha').show();
			$('.kawasaki').hide();
			$('.honda').hide();
		}
		function kawasaki () {
			$('.matic').show();
			$('.sport').show();
			$('.cub').show();
			$('.atv').show();
			$('.yamaha').hide();
			$('.kawasaki').show();
			$('.honda').hide();
		}
		function honda () {
			$('.matic').show();
			$('.sport').show();
			$('.cub').show();
			$('.atv').show();
			$('.yamaha').hide();
			$('.kawasaki').hide();
			$('.honda').show();
		}
		function matic() {
			$('.yamaha').show();
			$('.kawasaki').show();
			$('.honda').show();
			$('.matic').show();
			$('.sport').hide();
			$('.cub').hide();
			$('.atv').hide();
		}
		function sport() {
			$('.yamaha').show();
			$('.kawasaki').show();
			$('.honda').show();
			$('.matic').hide();
			$('.sport').show();
			$('.cub').hide();
			$('.atv').hide();
		}
		function cub() {
			$('.yamaha').show();
			$('.kawasaki').show();
			$('.honda').show();
			$('.matic').hide();
			$('.sport').hide();
			$('.cub').show();
			$('.atv').hide();
		}
		function atv() {
			$('.yamaha').show();
			$('.kawasaki').show();
			$('.honda').show();
			$('.matic').hide();
			$('.sport').hide();
			$('.cub').hide();
			$('.atv').show();
		}
	</script>
</head>
<body>
	<?php include '../nav.php'; ?>
	<?php include 'nav-filter.php'; ?>
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