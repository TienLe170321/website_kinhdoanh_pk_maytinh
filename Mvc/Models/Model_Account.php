<?php 
	class Model_Account extends Database{
		function LayDuLieu($select,$where){
			$sql = "SELECT $select FROM taikhoan $where;" ;
			//echo $sql;
			return mysqli_query($this->con, $sql);
		}

		function ThemTaiKhoan($Name,$Uname,$Pswd){
			$sql = "INSERT INTO taikhoan (MaTaiKhoan, TaiKhoan, MatKhau, Quyen, Hoten,TrangThai) VALUES (NULL,'$Uname' ,'$Pswd' , 'U', '$Name','A');";
			if(!mysqli_query($this->con, $sql)){
				return false;
			}
			return true;
		}

		function XoaTaiKhoan($User){
			$sql = "UPDATE taikhoan SET TrangThai = 'D' WHERE taikhoan.TaiKhoan = '$User'";
			if(!mysqli_query($this->con, $sql)){
				return false;
			}
			return true;
		}

		function CapNhatTaiKhoan($User,$Name,$Per){
			$sql = "UPDATE taikhoan SET Quyen = '$Per',Hoten='$Name' WHERE TaiKhoan = '$User'" ;
			if(!mysqli_query($this->con, $sql)){
				return false;
			}
			return true;
		}

		public function Matkhau($id){
			$sql = "SELECT TaiKhoan.MatKhau FROM TaiKhoan WHERE TrangThai = 'A' AND TaiKhoan.MaTaiKhoan = '$id'" ;
			$kq =  mysqli_query($this->con, $sql);
			$row = mysqli_fetch_row($kq);
			return $pass = $row[0];
		}

		public function DoiMatKhau($id, $new_pass)
		{
			$sql = "UPDATE taikhoan SET MatKhau = '$new_pass' WHERE taikhoan.MaTaiKhoan = '$id'";
			if(!mysqli_query($this->con, $sql)){
				return false;
			}
			return true;
		}
		//SELECT Hoten,TaiKhoan,Quyen FROM taikhoan
		//UPDATE taikhoan SET Quyen = 'P',Hoten='Con bo' WHERE TaiKhoan = 'Tienn'
	}
?>