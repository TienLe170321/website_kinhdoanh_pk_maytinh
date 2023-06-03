<?php 
	$row_ct = mysqli_fetch_row($data["ctsp"]);
?>

<div class="row p-3  bg-white ">
	<h2 class="text-center p-3 text-primary ">CHI TIẾT PHỤ KIỆN</h2>
	<div class="col-6 ">
		<img class=" img-fluid " src="http://localhost/<?php echo link;?>/Public/Image/<?php echo $row_ct[3]?>">	
	</div>
	<div class="col-6 ">
		<div class="border bg-light mb-2">
			<p class=" h4 text-info text-center">Thông tin phụ kiện</p>
			<div class="row shadow-sm p-3 m-3 bg-white">Tên phụ kiện :<?php echo $row_ct[1]?></div>
			<div class="row shadow-sm p-3 m-3 bg-white ">Thương hiệu : <?php echo $row_ct[6]?></div>
			<div class="row shadow-sm p-3 m-3 bg-white ">Loại : <?php echo $row_ct[5]?></div>
			<div class="row shadow-sm p-3 m-3 bg-white ">Giá : <?php echo $row_ct[2]?>  đ</div>
			<div class="row shadow-sm p-3 m-3 bg-white ">Thông số kỹ thuật :<?php echo $row_ct[4]?> </div>
		</div>
		<form class="border bg-light mb-2" action="http://localhost/<?php echo link;?>/Cart/Add_Gear/" method="post">
			<p class=" h4 text-info text-center">Thêm vào giỏ hàng</p>
			<div class="row shadow-sm p-2 m-2  bg-white ">
				<label for="sl" >Số lượng :</label>
				<input class=" ms-2 " type="number" id="sl" name="sl" value="1" min="1" max="10">
			</div>
			<input type="hidden" name="Ma_PK" value="<?php echo $row_ct[0]?>">
			<input type="hidden" name="Ten_PK" value="<?php echo $row_ct[1]?>">
			<input type="hidden" name="Gia_PK" value="<?php echo $row_ct[2]?>">
			<div class="row shadow-sm p-2 m-2 bg-white "><button class="btn btn-primary" type="submit" name="bt_add_cart">Thêm vào giỏ hàng</button></div>
		</form>


	</div>
</div>