<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" type="text/css" href="http://localhost/<?php echo link;?>/Public/css/Home.css">
	<title></title>
</head>
<body>
	<div class="container-fluid">
		<?php
			require_once "./Mvc/Views/Blocks/Head.php";
			require_once "./Mvc/Views/Blocks/Menu.php";
			require_once "./Mvc/Views/Pages/".$data["Page"].".php";
			require_once "./Mvc/Views/Blocks/Cmt.php";
			require_once "./Mvc/Views/Blocks/Footer.php";
		?>
	</div>
	
</body>
</html>