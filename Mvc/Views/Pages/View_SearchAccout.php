<div class="p-1 bg-dark d-flex ">
	<h3 class="text-white pt-2 mx-2">Kết quả tìm kiếm tài khoản</h3>
</div>
<div class="content p-2 bg-light ">
    <table class="table table-hover table-bordered mt-3 bg-white">
    	<thead>
    	<tr class="bg-dark text-white">
    		<td>Họ và tên</td>
    		<td>Tài khoản</td>
    		<td>Quyền</td>
    		<td>Sửa</td>
    		<td>Xóa</td>
    	</tr>
    	</thead>
    	<tbody>
    	<?php
    		if (mysqli_num_rows($data["DSTK_TaiKhoan"])==0) {
    			$tb = new Method();
    			$tb->Alert('Không tìm thấy tài khoản.');
    		}
	    	while ($row = mysqli_fetch_row($data["DSTK_TaiKhoan"])) {
	    ?>
    	<tr>
    		<td><?php echo $row[0] ?></td>
    		<td><?php echo $row[1] ?></td>
    		<td><?php echo $row[2] ?></td>
    		<td><a class="nav-link" href="http://localhost/<?php echo link;?>/Update_Accout/Show/<?php echo $row[1] ?>">Sửa</a></td>
    		<td><a class="nav-link" href="http://localhost/<?php echo link;?>/Accout/Delete_Accout/<?php echo $row[1] ?>">Xóa</a></td>
    	</tr>
    	<?php
	    	}
	    ?>
	    </tbody>
    </table>
</div>