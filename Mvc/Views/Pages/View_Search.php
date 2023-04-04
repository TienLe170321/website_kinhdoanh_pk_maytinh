<div class="container-fuid containerr ">
	<div class=" row content w-75 mx-auto m-2 border " >
		<div class="row mx-auto text-white bg-info">
			<h3><?php echo "KẾT QUẢ TÌM KIẾM" ?></h3>	
		</div>
		<div class="row">
			<?php
			if (isset($data['List_Gear'])) {
				while ($row = mysqli_fetch_row($data['List_Gear'])) {
			?>
			<div class="col product m-1 pt-2 border">
				<div class="img">
					<img class="product_img" src="http://localhost/<?php echo link;?>/Public/Image/<?php echo "$row[3]" ?>">
				</div>
				<div>
					<h5><?php echo "$row[4]" ?></h5>
					<a class="nav-link" href="http://localhost/<?php echo link;?>/Gear/Gear_Detail/<?php echo $row[0] ?>"><?php echo "$row[1]" ?></a>
					<p><?php echo "$row[2]" ?>₫</p>
				</div>
			</div>
			<?php
					}
				}
			?>
		</div>
	</div>
</div>