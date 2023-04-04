<?php 
	class Customer extends Controller{	

		function Show(){
			$this->List_Customer(0);
		}

		function List_Customer($page){
			$customer = $this->Model('Model_Customer');
			$sl = mysqli_num_rows($customer->LayDuLieu('*',''));
			$this->View('Admin',["Page"=>"View_Customer","DS_KhachHang"=>$customer->LayDuLieu('*',"ORDER BY MaKH ASC LIMIT $page,10"), "SL_KH"=>$sl]);
		}

		function Search_Customer(){
			$customer = $this->Model('Model_Customer');
			if (isset($_POST['bt-search-customer'])) {
				$cus = $_POST['search-customer'];
				$this->View('Admin',["Page"=>"View_SearchCustomer","DS_KhachHang"=>$customer->LayDuLieu('*',"WHERE MATCH(TenKH,DiaChi) against('$cus')")]);
			}
		}
	}
?>