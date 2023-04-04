<?php
    $link = link;
    if (!isset($_SESSION['admin'])) {
        header("Location:http://localhost/$link/Login/");
    }
?>
<div class=" col-lg clearfix border border-top-1 text-white bg-dark">
  <span class="float-start ms-1 p-1">Xin chào : <?php echo $_SESSION['admin'][1]; ?></span>
  <span class="float-end me-1 p-1"><a class="text-white" href="http://localhost/<?php echo link;?>/Logout/Show/a">Đăng xuất</a></span>
</div>