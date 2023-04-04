<?php 
	class News extends Controller{
		function Show(){
				$this->List_News();
		}
		function List_News(){
			$post = $this->Model('Model_Post');
			$kq = $post->LayDuLieu('*'," tintuc WHERE TrangThai = 'A' ORDER BY MaTinTuc DESC LIMIT 10");
			$this->View('News',['Page'=>'View_News','list_news'=>$kq]);
		}

		function Detail_New($id){
			$post = $this->Model('Model_Post');
			$kq = $post->LayDuLieu('*',"tintuc WHERE TrangThai = 'A' AND MaTinTuc = '$id'");
			$this->View('News',['Page'=>'View_Detail_New','news'=>$kq]);
		}
	}
?>