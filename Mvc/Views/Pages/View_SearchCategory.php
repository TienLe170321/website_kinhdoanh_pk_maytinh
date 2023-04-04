<div class="p-1 bg-dark d-flex ">
	<h3 class="text-white pt-2 mx-2">Kết quả tìm kiếm loại phụ kiện</h3>
</div>
<div class="content p-2 bg-light">
    <table class="table table-hover table-bordered mt-3 bg-white ">
        <thead>
        <tr class="bg-dark text-white">
            <td>Stt</td>
            <td>Tên loại phụ kiện</td>
            <td>Ghi chú</td>
            <td>Sửa</td>
            <td>Xóa</td>
        </tr>
        </thead>
        <tbody>
        <?php
            $stt = 1;
            if (mysqli_num_rows($data["DSLoaiPhuKien"])==0) {
                $tb = new Method();
                $tb->Alert('Không tìm thấy dữ liệu.');
            }
            while ($row = mysqli_fetch_row($data["DSLoaiPhuKien"])) {
        ?>
        <tr>
            <td><?php echo $stt; ?></td>
            <td><?php echo $row[1]; ?></td>
            <td><?php echo $row[2]; ?></td>
            <td><a class="nav-link" href="http://localhost/<?php echo link;?>/Update_Category/Show/<?php echo $row[0] ?>">Sửa</a></td>
            <td><a class="nav-link" href="http://localhost/<?php echo link;?>/Category/Delete_Category/<?php echo $row[0] ?>">Xóa</a></td>
        </tr>
        <?php
                $stt++;
            }
        ?>
        </tbody>
    </table>
</div>