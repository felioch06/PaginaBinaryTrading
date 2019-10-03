<?php 
    class LoginController extends Login{
        public function index(){
            require_once('views/login/index.php');
        }
        public function session(){
            
            session_start();

            $email = $_POST['email'];
            $pass = $_POST['pass'];

            $consulta = parent::consulta($email, $pass);
            $consultarUser = parent::consultarUser();
            
            foreach($consultarUser as $r){
            
            if ($r->email == $email && $r->pass == $pass){
                $_SESSION['username'] = $r->username;
                header("location:?class=Pagina&view=index");
            }else{
                echo "error datos";
            }
        }
        }

        public function signOff(){
            session_start();

            session_destroy();

            header("location:?class=login&view=index");

            exit(); 
        }
    }
?>