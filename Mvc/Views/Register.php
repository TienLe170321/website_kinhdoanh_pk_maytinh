<!DOCTYPE html>
<html lang="en">
<head>
  <title>Đăng ký</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="http://localhost/<?php echo link;?>/Public/css/Register.css"> 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body style="background-image: url('http://localhost/<?php echo link;?>/Public/Image/cáp quang_ (18).jpg') ">
	<?php  require_once "./Mvc/Views/Pages/".$data["Page"].".php"; ?>
</body>
<script type="text/javascript">
  var check = function() {
  if (document.getElementById('pwd').value == document.getElementById('repwd').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'Hợp lệ';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'Mật khẩu xác nhận không khớp với mật khẩu';
  }
}
</script>
</html>