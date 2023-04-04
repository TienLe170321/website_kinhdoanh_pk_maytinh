<?php 
	$row = mysqli_fetch_row($data["PK_Loai"]);
?>
<div class="p-1 bg-dark d-flex justify-content-center">
	<h4 class="text-white pt-2 me-2 ">Cập nhật loại phụ kiện</h5>
</div>
<div class="content p-2 bg-light d-flex justify-content-center">
	<form class="w-75 border p-3 bg-white" action="http://localhost/<?php echo link;?>/Category/Update_Category/<?php echo $row[0]?>" method="post">
		<div class="mb-3 mt-3 d-flex justify-content-center">
			<h3>Loại phụ kiện</h3>
		</div>
		<div class="mb-3 mt-3">
			<label class="form-label">Tên loại phụ kiện :</label>
			<input pattern="^[^\d\b]{3,25}$" title="Tên từ 3 đến 25 ký tự không chứa số và ký tự đặc biệt" class="form-control" type="text" name="PK_Name" value="<?php echo $row[1]?>" required>
		</div>
		<div class="mb-3 mt-3">
			<label class="form-label">Ghi chú :</label>
			<textarea class="form-control" name="PK_Note"><?php echo $row[2]?></textarea>
		</div>
		<div class="mb-3 mt-3">
			<button  name="bt_update_category" type="submit" class="btn btn-primary m-1 w-100" >Cập nhật</button> 
		</div>
	</form>
</div>