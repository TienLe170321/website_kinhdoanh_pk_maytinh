<?php
    class Controller{
        public function Model($model){
            require_once "./Mvc/Models/".$model.".php";
            return new $model;
        }

        public function View($view, $data=[]){
            require_once "./Mvc/Views/".$view.".php";
        }
}
?>