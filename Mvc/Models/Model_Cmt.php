<?php 
	class Model_Cmt extends Database{
		function Tao_BL($noidung, $matk, $mapk, $matt){
			$sql = "INSERT INTO binhluan (MaBinhLuan, NoiDungBinhLuan, MaTaiKhoan, MaPK, MaTinTuc, TrangThai) VALUES (NULL, '$noidung', '$matk', $mapk, $matt, 'A');";
			echo $sql;
			if (!mysqli_query($this->con, $sql)) {
				return false;
			}
			return true;
		}

		function Xoa_BL($mabinhluan){
			$sql = "UPDATE binhluan SET TrangThai = 'D' WHERE binhluan.MaBinhLuan = '$mabinhluan';";
			if (!mysqli_query($this->con, $sql)) {
				return false;
			}
			return true;
		}

		function Lay_BL($loaibl,$maloaibl){
			$sql = "SELECT binhluan.MaBinhLuan, binhluan.NoiDungBinhLuan, binhluan.MaTaiKhoan, taikhoan.Hoten 
					FROM binhluan, taikhoan 
					WHERE $loaibl = '$maloaibl' AND binhluan.MaTaiKhoan = taikhoan.MaTaiKhoan AND binhluan.TrangThai = 'A'ORDER BY binhluan.MaBinhLuan DESC LIMIT 10";
			//echo $sql;
			return mysqli_query($this->con, $sql);
		}

		function Lay_BLPK(){
			$sql = "SELECT DISTINCT phukien.TenPK, phukien.MaPK 
					FROM phukien 
					JOIN binhluan ON phukien.MaPK = binhluan.MaPK 
					WHERE binhluan.TrangThai = 'A'";
			return mysqli_query($this->con, $sql);
		}

		function LayCT_BL($id,$cate){
			$sql = "SELECT binhluan.MaBinhLuan, binhluan.NoiDungBinhLuan, taikhoan.TaiKhoan 
					FROM binhluan, taikhoan 
					WHERE $cate = '$id' AND binhluan.MaTaiKhoan = taikhoan.MaTaiKhoan AND binhluan.TrangThai = 'A'";
			return mysqli_query($this->con, $sql);
		}

		public function Lay_BLTT()
		{
			$sql = "SELECT DISTINCT tintuc.TieuDe, tintuc.MaTinTuc 
					FROM tintuc 
					JOIN binhluan ON tintuc.MaTinTuc = binhluan.MaTinTuc
					WHERE binhluan.TrangThai = 'A'";
			return mysqli_query($this->con, $sql);
		}


		//SELECT binhluan.MaBinhLuan, binhluan.NoiDungBinhLuan, binhluan.MaTaiKhoan, taikhoan.Hoten FROM binhluan, taikhoan WHERE '$loaibl' = '$maloaibl' AND binhluan.MaTaiKhoan = taikhoan.MaTaiKhoan AND binhluan.TrangThai = 'D'
	}
	//SELECT DISTINCT phukien.TenPK, phukien.MaPK FROM phukien JOIN binhluan ON phukien.MaPK = binhluan.MaPK WHERE binhluan.TrangThai = 'A'
	//SELECT binhluan.MaBinhLuan, binhluan.NoiDungBinhLuan, taikhoan.TaiKhoan FROM binhluan, taikhoan WHERE binhluan.MaPK = '55' AND binhluan.MaTaiKhoan = taikhoan.MaTaiKhoan AND binhluan.TrangThai = 'A'
?>