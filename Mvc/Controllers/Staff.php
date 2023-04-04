<?php 
	class Staff extends Controller{	

		function Show(){
			$this->List_Staff(0);
		}

		function List_Staff($page){
			$staff = $this->Model('Model_Staff');
			$sl = mysqli_num_rows($staff->LayDuLieu('*'," WHERE TrangThai = 'A'"));
			$this->View('Admin',["Page"=>"View_Staff","DS_NhanVien"=>$staff->LayDuLieu('*'," WHERE TrangThai = 'A'  ORDER BY MaNV ASC LIMIT $page,10"),"SL_NV"=>$sl]);
		}

		function SearchStaff(){
			$staff = $this->Model('Model_Staff');
			$search = $_POST['search-staff'];
			$this->View('Admin',["Page"=>"View_SearchStaff","DS_NhanVien"=>$staff->LayDuLieu('*',"WHERE TrangThai = 'A' AND MATCH(TenNV,DiaChiNV) against('$search')")]);
		}

		function DeleteStaff($id){
			$al = new Method();
			$staff = $this->Model('Model_Staff');
			if ($staff->XoaNhanVien($id)) {
				$al->Alert('Xóa thành công');
				$this->Show(0);
			}

		}

		function Add_Staff(){
			$staff = $this->Model('Model_Staff');
			$al = new Method();
			if (isset($_POST['bt_addstaff'])) {
				$name = $_POST['Ten_NV'];
				$date = $_POST['NgayVaoLam'];
				$phone = $_POST['SDT_NV'];
				$adress = $_POST['DC_NV'];
				if ($staff->ThemNhanVien($name,$date,$phone,$adress)) {
					$al->Alert("Thêm thành công!!! Nhân viên : $name, Ngày vào làm : $date, SDT : $phone, Địa chỉ : $adress");
				}
			}
			$this->View('Admin',['Page'=>'View_AddStaff','mday'=>$al->MinYear(),'eday'=>$al->MaxYear()]);

		}

		function Update_Staff($id){
			$staff = $this->Model('Model_Staff');
			$al = new Method();
			if (isset($_POST['bt_updatestaff'])) {
				$name = $_POST['Ten_NV'];
				$date = $_POST['NgayVaoLam'];
				$phone = $_POST['SDT_NV'];
				$adress = $_POST['DC_NV'];
				if ($staff->CapNhatNhanVien($name,$date,$phone,$adress,$id)) {
					$al->Alert('Cập nhật thành công');
					$this->Show();
				}
			}
			$this->View('Admin',['Page'=>'View_UpdateStaff','NhanVien'=>$staff->LayDuLieu('*',"WHERE TrangThai = 'A' AND nhanvien.MaNV = '$id'"),'mday'=>$al->MinYear(),'eday'=>$al->MaxYear()]);
		}
	}//SELECT * FROM `nhanvien` ORDER BY MaNV ASC LIMIT 0,10
?>