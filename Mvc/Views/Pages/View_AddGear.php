<div class="p-2 bg-dark ">
	<h4 class="text-white pt-2 me-2 ">Quản lý phụ kiện > Thêm phụ kiện</h5>
</div>
<div class="content p-2 bg-light d-flex justify-content-center">
		<form class="w-75 border p-3 bg-white" action="http://localhost/<?php echo link;?>/Gear/Add_Gear/" method="post">
			<div class="mb-3 mt-3 d-flex justify-content-center">
				<h3>Thêm phụ kiện</h3>
			</div>
			<div class="mb-3 mt-3 row ">
				<div class="col">
					<label class="form-label ">Tên phụ kiện :</label>
					<input pattern="^[^\b]{3,50}$" title="Tên từ 3 đến 50 ký tự, không chứa ký tự đặc biệt" class="form-control" type="text" name="PK_Name" required>
				</div>
				<div class="col">
					<label class="form-label">Giá phụ kiện :</label>
					<input pattern="^[0-9]{1,15}$" title="Giá là số từ 1 đến 15 ký tự" class="form-control" type="text" name="PK_Cost" required>
				</div>
			</div>
			<div class="mb-3 mt-3 row">
				<div class=" col">
					<label class="form-label">Hình ảnh :</label>
					<input type="file" class="form-control" name="PK_Img" accept="image/*">
				</div>
				<div class="col ">
					<label class="form-label">Loại phụ kiện :</label>
					<select class="form-select" aria-label="Default select example" name="L_PK">
  						<?php 
  							while ($row = mysqli_fetch_row($data["Cate"])) {
  						?>
  						<option value="<?php echo $row[0] ?>"><?php echo $row[1] ?></option>
  						<?php
				            }
				        ?>
					</select>
				</div>
			</div>
			<div class="mb-3 mt-3">
				<label class="form-label">Thương hiệu :</label>
					<select class="form-select" aria-label="Default select example" name="manufacturer">
  						<?php 
  							while ($row1 = mysqli_fetch_row($data["Manu"])) {
  						?>
  						<option value="<?php echo $row1[0] ?>"><?php echo $row1[1] ?></option>
  						<?php
				            }
				        ?>
					</select>
			</div>
			<div class="mb-3 mt-3">
				<label class="form-label">Thông số kỹ thuật :</label>
				<textarea class="form-control" name="PK_TSKT"></textarea>
			</div>
			<div class="mb-3 mt-3">
				<button  name="bt_addgear" type="submit" class="btn btn-primary m-1 w-100" >Thêm</button> 
			</div>
		</form>
	</div>