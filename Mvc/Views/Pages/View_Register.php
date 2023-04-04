<div class="container-fuid border border-2 p-3 " >
  <form action="http://localhost/<?php echo link;?>/Register/" method="post">
    <h3 style="text-align: center;">ĐĂNG KÝ</h3>
    <div >
      <label for="uname" class="form-label">Họ và tên:</label>
      <input pattern="^[a-zA-Z\s]{3,25}$" title="Họ tên từ 3 đến 25 ký tự không chứa số, dấu và ký tự đặc biệt" type="text" class="form-control" id="Name" placeholder="Nhập họ và tên" name="Name" required >
    </div>
    <div >
      <label for="uname" class="form-label">Tài khoản:</label>
      <input pattern="^[a-zA-Z0-9-_]{5,15}$" title="Tài khoản từ 5 đến 15 ký tự không chứa dấu và ký tự đặc biệt" type="text" class="form-control" id="uname" placeholder="Nhập tài khoản" name="uname" required>
    </div>
    <div >
      <label for="pwd" class="form-label">Mật khẩu:</label>
      <input pattern="^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*\W)(?!.* ).{8,16}$" title="Mật khẩu phải có ít nhất 1 số, 1 ký tự viết hoa, 1 ký tự viết thường và 1 ký tự đặc biệt" type="password" class="form-control" id="pwd" placeholder="Nhập mật khẩu" name="pswd" required>
    </div>
    <div >
      <label for="pwd" class="form-label">Nhập lại mật khẩu:</label>
      <input pattern="^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*\W)(?!.* ).{8,16}$" title="Mật khẩu phải có ít nhất 1 số, 1 ký tự viết hoa, 1 ký tự viết thường và 1 ký tự đặc biệt" type="password" class="form-control" id="repwd" placeholder="Nhập lại mật khẩu" name="repswd" onkeyup='check();' required>
      <span id='message'></span>
    </div>
    <div class="mt-3">
      <button name="bt_register" type="submit" class="btn btn-primary m-1 w-100">Đăng ký</button> 
    </div>
  </form>
</div>