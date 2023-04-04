<?php 
	class Category extends Controller
	{
		function Show(){
			$this->List_Category(0);
		}
		function List_Category($page){
			$cate = $this->Model('Model_Category');
			$sl = mysqli_num_rows($cate->LayDuLieu('*',"WHERE TrangThai = 'A'"));
			$this->View('Admin',["Page"=>"View_Category",'DSLoaiPhuKien'=>$cate->LayDuLieu('*',"WHERE TrangThai = 'A' ORDER BY MaLoaiPK ASC LIMIT $page,10"),'SL'=>$sl]);
		}
		function Search_Category(){
			$search = $_POST['search-cate'];
			$cate = $this->Model('Model_Category');
				$this->View('Admin',["Page"=>"View_SearchCategory",'DSLoaiPhuKien'=>$cate->LayDuLieu('*',"WHERE TrangThai = 'A' AND MATCH(TenLoaiPK) against('$search') LIMIT 0,10")]);
		}

		function Delete_Category($id){
			$al = new Method();
			$cate = $this->Model('Model_Category');
			if ($cate->XoaLoaiPhuKien($id)) {
				$al->Alert('Xóa thành công');
				$this->Show();
			}
		}

		function Update_Category($id){
			$cate = $this->Model('Model_Category');
			$al = new Method();
			$this->View('Admin',["Page"=>"View_UpdateCategory","PK_Loai"=>$cate->LayDuLieu('*',"WHERE MaLoaiPK ='$id'")]);
			if (isset($_POST['bt_update_category'])) {
				$name = $_POST['PK_Name'];
				$note = $_POST['PK_Note'];
				if ($cate->SuaLoaiPhuKien($name,$note,$id)) {
					$al->Alert('Cập nhật thành công.');
					$this->Show();
				}
			}
		}

		function Add_Category(){
			$cate = $this->Model('Model_Category'); 
			$al = new Method();
			if (isset($_POST['bt_addcategory'])) {
				$name = $_POST['PK_Name'];
				$note = $_POST['PK_Note'];
				if ($cate->ThemLoaiPhuKien($name,$note)) {
					$al->Alert('Thêm thành công.');
				}
			}
			$this->View('Admin',["Page"=>"View_AddCategory"]);
		}
	}//SELECT * FROM `loaiphukien` WHERE MATCH(TenLoaiPhuKien) against('Chuột') LIMIT 0,10
?>