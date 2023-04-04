<?php
	class Model_Home extends Database{
		function hello(){
			echo "hello";
		}
		function nhanvien(){
			$sql = "SELECT * FROM nhanvien";
			//echo "1234";
			$kq = mysqli_query($this->con, $sql);
			while ($row = mysqli_fetch_row($kq)){
				echo "<br>",$row[1];
			}
		}
	}
?>