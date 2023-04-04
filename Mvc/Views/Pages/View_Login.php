<div class="container-fuid border border-2 p-3 " >
  <form action="http://localhost/<?php echo link;?>/Login/" method="post">
    <h3 style="text-align: center;">ĐĂNG NHẬP</h3>
    <div class="mb-3 mt-3">
      <label for="uname" class="form-label">Tài khoản:</label>
      <input minlength="5" maxlength="15" type="text" class="form-control" id="uname" placeholder="Nhập tài khoản" name="uname" required>
    </div>
    <div class="mb-3">
      <label for="pwd" class="form-label">Mật khẩu:</label>
      <input minlength="5" maxlength="15" type="password" class="form-control" id="pwd" placeholder="Nhập mật khẩu" name="pswd" required>
    </div>
    <button  name="bt_login" type="submit" class="btn btn-primary m-1 w-100" >Đăng nhập</button> 
    <div class="d-flex justify-content-center">
      <p>Bạn chưa có tài khoản?</p>
      <a href="http://localhost/<?php echo link;?>/Register/" >Đăng ký</a>
    </div>   
  </form>
</div>