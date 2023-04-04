<?php 
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	use PHPMailer\PHPMailer\SMTP;
	require './PHPMailer/src/Exception.php';
	require './PHPMailer/src/PHPMailer.php';
	require './PHPMailer/src/SMTP.php';
	function Sendmail($title,$content){
		$mail = new PHPMailer(true);
		$ser = new Method();
	try {
		$mail->isSMTP();                                            //Send using SMTP
		$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
		$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
		$mail->Username   = 'lvtien01vvk@gmail.com';                     //SMTP username
		$mail->Password   = 'uriwsysnddbrswjc';                               //SMTP password
		$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
		$mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
		//Recipients
		$mail->setFrom('lvtien01vvk@gmai.com', 'Customer');
		$mail->addAddress('lvtien1900485@student.ctuet.edu.vn', 'ShopG2T');     //Add a recipient
		//Content
		$mail->isHTML(true);                                  //Set email format to HTML
		$mail->Subject = $title;
		$mail->Body    = $content;
		$mail->send();
		$ser->Alert('Gửi mail thành công.');
		} catch (Exception $e) {
			//echo "Gửi mail thất bại. Mailer Error: {$mail->ErrorInfo}";
			$ser->Alert('Gửi mail thất bại');
		}
	}
	
	class Home extends Controller{
		function Show(){
			$this->TrangChu();
		}
		function TrangChu(){
			$cate = $this->Model('Model_Category');
			$gear = $this->Model('Model_Gear');
			$list_cate = $cate->LayDuLieu('*',"WHERE TrangThai = 'A'");
			$i=0;
			while ($row_cate = mysqli_fetch_row($list_cate)) {
				$cate_id[$i] = $row_cate[0];
				$list_gear[$i] = $gear->LayDuLieu('phukien.MaPK, phukien.TenPK, phukien.Gia, phukien.HinhAnh, thuonghieu.TenThuongHieu',"phukien,thuonghieu,loaiphukien WHERE phukien.TrangThai = 'A' AND phukien.MaLoaiPK = '$cate_id[$i]' AND phukien.MaLoaiPK = loaiphukien.MaLoaiPK  AND  phukien.MaThuongHieu = thuonghieu.MaThuongHieu LIMIT 5");
				$i++;
			}
			$list_cate2 = $cate->LayDuLieu('*',"WHERE TrangThai = 'A'");
			$this->View('Home',['Page'=>'View_Home','gear'=>$list_gear,'cate'=>$list_cate2]);
		}
		function About(){
			$this->View('About',['Page'=>'View_About']);
		}

		function Contact(){
			if (isset($_POST['btn-contact'])) {	
				$title = $_POST['title'];
				$content = $_POST['message'];
				//$mail = new Mail();
				Sendmail($title,$content);
			}
			$this->View('Contact',['Page'=>'View_Contact']);
		}
	}//lvtien1900485@student.ctuet.edu.vn
?>