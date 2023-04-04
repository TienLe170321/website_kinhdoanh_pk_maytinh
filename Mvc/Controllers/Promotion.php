<?php 
	class Promotion extends Controller{
		function Show(){
			$this->List_Promotion(0);
		}

		function AddPromotion(){
			$ser = new Method();
			//Lấy ngày hiện tại + ngày kết thúc khuyến mãi
			$today = $ser->ToDay();
			$max_year = $ser->MaxYear();
			//Xử lý dữ liệu
			if (isset($_POST['bt_addpromotion'])) {
				$code_promotion = $_POST['Code_KM'];
				$name_promotion = $_POST['Ten_KM'];
				$star_day = $_POST['NgayBatDau'];
				$end_day = $_POST['NgayKetThuc'];
				$value_promotion = $_POST['GiaTri_KM'];
				//Gọi database 
				$Promotion = $this->Model('Model_Promotion');
				//Thêm vào database 
				if ($Promotion->ThemKhuyenMai($code_promotion,$name_promotion,$star_day,$end_day,$value_promotion)) {
					$ser->Alert('Thêm thành công');
				}
			}
			$this->View('Admin',['Page'=>'View_AddPromotion','tday'=>$today,'eday'=>$max_year]);
		}

		function List_Promotion($page){
			$Promotion = $this->Model('Model_Promotion');
			$sl = mysqli_num_rows($Promotion->LayDuLieu('*',"khuyenmai WHERE TrangThai = 'A'"));
			$this->View('Admin',['Page'=>'View_Promotion','DS_KM'=>$Promotion->LayDuLieu('*',"khuyenmai WHERE TrangThai = 'A' ORDER BY MaKM ASC LIMIT $page,10"),'SL'=>$sl,'title'=>'Danh sách khuyến mãi','stt'=>$page,'link'=>'Promotion/List_Promotion/']);
		}

		function Update_Promotion($id){
			$ser = new Method();
			$today = $ser->ToDay();
			$max_year = $ser->MaxYear();
			$Promotion = $this->Model('Model_Promotion');
			if (isset($_POST['bt_update_promotion'])) {
				$code_promotion = $_POST['Code_KM'];
				$name_promotion = $_POST['Ten_KM'];
				$star_day = $_POST['NgayBatDau'];
				$end_day = $_POST['NgayKetThuc'];
				$value_promotion = $_POST['GiaTri_KM'];
				//Cập nhật database
				if ($Promotion->CapNhatKhuyenMai($code_promotion,$name_promotion,$star_day,$end_day,$value_promotion,$id)) {
					$ser->Alert('Cập nhật thành công');
					$this->Show();
				}

			}
			$this->View('Admin',['Page'=>'View_UpdatePromotion','tday'=>$today,'eday'=>$max_year,'data'=>$Promotion->LayDuLieu('*',"khuyenmai WHERE MaKM = '$id'")]);
		}

		function Delete_Promotion($id){
			$al = new Method();
			$Promotion = $this->Model('Model_Promotion');
			if ($Promotion->XoaKhuyenMai($id)) {
				$al->Alert('Xóa thành công');
				$this->Show();
			}
		}

		function List_Code(){
			$Promotion = $this->Model('Model_Promotion');
			$list_promo = $Promotion->LayDuLieu('*',"khuyenmai WHERE TrangThai = 'A' ORDER BY MaKM DESC LIMIT 10");
			$this->View('PromotionCode',['Page'=>'View_PromotionCode','list_code'=>$list_promo]);
		}

		function Search_Promo_Code($page){
			$al = new Method();
			$Promotion = $this->Model('Model_Promotion');
			if (isset($_POST['bt-search-promotion'])) {
				$_SESSION['search_code'] = $_POST['search-promotion'];
			}
			$search = $_SESSION['search_code'];
			$kq = $Promotion->LayDuLieu('*',"khuyenmai WHERE TrangThai ='A' AND MATCH(TenKM) against('$search') LIMIT $page,10 ");
			$sl = mysqli_num_rows($Promotion->LayDuLieu('*',"khuyenmai WHERE TrangThai ='A' AND MATCH(TenKM) against('thang')"));
			if ($sl==0) {
				$al->Alert('Không tìm thấy dữ liệu.');
				$this->Show(0);
			}else{
				$this->View('Admin',['Page'=>'View_Promotion','DS_KM'=>$kq, 'SL'=>$sl,'link'=>'Promotion/Search_Promo_Code/','title'=>'Kết quả tìm kiếm','stt'=>$page]);
			}
		}
	}
?>