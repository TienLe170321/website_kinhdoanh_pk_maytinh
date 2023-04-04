<?php 
	class Model_Gear extends Database{
		function LayDuLieu($select,$where){
			$sql = "SELECT $select FROM $where;" ;
			return mysqli_query($this->con, $sql);
		}

		function ThemPhuKien($name,$detail,$img,$cost,$cate,$manufacturer){
			$sql  = "INSERT INTO phukien (MaPK, TenPK, ThongSoKT, HinhAnh, Gia, MaLoaiPK,TrangThai,MaThuongHieu) VALUES (NULL, '$name', '$detail', '$img', '$cost', '$cate','A','$manufacturer') ";
			if(!mysqli_query($this->con, $sql)){
				return false;
			}
			return true;
		}

		function CapNhatPhuKien($name,$detail,$img,$cost,$cate,$id,$manufacturer){
			$sql = "UPDATE phukien SET TenPK = '$name', ThongSoKT = '$detail', HinhAnh = '$img', Gia = '$cost', MaLoaiPK = '$cate',MaThuongHieu = '$manufacturer' WHERE phukien.MaPK = '$id'";
			if(!mysqli_query($this->con, $sql)){
				return false;
			}
			return true;
		}
		function XoaPhuKien($id){
			$sql = "UPDATE phukien SET TrangThai = 'D' WHERE phukien.MaPK = '$id'";
			if(!mysqli_query($this->con, $sql)){
				return false;
			}
			return true;
		}
	}
	//DELETE FROM `phukien` WHERE `phukien`.`MaPK` = 4
	//INSERT INTO `phukien` (`MaPK`, `TenPK`, `ThongSoKT`, `HinhAnh`, `Gia`, `MaLoaiPK`) VALUES (NULL, 'aaaaaaaa', 'aaaaaaa', 'aaaaaaa', '1234', '6');
?>