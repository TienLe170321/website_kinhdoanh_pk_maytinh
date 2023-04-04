<div class="p-1 bg-dark d-flex ">
	<h3 class="text-white pt-2 mx-2"><?php echo  $data['title'];?></h3>
	<form class="d-flex p-2 ms-auto" action="http://localhost/<?php echo link;?>/Gear/Search_Gear/0" method="post">
        <input class="form-control rounded-0" type="text" placeholder="Tìm phụ kiện" name="search-gear" required>
        <button class="btn btn-primary rounded-0" type="button " name="bt-search-gear">Tìm</button>
    </form>
</div>
<div class="content p-2 bg-light">
    <table class="table table-hover table-bordered mt-3 bg-white ">
        <thead>
        <tr class="bg-dark text-white">
            <td>Stt</td>
            <td>Tên phụ kiện</td>
            <td>Giá</td>
            <td>Hình ảnh</td>
            <td style="max-width: 200px;">Thông số kỹ thuật</td>
            <td>Loại</td>
            <td>Thương hiệu</td>
            <td>Sửa</td>
            <td>Xóa</td>
        </tr>
        </thead>
        <tbody>
        <?php
            $i= $data['stt']+1;
            while ($row = mysqli_fetch_row($data["DS_PK"])) {
        ?>
        <tr >
            <td><?php echo $i; ?></td>
            <td><?php echo $row[1] ?></td>
            <td><?php echo number_format($row[4])?>đ</td>
            <td style="max-width: 100px;"> <img class="img-thumbnail w-75 mx-auto d-block" alt="Cinque Terre" src="http://localhost/<?php echo link;?>/Public/Image/<?php echo $row[3] ?>"> </td>
            <td style="max-width: 200px;"><?php echo substr($row[2],0,25).' ...' ?></td>
            <td> <?php echo $row[5] ?></td>
            <td><?php echo $row[6] ?></td>
            <td><a class="nav-link" href="http://localhost/<?php echo link;?>/Gear/Update_Gear/<?php echo $row[0] ?>">Sửa</a></td>
            <td><a class="nav-link" href="http://localhost/<?php echo link;?>/Gear/Delete_Gear/<?php echo $row[0] ?>">Xóa</a></td>
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
            $t = $data["SL_Gear"];//so luong tai khoan
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
        <a href="http://localhost/<?php echo link;?>/Gear/Add_Gear/" class="text-white nav-link ">Thêm phụ kiện</a>
    </div>
</div>