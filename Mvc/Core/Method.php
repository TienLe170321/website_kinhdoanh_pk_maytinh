<?php 
	class Method {
		function Alert($tb){
			echo "<script type='text/javascript'>
                    alert  ('$tb');
                  </script>";
		}
		function Alert_Choice($tb, $href1, $href2){
			echo "<script type='text/javascript'>
                 	var res = confirm('$tb');
                 if (res){
                    if(res == 1){
                        window.location.href='$href1';
                    }
                 }else{
                        window.location.href='$href2';
                 }
                    </script>";
		}
		function Today(){
			$date = getdate();
			$today = $date['year'].'-'.$date['mon'].'-'.$date['mday'];
			return $today;
		}
		function MaxYear(){
			$date = getdate();
			$max_year = $date['year']+2;
			$max_year = $max_year.'-'.$date['mon'].'-'.$date['mday'];
			return $max_year;
		}
		function MinYear(){
			$date = getdate();
			$min_year = $date['year']-2;
			$min_year = $min_year.'-'.$date['mon'].'-'.$date['mday'];
			return $min_year;
		}
	}
?>