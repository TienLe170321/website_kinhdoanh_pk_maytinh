<?php
	class Model_Manufacturer extends Database{
		function LayDuLieu($select,$where){
			$sql = "SELECT $select FROM $where;" ;
			return mysqli_query($this->con, $sql);
		}

		function ThemThuongHieu($name){
			$sql = "INSERT INTO thuonghieu (MaThuongHieu, TenThuongHieu, TrangThai) VALUES (NULL, '$name', 'A')";
			if(!mysqli_query($this->con, $sql)){
				return false;
			}
			return true;
		}

		function CapNhatThuongHieu($id,$name){
			$sql = "UPDATE thuonghieu SET TenThuongHieu = '$name' WHERE thuonghieu.MaThuongHieu = '$id'";
			if(!mysqli_query($this->con, $sql)){
				return false;
			}
			return true;
		}

		function XoaThuongHieu($id){
			$sql = "UPDATE thuonghieu SET TrangThai = 'D' WHERE thuonghieu.MaThuongHieu = '$id'";
			if(!mysqli_query($this->con, $sql)){
				return false;
			}
			return true;
		}
	}
?>