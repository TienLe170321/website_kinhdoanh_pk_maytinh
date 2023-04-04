<?php
    class Database{
        protected $con;
        protected $server = "localhost";
        protected $user = "root";
        protected $pass = "";
        protected $dbname ="webdoan3";

        function __construct(){
            $this->con = mysqli_connect($this->server, $this->user, $this->pass);
            mysqli_select_db($this->con, $this->dbname);
            mysqli_query($this->con, "SET NAMES 'utf8'");
        }
    }
?>