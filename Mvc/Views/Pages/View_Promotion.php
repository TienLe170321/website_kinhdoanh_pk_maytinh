<div class="p-1 bg-dark d-flex ">
	<h3 class="text-white pt-2 mx-2"><?php echo  $data['title'];?></h3>
	<form class="d-flex p-2 ms-auto" action="http://localhost/<?php echo link;?>/Promotion/Search_Promo_Code/0" method="post">
        <input class="form-control rounded-0" type="text" placeholder="Tìm khuyến mãi" name="search-promotion" required>
        <button class="btn btn-primary rounded-0" type="button " name="bt-search-promotion">Tìm</button>
    </form>
</div>
<div class="content p-2 bg-light">
    <table class="table table-hover table-bordered mt-3 bg-white ">
        <thead>
        <tr class="bg-dark text-white">
            <td>Stt</td>
            <td>Tên khuyến mãi</td>
            <td>Mã khuyến mãi</td>
            <td>Ngày bắt đầu</td>
            <td>Ngày kết thúc</td>
            <td>Giá trị khuyến mãi</td>
            <td>Sửa</td>
            <td>Xóa</td>
        </tr>
        </thead>
        <tbody>
        <?php
            $i= $data['stt']+1;
            while ($row = mysqli_fetch_row($data["DS_KM"])) {
        ?>
        <tr >
            <td><?php echo $i; ?></td>
            <td><?php echo $row[2] ?></td>
            <td><?php echo $row[1] ?></td>
            <td><?php echo $row[3] ?></td>
            <td><?php echo $row[4] ?></td>
            <td><?php echo $row[5] ?>%</td>
            <td><a class="nav-link" href="http://localhost/<?php echo link;?>/Promotion/Update_Promotion/<?php echo $row[0] ?>">Sửa</a></td>
            <td><a class="nav-link" href="http://localhost/<?php echo link;?>/Promotion/Delete_Promotion/<?php echo $row[0] ?>">Xóa</a></td>
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
            $t = $data["SL"];
            $a = 1;//thu tu trang 
            for ($i = 0; $i < $t; $i=$i+10) { //$i = Limit $i,10 
        ?>
        <li class="page-item">
            <a class="page-link bg-dark text-white" href="http://localhost/<?php echo link;?>/<?php echo  $data['link'],$i;?>"><?php echo $a; ?></a>
        </li>
        <?php
                $a++;
            }
            unset($data);
        ?>
    </ul>
    <div class="p-2 bg-dark">
        <a href="http://localhost/<?php echo link;?>/Promotion/AddPromotion/" class="text-white nav-link ">Thêm khuyến mãi</a>
    </div>
</div>