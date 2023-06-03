<div class="row">
  <ul class="nav justify-content-center col p-2">
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">Danh sách phụ kiện</a>
      <ul class="dropdown-menu">

        <?php $i=0; while ($row_cate = mysqli_fetch_row($data['cate'])) { ?>
        <li><a class="dropdown-item" href="http://localhost/<?php echo link;?>/Gear/List_Gear_Cate/<?php echo "$row_cate[0]";?>"><?php echo $row_cate[1];?></a></li>
         <?php
              $cate[$i]=$row_cate[1];
              $i++; 
              } 
         ?>
      </ul>
    </li>
    <form class="d-flex w-50" action="http://localhost/<?php echo link;?>/Gear/Search_Gearr/" method="post">
      <input class="form-control rounded-0" type="text" placeholder="Tìm phụ kiện" name="gear" required>
      <button name="bt-search-gear1" class="btn btn-primary rounded-0">Tìm</button>
    </form>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/<?php echo link;?>/Cart/Add_Gear/">Giỏ hàng</a>
      </li>
  </ul>
</div>