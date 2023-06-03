<div class="container-fuid m-3">
  <div class="border w-50 bg-light p-2 ">
    <p class=" h4 m-2 text-info text-center">Góc Bình Luận</p>
       <form class=" m-2" action="../../Comment/Tao_BL/" method="post">
          <div class="mb-3 mt-1">
            <label for="comment">Viết bình luận:</label>
            <textarea class="form-control" rows="5" id="comment" name="text" required></textarea>
              <input type="hidden" name="<?php echo $data["key"]; ?>" value="<?php echo $data["id"]; ?>">
          </div>
          <button type="submit" class="btn btn-primary" name="submit">Đăng</button>
        </form>
      <?php 
       //echo $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
       //echo $_SERVER['HTTP_REFERER'];
        while ($row_cmt = mysqli_fetch_row($data["cmt"])) {
      ?>
    <div class="media mt-2">
      <div class="media-body ">
        <dt class="media-heading "><?php echo $row_cmt[3]; ?></dt>
        <p class="border p-2 bg-white m-0"><?php echo $row_cmt[1]; ?></p>
      </div>
      
    
    <?php 
      if (isset($_SESSION['user']['id'] )) {
        if ($row_cmt[2]==$_SESSION['user']['id']) {
    ?>
          <a class="ps-2"  href="../../Comment/XoaBL/<?php echo $row_cmt[0]?>">Xóa</a>
    <?php
        }
      }
    ?>
    </div>
    <?php 
     }
    ?>

  </div>
  
</div>
