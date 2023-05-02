<?php 
	class Model_Bill extends Database{
		function TaoHoaDon($day,$cus_id,$staff_id,$code_id,$cost_bill){
			if ($staff_id==null && $code_id==null) {
				$sql = "INSERT INTO hoadon (MaHD, NgayLap, MaKH, MaNV, MaKM,GiaHD,TrangThai) VALUES (NULL, '$day', '$cus_id',NULL, NULL,'$cost_bill','Đang giao')";
			}else{
				$sql = "INSERT INTO hoadon (MaHD, NgayLap, MaKH, MaNV, MaKM,GiaHD,TrangThai) VALUES (NULL, '$day', '$cus_id',NULL, '$code_id','$cost_bill','Đang giao')";
			}
			if(!mysqli_query($this->con, $sql)){
				return false;
			}
			return true;
		}
		function LayDuLieu($select,$where){
			$sql = "SELECT $select FROM $where;" ;
			return mysqli_query($this->con, $sql);
		}

		function TaoCTHoaDOn($bill_id,$gear_id,$sl,$price){
			$sql = "INSERT INTO cthoadon (MaCTHD,MaHD, MaPK, SoLuong,Gia) VALUES (NULL, '$bill_id', '$gear_id', '$sl','$price')";
			if(!mysqli_query($this->con, $sql)){
				return false;
			}
			return true;
		}
		//UPDATE `hoadon` SET `TrangThai` = 'Đang giao' WHERE `hoadon`.`MaHD` = 2;

		function DuyetHoaDon($id,$th){
			$sql = "UPDATE hoadon SET TrangThai = '$th' WHERE hoadon.MaHD = '$id'";
			//echo $sql;
			if(!mysqli_query($this->con, $sql)){
				return false;
			}
			return true;
		}
		function LayMaHD(){
			return mysqli_insert_id($this->con);
		}
	}
?>