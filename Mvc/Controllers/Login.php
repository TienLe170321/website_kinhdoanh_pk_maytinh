<?php 
	class Login extends Controller{
		function __construct()
		{
			$alert = new Method();
			$acc = $this->Model("Model_Account");
			$this->View("Login",["Page"=>"View_Login"]);
			if (isset($_POST['bt_login'])) {
				$taikhoan = $_POST['uname'];
				$matkhau = $_POST['pswd'];
				$kq = mysqli_fetch_row($acc->LayDuLieu('*'," WHERE TrangThai = 'A' AND TaiKhoan='$taikhoan'"));
				if ($kq==null) {
					$alert->Alert("Tai khoan khong ton tai");
				}elseif (!password_verify("$matkhau","$kq[2]") ) {
					$alert->Alert("Mat khau khong dung");
				}else{
					$link = link;
					if ($kq[3] == 'A'|| $kq[3]=='S') {
						$_SESSION['admin'][0] = $taikhoan; // ten tk
						$_SESSION['admin'][1] = $kq[4]; // ten admin 
						$_SESSION['admin'][2] = $kq[0]; //ma tk
						header("Location:http://localhost/$link/Admin/");
					}else{
						$_SESSION['user']['tk'] = $taikhoan;
						$_SESSION['user']['id'] = $kq[0];
						header("Location:http://localhost/$link/Home/");
					}
				}
			}
		}
		function Show(){	
		}
	}
	//TK admin : Admin - Tien123@
	//TK User : Tienle123 - Tien123@
?>