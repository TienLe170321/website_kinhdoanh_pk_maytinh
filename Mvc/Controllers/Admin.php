<?php 
	class Admin extends Controller{
		function Show(){
			$this->List_Gear(0);
		}
		function List_Gear($page){
			$gear = $this->Model('Model_Gear');
			$sl = mysqli_num_rows($gear->LayDuLieu('*'," phukien WHERE TrangThai ='A' "));
			$this->View('Admin',['Page'=>'View_Gear','DS_PK'=>$gear->LayDuLieu('phukien.MaPK, phukien.TenPK,phukien.ThongSoKT,phukien.HinhAnh,phukien.Gia, loaiphukien.TenLoaiPK, thuonghieu.TenThuongHieu',"phukien, loaiphukien, thuonghieu WHERE phukien.TrangThai ='A' AND phukien.MaLoaiPK = loaiphukien.MaLoaiPK AND phukien.MaThuongHieu = thuonghieu.MaThuongHieu ORDER BY MaPK ASC LIMIT $page,10"),'SL_Gear'=>$sl,'link'=>'Gear/List_Gear/','title'=>'Danh sách phụ kiện','stt'=>$page]);
		}

	}
?>