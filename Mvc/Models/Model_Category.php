<?php
class Model_Category extends Database{
	function LayDuLieu($select,$where){
		$sql = "SELECT $select FROM loaiphukien $where;" ;
		return mysqli_query($this->con, $sql);
	}

	function XoaLoaiPhuKien($id){
		$sql = "UPDATE loaiphukien SET TrangThai = 'D' WHERE loaiphukien.MaLoaiPK = '$id'";
		if(!mysqli_query($this->con, $sql)){
			return false;
		}
		return true;
	}

	function ThemLoaiPhuKien($name,$note){
		$sql = "INSERT INTO loaiphukien (MaLoaiPK, TenLoaiPK, GhiChu,TrangThai) VALUES (NULL, '$name', '$note','A');";
		if(!mysqli_query($this->con, $sql)){
			return false;
		}
		return true;
	}

	function SuaLoaiPhuKien($name,$note,$id){
		$sql = "UPDATE loaiphukien SET TenLoaiPK = '$name', GhiChu = '$note' WHERE loaiphukien.MaLoaiPK = '$id';";
		if(!mysqli_query($this->con, $sql)){
			return false;
		}
		return true;
	}
}
//UPDATE `loaiphukien` SET `TenLoaiPhuKien` = 'Tiến lêeeenn' WHERE `loaiphukien`.`MaLoaiPK` = 16;
//INSERT INTO `loaiphukien` (`MaLoaiPK`, `TenLoaiPhuKien`, `GhiChu`) VALUES (NULL, 'Chuột chết', '');
?>