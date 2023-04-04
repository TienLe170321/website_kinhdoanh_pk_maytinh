<?php 
	class App{
		protected $controller = "Home";
		protected $action = "Show";
		protected $params = [];

		function  __construct(){
			$arr = $this->UrlProcess();
			if ($arr == null) {
				$arr[0] = $this->controller;

			}

			if(file_exists("./Mvc/Controllers/".$arr[0].".php")){
				$this->controller = $arr[0];
				unset($arr[0]);
			}

			require_once "./Mvc/Controllers/".$this->controller.".php";

			if(isset($arr[1])){
				if(method_exists($this->controller, $arr[1])){
					$this->action = $arr[1];
				}
				unset($arr[1]);
			}
			//$this->controller = new $controller;
			$this->params = $arr?array_values($arr):[];
			call_user_func_array([new $this->controller, $this->action], $this->params);
		}

		// xu li url 
		function UrlProcess(){
			if(isset($_GET['url'])){
				return explode("/", filter_var(trim($_GET['url'], "/")));
			}
		}
	}
?>