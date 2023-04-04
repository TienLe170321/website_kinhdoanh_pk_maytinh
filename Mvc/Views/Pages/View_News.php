<div class="container-fluid bg-light">
	<div class="mx-auto m-2"> <h2 class="text-center">BẢNG TIN G2T</h2> </div>
	<div class="w-75 mx-auto border bg-white containerr">
		<?php
			while ($row_news = mysqli_fetch_row($data['list_news'])) {
		?>

		<div class="row border-bottom p-2 m-1 ">
			<img class=" col-3 img-fluid imgnew float-end" src="http://localhost/<?php echo link;?>/Public/Image/<?php echo "$row_news[3]"?>">
			<div class="col-8">
				<a class="nav-link" href="http://localhost/<?php echo link;?>/News/Detail_New/<?php echo "$row_news[0]" ?>"><h5><?php echo "$row_news[1]" ?></h5></a>
				<p><?php echo "$row_news[4]" ?></p>
			</div>
		</div>
		<?php
			}
		?>
	</div>
</div>