<div class="p-1 bg-dark d-flex ">
	<h3 class="text-white pt-2 mx-2"><?php echo $data['title']; ?></h3>
</div>
<div class="content p-2 bg-light">
    <table class="table table-hover table-bordered mt-3 bg-white ">
    	<thead>
    	<tr class="bg-dark text-white">
    		<td>Stt</td>
    		<td>Nội dung bình luận</td>
    		<td>Tài khoản</td>
    		<td>Xóa</td>
    	</tr>
    	</thead>
    	<tbody>
    	<?php
    		$i = 1;
	    	while ($row = mysqli_fetch_row($data["ds_cmt"])) {
	    ?>
    	<tr>
    		<td><?php echo $i; ?></td>
    		<td><?php echo $row[1] ?></td>
    		<td><?php echo $row[2] ?></td>
    		<td><a class="nav-link" href="http://localhost/TMDT/Comment/XoaBL/<?php echo $row[0] ?>">Xóa</a></td>
    	</tr>
    	<?php
    		$i++;
	    	}
	    ?>
	    </tbody>
    </table>
</div>