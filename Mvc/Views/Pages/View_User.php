<?php 
	$row = mysqli_fetch_row($data['user']);
?>
<div class="container" style="min-height: 700px;">
	<p class=" h2 m-2 text-info text-center">Thông tin tài khoản</p>
	<div class="row">
    <div class="col p-3  d-flex justify-content-end">
    	<div class="card border-0 " style="width:400px">
		    <img class="card-img-top " src="../../Public/Image/trend-avatar-6.jpg" alt="Card image" style="width:100%">
		  </div>
    </div>
    	<div class="col p-3 ">
    		<div>
    			<div>
    				<p>Họ và tên : <?php echo $row[4]; ?></p>
    				<p>Tài khoản : <?php echo $row[1]; ?></p>
    			</div>
    			<hr>
    			<p class=" h4 m-2 text-info text-center">Đổi mật khẩu</p>
    			<div>
    				<form action="http://localhost/TMDT/Accout/Change_Pass/<?php echo $row[0]; ?>" method="post">
					  <div class="mb-3 mt-3">
					    <label for="old_pass" class="form-label">Mật khẩu cũ :</label>
					    <input type="password" class="form-control" id="old_pass" name="old_pass" required>
					  </div>
					   <div class="mb-3 mt-3">
					    <label for="new_pass" class="form-label">Mật khẩu mới :</label>
					    <input type="password" class="form-control" id="new_pass" name="new_pass" required>
					  </div>
					  <div class="mb-3">
					    <label for="re_pass" class="form-label">Nhập lại mật khẩu :</label>
					    <input type="password" class="form-control" id="re_pass" name="re_pass" onkeyup='check();' required>
					  </div>
					  <div>
					  	<span id='message'></span>
					  </div>
					  <button type="submit" class="btn btn-primary" name="submit">Đổi mật khẩu</button>
					</form>
    			</div>
    		</div>
	    	
		</div>
	</div>
</div>

<?php
	//echo $row[0].'<br>'.$row[1].'<br>'.$row[4];
	//echo 'ssssssss';
?>