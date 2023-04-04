<?php 
	$row = mysqli_fetch_row($data['data']);
?>
<div class="content p-2 bg-light d-flex justify-content-center">
	<form class="w-75 p-3 border bg-white" action="http://localhost/<?php echo link;?>/Promotion/Update_Promotion/<?php echo $row[0] ?>" method="post">
		<div class="mb-3 mt-3 d-flex justify-content-center">
			<h3>Cập nhật thông tin khuyến mãi</h3>
		</div>
		<div class=" m-3">
			<label class="form-label my-2">Tên khuyến mãi :</label>
			<input pattern="^{5,200}$" title="Tên khuyến mãi từ 5 đến 200 ký tự " class="form-control " type="text" name="Ten_KM" required value="<?php echo $row[2] ?>">
		</div>
		<div class=" m-3">
			<label class="form-label my-2">Mã khuyến mãi :</label>
			<input pattern="^[\w]{6,10}$" title="Mã khuyến mãi từ 6 đến 10 ký tự và không chứa ký tự đặc biệt" class="form-control " type="text" name="Code_KM" required value="<?php echo $row[1] ?>">
		</div>
		<div class="m-3">
			<label class="form-label my-2">Ngày bắt đầu :</label>
			<input value="<?php echo $row[3] ?>" id="tday" onchange="check();" type="date" class="form-control date " name="NgayBatDau" min="<?php 
					echo $data['tday'];?>" max="<?php echo $data['eday'];?>" title="Thời gian khuyến mãi tối đa 2 năm" required>
		</div>
		<div class="m-3">
			<label class="form-label my-2">Ngày kết thúc :</label>
			<input value="<?php echo $row[4] ?>" id="eday" onchange="check();" type="date" class="form-control date " name="NgayKetThuc" min="<?php 
				echo $data['tday'];?>"max="<?php echo $data['eday'];?>" title="Thời gian khuyến mãi tối đa 2 năm" required>
		</div>
			<span id='message'></span>
		<div class="m-3">
			<label class="form-label my-2">Giá trị khuyến mãi :</label>
		    <select class="form-select" id="sel1" name="GiaTri_KM">
		    	<?php for ($i=5; $i <= 50 ; $i+=5) { ?>
		      	<option value="<?php echo "$i";?>"<?php if ($i==$row[5]) {echo ' selected';}?>><?php echo "$i";?>%</option>
		      	<?php }?>
		    </select>
		</div>
		<div class="m-3 ">
			<button  name="bt_update_promotion" type="submit" class="mt-3 btn btn-primary w-100" >Cập nhật</button> 
		</div>
	</form>
</div>
<script type="text/javascript">
  var check = function() {
  if (document.getElementById('tday').value > document.getElementById('eday').value) {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'Ngày kết thúc phải lớn hơn hoặc bằng ngày bắt đầu';
  } else {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'Hợp lệ';
  }
}
</script>