<?php 
	class Model_Promotion extends Database{
		function ThemKhuyenMai($code_promotion,$name_promotion,$star_day,$end_day,$value_promotion){
			$sql ="INSERT INTO khuyenmai (MaKM, CodeKM, TenKM, NgayBatDau, NgayKetThuc, GiaTriKM,TrangThai) VALUES (NULL, '$code_promotion', '$name_promotion', '$star_day', '$end_day', '$value_promotion','A')";
			if(!mysqli_query($this->con, $sql)){
				return false;
			}
			return true;
		}

		function LayDuLieu($select,$where){
			$sql = "SELECT $select FROM $where" ;
			return mysqli_query($this->con, $sql);
		}

		function CapNhatKhuyenMai($code_promotion,$name_promotion,$star_day,$end_day,$value_promotion,$id){
			$sql = "UPDATE khuyenmai SET CodeKM = '$code_promotion', TenKM = '$name_promotion', NgayBatDau = '$star_day', NgayKetThuc = '$end_day', GiaTriKM = '$value_promotion' WHERE khuyenmai.MaKM = '$id'";
			//echo $sql;
			if(!mysqli_query($this->con, $sql)){
				return false;
			}
			return true;
		}

		function XoaKhuyenMai($id){
			$sql = "UPDATE khuyenmai SET TrangThai = 'D' WHERE khuyenmai.MaKM = '$id'";
			if(!mysqli_query($this->con, $sql)){
				return false;
			}
			return true;
		}
		//UPDATE `khuyenmai` SET `CodeKM` = 'TKSMSSD', `TenKM` = 'Mừng ngày thành lập công ty 2', `NgayBatDau` = '2022-10-20', `NgayKetThuc` = '2022-10-30', `GiaTriKM` = '5' WHERE `khuyenmai`.`MaKM` = 1;
	}
?>