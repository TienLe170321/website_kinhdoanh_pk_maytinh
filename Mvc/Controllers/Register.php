<?php
	class Register extends Controller{
		function __construct(){
			$link = link;
			$acc = $this->Model('Model_Account');
			$this->View("Register",["Page"=>"View_Register"]);
			$alert = new Method();
			if (isset($_POST['bt_register'])) {
				//$alert->Alert('Có thông tin tài khoản');
				$Name = $_POST['Name'];
				$UserName = $_POST['uname'];
				$PassWord = $_POST['pswd'];
				$RePass = $_POST['repswd'];
				if ($PassWord != $RePass) {
					$alert->Alert('Mật khẩu xác nhận không khớp với mật khẩu');
				}else{
					if (mysqli_fetch_row($acc->LayDuLieu('TaiKhoan',"WHERE TrangThai = 'A' AND TaiKhoan='$UserName'"))) {
						$alert->Alert('Tài khoản đã tồn tại');
					}elseif ($acc->ThemTaiKhoan($Name,$UserName,password_hash($PassWord, PASSWORD_DEFAULT))) {
						$alert->Alert_Choice('Tạo tài khoản thành công, Nhấn OK để đến trang đăng nhập',"http://localhost/$link/Login/","http://localhost/$link/Register/");
					}else{
						$alert->Alert('Thất bại');
					} 
				}

			}
		}
		function Show(){
		}
	}
?>