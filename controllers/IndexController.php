<?php
    class IndexController{
        public function index(){
            require_once('views/all/index.php');
        }

        public function dontFound(){
            require_once('views/all/404.php');
        }
    }
?>