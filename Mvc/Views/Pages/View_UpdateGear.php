<?php 
	$row1 = mysqli_fetch_row($data['Gear'])
?>
<div class="p-2 bg-dark ">
	<h4 class="text-white pt-2 me-2 ">Quản lý phụ kiện > Cập nhật phụ kiện</h5>
</div>
<div class="content p-2 bg-light d-flex justify-content-center">
		<form class="w-75 border p-3 bg-white" action="http://localhost/<?php echo link;?>/Gear/Update_Gear_Id/<?php echo $row1[0] ?>" method="post" >
			<div class="mb-3 mt-3 d-flex justify-content-center">
				<h3>Cập nhật phụ kiện</h3>
			</div>
			<div class="mb-3 mt-3 row ">
				
				<div class="col">
					<input type="hidden" name="Old_Img" value="<?php echo $row1[3] ?>">
					<label class="form-label ">Tên phụ kiện :</label>
					<input pattern="^[^\d\b]{3,50}$" title="Tên từ 3 đến 50 ký tự không chứa số và ký tự đặc biệt" class="form-control" type="text" name="PK_Name" required value="<?php echo $row1[1] ?>">
				</div>
				<div class="col">
					<label class="form-label">Giá phụ kiện :</label>
					<input pattern="^[0-9]{1,15}$" title="Giá là số từ 1 đến 15 ký tự" class="form-control" type="text" name="PK_Cost" required value="<?php echo $row1[4] ?>">
				</div>
			</div>
			<div class="mb-3 mt-3 row">
				<div class="col ">
					<label class="form-label">Hình ảnh :</label>
					<img class=" h-75 img-fluid" src="http://localhost/<?php echo link;?>/Public/Image/<?php echo $row1[3] ?>">
				</div>
				<div class="col">
					<label class="form-label">Thông số kỹ thuật :</label>
					<textarea class="form-control h-75" name="PK_TSKT"><?php echo $row1[2] ?></textarea>
				</div>
			</div>
			<div class="mb-3 row">
				<div class=" col">
					<label class="form-label">Chọn ảnh mới :</label>
					<input type="file" class="form-control" name="PK_Img" accept="image/*">
				</div>
				<div class="col ">
					<label class="form-label">Loại phụ kiện :</label>
					<select class="form-select" aria-label="Default select example" name="L_PK">
  						<?php 
  							while ($row = mysqli_fetch_row($data["Cate"])) {
  						?>
  						<option value="<?php echo "$row[0]" ?>" <?php if ($row[0]==$row1[5]) {echo"selected";} ?>><?php echo $row[1] ?></option>
  						<?php
				            }
				        ?>
					</select>
				</div>
			</div>
			<div class="mb-3 row">
				<div class="col">
					<label class="form-label">Thương hiệu :</label>
					<select class="form-select" aria-label="Default select example" name="manufacturer">
  						<?php 
  							while ($row2 = mysqli_fetch_row($data["Manu"])) {
  						?>
  						<option value="<?php echo "$row2[0]" ?>" <?php if ($row2[0]==$row1[7]) {echo"selected";} ?>><?php echo $row2[1] ?></option>
  						<?php
				            }
				            echo "$row2[0]---$row1[6]";
				        ?>
					</select>
				</div>
			</div>
			<div class="mb-3 mt-3">
				<button  name="bt_updategear" type="submit" class="btn btn-primary m-1 w-100" >Cập nhật</button> 
			</div>
		</form>
	</div>