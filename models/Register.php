<?php 
    class Register extends DB{
        public function consulta(){
            try{
                $stm = parent::conectar()->prepare("SELECT * FROM usuarios");
                $stm->execute();
                $data = $stm->fetchAll(PDO::FETCH_OBJ);
                return $data;
            }catch(Exception $e){
                die($e->getMessage());
            }
        }

        public function stored($username, $email, $pass){
            try{
                $stm = parent::conectar()->prepare("INSERT INTO usuarios(username, email, pass) VALUES ('$username','$email','$pass')");
                $stm->execute();
            }catch(Exception $e){
                die($e->getMessage());
            }
        }
    }
?>