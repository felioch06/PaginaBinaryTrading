<?php
    class RegisterController extends Register{
        public function index(){
            require_once('views/register/index.php');
        }

        public function store(){
            $username = $_POST['username'];
            $email = $_POST['email'];
            $pass = $_POST['pass'];

            parent::stored($username, $email, $pass);
            header('location:?class=Login&view=index');
        }
    }
?>