<?php 
	class Accout extends Controller
	{
		function Show(){
			$this->List_Accout(0);
		}
		function List_Accout($page){
			$acc = $this->Model("Model_Account");
			$sl = mysqli_num_rows($acc->LayDuLieu("Hoten,TaiKhoan,Quyen","WHERE TrangThai = 'A'"));
			$this->View('Admin',["Page"=>"View_Accout","DS_TaiKhoan"=>$acc->LayDuLieu("Hoten,TaiKhoan,Quyen"," WHERE TrangThai = 'A' ORDER BY MaTaiKhoan ASC LIMIT $page,10"),"SL"=>$sl]);
		}
		function Delete_Accout($user){
			$al = new Method();
			$acc = $this->Model("Model_Account");
			if ($acc->XoaTaiKhoan($user)) {
				$al->Alert('Xóa thành công');
				$this->Show(0);
			}
		}
		function Search_Accout(){
			$acc = $this->Model("Model_Account");
			if (isset($_POST['bt-search-acc'])) {
				$User = $_POST['search-acc'];
				//echo $_POST['search-acc'];
			}
			$this->View('Admin',["Page"=>"View_SearchAccout","DSTK_TaiKhoan"=>$acc->LayDuLieu("Hoten,TaiKhoan,Quyen","WHERE TrangThai = 'A' AND MATCH(TaiKhoan) against('$User');")]);
		}

		function Update_Accout($User){
			$acc = $this->Model("Model_Account");
			$al = new Method();
			if (isset($_POST['bt_uaccout'])) {
				$name = $_POST['Name'] ;
				$per = $_POST['Permission'] ;
				if ($acc->CapNhatTaiKhoan($User,$name,$per)) {
					$al->Alert('Cập nhật tài khoản thành công.');
					$this->Show();
				}
			}
			$this->View('Admin',["Page"=>"View_UpdateAccout","Tai_Khoan"=>$acc->LayDuLieu("Hoten,TaiKhoan,Quyen","WHERE TaiKhoan='$User'")]);
		}

		public function User_Info($id){
			$acc = $this->Model("Model_Account");
			$user = $acc->LayDuLieu("*","WHERE TrangThai = 'A' AND MaTaiKhoan='$id'");
			$this->View('User',["Page"=>"View_User",'user'=>$user]);
		}

		public function Change_Pass($id){
			$al = new Method();
			echo 'sssss';
			if (isset($_POST['submit'])) {
				echo 'aaaa';
				$acc = $this->Model("Model_Account");
				$old_pass = $acc->Matkhau($id);
				$new_pass = $_POST['new_pass'];
				$link = $_SERVER['HTTP_REFERER'];

				if ($this->Check_Pass($old_pass)) {
					if ($acc->DoiMatKhau($id, password_hash($new_pass, PASSWORD_DEFAULT))) {
						unset($_SESSION['user']);
						unset($_SESSION['list_gear_cart']);
						unset($_SESSION['promo_code']);
						$al->Alert_Choice('đổi password thành công vui lòng đăng nhập lại','http://localhost/TMDT/Login','http://localhost/TMDT/Login');
					}
					
				}else{
					$al->Alert_Choice('sai mật khẩu',$link,$link);
				}

			}
		}

		function Acc_Bill($id){
			$acc_bill = $this->Model("Model_Bill");
			$ds_hd = $acc_bill->HoaDon_TK($id);
			$this->View('User',["Page"=>"View_Bill_User",'ds_hd'=>$ds_hd]);
		}

		

		public function Check_Pass($pass){
			if (isset($_POST['old_pass'])) {
				$old_pass = $_POST['old_pass'];
				if (password_verify($old_pass, $pass)) {
					return true;
				}else{
					return false;
				}
			}
		}
	}
?>