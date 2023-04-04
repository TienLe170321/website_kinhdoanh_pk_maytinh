<?php 
	$row = mysqli_fetch_row($data["Tai_Khoan"]);
?>
<div class="p-1 bg-dark d-flex justify-content-center">
	<h4 class="text-white pt-2 me-2 ">Cập nhật tài khoản</h5>
</div>
<div class="content p-2 bg-light d-flex justify-content-center">
	<form class="w-75 border p-3 bg-white" action="http://localhost/<?php echo link;?>/Accout/Update_Accout/<?php echo $row[1]?>" method="post">
		<div class="mb-3 mt-3 d-flex justify-content-center">
			<h3>Tài khoản <?php echo $row[1]?></h3>
		</div>
		<div class="mb-3 mt-3">
			<label class="form-label">Họ và tên :</label>
			<input pattern="^[a-zA-Z\s]{3,25}$" title="Họ tên từ 3 đến 25 ký tự không chứa số, dấu và ký tự đặc biệt" class="form-control" type="text" name="Name" value="<?php echo $row[0]?>" required>
		</div>
		<div class="mb-3 mt-3">
			<label class="form-label">Quyền :</label>
			<select class="form-select" id="sel1" name="Permission">
				<?php echo $row[2] ?>
		      <option value="A" <?php if ($row[2]=='A') {echo 'selected';}?>>Admin</option>
		      <option value="U"<?php if ($row[2]=='U') {echo 'selected';}?>>User</option>
		      <option value="S" <?php if ($row[2]=='S') {echo 'selected';}?>>Staff</option>
		    </select>
		</div>
		<div class="mb-3 mt-3">
			<button  name="bt_uaccout" type="submit" class="btn btn-primary m-1 w-100" >Cập nhật</button> 
		</div>
	</form>
</div>