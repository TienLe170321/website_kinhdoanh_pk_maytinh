<?php
    if (!isset($_SESSION['user'])) {
    	$link = link;
        header("Location:http://localhost/$link/Login/");
    }
?>
<div class="container-fuid mx-auto containerr">
	<div class="mx-auto m-2"> <h2 class="text-center">GIỎ HÀNG</h2> </div>
	<div class="row">
		<div class="col-7">
				<table  class=" table table-bordered m-3 bg-white shadow p-3">
					<tr class="bg-primary">
						<th class="text-white">Stt</th>
						<th class="text-white">Tên phụ kiện</th>
						<th class="text-white">Giá</th>
						<th class="text-white">Số lượng</th>
						<th class="text-white">Xóa</th>
					</tr>
					<?php
						$bill_user_sale = 0;
						$bill = 0;
						//echo $_SESSION['list_gear_cart'][0]['sl'];
						if (isset($_SESSION['list_gear_cart'])) {
							$list_gear = $_SESSION['list_gear_cart'] ;
							$i = 1;						
							foreach ($list_gear as $key => $value) {
					?>
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $value['name_gear'] ?></td>
						<td><?php echo number_format($value['bill']);?>đ<?php if (isset($_SESSION['promo_code'])) {echo" (Đã giảm giá)";}?></td>
						<td>
							<form action="http://localhost/<?php echo link;?>/Cart/Update_Bill/<?php echo $key; ?>" class="d-flex" method="post">
								<input class="form-control rounded-0" type="number" name="sl" min="1" max="10" value="<?php echo $value['sl'] ?>">
								<button class=" btn btn-primary rounded-0" type="submit" name="bt_gears">Sửa</button>
							</form>
						</td>
						<td > <a class="btn btn-primary rounded-0" href="http://localhost/<?php echo link;?>/Cart/Delete_UGear/<?php echo $key; ?>">Xóa</a> </td>
					</tr>	
					<?php
								$bill_user_sale +=$value['bill'];
								$bill += $value['cost'];
								$i++;
							}
						}
						//unset($_SESSION['promo_code']);
						//print_r($_SESSION['list_gear_cart']);
						// echo $_SESSION['list_gear_cart'][0]['bill'];
						// if (isset($_COOKIE['info_cus'])) {
						//     $info_cus_cookie = unserialize($_COOKIE['info_cus']);
						//     echo $info_cus_cookie['name'];
						//     echo $info_cus_cookie['phone'];
						//     echo $info_cus_cookie['adr'];
						//     echo $info_cus_cookie['cost'];
						//     echo "tim thay user";
						// }
						
						
					?>
					
				</table>
		</div>
		<div class="col-4 m-3 bg-white shadow p-3 ">
			<form action="http://localhost/<?php echo link;?>/Cart/Cart_Bill/" method="post">
				<p class="text-center">THANH TOÁN HÓA ĐƠN</p>
				<input class="form-control m-2" type="text" name="hoten" placeholder="Họ và tên" pattern="^[^\d\b]{3,25}$" title="Tên từ 3 đến 25 ký tự không chứa số và ký tự đặc biệt" required>
				<input class="form-control m-2" type="tel" name="sdt" placeholder="Số điện thoại" pattern="^[\d]{10,11}$" title="Số điện thoại từ 10 đến 11 số" required>
				<input class="form-control m-2" type="text" name="diachi" placeholder="Địa chỉ" pattern="^{5,200}$" title="Địa chỉ từ 5 đến 200 ký tự không chứa ký tự đặc biệt" required>
				<p>Giá hóa đơn : <?php echo number_format($bill_user_sale) ?> đ 
				<?php
					if (isset($_SESSION['promo_code'])) {
				?>
				<del><?php echo number_format($bill) ?> đ</del>
				<?php
					}
					$bill=$bill_user_sale;
				?>
				</p>
				<input type="hidden" name="tongtien" value="<?php echo $bill ?>">
				<button type="submit" name="submit-bill" class="btn btn-primary m-2 w-100 ">Đặt hàng</button>
			</form>
			</form>
			<a href="http://localhost/<?php echo link;?>/vnpayphp/index.php?bill=<?php echo $bill ?>">Thanh toán VNPay</a>
			<form action="http://localhost/<?php echo link;?>/Cart/Bill_Code/" method="post">
				<p class="text-center">MÃ KHUYẾN MÃI</p>
				<input class="form-control m-2" type="text" name="code" placeholder="Mã khuyến mãi" pattern="^[\w]{6,10}$" title="Mã khuyến mãi từ 6 đến 10 ký tự và không chứa ký tự đặc biệt" required >
				<button type="submit" name="submit-code" class="btn btn-primary m-2 w-100 ">Áp dụng</button>
			</form>
		</div>
	</div>
</div>
