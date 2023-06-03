<div class="p-1 bg-dark d-flex ">
	<h3 class="text-white pt-2 mx-2"><?php echo  $data['title'];?></h3>
	<form class="d-flex p-2 ms-auto" action="http://localhost/<?php echo link;?>/Bill/Search_Bill/0" method="post">
        <input class="form-control rounded-0" type="text" placeholder="Tìm đơn hàng" name="search-bill" required>
        <button class="btn btn-primary rounded-0" type="button " name="bt-search-bill">Tìm</button>
    </form>
</div>
<div class="content p-2 bg-light" >
    <table class="table table-hover table-bordered mt-3 bg-white ">
        <thead>
        <tr class="bg-dark text-white">
            <td>Stt</td>
            <td>Mã hóa đơn</td>
            <td>Ngày tạo</td>
            <td>Giá hóa đơn</td>
            <td>Tên khách hàng</td>
            <td>Trạng thái</td>
            <td>Duyệt</td>
        </tr>
        </thead>
        <tbody>
        <?php
            $i= $data['stt']+1;
            while ($row = mysqli_fetch_row($data["list_bill"])) {
        ?>
        <tr >
            <td><?php echo $i; ?></td>
            <td><?php echo $row[0] ?></td>
            <td><?php echo $row[1] ?></td>
            <td><?php echo number_format($row[2])?>đ</td>
            <td> <?php echo $row[3] ?></td>
            <td><?php echo $row[4] ?></td>
            <td><a class="nav-link" href="http://localhost/<?php echo link;?>/Bill/Update_Bill/<?php echo $row[0] ?>">Duyệt</a></td>
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
            $t = $data["SL"];//so luong tai khoan
            $a = 1;//thu tu trang 
            for ($i = 0; $i < $t; $i=$i+10) { //$i = Limit $i,10 
        ?>
        <li class="page-item">
            <a class="page-link bg-dark text-white" href="http://localhost/<?php echo link;?>/<?php echo  $data['link'],$i;?>"><?php echo $a; ?></a>
        </li>
        <?php
                $a++;
            }
        ?>
    </ul>
</div>