<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Tạo mới đơn hàng</title>
        <!-- Bootstrap core CSS -->
        <link href="../vnpayphp/assets/bootstrap.min.css" rel="stylesheet"/>
        <!-- Custom styles for this template -->
        <link href="../vnpayphp/assets/jumbotron-narrow.css" rel="stylesheet">  
        <script src="../vnpayphp/assets/jquery-1.11.3.min.js"></script>
    </head>

    <body>       
    <?php require_once("./config.php");?> 
        <div class="container">
            <div class="header clearfix">
                <h3 class="text-muted">VNPAY DEMO</h3>
            </div>
            <h3>Tạo mới đơn hàng</h3>
            <div class="table-responsive">
                <form action="../vnpayphp/vnpay_create_payment.php" id="create_form" method="post">       
                    <div class="form-group">
                        <label for="order_id">Mã hóa đơn</label>
                        <input class="form-control" id="order_id" name="order_id" type="text" value="<?php echo date('YmdHis') ?>"/>
                    </div>
                    <div class="form-group">
                        <label for="amount">Số tiền</label>
                        <input class="form-control" id="amount"
                               name="amount" value="<?php if (isset($_GET['bill'])) {
                                   echo $_GET['bill'];
                               }else{
                                echo '0';
                               } ?>"/>
                    </div>
                    <div class="form-group">
                        <label for="order_desc">Nội dung thanh toán</label>
                        <textarea class="form-control" cols="20" id="order_desc" name="order_desc" rows="2"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="bank_code">Ngân hàng</label>
                        <select name="bank_code" id="bank_code" class="form-control">
                            <option value="NCB"> Ngan hang NCB</option>
                            <option value="AGRIBANK"> Ngan hang Agribank</option>
                            <option value="SCB"> Ngan hang SCB</option>
                            <option value="SACOMBANK">Ngan hang SacomBank</option>
                            <option value="EXIMBANK"> Ngan hang EximBank</option>
                            <option value="MSBANK"> Ngan hang MSBANK</option>
                            <option value="NAMABANK"> Ngan hang NamABank</option>
                            <option value="VNMART"> Vi dien tu VnMart</option>
                            <option value="VIETINBANK">Ngan hang Vietinbank</option>
                            <option value="VIETCOMBANK"> Ngan hang VCB</option>
                            <option value="HDBANK">Ngan hang HDBank</option>
                            <option value="DONGABANK"> Ngan hang Dong A</option>
                            <option value="TPBANK"> Ngân hàng TPBank</option>
                            <option value="OJB"> Ngân hàng OceanBank</option>
                            <option value="BIDV"> Ngân hàng BIDV</option>
                            <option value="TECHCOMBANK"> Ngân hàng Techcombank</option>
                            <option value="VPBANK"> Ngan hang VPBank</option>
                            <option value="MBBANK"> Ngan hang MBBank</option>
                            <option value="ACB"> Ngan hang ACB</option>
                            <option value="OCB"> Ngan hang OCB</option>
                            <option value="IVB"> Ngan hang IVB</option>
                            <option value="VISA"> Thanh toan qua VISA/MASTER</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="language">Ngôn ngữ</label>
                        <select name="language" id="language" class="form-control">
                            <option value="vn">Tiếng Việt</option>
                            <option value="en">English</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label >Thời hạn thanh toán</label>
                        <input class="form-control" id="txtexpire"
                               name="txtexpire" type="text" value="<?php echo $expire; ?>"/>
                    </div>
                    <div class="form-group">
                        <h3>Thông tin hóa đơn (Billing)</h3>
                    </div>
                    <div class="form-group">
                        <label >Họ tên (*)</label>
                        <input class="form-control" id="txt_billing_fullname"
                               name="txt_billing_fullname" type="text" />             
                    </div>
                    <div class="form-group">
                        <label >Số điện thoại (*)</label>
                        <input class="form-control" id="txt_billing_mobile"
                               name="txt_billing_mobile" type="text" />   
                    </div>
                    <div class="form-group">
                        <label >Địa chỉ (*)</label>
                        <input class="form-control" id="txt_billing_addr1"
                               name="txt_billing_addr1" type="text" />   
                    </div>
                    <div class="form-group">
                        <label >Quốc gia (*)</label>
                        <input class="form-control" id="txt_bill_country"
                               name="txt_bill_country" type="text" value="VN"/>
                    </div>
                    <div class="form-group">
                       
                    <button type="submit" class="btn btn-primary" id="btnPopup">Thanh toán Post</button>
                    <button type="submit" name="redirect" id="redirect" class="btn btn-default">Thanh toán Redirect</button>
                </form>
                </div>
            <p>
                &nbsp;
            </p>
            <footer class="footer">
                <p>&copy; VNPAY <?php echo date('Y')?></p>
            </footer>
        </div>
    </body>
</html>
