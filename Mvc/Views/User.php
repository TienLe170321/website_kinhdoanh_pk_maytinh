<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
	<title></title>
</head>
<body>
	<div>
		<?php 
		require_once "./Mvc/Views/Blocks/Head.php";
		require_once "./Mvc/Views/Pages/".$data["Page"].".php"; 
		require_once "./Mvc/Views/Blocks/Footer.php";
		?>
	</div>
</body>
<script type="text/javascript">
  var check = function() {
  if (document.getElementById('new_pass').value == document.getElementById('re_pass').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'Hợp lệ';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'Mật khẩu xác nhận không khớp với mật khẩu';
  }
}
</script>
</html>