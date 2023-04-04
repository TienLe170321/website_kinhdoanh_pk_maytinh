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
	}
?>