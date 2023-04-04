<?php
	class Post extends Controller{
		function Show(){
			$this->List_Post(0);
		}

		function List_Post($page){
			$post = $this->Model('Model_Post');
			$kq = $post->LayDuLieu('*'," tintuc WHERE TrangThai ='A'");
			$sl = mysqli_num_rows($kq);
			$this->View('Admin',['Page'=>'View_Post','title'=>'Danh sách bài viết','DS_BV'=>$kq,'stt'=>$page,'SL'=>$sl,'link'=>'Post/List_Post/']);
		}
		function Add_Post(){
			$post = $this->Model('Model_Post');
			$ser = new Method();
			if (isset($_POST['bt_addpost'])) {
				$title = $_POST['post_name'];
				$content = $_POST['post_content'];
				$img = $_POST['post_img'];
				$date = $ser->ToDay();
				if ($post->ThemTinTuc($title,$content,$img,$date)) {
					$ser->Alert('Thêm thành công');
				}
			}
			$this->View('Admin',['Page'=>'View_AddPost']);
		}

		function Update_Post($id){
			$post = $this->Model('Model_Post');
			$ser = new Method();
			$kq = $post->LayDuLieu('*'," tintuc WHERE TrangThai ='A' AND MaTinTuc = '$id'");
			if (isset($_POST['bt_update_post'])) {
				$title = $_POST['post_name'];
				$content = $_POST['post_content'];
				$img = $_POST['post_img'];
				$date = $ser->ToDay();
				if ($img=="") {
					$img = $_POST['post_old_img'];

				}
				if ($post->CapNhatTinTuc($title,$content,$img,$date,$id)) {
					$ser->Alert('Cập nhật thành công');
					$this->Show();
				}
			}
			$this->View('Admin',['Page'=>'View_UpdatePost','post'=>$kq]);
		}

		function Delete_Post($id){
			$post = $this->Model('Model_Post');
			$ser = new Method();
			if ($post->XoaTinTuc($id)) {
				$ser->Alert('Xóa thành công');
			}
			$this->Show();
		}

		function Search_Post($page){
			$post = $this->Model('Model_Post');
			$ser = new Method();
			if (isset($_POST['bt-search-post'])) {
				$_SESSION['s_post']= $_POST['search-post'];
			}
			$search = $_SESSION['s_post'];
			$kq = $post->LayDuLieu('*'," tintuc WHERE TrangThai = 'A' AND MATCH(TieuDe,NoiDung) against('$search') LIMIT $page,10");
			$sl = mysqli_num_rows($post->LayDuLieu('*'," tintuc WHERE TrangThai = 'A' AND MATCH(TieuDe,NoiDung) against('$search')"));
			if ($sl==0) {
				$ser->Alert('Không tìm thấy bài viết.');
				$this->Show(0);
			}else{
				$this->View('Admin',['Page'=>'View_Post','title'=>'Kết quả tìm kiếm bài viết','DS_BV'=>$kq,'stt'=>$page,'SL'=>$sl,'link'=>'Post/List_Post/']);
			}
		}
	}
?>