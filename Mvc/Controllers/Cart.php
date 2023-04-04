<?php
	class Cart extends Controller{
		function Show(){
			$this->Add_Gear();
		}
		//Load trang gio hang
		function Add_Gear(){
			if (isset($_POST['bt_add_cart'])) {
				$gear_id = $_POST['Ma_PK'];
				$name_gear = $_POST['Ten_PK'];
				$sl = $_POST['sl'];
				$cost = $_POST['Gia_PK'];
				$bill = $sl*$cost;
				$gear_user = compact('gear_id','name_gear','sl','bill','cost');
				$_SESSION['list_gear_cart'][]=$gear_user;
			}
			$this->View('Cart',['Page'=>'View_Cart']);
		}
		//Xoa phu kien tu gio hang
		function Delete_UGear($id){
			if (isset($_SESSION['list_gear_cart'][$id])) {
				//print_r($_SESSION['list_gear_cart'][$id]);
				unset($_SESSION['list_gear_cart'][$id]);
			}
			$this->Show();
		}
		//Kiem tra ma khuyen mai
		function Bill_Code(){
			$ser = new Method();
			if (isset($_POST['submit-code'])) {
				$Promotion = $this->Model('Model_Promotion');
				$id = $_POST['code'];
				$kq = $Promotion->LayDuLieu('GiaTriKM,MaKM',"khuyenmai WHERE CodeKM = '$id'");
				$row= mysqli_fetch_row($kq);
				if ($row!=null) {
					if (isset($_SESSION['promo_code'])) {
						unset($_SESSION['promo_code']);
					}
					$_SESSION['promo_code']=$row[1];
					$ser->Alert('Áp dụng mã khuyến mãi thành công');
					//$sale = $_SESSION['list_gear_cart'][]['cost'];
					foreach ($_SESSION['list_gear_cart'] as $key => $value) {
						$sale = ($value['cost']*$row[0])/100;
						$sale = $value['cost']-$sale;
						$_SESSION['list_gear_cart'][$key]['bill']=$value['sl']*$sale;
					}
					$this->View('Cart',['Page'=>'View_Cart','code_km'=>$row[0],'code_id'=>$row[1]]);
				}else{
					$ser->Alert('Mã đã hết hạn hoặc không đúng');
					$this->Show();
				}
				
				
			}
		}
		//Tao Hoa Don
		function Cart_Bill(){
			$ser= new Method();
			$customer = $this->Model('Model_Customer');
			$bill = $this->Model('Model_Bill');
			if (isset($_POST['submit-bill'])) {
				if ($_SESSION['list_gear_cart']!=null) {
					$name_cus = $_POST['hoten'];
					$phone_cus = $_POST['sdt'];
					$adress_cus = $_POST['diachi'];
					$email = "";
					$acc = $_SESSION['user']['id'];
					//Tìm tt khách hàng
					$kq_customer_id = $customer->LayDuLieu('*',"WHERE TenKH='$name_cus' AND SDT = '$phone_cus' AND DiaChi = '$adress_cus'");
					$row_customer_id = mysqli_fetch_row($kq_customer_id);
					if (mysqli_num_rows($kq_customer_id)>0) {
						$cus_id = $row_customer_id[0];
					}else{
						if (!$customer->ThemKhachHang($name_cus,$phone_cus,$adress_cus,$email,$acc)) {
							$ser->Alert('Tạo khách hàng thất bại');
							$this->Show();
						}else{//Lấy id kh vừa tạo
							$kq_cus = $customer->LayDuLieu('MaKH',"WHERE TenKH = '$name_cus' AND SDT ='$phone_cus'");
							$row_cus = mysqli_fetch_row($kq_cus);
							$cus_id = $row_cus[0];
						}
					}
					//Tao hoa don	
					$day = $ser->ToDay();
					$cost_bill = $_POST['tongtien'];
					$code_id = NULL;
					if (isset($_POST['code_id'])) {
						$code_id = $_POST['code_id'];
					}
					$staff_id = NULL;
					if ($bill->TaoHoaDon($day,$cus_id,$staff_id,$code_id,$cost_bill)) {
						$kq_bill = $bill->LayDuLieu(' MaHD',"hoadon WHERE hoadon.MaKH = '$cus_id'");
						$row_bill = mysqli_fetch_row($kq_bill);
						$bill_id = $row_bill[0];
						foreach ($_SESSION['list_gear_cart'] as $key => $value) {
							$gear_id = $value['gear_id'];
							$sl = $value['sl'];
							$price = $value['bill'];
							$bill->TaoCTHoaDOn($bill_id,$gear_id,$sl,$price);
							unset($_SESSION['list_gear_cart'][$key]);

						}
						unset($_SESSION['promo_code']);
						$ser->Alert('Tạo hóa đơn thành công');
					}else{
						$ser->Alert('Tạo hóa đơn thất bại');
					}
			$this->Show();	
				}else{
					$ser->Alert('Bạn chưa có phụ kiện nào trong giỏ hàng');
					$this->Show();
				}
				
			}//SELECT MaKH FROM khachhang WHERE TenKH = 'Lê Văn Tiến' AND SDT ='038956474';
		}
		// Cập nhật số lượng giỏ hàng
		function Update_Bill($id){
			$ser = new Method();
				if (isset($_POST['bt_gears'])) {
					$new_gears_bill = $_POST['sl'];
					if ($new_gears_bill!=$_SESSION['list_gear_cart'][$id]['sl']) {
						$_SESSION['list_gear_cart'][$id]['sl'] = $new_gears_bill;
						$_SESSION['list_gear_cart'][$id]['bill'] = $new_gears_bill*$_SESSION['list_gear_cart'][$id]['cost'];
						$ser->Alert('Cập nhật số lượng thành công');
					}
					$this->Show();
				}
		}
	}
?>