<?php
	class Model_Staff extends Database{	
		function LayDuLieu($select,$where){
			$sql = "SELECT $select FROM nhanvien $where;" ;
			return mysqli_query($this->con, $sql);
		}
		function ThemNhanVien($name,$date,$phone,$adress){
			$sql = "INSERT INTO nhanvien (MaNV, TenNV, NgayVaoLam, SDTNV, DiaChiNV,TrangThai) VALUES (NULL, '$name', '$date', '$phone', '$adress','A')" ;
			if(!mysqli_query($this->con, $sql)){
				return false;
			}
			return true;
		}

		function CapNhatNhanVien($name,$date,$phone,$adress,$id){
			$sql = "UPDATE nhanvien SET TenNV = '$name', NgayVaoLam = '$date', SDTNV = '$phone', DiaChiNV = '$adress' WHERE nhanvien.MaNV = '$id';" ;
			if(!mysqli_query($this->con, $sql)){
				return false;
			}
			return true;
		}

		function XoaNhanVien($id){
			$sql = "UPDATE nhanvien SET TrangThai = 'D' WHERE nhanvien.MaNV = '$id'" ;
			if(!mysqli_query($this->con, $sql)){
				return false;
			}
			return true;
		}
	}
?>