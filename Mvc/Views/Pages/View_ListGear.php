<div class="container-fuid containerr ">
	<div class=" row content w-75 mx-auto m-2 border ">
		<div class="row mx-auto text-white bg-info">
			<?php 
				$row_cate1 = mysqli_fetch_row($data['Cate_name'])
			?>
			<h3><?php echo $row_cate1[0]; ?></h3>	
		</div>
		<div class="row">
			<?php
				while ($row = mysqli_fetch_row($data['List_Gear'])) {
			?>
			<div class="col product1 m-1 border">
				<div class="img">
					<img class="product_img img-fluid" src="http://localhost/<?php echo link;?>/Public/Image/<?php echo "$row[3]" ?>">
				</div>
				<div>
					<h5><?php echo "$row[4]" ?></h5>
					<a class="nav-link" href="http://localhost/<?php echo link;?>/Gear/Gear_Detail/<?php echo $row[0] ?>"><?php echo "$row[1]" ?></a>
					<p><?php echo number_format($row[2])  ?>₫</p>
				</div>
			</div>
			<?php
				}
			?>
		</div>
	</div>
</div>