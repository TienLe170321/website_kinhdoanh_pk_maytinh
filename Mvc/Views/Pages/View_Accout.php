<div class="p-1 bg-dark d-flex ">
	<h3 class="text-white pt-2 mx-2">Danh sách tài khoản</h3>
	<form class="d-flex p-2 ms-auto" action="http://localhost/<?php echo link;?>/Accout/Search_Accout/" method="post">
        <input class="form-control rounded-0" type="text" placeholder="Tìm tài khoản" name="search-acc" required>
        <button class="btn btn-primary rounded-0" type="button " name="bt-search-acc">Tìm</button>
     </form>
</div>
<div class="content p-2 bg-light">
    <table class="table table-hover table-bordered mt-3 bg-white ">
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
	    	while ($row = mysqli_fetch_row($data["DS_TaiKhoan"])) {
	    ?>
    	<tr>
    		<td><?php echo $row[0] ?></td>
    		<td><?php echo $row[1] ?></td>
    		<td><?php echo $row[2] ?></td>
    		<td><a class="nav-link" href="http://localhost/<?php echo link;?>/Accout/Update_Accout/<?php echo $row[1] ?>">Sửa</a></td>
    		<td><a class="nav-link" href="http://localhost/<?php echo link;?>/Accout/Delete_Accout/<?php echo $row[1] ?>">Xóa</a></td>
    	</tr>
    	<?php
	    	}
	    ?>
	    </tbody>
    </table>
</div>
<div class="bg-white p-2">
	<ul class="pagination ">
		<?php
	    	$t = $data["SL"];//so luong tai khoan
	    	$a = 1;//thu tu trang 
	    	for ($i = 0; $i < $t; $i=$i+10) { //$i = Limit $i,10 
	    ?>
    <li class="page-item">
    	<a class="page-link bg-dark text-white" href="http://localhost/<?php echo link;?>/Accout/List_Accout/<?php echo $i;?>"><?php echo $a; ?></a>
    </li>
    	<?php
	    		$a++;

	    	}
	    ?>
  </ul>
</div>