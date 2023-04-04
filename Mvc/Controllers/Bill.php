<?php 
	class Bill extends Controller{
		function Show(){
			$this->List_Bill(0);
		}
		function List_Bill($page){
			$bill = $this->Model('Model_Bill');
			$kq = $bill->LayDuLieu('hoadon.MaHD,hoadon.NgayLap,hoadon.GiaHD,khachhang.TenKH,hoadon.TrangThai',"hoadon,khachhang WHERE hoadon.MaKH = khachhang.MaKH ORDER BY hoadon.MaHD DESC LIMIT $page, 10");
			$sl = mysqli_num_rows($kq);
			// while ($row_hd = mysqli_fetch_row($kq)) {
			// 	echo "$row_hd[0]--$row_hd[1]--$row_hd[2]--$row_hd[3]--$row_hd[4]";
			// 	echo "<br>";
			// }
			$this->View('Admin',['Page'=>'View_List_Bill','list_bill'=>$kq,'title'=>'Danh sách đơn hàng','stt'=>$page,'SL'=>$sl,'link'=>'Bill/List_Bill/']);
		}

		function Update_Bill($id){
			$bill = $this->Model('Model_Bill');
			$kq = $bill->LayDuLieu('*',"hoadon WHERE MaHD= '$id'");
			
			if (mysqli_num_rows($kq)>0) {
				//echo 'ssssssss';
				$row = mysqli_fetch_row($kq);
				$th = $row[6];
				switch ($th) {
					case 'Đã giao':
						$th = 'Đang giao';
						$bill->DuyetHoaDon($id,$th);
						$this->Show();
						break;
					case 'Đang giao':
						$th = 'Đã giao';
						$bill->DuyetHoaDon($id,$th);
						$this->Show();
						break;
					default:
						$th = 'Đã giao';
						$bill->DuyetHoaDon($id,$th);
						$this->Show();
						break;
				}
			}
			
			
		}

		function Search_Bill($page){
			$bill = $this->Model('Model_Bill');
			$al = new Method();
			if (isset($_POST['bt-search-bill'])) {
				$_SESSION['search-bill'] = $_POST['search-bill'];
			}
			$search = $_SESSION['search-bill'];
			$kq = $bill->LayDuLieu('hoadon.MaHD,hoadon.NgayLap,hoadon.GiaHD,khachhang.TenKH,hoadon.TrangThai',"hoadon, khachhang WHERE hoadon.MaKH = khachhang.MaKH AND MATCH(khachhang.TenKH,khachhang.DiaChi) against('$search') LIMIT $page,10");
			$sl = mysqli_num_rows($bill->LayDuLieu('hoadon.MaHD,hoadon.NgayLap,hoadon.GiaHD,khachhang.TenKH,hoadon.TrangThai',"hoadon, khachhang WHERE hoadon.MaKH = khachhang.MaKH AND MATCH(khachhang.TenKH,khachhang.DiaChi) against('$search')"));
			if ($sl==0) {
				$al->Alert('Không tìm thấy dữ liệu.');
				$this->Show(0);
			}else{
				$this->View('Admin',['Page'=>'View_List_Bill','list_bill'=>$kq, 'SL'=>$sl,'link'=>'Bill/Search_Bill/','title'=>'Kết quả tìm kiếm','stt'=>$page]);
			}
		}
	}
?>