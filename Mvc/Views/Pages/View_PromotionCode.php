<div class="container-fuid bg-light containerr">
	<div class="content-news row w-75 mx-auto">
		<div class="mx-auto m-2"> <h2 class="text-center">CODE KHUYẾN MÃI</h2> </div>
		<div class="row p-0 bg-white d-flex justify-content-between ">
			<?php 
					while ($row_code = mysqli_fetch_row($data['list_code'])) {
				?>
			<div class="col-6 border ">
				<div class="h-50  p-4 mx-auto d-flex align-items-center" >
					<h3 class="text-primary mx-auto">Code : <?php echo $row_code[1];?></h3>
				</div>
				<div class="m-3">
					<h5><?php echo $row_code[2];?></h5>
					<div>Giảm giá hóa đơn <?php echo $row_code[5];?>% từ <?php echo $row_code[3];?> đến <?php echo $row_code[4];?></div>
				</div>
			</div>
			<?php		
					}
				?>
		</div>
	</div>
</div>