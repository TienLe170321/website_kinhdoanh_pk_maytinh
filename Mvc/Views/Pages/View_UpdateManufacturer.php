<div>
	<div class="p-1 bg-dark d-flex justify-content-center">
		<h4 class="text-white pt-2 me-2 ">Cập nhật thương hiệu</h5>
	</div>
	<div class="content p-2 bg-light d-flex justify-content-center">
		<?php 
			$row = mysqli_fetch_row($data["TH"])
		?>
		<form class="w-75 border p-3 bg-white" action="http://localhost/<?php echo link;?>/Manufacturer/Update_Manufacturer/<?php echo $row[0] ?>" method="post">
			<div class="mb-3 mt-3 d-flex justify-content-center">
				<h3>Thương hiệu</h3>
			</div>
			<div class="mb-3 mt-3">
				<label class="form-label">Tên thương hiệu :</label>
				<input pattern="^[^\d\b]{3,25}$" title="Tên từ 3 đến 25 ký tự không chứa số và ký tự đặc biệt" class="form-control" type="text" name="Manu_Name" required value="<?php echo $row[1] ?>">
			</div>
			<div class="mb-3 mt-3">
				<button  name="bt_update_manu" type="submit" class="btn btn-primary m-1 w-100" >Cập nhật</button> 
			</div>
		</form>
	</div>
</div>
