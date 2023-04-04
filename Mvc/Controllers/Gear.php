<?php 
	class Gear extends Controller{

		function Show(){
			$this->List_Gear(0);
		}

		function List_Gear($page){
			$gear = $this->Model('Model_Gear');
			$sl = mysqli_num_rows($gear->LayDuLieu('*'," phukien WHERE TrangThai ='A' "));
			$this->View('Admin',['Page'=>'View_Gear','DS_PK'=>$gear->LayDuLieu('phukien.MaPK, phukien.TenPK,phukien.ThongSoKT,phukien.HinhAnh,phukien.Gia, loaiphukien.TenLoaiPK, thuonghieu.TenThuongHieu',"phukien, loaiphukien, thuonghieu WHERE phukien.TrangThai ='A' AND phukien.MaLoaiPK = loaiphukien.MaLoaiPK AND phukien.MaThuongHieu = thuonghieu.MaThuongHieu ORDER BY MaPK ASC LIMIT $page,10"),'SL_Gear'=>$sl,'link'=>'Gear/List_Gear/','title'=>'Danh sách phụ kiện','stt'=>$page]);
		}

		function Search_Gear($page){
			$gear = $this->Model('Model_Gear');
			$al = new Method();
			if (isset($_POST['bt-search-gear'])) {
				$_SESSION['search'] = $_POST['search-gear'];
			}
			$search = $_SESSION['search'];
			$kq = $gear->LayDuLieu('phukien.MaPK, phukien.TenPK,phukien.ThongSoKT,phukien.HinhAnh,phukien.Gia, loaiphukien.TenLoaiPK, thuonghieu.TenThuongHieu',"phukien, loaiphukien, thuonghieu WHERE phukien.TrangThai ='A' AND  phukien.MaLoaiPK = loaiphukien.MaLoaiPK AND phukien.MaThuongHieu = thuonghieu.MaThuongHieu AND MATCH(TenPK) against('$search') LIMIT $page,10");
			$sl = mysqli_num_rows($gear->LayDuLieu('phukien.MaPK, phukien.TenPK,phukien.ThongSoKT,phukien.HinhAnh,phukien.Gia, loaiphukien.TenLoaiPK, thuonghieu.TenThuongHieu',"phukien, loaiphukien, thuonghieu WHERE phukien.TrangThai ='A' AND phukien.MaLoaiPK = loaiphukien.MaLoaiPK AND phukien.MaThuongHieu = thuonghieu.MaThuongHieu AND MATCH(TenPK) against('$search')"));
			if ($sl==0) {
				$al->Alert('Không tìm thấy dữ liệu.');
				$this->Show(0);
			}else{
				$this->View('Admin',['Page'=>'View_Gear','DS_PK'=>$kq, 'SL_Gear'=>$sl,'link'=>'Gear/Search_Gear/','title'=>'Kết quả tìm kiếm','stt'=>$page]);
			}
		}

		function Update_Gear($id){
			$gear = $this->Model('Model_Gear');
			$cate = $this->Model('Model_Category');
			$manu = $this->Model('Model_Manufacturer');
			$list_cate = $cate->LayDuLieu('*',"WHERE TrangThai = 'A'");
			$list_gear = $gear->LayDuLieu('*',"phukien WHERE MaPK='$id'");
			$list_manu = $manu->LayDuLieu('*',"thuonghieu WHERE TrangThai = 'A'");
			$this->View('Admin',['Page'=>'View_UpdateGear','Cate'=>$list_cate,'Gear'=>$list_gear,'Manu'=>$list_manu]);
		}
		function Update_Gear_Id($id){
			if (isset($_POST['bt_updategear'])) {
				$gear = $this->Model('Model_Gear');
				$name = $_POST['PK_Name'];
				$cost = $_POST['PK_Cost'];
				$img = $_POST['PK_Img'];
				$detail = $_POST['PK_TSKT'];
				$cate = $_POST['L_PK'];
				$img_old = $_POST['Old_Img'];
				$manufacturer = $_POST['manufacturer'];
				$al = new Method;
				if ($img=="") {
					$img = $img_old;
				}
				if ($gear->CapNhatPhuKien($name,$detail,$img,$cost,$cate,$id,$manufacturer)) {
					$al->Alert('Cập nhật thành công');
					$this->Show(0);
				}
				//echo "$name - $cost - $img - $detail - $cate-$img_old-$id";
			}
		}

		function Add_Gear(){
			$cate = $this->Model('Model_Category');
			$gear = $this->Model('Model_Gear');
			$manu = $this->Model('Model_Manufacturer');
			$list_cate = $cate->LayDuLieu('*',"WHERE TrangThai ='A' ");
			$list_manu = $manu->LayDuLieu('*',"thuonghieu WHERE TrangThai = 'A'");
			$al = new Method();
			if (isset($_POST['bt_addgear'])) {
				$name = $_POST['PK_Name'];
				$cost = $_POST['PK_Cost'];
				$img = $_POST['PK_Img'];
				$detail = $_POST['PK_TSKT'];
				$cate = $_POST['L_PK'];
				$manufacturer = $_POST['manufacturer'];
				if ($gear->ThemPhuKien($name,$detail,$img,$cost,$cate,$manufacturer)) {
					$al->Alert("Thêm sản phẩm thành công");
				}		
			}
			$this->View('Admin',['Page'=>'View_AddGear','Cate'=>$list_cate,'Manu'=>$list_manu]);
		}

		function Delete_Gear($id){
			$gear = $this->Model('Model_Gear');
			$al = new Method;
			if ($gear->XoaPhuKien($id)) {
				$al->Alert('Xóa thành công');
				$this->Show();
			}
		}
		function List_Gear_Cate($id){
			$gear = $this->Model('Model_Gear');
			$cate = $this->Model('Model_Category');
			$list_cate = $cate->LayDuLieu('*',"WHERE TrangThai = 'A'");
			$cate_name = $cate->LayDuLieu('TenLoaiPK',"loaiphukien WHERE TrangThai = 'A' AND MaLoaiPK = $id");
			$list_gear = $gear->LayDuLieu('phukien.MaPK, phukien.TenPK, phukien.Gia, phukien.HinhAnh, thuonghieu.TenThuongHieu',"phukien,thuonghieu,loaiphukien WHERE phukien.TrangThai = 'A' AND phukien.MaLoaiPK = '$id' AND phukien.MaLoaiPK = loaiphukien.MaLoaiPK  AND  phukien.MaThuongHieu = thuonghieu.MaThuongHieu LIMIT 20");
			$this->View('Gear',['Page'=>'View_ListGear','List_Gear'=>$list_gear,'Cate_name'=>$cate_name,'cate'=>$list_cate]);
		}

		function Search_Gearr(){
			$gear = $this->Model('Model_Gear');
			$cate = $this->Model('Model_Category');
			$ser = new Method();
			$list_cate = $cate->LayDuLieu('*',"WHERE TrangThai = 'A'");
			if (isset($_POST['bt-search-gear1'])) {
				$search = $_POST['gear'];
				$list_gear_search = $gear->LayDuLieu('phukien.MaPK, phukien.TenPK, phukien.Gia, phukien.HinhAnh, thuonghieu.TenThuongHieu',"phukien, loaiphukien, thuonghieu WHERE phukien.TrangThai ='A' AND  phukien.MaLoaiPK = loaiphukien.MaLoaiPK AND phukien.MaThuongHieu = thuonghieu.MaThuongHieu AND MATCH(TenPK) against('$search')");
				if (mysqli_num_rows($list_gear_search)==null) {
					$ser->Alert('Không tìm thấy phụ kiện');
					$this->View('Search',['Page'=>'View_Search','cate'=>$list_cate]);
				}
			}
			
			$this->View('Search',['Page'=>'View_Search','cate'=>$list_cate,'List_Gear'=>$list_gear_search]);
		}
		function Gear_Detail($id){
			$gear = $this->Model('Model_Gear');
			$cate = $this->Model('Model_Category');
			$list_cate = $cate->LayDuLieu('*',"WHERE TrangThai = 'A'");
			$gear_id = $gear->LayDuLieu('phukien.MaPK, phukien.TenPK, phukien.Gia, phukien.HinhAnh, phukien.ThongSoKT, loaiphukien.TenLoaiPK, thuonghieu.TenThuongHieu',"phukien, loaiphukien, thuonghieu WHERE phukien.TrangThai ='A' AND phukien.MaLoaiPK = loaiphukien.MaLoaiPK AND phukien.MaThuongHieu = thuonghieu.MaThuongHieu AND phukien.MaPK='$id'");
			$this->View('Gear_Detail',['Page'=>'View_Gear_Detail','cate'=>$list_cate,'ctsp'=>$gear_id]);
		}
	}
?>