<div class="container "style="min-height: 700px;">
	<p class=" h2 m-2 text-info text-center">Trạng thái đơn hàng</p>
	<div class="content p-2 ">
    <table class="table table-hover table-bordered mt-3 bg-white ">
        <thead>
        <tr class="bg-dark text-white">
            <td>Stt</td>
            <td>Ngày lập hóa đơn</td>
            <td>Giá hóa đơn</td>
            <td>Địa chỉ</td>
            <td>Trạng thái đơn hàng</td>
        </tr>
        </thead>
        <tbody>
        <?php
            $i=1;
            while ($row = mysqli_fetch_row($data["ds_hd"])) {
        ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $row[1] ?></td>
            <td><?php echo number_format($row[2]) ?>đ</td>
            <td><?php echo $row[4] ?></td>
            <td><?php echo $row[3] ?></td>
        </tr>
        <?php
            $i++;
            }
        ?>
        </tbody>
    </table>
</div>
</div>