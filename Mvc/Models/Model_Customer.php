<?php 
	class Model_Customer extends Database{
		function LayDuLieu($select,$where){
			$sql = "SELECT $select FROM khachhang $where;" ;
			return mysqli_query($this->con, $sql);
		}
		function ThemKhachHang($name,$sdt,$dc,$email,$acc){
			$sql = "INSERT INTO khachhang (MaKH, TenKH, SDT, DiaChi, Email,MaTK) VALUES (NULL, '$name', '$sdt', '$dc', '$email','$acc')";
			if(!mysqli_query($this->con, $sql)){
				return false;
			}
			return true;
		}
	}
?>