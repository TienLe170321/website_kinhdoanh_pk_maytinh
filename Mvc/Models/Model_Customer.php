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
		function KiemTraTTKH($name, $phone, $adr){
			$sql = $this->LayDuLieu('*',"WHERE TenKH='$name' AND SDT = '$phone' AND DiaChi = '$adr'");
			$kq = mysqli_fetch_row($sql);
			if (mysqli_num_rows($sql)>0) {
				return $kq[0];
			}
		}
		function LayMaKH(){
			return mysqli_insert_id($this->con);
		}
	}
?>