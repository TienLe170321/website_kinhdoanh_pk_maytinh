<div class="p-1 bg-dark d-flex ">
	<h3 class="text-white pt-2 mx-2">Danh sách khách hàng</h3>
	<form class="d-flex p-2 ms-auto" action="http://localhost/<?php echo link;?>/Customer/Search_Customer/" method="post">
        <input class="form-control rounded-0" type="text" placeholder="Tìm khách hàng" name="search-customer" required>
        <button class="btn btn-primary rounded-0" type="button " name="bt-search-customer">Tìm</button>
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
            <!-- <td>Email</td> -->
        </tr>
        </thead>
        <tbody>
        <?php
            $i=1;
            while ($row = mysqli_fetch_row($data["DS_KhachHang"])) {
        ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $row[1] ?></td>
            <td><?php echo $row[2] ?></td>
            <td><?php echo $row[3] ?></td>
            <!-- <td><?php //echo $row[4] ?></a></td> -->
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
            $t = $data["SL_KH"];//so luong tai khoan
            $a = 1;//thu tu trang 
            for ($i = 0; $i < $t; $i=$i+10) { //$i = Limit $i,10 
        ?>
        <li class="page-item">
            <a class="page-link bg-dark text-white" href="http://localhost/<?php echo link;?>/Customer/List_Customer/<?php echo $i;?>"><?php echo $a; ?></a>
        </li>
        <?php
                $a++;
            }
        ?>
    </ul>
</div>