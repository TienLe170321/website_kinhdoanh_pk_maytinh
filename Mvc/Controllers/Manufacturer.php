<?php 
	class Manufacturer extends Controller{
		function Show(){
			$this->List_Manufacturer();
		}

		function List_Manufacturer(){
			$manu = $this->Model('Model_Manufacturer');
			$kq = $manu->LayDuLieu('*'," thuonghieu WHERE TrangThai = 'A'");
			$this->View('Admin',['Page'=>'View_Manufacturer','DS_TH'=>$kq]);
		}

		function Add_Manufacturer(){
			$this->View('Admin',['Page'=>'View_AddManufacturer']);
			$ser = new Method();
			if (isset($_POST['bt_add_manu'])) {
				$manu = $this->Model('Model_Manufacturer');
				$name = $_POST['Manu_Name'];
				if ($manu->ThemThuongHieu($name)) {
					$ser->Alert('Tạo thành công');
				}
			}
		}

		function Update_Manufacturer($id){
			$manu = $this->Model('Model_Manufacturer');
			$kq = $manu->LayDuLieu('*',"thuonghieu WHERE TrangThai = 'A' AND MaThuongHieu = '$id'");
			if (isset($_POST['bt_update_manu'])) {
				$name = $_POST['Manu_Name'];
				$ser = new Method();
				if ($manu->CapNhatThuongHieu($id,$name)) {
					$ser->Alert('Cập nhật thành công');
					$this->Show();
				}
			}
			$this->View('Admin',['Page'=>'View_UpdateManufacturer','TH'=>$kq]);
		}

		function Delete_Manufacturer($id){
			$manu = $this->Model('Model_Manufacturer');
			if ($manu->XoaThuongHieu($id)) {
				$ser = new Method();
				$ser->Alert('Xóa thành công');
				$this->Show();
			}
		}

		function Search_Manufacturer(){
			if (isset($_POST['bt-search-manu'])) {
				$manu = $this->Model('Model_Manufacturer');
				$search  = $_POST['search-manu'];
				$kq = $manu->LayDuLieu('*', " thuonghieu WHERE TrangThai = 'A' AND MATCH(TenThuongHieu) against('$search') LIMIT 0,10");
				$this->View('Admin',['Page'=>'View_SearchManufacturer','DS_TH'=>$kq]);
			}
		}
	}
?>