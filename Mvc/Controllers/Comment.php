<?php 
	class Comment extends Controller
	{
		function Show(){
			$this->DanhSach_BL($cate);
		}
		public function Tao_BL(){

			$tb = new Method;
			$cmt = $this->Model('Model_Cmt');


			if (isset($_POST['submit'])) {

				$tb->Check_Login(); // kiem tra user dang nhap chua 

				$nd_bl = $_POST['text']; // noi dung binh luan
				$ma_tk = $_SESSION['user']['id']; // ma tai khoan user
				$ma_pk = 'NULL'; // ma phu kien 
				$ma_tt = 'NULL'; // ma tin tuc
				$link = "";

				$phanloai = $this->PhanLoai($ma_pk, $ma_tt);
				$ma_pk = $phanloai['ma_pk'];
				$ma_tt = $phanloai['ma_tt'];
				$link = $_SERVER['HTTP_REFERER'];

				if ($cmt->Tao_BL($nd_bl, $ma_tk, $ma_pk, $ma_tt)) {
						$tb->Alert_Choice('dang binh luan thanh cong',$link,$link);
				}
			}

		}

		public function XoaBL($id){
			$tb = new Method;
			$cmt = $this->Model('Model_Cmt');
			if ($cmt->Xoa_BL($id)) {
				$link = $_SERVER['HTTP_REFERER'];
				$tb->Alert_Choice('xoa binh luan thanh cong',$link,$link);
			}else{
				$tb->Alert('Xoa binh luan that bai');
			}
		}


		public function PhanLoai($ma_pk,$ma_tt){
			if (isset($_POST['ma_pk'])) {
				$ma_pk = $_POST['ma_pk'];
			}
			if (isset($_POST['ma_tt'])) {
				$ma_tt = $_POST['ma_tt'];
			}

			$phanloai = array();
			$phanloai['ma_pk'] = $ma_pk;
			$phanloai['ma_tt'] = $ma_tt;
			return $phanloai;
		}

		public function DanhSach_BL($cate){
			$cmt = $this->Model('Model_Cmt');
			if($cate==1) {
				$dsblpk = $cmt->Lay_BLPK();
				$this->View('Admin',["Page"=>"View_List_GearCmt","cate"=>'Tên phụ kiện','title'=>'Bình luận về phụ kiện','ds_tpk'=>$dsblpk,'key'=>'binhluan.MaPK']);
			}if ($cate==2) {
				$dsbltt = $cmt->Lay_BLTT();
				$this->View('Admin',["Page"=>"View_List_GearCmt","cate"=>'Tiêu đề bài viết','title'=>'Bình luận về bài viết','ds_tpk'=>$dsbltt,'key'=>'binhluan.MaTinTuc']);
			}
		}

		public function ChiTiet_BL($id,$cate){ 
			$cmt = $this->Model('Model_Cmt');
			$kq = $cmt->LayCT_BL($id,$cate);
			$this->View('Admin',["Page"=>"View_Detail_Comment",'title'=>'Danh sách bình luận','ds_cmt'=>$kq]);
		}	
		
	}
?>