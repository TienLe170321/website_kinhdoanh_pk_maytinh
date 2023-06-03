<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" type="text/css" href="http://localhost/<?php echo link ?>/Public/css/Admin.css">
	<title></title>
</head>
<body>
	<div class="container-fluid  ">
		<div class="row ">
			<?php require_once "./Mvc/Views/Blocks/Admin_Top.php"; ?>
		</div>
		<div class="row">
			<div class="col-lg-2 p-0 bg-light">
				<?php require_once "./Mvc/Views/Blocks/Admin_Menu.php"; ?>
			</div>
			<div class="col-lg-10 p-0 ">
				<?php require_once "./Mvc/Views/Pages/".$data["Page"].".php"; ?>
			</div>
		</div>
		<?php
			require_once "./Mvc/Views/Blocks/Footer.php";
		?>
	</div>
</body>
</html>