<div class="container-fuid p-2  containerr">
	<?php 
		$row_news = mysqli_fetch_row($data['news']);
	?>
	<h2 class="m-2 p-2"><?php echo $row_news[1] ?></h2>
	<p class="m-2 p-2"><?php echo $row_news[4] ?></p>
	<div class="m-2 p-2">
		<img class="img-slide w-75 h-50 m-2 p-2" src="http://localhost/<?php echo link;?>/Public/Image/<?php echo $row_news[3] ?>">
		<p class="m-2 p-2"><?php echo $row_news[2] ?></p>
	</div>
</div>
<?php
require_once "./Mvc/Views/Blocks/Cmt.php";
?>