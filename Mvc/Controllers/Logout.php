<?php 
	class Logout extends Controller
	{
		function Show($id){

			$method = new Method();
			$link = link;
			if ($id=='u') {
				unset($_SESSION['user']);
				unset($_SESSION['list_gear_cart']);
				unset($_SESSION['promo_code']);
			}
			if ($id=='a') {
				unset($_SESSION['admin']);
			}
			$method->Alert_Choice("Đăng xuất thành công, Nhấn OK để về trang chủ","http://localhost/$link/Home/","http://localhost/$link/Login/");
		}
	}
?>