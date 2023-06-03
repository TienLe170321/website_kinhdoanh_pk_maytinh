<div class="p-1 bg-dark d-flex ">
	<h3 class="text-white pt-2 mx-2"><?php echo $data['title']; ?></h3>
</div>
<div class="content p-2 bg-light">
    <table class="table table-hover table-bordered mt-3 bg-white ">
    	<thead>
    	<tr class="bg-dark text-white">
    		<td>Stt</td>
    		<td><?php echo $data['cate']; ?></td>
    		<td>Chi tiết bình luận</td>
    	</tr>
    	</thead>
    	<tbody>
    	<?php
    		$i = 1;
	    	while ($row = mysqli_fetch_row($data["ds_tpk"])) {
	    ?>
    	<tr>
    		<td><?php echo $i; ?></td>
    		<td><?php echo $row[0] ?></td>
    		<td><a class="nav-link" href="http://localhost/TMDT/Comment/ChiTiet_BL/<?php echo $row[1] ?>/<?php echo $data['key']; ?>">Xem chi tiết</a></td>
    	</tr>
    	<?php
    		$i++;
	    	}
	    ?>
	    </tbody>
    </table>
</div>