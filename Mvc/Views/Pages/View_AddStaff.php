<div>
	<div class="p-1 bg-dark d-flex">
		<h4 class="text-white pt-2 me-2 ">Quản lý nhân viên > Thêm nhân viên</h5>
	</div>
	<div class="content p-2 bg-light d-flex justify-content-center">
		<form class="w-75 p-3 border bg-white" action="http://localhost/<?php echo link;?>/Staff/Add_Staff/" method="post">
			<div class="mb-3 mt-3 d-flex justify-content-center">
				<h3>Thêm nhân viên</h3>
			</div>
			<div class=" m-3">
				<label class="form-label my-2">Tên nhân viên :</label>
				<input pattern="^[^\d\b]{3,25}$" title="Tên từ 3 đến 25 ký tự không chứa số và ký tự đặc biệt" class="form-control " type="text" name="Ten_NV" required>
			</div>
			<div class="m-3">
				<label class="form-label my-2">Ngày vào làm :</label>
				<input type="date" class="form-control date " name="NgayVaoLam" min="<?php echo $data['mday']; ?>" max="<?php echo $data['eday']; ?>" required>
			</div>
			<div class="m-3">
				<label  class="form-label my-2">Số điện thoại :</label>
				<input pattern="^[\d]{10,11}$" title="Số điện thoại từ 10 đến 11 số" type="text" class="form-control " name="SDT_NV" required>
			</div>
			<div class="m-3">
				<label class="form-label my-2">Địa chỉ :</label>
				<input pattern="^[\w]{10,100}$" title="Địa chỉ từ 10 đến 100 ký tự không chứa ký tự đặc biệt" type="text" class="form-control " name="DC_NV" required>
			</div>
			<div class="m-3 ">
				<button  name="bt_addstaff" type="submit" class="mt-3 btn btn-primary w-100" >Thêm</button> 
			</div>
		</form>
	</div>
</div>
