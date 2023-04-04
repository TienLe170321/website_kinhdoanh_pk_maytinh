<div class="p-1 bg-dark d-flex ">
	<h3 class="text-white pt-2 mx-2">Danh sách nhân viên</h3>
	<form class="d-flex p-2 ms-auto" action="http://localhost/<?php echo link;?>/Staff/SearchStaff/" method="post">
        <input class="form-control rounded-0" type="text" placeholder="Tìm nhân viên" name="search-staff" required>
        <button class="btn btn-primary rounded-0" type="button " name="bt-search-staff">Tìm</button>
    </form>
</div>
<div class="content p-2 bg-light">
    <table class="table table-hover table-bordered mt-3 bg-white ">
        <thead>
        <tr class="bg-dark text-white">
            <td>Stt</td>
            <td>Họ và tên</td>
            <td>Số điện thoại</td>
            <td>Địa chỉ</td>
            <td>Ngày vào làm</td>
            <td>Sửa</td>
            <td>Xóa</td>
        </tr>
        </thead>
        <tbody>
        <?php
            $i=1;
            while ($row = mysqli_fetch_row($data["DS_NhanVien"])) {
        ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $row[1] ?></td>
            <td><?php echo $row[3] ?></td>
            <td><?php echo $row[4] ?></td>
            <td><?php echo $row[2] ?></a></td>
            <td><a class="nav-link" href="http://localhost/<?php echo link;?>/Staff/Update_Staff/<?php echo $row[0] ?>">Sửa</a></td>
            <td><a class="nav-link" href="http://localhost/<?php echo link;?>/Staff/DeleteStaff/<?php echo $row[0] ?>">Xóa</a></td>
        </tr>
        <?php
            $i++;
            }
        ?>
        </tbody>
    </table>
</div>
<div class="bg-white p-2 d-flex justify-content-between">
    <ul class="pagination my-auto">
        <?php
            $t = $data["SL_NV"];//so luong tai khoan
            $a = 1;//thu tu trang 
            for ($i = 0; $i < $t; $i=$i+10) { //$i = Limit $i,10 
        ?>
        <li class="page-item">
            <a class="page-link bg-dark text-white" href="http://localhost/<?php echo link;?>/Staff/List_Staff/<?php echo $i;?>"><?php echo $a; ?></a>
        </li>
        <?php
                $a++;
            }
        ?>
    </ul>
    <div class="p-2 bg-dark">
        <a href="http://localhost/<?php echo link;?>/Staff/Add_Staff/" class="text-white nav-link ">Thêm nhân viên</a>
    </div>
</div>