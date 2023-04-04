<div class="p-1 bg-dark d-flex ">
	<h3 class="text-white pt-2 mx-2">Kết quả tìm kiếm nhân viên</h3>
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
            if (mysqli_num_rows($data["DS_NhanVien"])==0) {
                $tb = new Method();
                $tb->Alert('Không tìm thấy nhân viên.');
            }
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