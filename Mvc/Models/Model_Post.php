<?php 
	class Model_Post extends Database{
		function ThemTinTuc($title,$content,$img,$date){
			$sql = "INSERT INTO tintuc (MaTinTuc, TieuDe, NoiDung, HinhAnh, NgayTaoTinTuc, TrangThai) VALUES (NULL, '$title', '$content', '$img', '$date', 'A');";
			if(!mysqli_query($this->con, $sql)){
				return false;
			}
			return true;
		}

		function LayDuLieu($select,$where){
			$sql = "SELECT $select FROM $where" ;
			return mysqli_query($this->con, $sql);
		}

		function CapNhatTinTuc($title,$content,$img,$date,$id){
			$sql = "UPDATE tintuc SET TieuDe = '$title', NoiDung = '$content', HinhAnh = '$img', `NgayTaoTinTuc` = '$date' WHERE tintuc.MaTinTuc = '$id'";
			if(!mysqli_query($this->con, $sql)){
				return false;
			}
			return true;
		}

		function XoaTinTuc($id){
			$sql = "UPDATE tintuc SET TrangThai = 'D' WHERE tintuc.MaTinTuc = '$id'";
			if(!mysqli_query($this->con, $sql)){
				return false;
			}
			return true;
		}
	}
?>