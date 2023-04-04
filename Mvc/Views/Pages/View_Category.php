<div class="p-1 bg-dark d-flex ">
	<h3 class="text-white pt-2 mx-2">Danh sách loại phụ kiện</h3>
	<form class="d-flex p-2 ms-auto" action="http://localhost/<?php echo link;?>/Category/Search_Category/" method="post">
        <input class="form-control rounded-0" type="text" placeholder="Tìm loại phụ kiện" name="search-cate" required>
        <button class="btn btn-primary rounded-0" type="button " name="bt-search-cate">Tìm</button>
     </form>
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
            while ($row = mysqli_fetch_row($data["DSLoaiPhuKien"])) {
        ?>
        <tr>
            <td><?php echo $stt; ?></td>
            <td><?php echo $row[1]; ?></td>
            <td><?php echo $row[2]; ?></td>
            <td><a class="nav-link" href="http://localhost/<?php echo link;?>/Category/Update_Category/<?php echo $row[0] ?>">Sửa</a></td>
            <td><a class="nav-link" href="http://localhost/<?php echo link;?>/Category/Delete_Category/<?php echo $row[0] ?>">Xóa</a></td>
        </tr>
        <?php
                $stt++;
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
            <a class="page-link bg-dark text-white" href="http://localhost/<?php echo link;?>/Category/List_Category/<?php echo $i;?>"><?php echo $a; ?></a>
        </li>
        <?php
                $a++;

            }
        ?>
    </ul>
    <div class="p-2 bg-dark">
        <a href="http://localhost/<?php echo link;?>/Category/Add_Category/" class="text-white nav-link ">Thêm loại phụ kiện</a>
    </div>
</div>