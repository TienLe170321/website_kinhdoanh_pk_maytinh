<div class="p-1 bg-dark d-flex ">
	<h3 class="text-white pt-2 mx-2">Kết quả tìm kiếm thương hiệu</h3>
</div>
<div class="content p-2 bg-light">
    <table class="table table-hover table-bordered mt-3 bg-white ">
        <thead>
        <tr class="bg-dark text-white">
            <td>Stt</td>
            <td>Tên thương hiệu</td>
            <td>Sửa</td>
            <td>Xóa</td>
        </tr>
        </thead>
        <tbody>
        <?php
            $i = 1;
            while ($row = mysqli_fetch_row($data["DS_TH"])) {
        ?>
        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $row[1] ?></td>
            <td><a class="nav-link" href="http://localhost/<?php echo link;?>/Manufacturer/Update_Manufacturer/<?php echo $row[0] ?>">Sửa</a></td>
            <td><a class="nav-link" href="http://localhost/<?php echo link;?>/Manufacturer/Delete_Manufacturer/<?php echo $row[0] ?>">Xóa</a></td>
        </tr>
        <?php
            $i++;
            }
        ?>
        </tbody>
    </table>
</div>